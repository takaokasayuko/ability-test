@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
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
      <h2>Confirm</h2>
    </div>

    <form class="form" action="/thanks" method="post">
      @csrf
      <div class="confirm-table">
        <table class="confirm-table__inner">

          <tr class="confirm-table__row">
            <th class="confirm-table__header">お名前</th>
            <td class="confirm-table__text">
              <input type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly />
              <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly />
            </td>
          </tr>

          <tr class="confirm-table__row">
            <th class="confirm-table__header">性別</th>
            <td class="confirm-table__text">
              <input type="text" name="gender" value="{{ $contact['gender'] }}" readonly />
            </td>
          </tr>

          <tr class="confirm-table__row">
            <th class="confirm-table__header">メールアドレス</th>
            <td class="confirm-table__text">
              <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
            </td>
          </tr>

          <tr class="confirm-table__row">
            <th class="confirm-table__header">電話番号</th>
            <td class="confirm-table__text">
              <input type="tel" name="tel" value="{{ $contact['tel'] }}" readonly />
              <input type="tel" name="exchange_tel" value="{{ $contact['exchange_tel'] }}" readonly />
              <input type="tel" name="subscriber_tel" value="{{ $contact['subscriber_tel'] }}" readonly />
            </td>
          </tr>

          <tr class="confirm-table__row">
            <th class="confirm-table__header">住所</th>
            <td class="confirm-table__text">
              <input type="text" name="address" value="{{ $contact['address'] }}" readonly />
            </td>
          </tr>

          <tr class="confirm-table__row">
            <th class="confirm-table__header">建築物</th>
            <td class="confirm-table__text">
              <input type="text" name="building" value="{{ $contact['building'] }}" readonly />
            </td>
          </tr>

          <tr class="confirm-table__row">
            <th class="confirm-table__header">お問い合わせの種類</th>
            <td class="confirm-table__text">
              <input type="text" name="category_id" value="{{ $contact['category_id'] }}" readonly />
            </td>
          </tr>

          <tr class="confirm-table__row">
            <th class="confirm-table__header">お問い合わせ内容</th>
            <td class="confirm-table__text">
              <input type="text" name="detail" value="{{ $contact['detail'] }}" readonly />
            </td>
          </tr>

        </table>
      </div>
      <div class="form__button">
        <button class="form__button-submit" type="submit">送信</button>
        <a class="form__button-link" href="/">修正</a>
      </div>
    </form>

  </div>
</main>
@endsection