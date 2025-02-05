@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Pendaftaran</div>

                <div class="card-body">
                  <form action="{{route('pendaftaran.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-2">
                                <label for="">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_lengkap" required>
                            </div>
                             <div class="mb-2">
                                <label for="">Jenis Kelamin</label><br>
                               <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-laki">Laki-laki
                               <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan">Perempuan
                            </div>
                                <div class="mb-2">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir" required>
                            </div>
                            <div class="mb-2">
                                 <label for="">Agama</label>
                                <select class="form-control" name="agama" id="" required>
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
                                <input type="text" class="form-control" name="asal_sekolah" required>
                            </div>
                            <div class="mb-2">
                               <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                         </div>
                     </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
