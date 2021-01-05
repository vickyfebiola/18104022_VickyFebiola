<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class StudentController extends Controller
{
	// menampilkan seluruh data dari tabel 'student'
    public function index(){
        $data['student'] = Student::all();
        return view ('student', $data);
    }

    // fungsi untuk tambah data
    public function create(){
        $data['gender'] = ['L','P'];
        $data['departement'] = ['S1 RPL','S1 Informatika', 'S1 Sistem Informasi', 'S1 DKV'];

        return view('student_create', $data);
    }

    // fungsi untuk  proses pada form tambah data. data akan di validasi kemudian akan ditangkap oleh fungsi Request
    public function store(Request $request){
        $request->validate([
            'nim' => 'required|size:8,unique:students',
            'name' => 'required|min:3|max:50',
            'gender' => 'required|in:P,L',
            'departement' => 'required',
            'address' => '',
        ]);
        $student = new Student();
        $student->nim = $request->nim;
        $student->name = $request->name;
        $student->gender = $request->gender;
        $student->departement = $request->departement;
        $student->address = $request->address;
        $student->save();

        // jika sudah akan kembali ke halaman awal mahasiswa dan menampilkan teks
        return redirect(route('student.index'))->with('pesan','Data Berhasil Ditambahkan');
    }

    // fungsi untuk edit data
    public function edit($id){
        $data['gender'] = ['L','P'];
        $data['departement'] = ['S1 RPL','S1 Informatika', 'S1 Sistem Informasi', 'S1 DKV'];
        $data['student'] = Student::find($id);
        
        return view ('student_edit', $data);
    }

    // fungsi untuk proses pada form update/edit data. data akan di validasi kemudian akan ditangkap oleh fungsi Request
    public function update(Request $request, $id){
        $request->validate([
            'nim' => 'required|size:8,unique:students',
            'name' => 'required|min:3|max:50',
            'gender' => 'required|in:P,L',
            'departement' => 'required',
            'address' => '',
        ]);
        $student = Student::find($id);
        $student->nim = $request->nim;
        $student->name = $request->name;
        $student->gender = $request->gender;
        $student->departement = $request->departement;
        $student->address = $request->address;
        $student->save();

        // jika sudah akan kembali ke halaman awal mahasiswa dan menampilkan teks
        return redirect(route('student.index'))->with('pesan','Data Berhasil Diupdate');
    }

    // fungsi untuk menghapus data, diambil berdasarkan id. jika sudah berhasil akan kembali ke halaman awal mahasiswa
    public function destroy($id) {
        $student = Student::find($id);
        $student->delete();
        
        // jika sudah akan kembali ke halaman awal mahasiswa dan menampilkan teks
        return redirect(route('student.index'))->with('pesan','Data Berhasil dihapus!');
    }
}
