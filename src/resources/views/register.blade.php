@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection


@section('content')
<header class="header">
  <div class="header__tittle">
    <h1>FashionablyLate</h1>
  </div>
  <div class="header__link">
    <a href="/login" class="header__link-logo">login</a>
  </div>
</header>

<main>
  <div class="form__main">
    <div class="form__heading">
      <h2>Register</h2>
    </div>

    <div class="form__content">
      <form class="form">

        <!-- 名前 -->

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <!-- <div class="form__error">
          @error('name')
          {{ $message }}
          @enderror
        </div> -->
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="name" value="{{ old('name') }}" placeholder="例:山田  太郎">
            </div>
          </div>
        </div>

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
          <button class="form__button-submit" type="submit">登録</button>
        </div>

      </form>
    </div>
  </div>
</main>
@endsection