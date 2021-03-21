@extends('layout')
@section('title', '会員一覧')
@section('content')
<h1>会員ページ</h1><br>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">ユーザーネーム</th>
      <th scope="col">メールアドレス</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ $user->id }}</td>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
    </tr>
  </tbody>
</table>
@endsection