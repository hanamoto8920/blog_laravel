@extends('layout')
@section('title', 'ブログ一覧')
@section('content')
<h1>ブログ一覧</h1><br>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">日付</th>
      <th scope="col">タイトル</th>
      <th scope="col">投稿者</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($blogs as $blog)
    <tr>
      <td>{{ $blog->id }}</td>
      <td>{{ $blog->updated_at }}</td>
      <td><a href="/blog/{{ $blog->id }}">{{ $blog->title }}</a></td>
      <td>{{ $blog->user_id }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection