@extends('layouts.app')

@section('content')
    <div class="container mt-5">

        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Edit student
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your i
                            nput.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('student.update', $student->nim) }}" id="myForm">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nim">Nim</label>
                            <input type="text" name="nim" class="form-control" id="Nim"
                                value="{{ $student->nim }}" aria-describedby="Nim">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama"
                                value="{{ $student->nama }}" aria-describedby="Nama">
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <input type="kelas" name="kelas" class="form-control" id="kelas"
                                value="{{ $student->kelas }}" aria-describedby="kelas">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="jurusan" name="jurusan" class="form-control" id="jurusan"
                                value="{{ $student->jurusan }}" aria-describedby="jurusan">
                        </div>
                        <div class="form-group">
                            <label for="nomor_hp">nomor_hp</label>

                            <input type="nomor_hp" name="nomor_hp" class="form-control" id="nomor_hp"
                                value="{{ $student->nomor_hp }}" aria-describedby="nomor_hp">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
