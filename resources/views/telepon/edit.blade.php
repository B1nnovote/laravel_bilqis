@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Edit Data Telepon</div>
                <div class="card-body">
                    <form action="{{ route('telepon.update', $telepon->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group mb-3">
                            <label for="name">Nomor</label>
                            <input type="text" class="form-control" name="nomor" value="{{ $telepon->nomor }}">
                        </div>   
                            <div class="form-group">
                                <label>Id Pengguna</label>
                                <select class="form-control" name="id_pengguna">
                                    @foreach($pengguna as $data)
                                    <option value="{{$data->id}}" {{$data->id == $telepon->id_pengguna ? 'selected' : ''}}>{{$data->nama}}</option>
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
