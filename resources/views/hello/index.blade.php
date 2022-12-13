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
    {{$items->appends(['sort' => $sort])->render()}}
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection