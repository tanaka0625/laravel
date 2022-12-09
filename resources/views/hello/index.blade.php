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
    <p>{{$msg}}</p>
    @error('msg')
    <p>入力に問題があります。再入力してください。</p>
    @enderror


    <form action="" method="post">
        <table>
            @csrf
            @error('msg')
            <tr><th>ERROR</th><td>{{$message}}</td></tr>
            @enderror
            <tr><th>msg: <td><input type="text" name="msg" value="{{old('msg')}}"></td></th></tr>

            <tr><th></th><td><input type="submit" value="send"></td></tr>
        </table>
    </form>


@endsection

@section('footer')
copyright 2020 tuyano.
@endsection