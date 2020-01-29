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
                        <li class="breadcrumb-item"><a href="/pages/items/perangkat">Perangkat</a></li>
                        <li class="breadcrumb-item active">Tambah Perangkat</li>
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
                            <h3 class="card-title">Tambah Perangkat</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{ url('/pages/items/perangkat/insert') }}">
                            @csrf
                        <form role="form">
                            <div class="card-body col-md-6">
                                <div class="form-group">
                                    <label>Nama Layanan</label>
                                        <select class="form-control" name="nama_layanan">
                                            <option>--Piilih Layanan--</option>
                                            @foreach ($layanan as $layanan)
                                            <option value="{{ $layanan->id }}">{{ $layanan->nama_layanan }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has("layanans_id"))
                                        <div class="alert alert-danger" role="alert" style="margin-top: 5px;padding-top: 5px;padding-bottom: 5px;padding-left: 13px;padding-right: 5px;margin-right: 330px;" >
                                            {{ ($errors->has("layanans_id"))? $errors->first("layanans_id"):""}}
                                        </div>
                                        @endif
                                </div>
                                <div class="form-group">
                                    <label>Tipe Objek</label>
                                        <select class="form-control" name="tipe_objeks">
                                            <option>--Piilih Objek--</option>
                                            @foreach ($objek as $objek)
                                            <option value="{{ $objek->id }}">{{ $objek->tipe_objeks }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has("objeks_id"))
                                        <div class="alert alert-danger" role="alert" style="margin-top: 5px;padding-top: 5px;padding-bottom: 5px;padding-left: 13px;padding-right: 5px;margin-right: 330px;" >
                                            {{ ($errors->has("objeks_id"))? $errors->first("objeks_id"):""}}
                                        </div>
                                        @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Perangkat</label>
                                    <input id="nama_perangkats" type="text" class="form-control @error('tipe_objeks') is-invalid @enderror"name="nama_perangkats" value="{{ old('nama_perangkats') }}" placeholder="Masukkan nama perangkat" required autocomplete="nama_perangkats" autofocus>
                                </div>
                        </div>
                <!-- /.card-body -->
                
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="/pages/items/perangkat" class="btn btn-primary">Kembali</a>
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