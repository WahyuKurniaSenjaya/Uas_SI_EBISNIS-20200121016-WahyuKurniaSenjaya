@extends ('layout.app')

@section('tittle', 'Cobaaaa')

@section('content')
<div class="card">
    <h3?>Nama Teman : {{ $friend['nama'] }}</h3>
    <h3?>No Tlp Teman : {{ $friend['no_tlp'] }}</h3>
    <h3?>Alamat Teman : {{ $friend['alamat'] }}</h3>
@endsection