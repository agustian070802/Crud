@extends('layouts.master')
@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-2">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Edit Transaksi</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Edit Transaksi Pembayaran</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{route('update-transaksi-pembayaran', $tpembayaranedit->id)}}" method="POST">
                    {{ csrf_field() }}
                    <div class="card-body">
                      <div class="form-group">
                        <input type="text" class="form-control mt-3" placeholder="ID Kelas" name="id_petugas" value="{{$tpembayaranedit->id_petugas}}">
                        <input type="text" class="form-control mt-3" placeholder="ID Siswa " name="id_siswa" value="{{$tpembayaranedit->id_siswa}}">
                        <input type="text" class="form-control mt-3" placeholder="ID Kelas " name="id_kelas" value="{{$tpembayaranedit->id_kelas}}">
                        <input type="text" class="form-control mt-3" placeholder="Tanggal Bayar (D-M-Y) " name="tgl_bayar" value="{{$tpembayaranedit->tgl_bayar}}">
                        <input type="text" class="form-control mt-3" placeholder="ID Spp " name="id_spp" value="{{$tpembayaranedit->id_spp}}">
                        <input type="text" class="form-control mt-3" placeholder="Jumlah Bayar " name="jumlah_bayar" value="{{$tpembayaranedit->jumlah_bayar}}">
                      </div>
                    </div>
                    
                    <!-- /.card-body -->
    
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                  </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
@endsection