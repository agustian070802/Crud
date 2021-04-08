@extends('layouts.master')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h1 class="card-title"><strong>Tabel History Pembayaran</strong></h1>
            <div class="card-tools">
              <form action="{{ route('histori-pembayaran-search') }}" method="GET">             
                  <input type="text" name="search" class="form-control" placeholder="Masukan Nama siswa Untuk mencari">
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
                  <th>Nisn </th>
                  <th>Kelas</th>
                  <th>Tanggal Dibayar</th>
                  <th>Jumlah Bayar</th>
                  <th>Tunggakan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($hpembayaran as $item)
                <tr>
                  <td> {{$item->id}} </td>
                  <td> {{$item->users->name}} </td>
                  <td> {{$item->siswa->nama}} </td>
                  <td> {{$item->siswa->nisn}} </td>
                  <td> {{$item->kelas->nama_kelas}} </td>
                  <td> {{$item->tgl_bayar->format('d/m/Y')}} </td>
                  <td>Rp. {{$item->jumlah_bayar}} </td>
                  <td>Rp. {{$item->spps->nominal - $item->jumlah_bayar}} </td>
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
        

