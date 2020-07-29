<?php
// app/Http/Controllers/PostController.php

namespace App\Http\Controllers;

use JD\Cloudder\Facades\Cloudder;
use Illuminate\Http\Request;
use PeterPetrus\Auth\PassportToken;

use App\Notifications\GeneralNofication;
use App\Profile;
use App\Post;
use Auth;
use Session;
use App\User;
use App\Jobs;
use App\Like;
use App\Setting;
use App\Broadcast;
use App\Advert;

class PostController extends Controller {

    public function __construct() {
        $this->middleware(['auth', 'clearance'])->except('feeds','index','explore','home','show','create','store','edit','destroy', 'like', 'unlike');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function home(){
        $jobs = Jobs::orderby('id', 'desc')->paginate(6);
        $advert = Advert::orderby('id', 'desc')->paginate(1);
        $broadcasts = Broadcast::orderby('id', 'desc')->paginate(1);
        $profile = Profile::orderby('id', 'desc')->paginate(7);
        $posts = Post::orderby('id', 'desc')->paginate(7);
        $users = User::orderby('id', 'desc')->get();
        $setting = Setting::first();
        return view('index')->with('users', $users)->with('settings', $setting)->with('posts', $posts)->with('broadcasts', $broadcasts)->with('adverts', $advert)->with('jobs', $jobs);
    }

    // API for feeds
    public function feeds(){
        $profile = Profile::orderby('id', 'desc')->paginate(7);
        $posts = Post::orderby('id', 'desc')->paginate(7);
        $users = User::orderby('id', 'desc')->get();

        return response()->json([
            "post" => $posts
        ]);
    }

     public function explore(){
        $profile = Profile::orderby('id', 'desc')->paginate(7);
        $posts = Post::orderby('id', 'desc')->paginate(7);
        $users = User::orderby('id', 'desc')->paginate(7);
        return view('search.index')->with('users', $users)->with('posts', $posts);
    }


    public function showUser($id) {
        $user = User::findOrFail($id);
        return view('users.show')->with('users', $user); 
    }

   

    public function index() {
        $posts = Post::orderby('id', 'desc')->paginate(15); //show only 15 items at a time in descending order
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) { 

    //Validating title and body field
        $this->validate($request, [
           
        'title' => 'required|max:255',
        'featured' => 'required|mimes:jpeg,bmp,jpg,png|between:1, 6000',
        'body' => 'required'
        
        ]);


       $image = $request->file('featured');

       $name = $request->file('featured')->getClientOriginalName();

       $image_name = $request->file('featured')->getRealPath();
       
       // uploads to cloudinary
       Cloudder::upload($image_name, null);

       list($width, $height) = getimagesize($image_name);
       // gets image url from cloudinary
       $image_url= Cloudder::show(Cloudder::getPublicId(), ["width" => $width, "height"=>$height]);


        $post = Post::create([      

            'title' => $request->title,

            'profile_id' => $request->profile_id,

            'body' => $request->body,

            'featured' => $image_url,

        ]);

        // send noitfication
          $user = User::where('id','!=',auth()->user()->id)->get();

         \Notification::send($user, new GeneralNofication(Post::latest('id')->first()));

    //Display a successful message upon save
        return redirect()->route('profile.create')
            ->with('flash_message', '
             '. $post->title.' created');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createPost(Request $request) {         

        $decoded_token = PassportToken::dirtyDecode(substr($request->header()['authorization'][0], 7));

        if ($decoded_token['valid']) {
            // Check if token exists in DB (table 'oauth_access_tokens'), require \Illuminate\Support\Facades\DB class
            $token_exists = PassportToken::existsValidToken(
                $decoded_token['token_id'], 
                $decoded_token['user_id']
            );
            
            if ($token_exists) {
                // Validating title and body field
            $this->validate($request, [
               
                'title' => 'required|max:255',
                'featured' => 'required|mimes:jpeg,bmp,jpg,png|between:1, 6000',
                'body' => 'required'
                
                ]);
        
        
               $image = $request->file('featured');
        
               $name = $request->file('featured')->getClientOriginalName();
        
               $image_name = $request->file('featured')->getRealPath();
               
               // uploads to cloudinary
               Cloudder::upload($image_name, null);
        
               list($width, $height) = getimagesize($image_name);
               // gets image url from cloudinary
               $image_url= Cloudder::show(Cloudder::getPublicId(), ["width" => $width, "height"=>$height]);
        
                // get user profile 
                $user = User::find($decoded_token['user_id']);
                $profile_id = $user->profile->id;
                $post = Post::create([      
        
                    'title' => $request->title,
        
                    'profile_id' => $profile_id,
        
                    'body' => $request->body,
        
                    'featured' => $image_url,
        
                ]);
        
                // send noitfication
                  $user = User::where('id','!=',$decoded_token['user_id'])->get();
        
                 \Notification::send($user, new GeneralNofication(Post::latest('id')->first()));
        
            //Display a successful message upon save
                return response()->json([
                    "data" => $post
                ]);
            }
        }
       
        }

    // Like system
    public function like($id){
      Like::create([
          'post_id' => $id,
          'user_id' => Auth::id()
      ]);

      Session::flash('session', 'You liked');

      return redirect()->back();
    }

    public function unlike($id){
      $like = Like::where('post_id', $id)->where('user_id', Auth::id())->first();
      $like->delete();

      Session::flash('session', 'You unliked');

      return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
         $like = false;
         $post = Post::findOrFail($id); //Find post of id = $id
         $profile_id = $post->profile->id; // find profile id of the owner of the post
         $profile = Profile::findorfail($profile_id);
         $posts = Post::orderby('id', 'desc')->paginate(10);
         $comments = Post::find($id)->comments; // comments attached to each post
        return view ('posts.show', compact('post','profile','posts','like', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        
         $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
            
        ]);

        $post = Post::find($id);

        if($request->hasFile('featured')){
           
            $featured = $request->featured;

            $featured_new_name = time().$featured->getCientOriginalName();

            $featured = move('uploads/posts/', $featured_new_name);

        }

            $post->title = $request->title;

            $post->body = $request->body;
               
            $post->save();

        return redirect()->route('posts.show', 
            $post->id)->with('flash_message', 
            ''. $post->title.' updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index')
            ->with('flash_message',
             'successfully deleted');

    }
}