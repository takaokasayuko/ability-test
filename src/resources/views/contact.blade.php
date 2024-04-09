@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')

<header class="header">
  <div class="header__tittle">
    <h1>FashionablyLate</h1>
  </div>
</header>

<main>
  <div class="form__main">
    <div class="form__heading">
      <h2>Contact</h2>
    </div>

    <form class="form">

      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">お名前</span>
          <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--text-name">
            <input type="text" name="first_name" placeholder="例: 山田" />
            <input type="text" name="last_name" placeholder="例: 太郎" />
          </div>
          <div class="form__error">
            <!--バリデーション機能を実装したら記述します。-->
          </div>
        </div>
      </div>

      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">性別</span>
          <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--radio">
            <input type="radio" name="gender" value="men" checked/>男性
            <input type="radio" name="gender" value="women" />女性
            <input type="radio" name="gender" value="other" />その他
          </div>
          <div class="form__error">
            <!--バリデーション機能を実装したら記述します。-->
          </div>
        </div>
      </div>

      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">メールアドレス</span>
          <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--text">
            <input type="email" name="email" placeholder="例: test@example.com" />
          </div>
          <div class="form__error">
            <!--バリデーション機能を実装したら記述します。-->
          </div>
        </div>
      </div>

      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">電話番号</span>
          <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--text-tel">
            <input type="tel" name="tel1" placeholder="090" />
            <span class="form__label--tel">-</span>
            <input type="tel" name="tel2" placeholder="1234" />
            <span class="form__label--tel">-</span>
            <input type="tel" name="tel3" placeholder="5678" />
          </div>
          <div class="form__error">
            <!--バリデーション機能を実装したら記述します。-->
          </div>
        </div>
      </div>

      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">住所</span>
          <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--text">
            <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" />
          </div>
          <div class="form__error">
            <!--バリデーション機能を実装したら記述します。-->
          </div>
        </div>
      </div>

      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">建物名</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--text">
            <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" />
          </div>
          <div class="form__error">
            <!--バリデーション機能を実装したら記述します。-->
          </div>
        </div>
      </div>

      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">お問い合わせの種類</span>
          <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--text">
            <select class="category-select" name="category_id">
              <option value="">選択してください</option>
            </select>
          </div>
          <div class="form__error">
            <!--バリデーション機能を実装したら記述します。-->
          </div>
        </div>
      </div>

      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">お問い合わせ内容</span>
          <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--textarea">
            <textarea name="content" placeholder="お問い合わせ内容をご記載ください"></textarea>
          </div>
        </div>
      </div>
      <div class="form__button">
        <button class="form__button-submit" type="submit">確認画面</button>
      </div>
    </form>
  </div>

</main>
@endsection