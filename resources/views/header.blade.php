<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">ブログ</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/blog/index">一覧</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/blog/create">投稿</a>
        </li>
        @if (Auth::check())
        <li class="nav-item">
          <a class="nav-link" href="/home">マイページ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/user/index">ユーザー</a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="/register">新規登録</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/login">ログイン</a>
        </li>
        @endif

      </ul>
    </div>
  </div>
</nav>