@extends('layout')

@section('content')

<div class="container">

<h1>内容を編集</h1>
    <p>{{ $message }}</p>
    {{ Form::model($article, ['route' => ['article.update', $article->id]]) }}
        <div class='form-group'>
            {{ Form::label('title', 'Name:') }}
            {{ Form::text('title', null) }}
        </div>
        <div class='form-group'>
            {{ Form::label('content', 'Content:') }}
            {{ Form::textarea('content', null) }}
        </div>
        
        <div class="form-group">
            {{ Form::submit('保存する', ['class' => 'btn btn-primary']) }}
            <a href={{ route('article.show', ['id' => $article->id]) }}>戻る</a>
        </div>
    {{ Form::close() }}

</div>

@endsection
