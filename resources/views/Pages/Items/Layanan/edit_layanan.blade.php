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
                        <li class="breadcrumb-item"><a href="/pages/items/layanan">Layanan</a></li>
                        <li class="breadcrumb-item active">Edit Layanan</li>
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
                            <h3 class="card-title">Edit Layanan</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @foreach ($layanan as $item)
                        <form method="POST" action="/pages/items/layanan/update/{{$item->id}}">
                            @csrf
                            <form role="form">
                                <div class="card-body col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Layanan</label>
                                        <input id="nama_layanan" type="text" class="form-control @error('nama_layanan') ? ' is-invalid' : '' @enderror" name="nama_layanan" value="{{ $item->nama_layanan }}" required autocomplete="nama_layanan" autofocus>
                                        @if ($errors->has("nama_layanan"))
                                            <div class="alert alert-danger" role="alert" style="margin-top: 5px;padding-top: 5px;padding-bottom: 5px;padding-left: 13px;padding-right: 5px;margin-right: 330px;" >
                                                {{ ($errors->has("nama_layanan"))? $errors->first("nama_layanan"):""}}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="/pages/items/layanan" class="btn btn-primary">Kembali</a>
                                </div>
                            </form>
                        </form>
                        @endforeach
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