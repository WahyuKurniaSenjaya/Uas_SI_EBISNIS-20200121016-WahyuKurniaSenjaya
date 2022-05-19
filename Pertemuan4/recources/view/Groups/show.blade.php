@extends('layouts.app')

@section('title', 'Cobaaaaa')

@section('content')
<div class="card">
    <div class="card--body">
        <h3>Nama Teman : {{ $friend['nama'] }}</h3>
        <h3>No Tlp Teman : {{ $friend['no_tlp'] }}</h3>
        <h3>Alamat Teman Teman : {{ $friend['alamat'] }}</h3>
    </div>
</div>
@endsection