@extends('layout.master')

@section('content')
    <div class="container py-4 mb-4">
        <h2>Jawaban dari Pertanyaan: <br> {{ $question->isi }} </h2>        
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Isi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($answers as $key => $answer)    
                    <tr>
                        <td> {{ $key+1 }} </td>
                        <td> {{ $answer->isi }} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="container my-4">
        <form method="post">
            @csrf
            <div class="form-group">
                <label for="isi">Tambahkan Jawaban:</label>
                <input type="text" name="isi" class="form-control" placeholder="..." id="isi" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection