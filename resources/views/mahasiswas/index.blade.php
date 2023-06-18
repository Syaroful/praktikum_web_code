@extends('mahasiswas.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 mb-2">
            <div class="text-center my-5">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>
            {{-- Search here --}}
            <div class="float-left my-2 col-md-5">
                <form action="" method="get">
                    <input type="text" class="form-control" id="search" name="search" placeholder="Search">
                </form>
            </div>

            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('mahasiswas.create') }}"> Input Mahasiswa</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>No_Handphone</th>
            <th>Action</th>
        </tr>
        @foreach ($paginate as $Mahasiswa)
            <tr>
                <td>{{ $Mahasiswa->Nim }}</td>
                <td>{{ $Mahasiswa->Nama }}</td>
                <td>{{ $Mahasiswa->kelas->nama_kelas }}</td>
                <td>{{ $Mahasiswa->Jurusan }}</td>
                <td>{{ $Mahasiswa->No_Handphone }}</td>
                <td>
                    <form action="{{ route('mahasiswas.destroy', $Mahasiswa->Nim) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('mahasiswas.show', $Mahasiswa->Nim) }}"><i
                                class='bx bxs-show'></i></a>
                        <a class="btn btn-primary" href="{{ route('mahasiswas.edit', $Mahasiswa->Nim) }}"><i
                                class='bx bxs-edit'></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class='bx bx-trash-alt'></i></button>
                        <a class="btn btn-warning" href="{{ route('mahasiswa.nilai', $Mahasiswa->Nim) }}">Nilai</a>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-end">
        {{ $paginate->links() }}
    </div>
@endsection
