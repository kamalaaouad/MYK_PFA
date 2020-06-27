@extends('layouts.layout')

@section('title')
    Index
@endsection

@section('content')


    <tr><td>{{$comd->amount}}</td></tr>
    <tr>
        <td>{{$comd->delivery->state}}</td>
    </tr>

@endsection
