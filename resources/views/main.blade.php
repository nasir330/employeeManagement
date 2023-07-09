@extends('layouts.app')
@if(empty($appData))
@section('title')
@else
@section('title','Login')
@endif


@section('content')

@if(empty($appData))
@include('auth.register')
@else
@include('auth.login')
@endif

@endsection