@extends('layouts.helloapp')

@section('title', 'Board.index')

@section('menubar')
    @parent
    ボードページ
@endsection

@section('content')
    <table>
        <tr><th>Date</th></tr>
        @foreach ($items as $item)
            <tr><td>{{$item->getDate()}}</td></tr>
        @endforeach
    </table>
@endsection

@section('footer')
    copyright 2020 hasegawa
@endsection
