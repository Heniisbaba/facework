<?php

namespace App\Http\Controllers\API;

use App\Events\MessageSent;
use App\Http\Controllers\Controller;
use App\Http\Resources\ConversationCollection;
use Illuminate\Http\Request;
use App\Message;
use App\User;
use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ChatsController extends Controller
{
    /**
     * Show chats
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chat_id = auth()->user()->chat_id;
        // $chats = DB::table('users')
        //     ->join('profiles', 'users.id', '=', 'profiles.user_id')
        //     ->join('messages', function ($join) use($chat_id) {
        //         $join->whereRaw("messages.user_id = users.chat_id AND messages.receiver_id = '{$chat_id}'")
        //         ->orWhereRaw("messages.user_id = '{$chat_id}' AND messages.receiver_id = users.chat_id")->latest();
        //     })
        //     ->select()
        //     ->where('users.id','!=',Auth::id())->get();

        $chats = User::with(['profile'])->where('id','!=',Auth::id())->whereExists(function ($query) use($chat_id) {
            $query->from('messages')
                ->whereRaw("messages.user_id = users.chat_id AND messages.receiver_id = '{$chat_id}'")
                ->orWhereRaw("messages.user_id = '{$chat_id}' AND messages.receiver_id = users.chat_id");
        })->get();

        $data = new ConversationCollection($chats);
        return $data->sortByDesc('date');
    }
    /**
     * Show single chat
     *
     * @param string $other_party
     * @return \Illuminate\Http\Response
     */
    public function single($other_party)
    {
        $recipient = User::where('chat_id',$other_party)->first();
        return $recipient;
    }

    /**
     * Fetch all messages
     *
     * @param $string $other_party
     * @return Message
     */
    public function fetchMessages($other_party)
    {
        $chat_id = Auth::user()->chat_id;

        $msg = Message::with('sender')->where([['user_id', '=', $other_party], ['receiver_id', '=', $chat_id]])
            ->orWhere([['receiver_id', '=', $other_party], ['user_id', '=', $chat_id]])->orderBy('id')->paginate(20);

        return response()->json([
            'data' => new \App\Http\Resources\MessagesResource($msg),
            'pagination' => [
                'count' => $msg->count(),
                'currentPage' => $msg->currentPage(),
                'hasMorePages' => $msg->hasMorePages(),
                'perPage' => $msg->perPage(),
                'pages' => $msg->lastPage(),
                'url' => $msg->url($msg->currentPage()),
                'total' => $msg->total(),
            ]
        ], 200);
    }

    /**
     * Persist message to database
     *
     * @param  Request $request
     * @param  $string $other_party
     * @return Response
     */
    public function sendMessage(Request $request,$other_party)
    {
        $user = Auth::user();

        $message = Message::create([
            'user_id' => $user->chat_id,
            'message' => $request->input('message'),
            'receiver_id' => $other_party
        ]);

        broadcast(new \App\Events\MessageSent($user, $message))->toOthers();

        return ['status' => 'Message Sent!', 'data' => new \App\Http\Resources\MessageResource($message)];
    }
}
