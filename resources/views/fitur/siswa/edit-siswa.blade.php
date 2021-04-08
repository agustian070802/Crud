@extends('layouts.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Edit Siswa</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{route('update-siswa', $siswaedit->id)}}" method="POST">
                    {{ csrf_field() }}
                    <div class="card-body">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nisn" name="nisn" value="{{$siswaedit->nisn}}">
                        <input type="text" class="form-control mt-3" placeholder="Nis" name="nis" value="{{$siswaedit->nis}}">
                        <input type="text" class="form-control mt-3" placeholder="Nama" name="nama" value="{{$siswaedit->nama}}">
                        <input type="text" class="form-control mt-3" placeholder="Kode Kelas" name="id_kelas" value="{{$siswaedit->id_kelas}}">
                        <input type="text" class="form-control mt-3" placeholder="Alamat" name="alamat" value="{{$siswaedit->alamat}}">
                        <input type="text" class="form-control mt-3" placeholder="Kode Spp" name="id_spp" value="{{$siswaedit->id_spp}}">
                        <input type="text" class="form-control mt-3" placeholder="No. Telp" name="no_telp" value="{{$siswaedit->no_telp}}">
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