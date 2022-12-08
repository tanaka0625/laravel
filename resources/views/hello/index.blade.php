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

    <x-message :msg-title='$msgTitle' :msg-content='$msgContent'></x-message>


@endsection

@section('footer')
copyright 2020 tuyano.
@endsection