@extends('layouts.master')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h1 class="card-title"><strong>Tabel Transaksi Pembayaran</strong></h1>
            <div class="card-tools px-3">
              <a href=" {{route('create-transaksi-pembayaran')}} " class="btn btn-success">
                <i class="fas fa-plus-square" style="text-align: center"></i>
              </a>
            </div>
            <div class="card-tools">
              <form action="{{ route('crud-transaksi-pembayaran-search') }}" method="GET">             
                  <input type="text" name="search" class="form-control" placeholder="Search">
              </form>
              
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0" style="height: 350px;">
            <table class="table table-head-fixed text-nowrap">
              <thead>
                <tr>
                  <th>ID Pembayaran</th>
                  <th>Nama Petugas</th>
                  <th>Nama Siswa</th>
                  <th>Nisn</th>
                  <th>Kelas</th>
                  <th>Tanggal Dibayar</th>
                  <th>ID Spp</th>
                  <th>Jumlah Bayar</th>
                  <th style="text-align: center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($tpembayaran as $item)
                <tr>
                  <td> {{$item->id}} </td>
                  <td> {{$item->users->name}} </td>
                  <td> {{$item->siswa->nama}} </td>
                  <td> {{$item->siswa->nisn}} </td>
                  <td> {{$item->kelas->nama_kelas}} </td>
                  <td> {{$item->tgl_bayar->format('d/m/Y')}} </td>
                  <td> {{$item->spps->id}} </td>
                  <td>Rp. {{$item->jumlah_bayar}} </td>
                  <td style="text-align: center">
                    <a href=" {{ route('edit-transaksi-pembayaran', $item->id)}} " class="btn btn-primary">
                      <i class="fas fa-edit"></i>
                    </a> | 
                    <a href=" {{ route('destroy-transaksi-pembayaran', $item->id)}} " class="btn btn-danger">
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
        

