@extends('layouts.master')

@section('title')
    Halaman Edit Cast
@endsection

@section('content')
    <form method="POST" action="/cast/{{ $cast->id }}">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @csrf

        @method('put')
        <div class="form-group">
            <label>Nama</label>
            <input type="text" value="{{ $cast->nama }}" class="form-control" name="nama" placeholder="Nama Cast">
        </div>
        <div class="form-group">
            <label>Umur</label>
            <input type="number" value="{{ $cast->umur }}" class="form-control" name="umur" placeholder="Umur Cast">
        </div>
        <div class="form-group">
            <label>Bio</label>
            <textarea class="form-control" name="bio" rows="3" placeholder="Biodata Cast">{{ $cast->bio }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
