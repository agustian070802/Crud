@extends('layouts.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Edit Petugas</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{route('update-petugas', $petugasedit->id)}}" method="POST">
                    {{ csrf_field() }}
                    <div class="card-body">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nama" name="name" value="{{$petugasedit->name}}">
                        <input type="text" class="form-control mt-3" placeholder="Level" name="level" value="{{$petugasedit->level}}">
                        <input type="text" class="form-control mt-3" placeholder="Password" name="password" value="{{$petugasedit->password}}">
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