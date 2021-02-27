@extends('layout')

@section('content')

<div class="container">

<h1>内容を編集</h1>
    <p>{{ $message }}</p>
    {{ Form::model($video, ['route' => ['video.update', $video->id]]) }}
    <div class='form-group'>
            {{ Form::label('title', 'タイトル:') }}
            {{ Form::text('title', null) }}
        </div>

        <div class='form-group'>
            {{ Form::label('video_url', 'video_url(vimeoの動画IDを入力してください):') }}
            {{ Form::text('video_url', null) }}
        </div>

        <div class='form-group'>
            {{ Form::label('image_src', 'image_src(画像名を入力):') }}
            {{ Form::text('image_src', null) }}
        </div>

        <div class='form-group'>
            {{ Form::label('detail', 'detail:') }}
            {{ Form::text('detail', null) }}
        </div>

        <div class='form-group'>
            {{ Form::label('author', 'author:') }}
            {{ Form::text('author', null) }}
        </div>

        <div class='form-group'>
            {{ Form::label('category_id', 'category_id:') }}
            {{ Form::text('category_id', null) }}
        </div>

        <div class='form-group'>
            {{ Form::label('content', '内容:') }}
            {{ Form::textarea('content', null) }}
        </div>
        
        <div class="form-group">
            {{ Form::submit('保存する', ['class' => 'btn btn-primary']) }}
            <a href="{{ route('video.show', ['id' => $video->id]) }}"　class="btn btn-info">動画に戻る</a>
        </div>
    {{ Form::close() }}

</div>

@endsection
