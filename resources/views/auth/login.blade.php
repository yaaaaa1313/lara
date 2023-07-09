@extends('layouts.app')
@section('content')
    <div class="text-center">
        <h1><i class="fas fa-chalkboard-teacher pr-3 d-inline"></i>YouTubeまとめ☓コミュニケーション</h1>
    </div>
    <div class="text-center">
        <p class="text-left d-inline-block">ログインすると、<br>あなたのチャンネル作成／動画登録等ができるようになります。</p>
    </div>
    <div class="row mt-5 mb-5">
        <div class="col-sm-6 offset-sm-3">
            <form method="POST" action="{{ route('login.post') }}">
                @csrf
                <div class="form-group">
                    <label for="email">メールアドレス</label>
                    <input id="email" type="text" class="forma-control" name="email" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <label for="password">パスワード</label>
                    <input id="password" type="password" class="forma-control" name="password" value="{{ old('password') }}">
                </div>
                <button type="submit" class="btn btn-primary mt-2">ログイン</button>
            </form>
            <div class="mt-2"><a href="{{ route('signup') }}">新規ユーザ登録する？</a></div>
        </div>
    </div>
@endsection

