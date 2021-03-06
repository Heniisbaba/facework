<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Mail;
use App\Mail\TestEmail;
use App\Mail\AdminEMail;
use App\Notifications\SignupActivate;
use Illuminate\Support\Str;


class AuthController extends Controller
{
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $request
     * @return User
     */
    protected function signup(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
        ]);
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'activation_token' => str_random(60),
            'chat_id' => Str::uuid()
        ]);

        Profile::create([
             'user_id' => $user->id,
             'name' => $user->name,
             'email' => $user->email,
             'service' => '',
             'about' => '',
             'phone' => '',
             'state' => '',
             'address' => '',
             'image' => 'https://ui-avatars.com/api/?name='.trim($user->name).'?&rounded=true&background=FFFFFF',
             'coverImage' => ''
        ]);

        // $message = '';
        // Mail::to($user->email)->send(new TestEmail($user));
        // Mail::to('ifeoluwa@facework.com.ng')->send(new AdminEmail($user));

        $user->notify(new SignupActivate($user->activation_token));

        return response(['message' => 'user created successfully', 'data' => $user], 201);
    }

    public function login(Request $request)
    {
        // validate user input
        $this->validate($request, [
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);

        $credentials = request(['email', 'password']);

        if(!Auth::attempt($credentials))
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        // check if user has confirmed their mail
        $isActive = User::where('email', $request->email)->value('active');
        if(!$isActive) {
            return response()->json([
                'message' => 'Kindly confirm your email'
            ], 401); 
         }

        $user = $request->user();

        $tokenResult = $user->createToken('Personal Access Token');

        $token = $tokenResult->token;

        if ($request->remember_me)
            $token->expires_at = Carbon::now()->addWeeks(1);

        $token->save();

        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString(),
            'data' => $user
        ]);
    }
  
    /**
     * Logout user (Revoke the token)
     *
     * @return [string] message
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
  
    /**
     * Get the authenticated User
     * @param  array  $request
     * @return [json] user object
     */
    public function user(Request $request)
    {
        $posts = Post::with('profile')->Where('profile_id', $request->user()->profile->id)->orderBy('id', 'desc')->paginate(15);
        return response()->json(['user' => $request->user(), 'profile' => $request->user()->profile, 'posts'=> $posts]);
    }

    /**
     * Activate new user
     * @param  array  $request
     * @return [json] user object
     */
    public function signupActivate($token)
    {
        
        if(strlen($token) === 60){
         // check if user has confirmed their mail already
         $isActive = User::where('activation_token', $token)->value('active');
         if($isActive) {
             return response()->json([
                 'message' => 'You have confirmed your email  already. Kindly login to access your account'
             ], 200); 
          }

        $user = User::where('activation_token', $token)->first();
        if (!$user) {
            return response()->json([
                'message' => 'This activation token does not exist.'
            ], 404);
        }

        $tokenResult = $user->createToken('Personal Access Token');

        $token = $tokenResult->token;
      
        $user->active = true;
        $user->save();
        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString(),
            'data' => $user
        ]);
        }
        return response()->json([
            'message' => 'This activation token is invalid.'
        ], 404);

         
    }

}
