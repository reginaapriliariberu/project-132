@extends('layout.main')

@section('title', 'Detail Data Ujian')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">

                <h1 class="mt-3">Detail Data Ujian</h1>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Mata Kuliah: {{ $ujian->nama_mk }}</h5>
                        <h6 class="card-subtitle mb-2 text-dark">Nama Dosen: {{ $ujian->dosen }}</h6>
                        <h6 class="card-subtitle mb-2 text-dark">Jumlah Soal: {{ $ujian->jumlah_soal }}</h6>
                        <p class="card-text">Keterangan: {{ $ujian->keterangan }}</p>

                        <a href="{{ $ujian->id }}/edit" class="btn btn-primary">Edit</a>
                        <form action="/ujian/{{ $ujian->id }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                        <button class="btn btn-info"><a href="/" style="text-decoration:none; color: rgb(247, 241, 241)
                                                                                        "
                                class="card-link">Kembali</a></button>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>

@endsection
