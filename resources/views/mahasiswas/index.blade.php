@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Mahasiswa List</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Umur</th>
                                    <th>Alamat</th>
                                    <th>Kota</th>
                                    <th>Kelas</th>
                                    <th>Jurusan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mahasiswas as $mahasiswa)
                                    <tr>
                                        <td>{{ $mahasiswa->nim }}</td>
                                        <td>{{ $mahasiswa->nama }}</td>
                                        <td>{{ $mahasiswa->umur }}</td>
                                        <td>{{ $mahasiswa->alamat }}</td>
                                        <td>{{ $mahasiswa->kota }}</td>
                                        <td>{{ $mahasiswa->kelas }}</td>
                                        <td>{{ $mahasiswa->jurusan }}</td>
                                        <td>
                                            <a href="{{ route('mahasiswas.edit', $mahasiswa->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('mahasiswas.destroy', $mahasiswa->id) }}" method="POST" style="display: inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this mahasiswa?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection