@extends('layouts.helloapp')

@section('menubar')
    @parent
    検索ページ
@endsection

@section('content')
    <form action="" method="post">
        @csrf
        <input type="text" name="input" value="{{$input}}">
        <input type="submit" value="find">
    </form>

    @isset($item)
        <table>
            <tr><th>Date</th></tr>
            <tr><td>{{$item->getDate()}}</td></tr>
        </table>
    @endisset
    
@endsection

@section('footer')
    copyright 2027 ayushi
@endsection