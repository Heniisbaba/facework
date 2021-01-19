<?php

namespace App\Http\Resources;

use App\Message;
use Illuminate\Http\Resources\Json\JsonResource;

class ConversationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $message = Message::where([
            ['user_id', '=', $this->chat_id], ['receiver_id', '=', auth()->user()->chat_id ]])
            ->orWhere([
                ['user_id', '=', auth()->user()->chat_id ], ['receiver_id', '=', $this->chat_id]])
            ->orderBy('created_at','desc')->take(1)->first();

        $bool = $this->receiver_id === auth()->user()->chat_id;
        return [
            "name" => $this->name,
            "photo" => $this->profile->image,
            "chat_id" => $this->chat_id,
            "coverImage" => $this->profile->coverImage,
            "last_message" => $message->message,
            "date" => $message->created_at,
            "incoming" => $bool ? true : false,
        ];
    }
}
