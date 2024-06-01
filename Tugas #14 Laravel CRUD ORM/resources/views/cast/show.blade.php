@extends('layouts.master')

@section('title')
    Halaman Show Cast
@endsection

@section('content')
    <a href="/cast/create" class="btn btn-sm btn-primary">Create New</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Umur</th>
                <th scope="col">Bio</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($cast as $key => $item)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->umur }}</td>
                    <td>{{ $item->bio }}</td>
                    <td>
                        <form action="/cast/{{ $item->id }}" method="POST">
                            <a href="/cast/{{ $item->id }}" class="btn btn-sm btn-success">Detail</a>
                            <a href="/cast/{{ $item->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                            @csrf
                            @method('delete')
                            <input type="submit" onclick="return confirm('Are you sure you want to delete this item?')"
                                value="delete" class="btn btn-sm btn-danger">
                        </form>
                        <script type="javascript">
                            document.onsubmit=function(){
                                return confirm('Sure?');
                            }
                     </script>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Data Cast Tidak Tersedia!</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
