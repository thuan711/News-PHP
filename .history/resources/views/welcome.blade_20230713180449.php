@extends('layout')
@section('noidungchinh')
    @php
        $title='mr';
        $name='thuan';
    @endphp
    @if($title=='mr')
        <h3>Chào anh {{$name}}</h3>
    @else
        <h3>Chào chị {{$name}}</h3>
    @endif

    <ul>
        @foreach($data as $tin)
            <li>{{$tin->tieuDe}}</li>
        @endforeach
    </ul>
@endsection