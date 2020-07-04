@extends('layout.master')

@section('content')
    <form action="/pertanyaan/{{ $question->id }}" method="post" class="m-4">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" name="judul" value=" {{$question->judul}} " class="form-control" placeholder="..." id="judul" required>
        </div>
        <div class="form-group">
            <label for="isi">Isi:</label>
            <input type="text" name="isi" value=" {{$question->isi}} " class="form-control" placeholder="..." id="isi" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection