@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h3>Data Pengguna</h3>
                </div>

                <div class="card-body">
                   <div class="mb-2">
                                <label class="mb-3" for=""><b>Nama Pengguna</b></label>
                                <input type="text" class="form-control" name="nama" value="{{$pengguna->nama}}" disabled>
                            </div>
                    <a href="{{ route('pengguna.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
