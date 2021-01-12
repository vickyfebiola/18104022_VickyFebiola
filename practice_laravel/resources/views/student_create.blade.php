@extends('template.base')
@section('content')

      <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1">
            <h3>Tambah Data Mahasiswa</h3>
            <!-- data yang disubmit pada form akan dilanjutkan ke proses pada fungsi store -->
            <form action="{{ route('student.store') }}" method="post">
                @csrf
                <!-- inputan data sesuai dengan value pada kolom-kolom tabel 'student' -->
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" name="nim" class="form-control" placeholder="NIM" value="{{ old('nim') }}">
                    @error('nim')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" name="name" class="form-control" placeholder="Nama" value="{{ old('name') }}">
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
                        <option value="{{ $gd }}" {{ (old('gender') == $gd) ? 'selected' : '' }}>{{ $gd }}</option>
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
                        <option value="{{ $dp }}" {{ (old('departement') == $dp) ? 'selected' : '' }}>{{ $dp }}</option>
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
                    <textarea name="address" class="form-control" placeholder="Alamat">{{ old('address') }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
            </div>
        </div>
    </div>

@endsection