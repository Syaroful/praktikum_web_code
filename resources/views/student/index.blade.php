@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 mb-2">
            <div class="text-center my-5">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>

            <div class="float-left my-2 col-md-5">
                <form action="" method="get">
                    <input type="text" class="form-control" id="search" name="search" placeholder="Search">
                </form>
            </div>

            <div class="float-right my-2 col-md-2">
                <a class="btn btn-success" href="{{ route('student.create') }}"> Input student</a>
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
            <th>No.</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>No_Handphone</th>
            <th>Action</th>
        </tr>
        @foreach ($students as $index => $student)
            <tr>
                <td>{{ $students->firstItem() + $index }}</td>
                <td>{{ $student->nim }}</td>
                <td>{{ $student->nama }}</td>
                <td>{{ $student->kelas }}</td>
                <td>{{ $student->jurusan }}</td>
                <td>{{ $student->nomor_hp }}</td>
                <td>
                    <form action="{{ route('student.destroy', $student->nim) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('student.show', $student->nim) }}"><i
                                class='bx bxs-show'></i></a>
                        <a class="btn btn-primary" href="{{ route('student.edit', $student->nim) }}"><i
                                class='bx bxs-edit'></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class='bx bx-trash-alt'></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        {{-- paginate student --}}
    </table>
    <div class="d-flex justify-content-end">
        {{ $students->links() }}
    </div>
@endsection
