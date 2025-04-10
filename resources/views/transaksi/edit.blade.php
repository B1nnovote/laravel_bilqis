@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Edit Data Transaksi</div>
                <div class="card-body">
                    <form action="{{ route('transaksi.update', $transaksi->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group mb-3">
                            <label for="name">Tanggal Transaksi</label>
                            <input type="date" class="form-control" name="tgl_transaksi"
                             value="{{ $transaksi->tgl_transaksi }}">
                        </div>   
                         <div class="form-group mb-3">
                            <label for="name">Jumlah</label>
                            <input type="text" class="form-control" name="jumlah" 
                            value="{{ $transaksi->jumlah }}">
                        </div>  
                          <div class="form-group mb-3">
                                <label>Id Obat</label>
                                <select class="form-control" name="id_obat">
                                    @foreach($obat as $data)
                                    <option value="{{$data->id}}" {{$data->id == $transaksi->id_obat ? 'selected' : ''}}>
                                        {{$data->nama_obat}}</option>
                                   @endforeach
                                </select>
                            </div> 
                            <div class="form-group mb-3">
                                <label>Id Pembeli</label>
                                <select class="form-control" name="id_pembeli">
                                    @foreach($pembeli as $data)
                                    <option value="{{$data->id}}" {{$data->id == $transaksi->id_pembeli ? 'selected' : ''}}>
                                        {{$data->nama_pembeli}}</option>
                                   @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
