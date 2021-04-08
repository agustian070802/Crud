
@extends('layouts.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Create Kelas</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action=" {{route('simpan-kelas')}} " method="POST">
                    {{ csrf_field() }}
                    <div class="card-body">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Kode Kelas" name="id">
                        <input type="text" class="form-control mt-3" placeholder="Nama Kelas" name="nama_kelas">
                        <input type="text" class="form-control mt-3" placeholder="Kompetensi Keahlian" name="kompetensi_keahlian">
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