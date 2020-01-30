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
                    <h1>Checklist</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/pages/items/checklist">Checklist</a></li>
                        <li class="breadcrumb-item active">Cek Kondisi</li>
                    </ol>
                </div>
            </div>
            <hr class="solid">
        </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Input Kode Checklist/klik tombol Scan QR untuk melakukan Checklist</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{ url('/pages/items/layanan/insert') }}">
                            @csrf
                        <form role="form">
                            <div class="card-body col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kode Checklist</label>
                                    <input id="nama_layanan" type="text" class="form-control @error('nama_layanan') is-invalid @enderror" name="nama_layanan" value="{{ old('nama_layanan') }}" placeholder="Masukkan kode checklist" required autocomplete="nama_layanan" autofocus>
                                    @if ($errors->has("nama_layanan"))
                                            <div class="alert alert-danger" role="alert" style="margin-top: 5px;padding-top: 5px;padding-bottom: 5px;padding-left: 13px;padding-right: 5px;margin-right: 330px;" >
                                                {{ ($errors->has("nama_layanan"))? $errors->first("nama_layanan"):""}}
                                            </div>
                                    @endif
                                </div>
                </div>
                <!-- /.card-body -->
                
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Check</button>
                    <a href="/pages/items/layanan" class="btn btn-success"><i class="fas fa-qrcode"> </i> Scan QR</a>
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