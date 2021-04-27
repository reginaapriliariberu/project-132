@extends('layout.main')

@section('title', 'Tambah Data Ujian')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">



                <h1 class="mt-3">Daftar Data Ujian</h1>

                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Id</th>
                            <th scope="col">Nama MK</th>
                            <th scope="col">Dosen</th>
                            <th scope="col">Jumlah Soal</th>
                            <th scope="col">Keterangan</th>

                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($ujian as $tblujian)


                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $tblujian->id }}</td>
                                <td>{{ $tblujian->nama_mk }}</td>
                                <td>{{ $tblujian->dosen }}</td>
                                <td>{{ $tblujian->jumlah_soal }} </td>
                                <td>{{ $tblujian->keterangan }}</td>


                            </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>
        </div>
    </div>

@endsection
