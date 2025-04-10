@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ubah Data Obat</div>

                <div class="card-body">
                  <form action="{{route('obat.update',$obat->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-2">
                                <label for="">Nama Obat</label>
                                <input type="text" class="form-control" name="nama_obat"
                                 value="{{$obat->nama_obat}}" required>
                            </div>
                             <div class="mb-3">
                                <label for="">Jenis Obat</label>
                                <input type="text" class="form-control" name="jenis_obat" 
                                 value="{{$obat->jenis_obat}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="">Tanggal Kadaluarsa</label>
                                <input type="date" class="form-control" name="tgl_kadaluarsa" 
                                 value="{{$obat->tgl_kadaluarsa}}" required>
                            </div>
                            <div class="mb-3">                              
                                <label for="">Harga</label>
                                <input type="text" class="form-control" name="harga" 
                                 value="Rp.{{ number_format($obat->harga, 0, ',', '.') }}" required>
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
