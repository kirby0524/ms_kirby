@extends('layouts.app')

@section('content')
<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
         {{Auth::user()->name}}      
        <title>Blog</title>
    </head>
   <body>
    <h1 class="title">編集画面</h1>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="title">
                <h2>❁Date❁</h2>
                <input type='date' name='post[title]' value="{{ $post->title }}"/>
            </div>
            
            
            　<div class="category">
                <select name="post[category_id]">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            
            
            
            <div class='content__event'>
                <h2>❁3 Happy events❁</h2>
                <input type='text' name='post[event1]' value="{{ $post->event1 }}"/>
                <input type='text' name='post[event2]' value="{{ $post->event2 }}"/>
                <input type='text' name='post[event3]' value="{{ $post->event3 }}"/>
              </div>
              </div>
              </div>
            <input type="submit" value="保存">
        </form>
    <div class="back">[<a href="/posts/{{ $post->id }}">back</a>]</div>
</body>
@endsection