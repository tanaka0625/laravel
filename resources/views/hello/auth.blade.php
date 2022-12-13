@extends('layouts.helloapp')

@section('title', 'ユーザー認証')

@section('menubar')
    @parent
    ユーザー認証ページ
@endsection

@section('content')
    <p>{{$message}}</p>
    <form action="/laravel/public/hello/auth" method="post">
        <table>
            @csrf
            <tr><th>email: </th><td><input type="text" name="mail"></td></tr>
            <tr><th>pass: </th><td><input type="password" name="password"></td></tr>
            <tr><th></th><td><input type="submit" value="send"></td></tr>
        </table>
    </form>
@endsection

@section('footer')
    copyright 2022 gotou
@endsection