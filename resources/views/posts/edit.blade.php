@extends('layouts.app')
@section('title', 'Ubah Postingan')
@section('content')
    <h1>Buat Postingan Baru</h1>
    <form method="POST" action="{{ url("posts/$post->id") }}" class="form-control">
        @method('PATCH')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" value="{{ $post->title }}" name="title" >
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Konten</label>
            <textarea class="form-control" id="content" rows="3" name="content">{{ $post->content }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>

    </form>
    <form method="POST" action="{{ url("posts/$post->id") }}" class="form-control">
        @method('DELETE')
        @csrf

        <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
@endsection