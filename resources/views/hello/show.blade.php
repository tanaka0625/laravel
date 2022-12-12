@extends('layouts.helloapp')

@section('title', 'Show')

@section('menubar')
    @parent
    詳細ページ
@endsection

@section('content')
    @if($items != NULL)
    @foreach ($items as $item)
        <table>
            <tr>
                <th>id: </th><td>{{$item->id}}</td>
                <th>name: </th><td>{{$item->name}}</td>
                <th>age: </th><td>{{$item->age}}</td>
            </tr>
        </table>
    @endforeach
    @endif
    
@endsection

@section('footer')
    copyright 2022 kurioka
@endsection