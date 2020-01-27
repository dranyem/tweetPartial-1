@extends('master')
@section('title')
    Edit Tweet
@endsection

@section('content')
<form action="/editTweet" method="post">
    @csrf
<input type="hidden" name="id" value="{{$allTweets['0']->id}}}">
<input type="text" name="author" value="{{$allTweets['0']->author}}"><br/>
<textarea name="content" cols="50" rows="20">{{$allTweets['0']->content}}</textarea><br/>
<input type="submit" value="Edit Tweet">
</form>
@include('header')
@endsection
