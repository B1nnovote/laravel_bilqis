@extends('layouts.app')
@section('content')
<div class="conteiner">
 <div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">Daftar Nilai
                <a href="{{route('nilai.create')}}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
            </div>
            <div class="card-body">
                <div class="table">
                    <table class="table table-responsive">
                        <thead></thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th> 
                        <th>Kelas</th>  
                        <th>Mapel</th> 
                        <th>Nilai</th> 
                        <th>Aksi</th>
                        <tbody>
                            @foreach ($nilai as $data)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$data->nama}}</td>
                                    <td>{{$data->jenis_kelamin}}</td>
                                    <td>{{$data->kelas}}</td>
                                    <td>{{$data->mapel}}</td>
                                    <td>{{$data->nilai}}</td>
                                     <td>
                                <form action="{{route('nilai.destroy',$data->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a href="{{route('nilai.edit',$data->id)}}"
                                        class="btn btn-sm btn-success">Edit</a> |
                                    <a href="{{route('nilai.show',$data->id)}}"
                                        class="btn btn-sm btn-warning">Show</a>|
                                    <button type="submit" class="btn btn-danger">Hapus</button>           
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
</div>
@endsection