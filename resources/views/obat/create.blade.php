@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Obat</div>

                <div class="card-body">
                  <form action="{{route('obat.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="">Nama Obat</label>
                                <input type="text" class="form-control" name="nama_obat" required>
                            </div>
                             <div class="mb-3">
                                <label for="">Jenis Obat</label>
                                <input type="text" class="form-control" name="jenis_obat" required>
                            </div>
                            <div class="mb-3">
                                <label for="">Tanggal Kadaluarsa</label>
                                <input type="date" class="form-control" name="tgl_kadaluarsa" required>
                            </div>
                            <div class="mb-3">                              
                                <label for="">Harga</label>
                                <input type="text" class="form-control" name="harga" required>
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
