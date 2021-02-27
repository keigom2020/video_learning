@extends('layout')

@section('content')
    <h1>paiza bbs</h1>
    <p>{{ $message }}</p>
    {{ Form::open(['route' => 'article.store']) }}
        <div class='form-group'>
            {{ Form::label('user_name', 'Title:') }}
            {{ Form::text('title') }}
            {{-- {{ Form::text('title', null) }} --}}
        </div>
        <div class='form-group'>
            {{ Form::label('content', 'Content:') }}
            {{ Form::text('content') }}
            {{-- {{ Form::text('content', null) }} --}}
        </div>
        
        <div class="form-group">
            {{ Form::submit('作成する', ['class' => 'btn btn-primary']) }}
            <a href={{ route('article.index') }}>一覧に戻る</a>
        </div>
    {{ Form::close() }}
@endsection
