@extends('layouts.master');

@section('judul')
    Detail Genre Buku
@endsection

@section('content')
    <h1 class="text-primary">{{$genre->name}}</h1>
    <p>{{$genre->description}}</p>
    <a href="/genre" class="btn btn-secondary btn-sm">kembali</a>
@endsection