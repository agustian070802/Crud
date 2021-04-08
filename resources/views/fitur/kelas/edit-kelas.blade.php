@extends('layouts.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Edit Kelas</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{route('update-kelas', $kelasedit->id)}}" method="POST">
                    {{ csrf_field() }}
                    <div class="card-body">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Kode Kelas" name="id" value="{{$kelasedit->id}}">
                        <input type="text" class="form-control mt-3" placeholder="Nama Kelas" name="nama_kelas" value="{{$kelasedit->nama_kelas}}">
                        <input type="text" class="form-control mt-3" placeholder="Kompetensi Keahlian" name="kompetensi_keahlian" value="{{$kelasedit->kompetensi_keahlian}}">
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