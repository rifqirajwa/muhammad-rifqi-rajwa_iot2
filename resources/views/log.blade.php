@extends('layouts.main')
@section('container')
    <h2>{{ $device["log"] }} ({{ $device["id"] }})</h2>
    <h2>Time: {{ $device["created_at"] }}</h2>

    <a href="/devices">back to Devices</a>
@endsection
