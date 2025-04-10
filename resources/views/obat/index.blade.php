@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Data Obat
                <a href="{{route('obat.create')}}" class="btn btn-primary" style="float:right">Tambah</a>
                </div>
                <div class="card-body">
                    @if (@session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    
                 <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Obat</th>
                            <th scope="col">Jenis Obat</th>
                            <th scope="col">Tanggal Kadaluarsa</th>
                            <th scope="col">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($obat as $data)
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{$data->nama_obat}}</td>
                            <td>{{$data->jenis_obat}}</td>
                            <td>{{$data->tgl_kadaluarsa}}</td>
                            <td>Rp.{{ number_format($data->harga, 0, ',', '.') }}</td>
                            <td>
                                <a href="{{ route('obat.edit',$data->id )}}" class="btn btn-success mb-3">Edit</a>
                                <a href="{{ route('obat.show',$data->id )}}" class="btn btn-warning mb-3">Show</a>
                                  <form action="{{route('obat.destroy',$data->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                <button type="submit" class="btn btn-danger mb-3" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>           
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                 </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
