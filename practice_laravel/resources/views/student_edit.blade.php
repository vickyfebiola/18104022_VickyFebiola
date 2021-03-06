@extends('template.base')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1">
            <h1>Edit Data Mahasiswa</h1>
            <!-- data yang disubmit pada form akan dilanjutkan ke proses pada fungsi update -->
            <!-- data yang diambil berdasarkan id -->
            <form action="{{ route('student.update',['id' => $student->id]) }}" method="post">
                <!-- method PUT untuk mengupdate -->
                @method('PUT')
                @csrf
                <!-- inputan data sesuai dengan value pada kolom-kolom tabel 'student' -->
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" name="nim" class="form-control" placeholder="NIM" value="{{ $student->nim }}">
                    @error('nim')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" name="name" class="form-control" placeholder="Nama" value="{{ $student->name }}">
                    @error('name')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="gender">Jenis Kelamin</label>
                    <select name="gender" class="form-control">
                        <option value=""></option>
                        @foreach ($gender as $gd)
                        <option value="{{ $gd }}" {{ ($student->gender == $gd) ? 'selected' : '' }}>{{ $gd }}</option>
                        @endforeach
                    </select>
                    @error('gender')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="departement">Jurusan</label>
                    <select name="departement" class="form-control">
                        <option value=""></option>
                        @foreach ($departement as $dp)
                        <option value="{{ $dp }}" {{ ($student->departement == $dp) ? 'selected' : '' }}>{{ $dp }}</option>
                        @endforeach
                    </select>
                    @error('departement')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="address">Alamat</label>
                    <textarea name="address" class="form-control" placeholder="Alamat">{{ $student->address }}</textarea>
                </div>

                <button type="submit" class="btn btn-info">Edit</button>
            </form>
        </div>
    </div>
</div>
@endsection