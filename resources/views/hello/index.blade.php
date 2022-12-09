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

    <form action="" method="post">
        <table>
            @csrf
            @error('name')
            <tr><th>ERROR</th><td>{{$message}}</td></tr>
            @enderror
            <tr><th>name: <td><input type="text" name="name" value="{{old('name')}}"></td></th></tr>
            @error('mail')
            <tr><th>ERROR</th><td>{{$message}}</td></tr>
            @enderror
            <tr><th>mail: </th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>
            @error('age')
            <tr><th>ERROR</th><td>{{$message}}</td></tr>
            @enderror
            <tr><th>age: </th><td><input type="text" name="age" value="{{old('age')}}"></td></tr>
            <tr><th></th><td><input type="submit" value="send"></td></tr>
        </table>
    </form>


@endsection

@section('footer')
copyright 2020 tuyano.
@endsection