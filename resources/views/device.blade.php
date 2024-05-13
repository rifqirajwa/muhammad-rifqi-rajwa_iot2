@extends('layouts.main')
@section('container')
    <h2>{{ $device["name"] }}</h2>

    @php
    $i = 1;
    @endphp
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Date Time</th>
                <th scope="col">Data</th>
            </tr>
        </thead>
        <tbody>
            @foreach($log as $log)
            <tr>
                <th scope="row">{{ $i }}</th>
                <td>{{ $log["created_at"] }}</td>
                <td>{{ $log["data"] }}</td>
            </tr>
            @php
                $i++;
            @endphp
        @endforeach
        </tbody>
    </table>

    <a href="/devices">back to Devices</a>
@endsection
