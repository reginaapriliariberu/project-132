@extends('layout.main')

@section('title', 'Tambah Data Ujian')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">

                <h1 class="mt-3">Form Tambah Data Ujian</h1>
                <form method="POST" action="/ujian">

                    @csrf
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="nama_mk" class="form-label">Nama Mata Kuliah</label>
                            <input type="text" class="form-control" required id="nama_mk" name="nama_mk"
                                value="{{ old('nama_mk') }}" placeholder="Isikan Nama Mata Kuliah">


                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="dosen" class="form-label">Nama Dosen</label>
                            <input type="text" class="form-control" required id="dosen" name="dosen"
                                value="{{ old('dosen') }}" placeholder="Isikan Nama Dosen">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="jumlah_soal" class="form-label">Jumlah Soal</label>
                            <input type="text" class="form-control" required id="jumlah_soal" name="jumlah_soal"
                                value="{{ old('jumlah_soal') }}" placeholder="Isikan Jumlah Soal yang Ada">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <input type="text" class="form-control" required id="keterangan" name="keterangan"
                                value="{{ old('keterangan') }}" placeholder="Isikan keterangan dari soal">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Tambah Data!</button>
                </form>


            </div>
        </div>
    </div>

@endsection
