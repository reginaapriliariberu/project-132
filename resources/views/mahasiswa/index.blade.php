@extends('layout.main')

@section('title', 'Tambah Data Ujian')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <a href="/ujian/create" class="btn btn-primary my-3">Tambah Data Ujian</a>
                <a href="/ujian/indexSeluruh" class="btn btn-primary my-3">Tampil Table Data Ujian </a>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <h1 class="mt-3">Daftar Data Ujian</h1>

                {{-- <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Id</th>
                            <th scope="col">Nama MK</th>
                            <th scope="col">Dosen</th>
                            <th scope="col">Jumlah Soal</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Aksi</th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($tableujian as $tblujian)


                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $tblujian->id }}</td>
                                <td>{{ $tblujian->nama_mk }}</td>
                                <td>{{ $tblujian->dosen }}</td>
                                <td>{{ $tblujian->jumlah_soal }} </td>
                                <td>{{ $tblujian->keterangan }}</td>
                                <td>
                                    <a href="" class="badge rounded bg-success">Edit</a>
                                    <a href="" class="badge rounded bg-danger">Delete</a>

                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table> --}}

                <ul class="list-group">
                    @foreach ($ujian as $tblujian)
                        <li class="list-group-item d-flex justify-content-between align-items-center">

                            {{ $tblujian->nama_mk }}
                            <a href="/ujian/{{ $tblujian->id }}" style="text-decoration:none"
                                class="badge bg-info rounded-pill">Detail</a>
                        </li>

                    @endforeach


                </ul>

            </div>
        </div>
    </div>

@endsection
