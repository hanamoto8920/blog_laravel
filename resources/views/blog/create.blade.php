@extends('layout')
@section('title', 'ブログ一覧')
@section('content')
<h1>ブログ投稿</h1><br>
<form action="/blog/create" method="post">
@csrf
  <div class="form-group">
    <label>タイトル</label>
    <input type="text" name="title" class="form-control" placeholder="タイトル記入">
  </div>
  <div class="form-group">
    <label>記事</label>
    <textarea type="text" class="form-control" name="content" rows="8"></textarea><br>
    <input type="submit" class="btn btn-primary" value="投稿">
    <a href="/blog/index" class="btn btn-primary">戻る</a>
  </div>
</form>

@endsection