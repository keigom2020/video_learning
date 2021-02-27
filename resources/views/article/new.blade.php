@extends('layout')

@section('content')

<div class="container">

    <h1>新規投稿</h1>
    <p>{{ $message }}</p>
    {{ Form::open(['route' => 'article.store']) }}
        <div class='form-group'>
            {{ Form::label('user_name', 'タイトル:') }}
            {{ Form::text('title') }}
            {{-- {{ Form::text('title', null) }} --}}
        </div>
        <div class='form-group'>
            {{ Form::label('content', '内容:') }}
             {{ Form::text('content', null) }}
        </div>
        
        <div class="form-group">
            {{ Form::submit('作成する', ['class' => 'btn btn-primary']) }}
            <a href={{ route('article.index') }}>一覧に戻る</a>
        </div>
    {{ Form::close() }}

</div>

@endsection
