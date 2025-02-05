@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row-justify-content-center">
            <div clas="col">
                <div class="card">
                    <div class="card-header">Tambah Nilai</div>
                    <div class="card-body">
                        <form action="{{route('nilai.update',$nilai->id)}}" method="POST">
                            @csrf
                            @method('put')
                            <div class="mb-2">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" name="nama" required>
                            </div>
                            <div class="mb-2">
                                <label for="">Jenis Kelamin</label>
                                <select class="form-control" name="jenis_kelamin" id="" required>
                                    <option value="laki-laki" {{$nilai->jenis_kelamin == 
                                        "laki-laki"?'selected':''}}>
                                        Laki-laki</option>
                                    <option value="perempuan" {{$nilai->jenis_kelamin == 
                                        "perempuan"?'selected':''}}>
                                        Perempuan</option>
                                </select>
                                <div class="mb-2">
                                <label for="">Kelas</label>
                                <input type="text" class="form-control" name="kelas" value="{{$nilai->kelas}}" required>
                            </div>
                            <div class="mb-2">
                                <label for="">Mapel</label>
                                <input type="text" class="form-control" name="mapel" value="{{$nilai->mapel}}" required>
                            </div>
                            <div class="mb-2">
                                <label for="">Nilai</label>
                                <input type="text" class="form-control" name="nilai" value="{{$nilai->nilai}}" required>
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