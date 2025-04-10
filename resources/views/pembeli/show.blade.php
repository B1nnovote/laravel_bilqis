@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h3>Data Kategori</h3>
                </div>

                <div class="card-body">
                   <div class="mb-2">
                                <label class="mb-3" for=""><b>Nama Pembeli</b></label>
                                <input type="text" class="form-control" name="nama_obat"
                                 value="{{$pembeli->nama_pembeli}}" disabled>
                            </div>
                            <div class="mb-2">
                                <label for="">Jenis Kelamin</label>
                               <input type="text" class="form-control" name="jenis_kelamin"
                                value="{{$pembeli->jenis_kelamin}}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="">Telepon</label>
                                <input type="date" class="form-control" name="telepon"
                                  value="{{$pembeli->telepon}}" disabled>
                            </div>
                    <a href="{{ route('pembeli.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
