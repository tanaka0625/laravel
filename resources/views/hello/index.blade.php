<!DOCTYPE html>
@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>必要なだけ記述できます。</p>
    @if (Auth::check())
        <p>USER: {{$user->name . '(' . $user->email . ')'}}</p>
    @else
        <p>ログインしていません。(<a href="/laravel/public/login">ログイン</a>|<a href="/laravel/public/register">登録</a>)</p>
    @endif
    <table>
        <tr>
            <th><a href="?sort=name">name</a></th>
            <th><a href="?sort=mail">mail</a></th>
            <th><a href="?sort=age">age</a></th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->mail}}</td>
                <td>{{$item->age}}</td>
            </tr>
        @endforeach

    </table>
    {{$items->appends(['sort' => $sort])->links('vendor.pagination.bootstrap-4')}}
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection