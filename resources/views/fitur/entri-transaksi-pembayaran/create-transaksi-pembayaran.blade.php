
@extends('layouts.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Create Transaksi Pembayaran</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action=" {{route('simpan-transaksi-pembayaran')}} " method="POST">
                    {{ csrf_field() }}
                    <div class="card-body">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="ID Petugas" name="id_petugas">
                        <input type="text" class="form-control mt-3" placeholder="ID Siswa" name="id_siswa">
                        <input type="text" class="form-control mt-3" placeholder="ID Kelas" name="id_kelas">
                        <input type="text" class="form-control mt-3" placeholder="Tanggal Bayar (d/m/Y)" name="tgl_bayar">
                        <input type="text" class="form-control mt-3" placeholder="ID Spp" name="id_spp">
                        <input type="text" class="form-control mt-3" placeholder="Jumlah Bayar" name="jumlah_bayar">
                    </div>
                    <!-- /.card-body -->
    
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                  </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
@endsection