@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row-justify-content-center">
            <div clas="col">
                <div class="card">
                    <div class="card-header">Tambah Produk</div>
                    <div class="card-body">
                            <div class="mb-2">
                                <label for="">Nama Produk</label>
                                <input type="text" class="form-control" name="nama_produk" value="{{$produk->nama_produk}}" disabled>
                            </div>
                            <div class="mb-2">
                                <label for="">Merek</label>
                               <input type="text" class="form-control" name="merek" value="{{$produk->merek}}" disabled>
                                <div class="mb-2">
                                <label for="">Harga</label>
                                <input type="text" class="form-control" name="harga" value="{{$produk->harga}}" disabled>
                            </div>
                            <div class="mb-2">
                                <a href="{{route('produk.index')}}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection