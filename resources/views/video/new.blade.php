@extends('layout')

@section('content')

<div class="container">

    <h1>新規投稿</h1>
    
    <p>{{ $message }}</p>
    {{ Form::open(['route' => 'video.store']) }}
        <div class='form-group'>
            {{ Form::label('title', 'タイトル:') }}
            {{ Form::text('title', 'test') }}
        </div>

        <div class='form-group'>
            {{ Form::label('video_url', 'video_url(vimeoの動画IDを入力してください):') }}
            {{ Form::text('video_url', '502084279') }}
        </div>

        <div class='form-group'>
            {{ Form::label('image_src', 'image_src(画像名を入力):') }}
            {{ Form::text('image_src', 'default.jpg') }}
        </div>

        <div class='form-group'>
            {{ Form::label('detail', 'detail:') }}
            {{ Form::text('detail', 'testtest') }}
        </div>

        <div class='form-group'>
            {{ Form::label('author', 'author:') }}
            {{ Form::text('author', '小西太郎') }}
        </div>

        <div class='form-group'>
            {{ Form::label('category_id', 'category_id:') }}
            {{ Form::text('category_id', 3) }}
        </div>

        <div class='form-group'>
            {{ Form::label('content', '内容:') }}
            {{ Form::textarea('content', 'testtest') }}
        </div>
        
        <div class="form-group">
            {{ Form::submit('作成する', ['class' => 'btn btn-primary']) }}
            <a href={{ route('video.index') }}>一覧に戻る</a>
        </div>
    {{ Form::close() }}

</div>

@endsection
