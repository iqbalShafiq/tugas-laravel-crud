@extends('layout.master')

@section('content')
    <div class="container py-4 mb-4">
        <h2>Tabel Pertanyaan</h2>        
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Tanggal dibuat</th>
                    <th>Tanggal diperbaharui</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> {{ $question->judul }} </td>
                    <td> {{ $question->isi }} </td>
                    <td> {{ $question->created_at }} </td>
                    <td> {{ $question->updated_at }} </td>
                    <td> <a href="/jawaban/{{$question->id}}" class="btn btn-dark">Jawaban</a> </td>
                    <td> <a href="/pertanyaan/{{$question->id}}/edit" class="btn btn-primary">Edit</a> </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection