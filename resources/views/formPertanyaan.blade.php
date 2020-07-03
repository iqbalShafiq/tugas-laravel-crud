@extends('layout.master')

@section('content')
    <form action="/pertanyaan" method="post" class="m-4">
        @csrf
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" name="judul" class="form-control" placeholder="..." id="judul" required>
        </div>
        <div class="form-group">
            <label for="isi">Isi:</label>
            <input type="text" name="isi" class="form-control" placeholder="..." id="isi" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection