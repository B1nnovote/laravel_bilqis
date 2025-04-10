@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Data Kategori
                <a href="{{route('kategori.create')}}" class="btn btn-primary" style="float:right">Tambah</a>
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
                            <th scope="col">Nama Kategori</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($kategori as $data)
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{$data->nama_kategori}}</td>
                            <td>
                                <a href="{{ route('kategori.edit',$data->id )}}" class="btn btn-success mb-3">Edit</a>
                                <a href="{{ route('kategori.show',$data->id )}}" class="btn btn-warning mb-3">Show</a>
                                  <form action="{{route('kategori.destroy',$data->id)}}" method="POST">
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
