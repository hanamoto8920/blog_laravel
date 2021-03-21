@extends('layout')
@section('title', '会員一覧')
@section('content')
<h1>会員一覧</h1><br>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">ユーザーネーム</th>
      <th scope="col">メールアドレス</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr>
      <td>{{ $user->id }}</td>
      <td><a href="/user/{{ $user->id }}">{{ $user->name }}</a></td>
      <td>{{ $user->email }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection