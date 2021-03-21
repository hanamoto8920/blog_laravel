@extends('layout')
@section('title', 'ブログ一覧')
@section('content')
<h1>ブログ詳細</h1><br>
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
    <tr>
      <td>{{ $blog->id }}</td>
      <td>{{ $blog->updated_at }}</td>
      <td>{{ $blog->title }}</td>
      <td>{{ $blog->user->name }}</td>
    </tr>
    <tr>
      <th>内容</th>
      <td>{{ $blog->content }}</td>
    </tr>
  </tbody>
</table>

@endsection