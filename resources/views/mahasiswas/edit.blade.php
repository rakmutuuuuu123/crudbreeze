@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Mahasiswa</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('mahasiswas.update', $mahasiswa->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="nim">NIM</label>
                                <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" value="{{ old('nim', $mahasiswa->nim) }}" required autofocus>
                                @error('nim')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Form fields for other columns: nama, umur, alamat, kota, kelas, jurusan -->

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection