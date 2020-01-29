@extends('template.dashboard')
@section('title', 'Checklist Peralatan')

@section('konten')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Items</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/pages/items/lokasi">Lokasi</a></li>
                        <li class="breadcrumb-item active">Tambah Lokasi</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Lokasi</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{ url('/pages/items/lokasi/insert') }}">
                            @csrf
                        <form role="form">
                            <div class="card-body col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Lokasi</label>
                                    <input id="nama_lokasi" type="text" class="form-control @error('nama_lokasi') is-invalid @enderror" name="nama_lokasi" value="{{ old('nama_lokasi') }}" placeholder="Masukkan nama lokasi" required autocomplete="nama_lokasi" autofocus>
                                    @if ($errors->has("nama_lokasi"))
                                            <div class="alert alert-danger" role="alert" style="margin-top: 5px;padding-top: 5px;padding-bottom: 5px;padding-left: 13px;padding-right: 5px;margin-right: 330px;" >
                                                {{ ($errors->has("nama_lokasi"))? $errors->first("nama_lokasi"):""}}
                                            </div>
                                    @endif
                                </div>
                </div>
                <!-- /.card-body -->
                
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="/pages/items/lokasi" class="btn btn-primary">Kembali</a>
                </div>
            </form>
        </form>
        </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection