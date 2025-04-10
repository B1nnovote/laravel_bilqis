@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ubah Data Obat</div>

                <div class="card-body">
                  <form action="{{route('pembeli.update',$pembeli->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-2">
                                <label for="">Nama Pembeli</label>
                                <input type="text" class="form-control" name="nama_pembeli"
                                 value="{{$pembeli->nama_pembeli}}" required>
                            </div>
                              <div class="mb-3">
                                <label for="">Jenis Kelamin</label>
                                <select class="form-control" name="jenis_kelamin" id="" required>
                                    <option value="laki-laki" {{$pembeli->jenis_kelamin == 
                                        "laki-laki"?'selected':''}}>
                                        Laki-laki</option>
                                    <option value="perempuan" {{$pembeli->jenis_kelamin == 
                                        "perempuan"?'selected':''}}>
                                        Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="">Telepon</label>
                                <input type="text" class="form-control" name="telepon" 
                                 value="{{$pembeli->telepon}}" required>
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
