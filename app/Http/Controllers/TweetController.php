<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TweetController extends Controller
{
    function show() {
        $tweets = DB::table('tweet')->get();
        return view("showTweets", [ "allTweets" => $tweets]);
    }

    function showTweet($id) {
        $tweets = DB::table('tweet')->get();
        if($id > sizeOf($tweets)) {
            return view("tweetError");
        }
        return view("showTweets", [ "allTweets" => [$tweets[$id]]]);
    }

    function addTweet(Request $request) {
        DB::insert("INSERT INTO tweet (author, content)
        VALUES ('$request->author','$request->content');");
        $tweets = DB::table('tweet')->get();
        return view("showTweets", [ "allTweets" => $tweets]);
    }

    function deleteTweet(Request $request) {
        DB::delete("DELETE FROM tweet WHERE id=$request->id");
        $tweets = DB::table('tweet')->get();
        return view("showTweets", [ "allTweets" => $tweets]);
    }
    function showEditTweet(Request $request){
        $tweet = DB::table('tweet')->find($request->input('id'));
        return view('editTweet', [ "allTweets" => [$tweet]]);
    }
    function editTweet(Request $request){
        DB::update('update tweet set author = ?, content = ? where id = ?', ["$request->author", "$request->content", "$request->id"]);
        $tweets = DB::table('tweet')->get();
        return view("showTweets", [ "allTweets" => $tweets]);
    }
}
