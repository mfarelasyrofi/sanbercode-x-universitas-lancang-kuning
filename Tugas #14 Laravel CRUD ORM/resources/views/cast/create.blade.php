@extends('layouts.master')

@section('title')
    Halaman Create Cast
@endsection

@section('content')
    <form method="POST" action="/cast">

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
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama Cast">
        </div>
        <div class="form-group">
            <label>Umur</label>
            <input type="number" class="form-control" name="umur" placeholder="Umur Cast">
        </div>
        <div class="form-group">
            <label>Bio</label>
            <textarea class="form-control" name="bio" rows="3" placeholder="Biodata Cast"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
