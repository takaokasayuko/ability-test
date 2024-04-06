@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection


@section('content')
<header class="header">
  <div class="header__tittle">
    <h1>FashionablyLate</h1>
  </div>
  <div class="header__link">
    <a href="/register" class="header__link-logo">register</a>
  </div>
</header>

<main>
  <div class="login-form__content">
    <div class="login-form__heading">
      <h2>Login</h2>
    </div>

    <div class="form__content">
      <form class="form">

        <!-- メールアドレス -->
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <!-- <div class="form__error">
          @error('email')
          {{ $message }}
          @enderror
        </div> -->
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" value="{{ old('email') }}" placeholder="例:test@example.com">
            </div>
          </div>
        </div>

        <!-- パスワード -->
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">パスワード</span>
            <!-- <div class="form__error">
          @error('password')
          {{ $message }}
          @enderror
        </div> -->
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="password" name="password" placeholder="例:coachtech1106">
            </div>
          </div>
        </div>

        <div class="form__button">
          <button class="form__button-submit" type="submit">ログイン</button>
        </div>

      </form>
    </div>
  </div>
</main>
@endsection