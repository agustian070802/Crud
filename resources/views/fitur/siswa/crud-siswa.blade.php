@extends('layouts.master')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h1 class="card-title"><strong>Tabel Siswa</strong></h1>
            <div class="card-tools px-3">
              <a href=" {{route('create-siswa')}} " class="btn btn-success">
                <i class="fas fa-plus-square" style="text-align: center"></i>
              </a>
            </div>
            <div class="card-tools">
              <form action="{{ route('crud-siswa-search') }}" method="GET">             
                  <input style="width: 250px" type="text" name="search" class="form-control" placeholder="Search">
              </form>
              
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0" style="height: 350px;">
            <table class="table table-head-fixed text-nowrap">
              <thead>
                <tr>
                  <th>Nisn</th>
                  <th>Nis</th>
                  <th>Nama</th>
                  <th>Kelas</th>
                  <th>Alamat</th>
                  <th>No Spp</th>
                  <th>No. Telp</th>
                  <th style="text-align: center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($siswa as $item)
                <tr>
                  <td> {{$item->nisn}} </td>
                  <td> {{$item->nis}} </td>
                  <td> {{$item->nama}} </td>
                  <td> {{$item->kelas->nama_kelas}} </td>
                  <td> {{$item->alamat}} </td>
                  <td> {{$item->spps->no_spp}} </td>
                  <td> {{$item->no_telp}} </td>
                  <td style="text-align: center">
                    <a href=" {{ route('edit-siswa', $item->id)}} " class="btn btn-primary">
                      <i class="fas fa-edit"></i>
                    </a> | 
                    <a href=" {{ route('destroy-siswa', $item->id)}} " class="btn btn-danger">
                      <i class="fas fa-trash-alt"></i>
                    </a>
                  </td>
                </tr>  
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>
@include('sweetalert::alert')
@endsection
        

