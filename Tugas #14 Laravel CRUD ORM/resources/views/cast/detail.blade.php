@extends('layouts.master')

@section('title')
    Halaman Detail Cast
@endsection

@section('content')

<h1>{{$cast->nama}}</h1>
<p>{{$cast->umur}} Tahun</p>
<p>{{$cast->bio}}</p>

<a href="/cast" class="btn btn-sm btn-secondary">Back</a>

@endsection