<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">議ちゃんねる</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

       <!-- 左寄せメニュー -->
      <ul class="nav navbar-nav">
        <li><a href="/users">ユーザー</a></li>
        <li><a href="/contact">お問い合わせ</a></li>
        <li><a href="/about">議ちゃんねるについて</a></li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="スレ検索">
        </div>
        <button type="submit" class="btn btn-default">検索</button>
      </form>

      <!-- 右寄せメニュー -->
      <ul class="nav navbar-nav navbar-right">
        @if (Auth::guest())
          {{-- ログインしていない時 --}}
          <li><a href="/login">ログイン</a></li>
          <li><a href="/register">新規登録</a></li>
        @else
          <!-- {{-- ログインしている時 --}} -->
          <!-- ドロップダウンメニュー -->
          <!-- <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }}
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="/logout">Logout</a></li>
            </ul>
          </li> -->
            <!-- <li><a href="/logout">Logout</a></li> -->
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    {{ __('ログアウト') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
