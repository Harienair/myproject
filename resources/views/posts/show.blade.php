@extends('layouts.app')

@section('title', $post->title)

@section('content')
<h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p>
<p> Added {{ $post->created_at->diffForHumans() }}</p>

@if(now()-> diffForHumans($post->created_at) < 5)
<div class="alert aleert-info">New!</div>
@endif
@endsection





{{--

@extends('layouts.app')
@section('title', $post['title'])

@section('content')
@if($post['is_new'])
<div> it is true</div>
@elseif(!$post['is_new'])
<div> it is false</div>
@endif
<h1>{{ $post['title'] }}</h1>
<p>{{ $post['content'] }}</p>
@endsection
--}}