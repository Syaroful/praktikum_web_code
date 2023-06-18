<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //fungsi eloquent menampilkan data menggunakan pagination
        // $students = Student::all(); // Mengambil semua isi tabel
        $students = DB::table('students')->paginate(5);
        return view('student.index')->with('students', $students);
        // $posts = Student::orderBy('nim', 'desc')->paginate(5);
        // return view('student.index', compact('students'));
        // with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'nomor_hp' => 'required',
        ]);

        //fungsi eloquent untuk menambah data
        Student::create($request->all());

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('student.index')
            ->with('success', 'Student Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($nim)
    {
        //fungsi eloquent untuk mengambil 1 data yang sesuai dengan parameter yang dikirim
        $student = Student::find($nim);
        return view('student.detail', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($nim)
    {
        //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa untuk diedit
        $student = Student::find($nim);
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $nim)
    {
        //melakukan validasi data
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'nomor_hp' => 'required',
        ]);

        //fungsi eloquent untuk mengupdate data inputan kita
        Student::find($nim)->update($request->all());

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('student.index')
            ->with('success', 'Student Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($nim)
    {
        //fungsi eloquent untuk menghapus data
        Student::find($nim)->delete();
        return redirect()->route('student.index')
            ->with('success', 'Student Berhasil Dihapus');
    }
}
