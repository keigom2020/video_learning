@extends('errors.layouts.base')

@section('title', '403 Forbidden')

@section('message', 'あなたにはアクセス権がありません。')
{{-- You do not have access. --}}


@section('detail', 'クライアントがコンテンツへのアクセス権を持たず、サーバーが適切な応答への返信を拒否していることを示します。')
{{-- It indicates that the client does not have access to the content and the server is refusing to reply the appropriate response. --}}
{{-- https://www.ritolab.com/entry/57 --}}

@section('link')
  <!-- <p><a href="{{env('APP_URL')}}">to TOP&gt;&gt;</a></p> -->
  <p><a href="/">to TOP&gt;&gt;</a></p>
@endsection