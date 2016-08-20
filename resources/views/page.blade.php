@extends('layouts.master')

@section('title', 'Page Title')

@section('add')
    @parent

    <p>This is appended to the master sidebar.</p>

@endsection

