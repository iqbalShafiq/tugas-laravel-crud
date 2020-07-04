@extends('layout.master')

@section('content')
    <div class="container py-4 mb-4">
        <h2>Tabel Pertanyaan</h2>        
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($questions as $key => $question)    
                    <tr>
                        <td> {{ $key+1 }} </td>
                        <td> {{ $question->judul }} </td>
                        <td> {{ $question->isi }} </td>
                        <td> <a href="/jawaban/{{$question->id}}" class="btn btn-dark">Jawaban</a> </td>
                        <td> <a href="/pertanyaan/{{$question->id}}" class="btn btn-success">Detail</a> </td>
                        <td> <a href="/pertanyaan/{{$question->id}}/edit" class="btn btn-primary">Edit</a> </td>
                        <td>
                            <form action="/pertanyaan/{{$question->id}}"  method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="container my-4">
        <form action="/pertanyaan/create/">
            <button type="submit" class="btn btn-dark w-100">Buat Pertanyaan</button>
        </form>
    </div>
@endsection