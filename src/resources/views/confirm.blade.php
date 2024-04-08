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

    <form class="form">
      <div class="confirm-table">
        <table class="confirm-table__inner">

          <tr class="confirm-table__row">
            <th class="confirm-table__header">お名前</th>
            <td class="confirm-table__text">
              <input type="text" name="name" value="サンプルテキスト" />
            </td>
          </tr>

          <tr class="confirm-table__row">
            <th class="confirm-table__header">性別</th>
            <td class="confirm-table__text">
              <input type="gender" name="gender" value="サンプルテキスト" />
            </td>
          </tr>

          <tr class="confirm-table__row">
            <th class="confirm-table__header">メールアドレス</th>
            <td class="confirm-table__text">
              <input type="email" name="email" value="サンプルテキスト" />
            </td>
          </tr>

          <tr class="confirm-table__row">
            <th class="confirm-table__header">電話番号</th>
            <td class="confirm-table__text">
              <input type="tel" name="tel" value="サンプルテキスト" />
            </td>
          </tr>

          <tr class="confirm-table__row">
            <th class="confirm-table__header">住所</th>
            <td class="confirm-table__text">
              <input type="address" name="address" value="サンプルテキスト" />
            </td>
          </tr>

          <tr class="confirm-table__row">
            <th class="confirm-table__header">建築物</th>
            <td class="confirm-table__text">
              <input type="building" name="building" value="サンプルテキスト" />
            </td>
          </tr>

          <tr class="confirm-table__row">
            <th class="confirm-table__header">お問い合わせの種類</th>
            <td class="confirm-table__text">
              <input type="detail" name="detail" value="サンプルテキスト" />
            </td>
          </tr>

          <tr class="confirm-table__row">
            <th class="confirm-table__header">お問い合わせ内容</th>
            <td class="confirm-table__text">
              <input type="text" name="content" value="サンプルテキスト" />
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