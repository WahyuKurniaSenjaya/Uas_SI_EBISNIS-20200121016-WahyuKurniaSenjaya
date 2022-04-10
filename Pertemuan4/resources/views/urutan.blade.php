@extends ('layout.app')

@section('tittle', 'Urutan')

@section('content')

@foreach ($numbers as $number)
    <h1>Urutan ke - {{ $numbers['ke'] }}</h1>
    <h3>Urutan ke - {{ $number['nomor'] }}<h3>
@endforeach

@endsection
