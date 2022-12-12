@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <table>
        <tr><th>Data</th></tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->getDate()}}</td>
                <td>@if($item->board != null){{$item->board->getDate()}}@endif</td>
            </tr>
        @endforeach
    </table>    
@endsection

@section('footer')
    copyright 2022 あやか
@endsection