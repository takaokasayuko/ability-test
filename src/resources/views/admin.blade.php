@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<header class="header">
  <div class="header__tittle">
    <h1>FashionablyLate</h1>
  </div>
  <form class="header__link" action="{{ route('logout') }}" method="post">
    @csrf
    <button class="header__button-submit">logout</button>
  </form>
</header>

<main>
  <div class="form__main">
    <div class="form__heading">
      <h2>Admin</h2>
    </div>

    <div class="search__content">
      <!-- 検索 -->
      <form class="search-form" action="">
        <input class="search-form__keyword" type="search" name="keyword" placeholder="名前やメールアドレスを入力してください">
        <select class="search-form__gender" name="gender" id="">
          <option value="全て">全て</option>
          <option value="男性">男性</option>
          <option value="女性">女性</option>
          <option value="その他">その他</option>
        </select>
        <select class="search-form__contact" name="category_id">
          <option value="">お問い合わせの種類</option>
        </select>
        <input class="search-form__date" type="date">

        <div class="search-form__button">
          <button class="search-form__button-submit" type="submit">検索</button>
          <button class="search-form__button-reset" type="reset">リセット</button>
        </div>
      </form>

      <!-- CSVエクスポートとページネーション -->
      <div class="search-form__page">
        <div class="search-form__CSV">
          <button class="search-form__button-CSV">エクスポート</button>
          <div class="search-form__paginate"></div>
        </div>
      </div>

      <!-- 問い合わせ一覧表 -->
      <div class="contact-table">
        <table class="contact-table__inner">
          <tr class="contact-table__row">
            <th colspan="2" class="contact-table__header--name">お名前</th>
            <th class="contact-table__header--gender">性別</th>
            <th class="contact-table__header--email">メールアドレス</th>
            <th class="contact-table__header--contact">お問い合わせ</th>
          </tr>
          <tr class="contact-table__item">
            <td class="contact-table__item--first_name">山田</td>
            <td class="contact-table__item--last_name">太郎</td>
            <td class="contact-table__item--gender">男性</td>
            <td class="contact-table__item--email">test@example.com</td>
            <td class="contact-table__item--category">商品の交換について</td>
            <td class="contact-table__detail">
              <button class="contact-table__button-submit">詳細</button>
            </td>
          </tr>
        </table>
      </div>

    </div>
  </div>

</main>
@endsection