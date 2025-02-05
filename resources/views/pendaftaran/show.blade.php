@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Lihat Data Pendaftaran</div>

                <div class="card-body">
                  <form action="{{route('pendaftaran.update',$pendaftaran->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-2">
                                <label for="">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_lengkap" value="{{$pendaftaran->nama_lengkap}}" disabled>
                            </div>
                             <div class="mb-2">
                                <label for="">Jenis Kelamin</label><br>
                               <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-laki" disabled>Laki-laki
                               <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan" disabled>Perempuan
                            </div>
                                <div class="mb-2">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir" value="{{$pendaftaran->tanggal_lahir}}" disabled>
                            </div>
                            <div class="mb-2">
                                 <label for="">Agama</label>
                                <select class="form-control" name="agama" id="" disabled>
                                <option value="">Pilih Agama</option>
                                    <option value="islam">Islam</option>
                                    <option value="protestan">Protestan</option>
                                    <option value="katolik">Katolik</option>
                                    <option value="konghuchu">Konghuchu</option>
                                    <option value="budha">Budha</option>
                                    <option value="hindu">Hindu</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="">Asal Sekolah</label>
                                <input type="text" class="form-control" name="asal_sekolah" value="{{$pendaftaran->asal_sekolah}}" disabled>
                            </div>
                            <div class="mb-2">
                                <a href="{{ route('pendaftaran.index')}}" class="btn btn-warning">Kembali</a>
                            </div>
                         </div>
                     </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
