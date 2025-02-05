@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row-justify-content-center">
            <div clas="col">
                <div class="card">
                    <div class="card-header">Tambah Nilai</div>
                    <div class="card-body">
                            <div class="mb-2">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{$nilai->nama}}" disabled>
                            </div>
                            <div class="mb-2">
                                <label for="">Jenis Kelamin</label>
                               <input type="text" class="form-control" name="jenis_kelamin" value="{{$nilai->jenis_kelamin}}" disabled>
                                <div class="mb-2">
                                <label for="">Kelas</label>
                                <input type="text" class="form-control" name="kelas" value="{{$nilai->kelas}}" disabled>
                            </div>
                            <div class="mb-2">
                                <label for="">Mapel</label>
                                <input type="text" class="form-control" name="mapel" value="{{$nilai->mapel}}"  disabled>
                            </div>
                            <div class="mb-2">
                                <label for="">Nilai</label>
                                <input type="text" class="form-control" name="nilai" value="{{$nilai->nilai}}"  disabled>
                            </div>
                            <div class="mb-2">
                                <a href="{{route('nilai.index')}}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection