@extends('layout')

@section('content')

<div class="container">
  <h2>記事</h2>
  <p>{{ $message }}</p>
</div>


<div class="container">
<table>
@foreach ($articles as $article)

  <tr>
    <td>
      {{ $article->id }}:
    </td>
    <td>
      <a href='{{ route("article.show", ["id" =>  $article->id]) }}'>
        {{ $article->title }}
      </a>
    </td>
    <td class="ml-3">
        {{ Form::open(['method' => 'delete', 'route' => ['article.delete', $article->id]]) }}
            {{ Form::submit('削除', ['class' => 'btn btn-outline-secondary']) }}
        {{ Form::close() }}
    </td>
  </tr>

@endforeach
</table>
</div>






<div class="container">
  <div>
    <a href={{ route('article.new') }}>新規投稿</a>
  </div>

  
</div>

<router-view />

@endsection
