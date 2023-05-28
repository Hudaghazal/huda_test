<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    // public function index()
    // {
    //    $post= post::with('User')->get();
    //    return response()->json([
    //     "message"=> "fetch data success!",
    //     "data"=> $post,
    //    ], RESPONSE::HTTP_ACCEPTED);
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          "user_id" => "required|exists:users,id",
          "title"=>"required|string",
          "body"=>"required|string",


        ]);

        $post= post::create([
            "user_id" => $request->user_id,
            "title"=> $request->title,
            "body"=> $request->body,

        ]);
        return response()->json([
            "message"=> "Added successfully!",
            "data"=> $post,
           ],RESPONSE::HTTP_ACCEPTED);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    // public function show($post_id)
    // {
    //  $post = post::where('id','=',$post_id)->with('User','post')->get();
    //  return response()->json([
    //     "message"=> "Fetch data successfully!",
    //     "data"=> $post,
    //    ],RESPONSE::HTTP_ACCEPTED);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $post_id)
    {
     $request->validate([
        "title"=>"required|string",
        "body"=>"required|string",
    ]);
      post::where('id','=',$post_id)->with('User','post')->update([
         "title"=> $request->title,
         "body"=> $request->body,
     ]);

     return response()->json([
        "message"=> "updated successfully!",
       ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($post_id)
    {
        post::where('id','=',$post_id)->with('User','post')->delete();
        return response()->json([
            "message"=> "deleted  successfully!",
           ]);    }
}
