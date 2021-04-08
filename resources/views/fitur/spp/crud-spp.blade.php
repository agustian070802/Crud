@extends('layouts.master')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h1 class="card-title"><strong>Tabel SPP</strong></h1>
            <div class="card-tools px-3">
              <a href=" {{route('create-siswa')}} " class="btn btn-success">
                <i class="fas fa-plus-square" style="text-align: center"></i>
              </a>
            </div>
            <div class="card-tools">
              <form action="{{ route('crud-siswa-search') }}" method="GET">             
                  <input type="text" name="search" class="form-control" placeholder="Search">
              </form>
              
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0" style="height: 350px;">
            <table class="table table-head-fixed text-nowrap">
              <thead>
                <tr>
                  <th>Kode Spp</th>
                  <th>Nomor Spp</th>
                  <th>Tahun</th>
                  <th>Nominal</th>
                  <th style="text-align: center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($spp as $item)
                <tr>
                  <td> {{$item->id}} </td>
                  <td> {{$item->no_spp}} </td>
                  <td> {{$item->tahun}} </td>
                  <td> {{$item->nominal}} </td>
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
        

