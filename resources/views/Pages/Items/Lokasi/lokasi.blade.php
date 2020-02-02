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
              <li class="breadcrumb-item active">Daftar Lokasi</li>
            </ol>
          </div>
        </div>
        <hr class="solid">
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <a href="/pages/items/lokasi/tambah" class="btn btn-block btn-sm btn-primary col-1"><i class="fas fa-plus-circle">&nbsp;</i>Tambah</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Kode Lokasi</th>
                  <th>Nama Lokasi</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th>Act</th>
                </tr>
                </tr>
                </thead>
                <tbody>
                @foreach ($lokasi as $item)                   
                <tr>
                  <td>{!! $item->id !!}</td>
                  <td>{!! $item->nama_lokasi !!}</td>
                  @if ($item->created_at == "")
                    <td>{{ "-" }}</td>
                  @else
                    <td>{!! $item->created_at !!}</td>
                  @endif
                  @if ($item->updated_at == "")
                    <td>{{ "-" }}</td>
                  @else
                    <td>{!! $item->updated_at !!}</td>
                  @endif
                  <td width="132px">
                    <center>
                      <a class="btn btn-info btn-sm col-12 d-inline" href="/pages/items/lokasi/edit/{{$item->id}}"><i class="fas fa-pencil-alt"></i> Edit</a>
                      <a class="btn btn-danger btn-sm col-12 d-inline" href="/pages/items/lokasi/delete/{{$item->id}}"><i class="fas fa-trash"></i> Hapus</a>
                    </center>
                    </td>
                </tr>
                @endforeach
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection
