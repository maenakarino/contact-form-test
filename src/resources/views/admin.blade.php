@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admit.css') }}">
@endsection

@section('content')
    <div class="admit__content">
      <div class="admit__heading">
        <h2>Admit</h2>
      </div>
      <form class="create-form" action="/admits" method="post">
        @csrf
        <div class="create-form__item">
            <input
        class="create-form__item-input"
        type="text"
        name="content"
        value="{{ old('content') }}"/>
        <select class="create-form__item-select">
            <option value="">性別</option>
        </select>
        < class="create-form__item-select">
            <option value="">お問い合わせの種類</option>
        </select>
        <select class="create-form__item-select">
            <option value="">年/月/日</option>
        </select>
        </div>
        <div class="create-form__button">
            <button class="create-form__button-submit" type="submit">検索</button>
            <button class="create-form__button-submit" type="submit">リセット</button>
        </div>
      </form>
      <div class="admit-table">
        <table class="admit-table__inner">
            <tr class="admit-table__row">
                <th class="admit-table__header">
                    <span class="admit-table__header-span">お名前</span>
                    <span class="admit-table__header-span">性別</span>
                    <span class="admit-table__header-span">メールアドレス</span>
                </th>
            </tr>
                    
            

      