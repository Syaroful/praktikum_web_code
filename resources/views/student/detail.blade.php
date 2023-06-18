@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail student
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Nim: </b>{{ $student->nim }}</li>
                        <li class="list-group-item"><b>Nama: </b>{{ $student->nama }}</li>
                        <li class="list-group-item"><b>Kelas: </b>{{ $student->kelas }}</li>
                        <li class="list-group-item"><b>Jurusan: </b>{{ $student->jurusan }}</li>
                        <li class="list-group-item"><b>No_Handphone: </b>{{ $student->nomor_hp }}</li>
                    </ul>
                </div>
                <a class="btn btn-success mt-3" href="{{ route('student.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection
