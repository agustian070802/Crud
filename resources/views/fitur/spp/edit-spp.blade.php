@extends('layouts.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Edit SPP</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{route('update-spp', $sppedit->id)}}" method="POST">
                    {{ csrf_field() }}
                    <div class="card-body">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Kode Spp" name="nisn" value="{{$sppedit->id}}">
                        <input type="text" class="form-control mt-3" placeholder="Nomor Spp" name="nis" value="{{$sppedit->no_spp}}">
                        <input type="text" class="form-control mt-3" placeholder="Tahun" name="nama" value="{{$sppedit->tahun}}">
                        <input type="text" class="form-control mt-3" placeholder="Nominal" name="id_kelas" value="{{$sppedit->nominal}}">
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