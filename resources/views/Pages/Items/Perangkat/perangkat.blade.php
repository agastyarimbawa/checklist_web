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
              <li class="breadcrumb-item"><a href="/pages/alat/perangkat">Perangkat</a></li>
              <li class="breadcrumb-item active">Daftar Perangkat</li>
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
              <a href="/pages/items/perangkat/tambah" class="btn btn-block btn-sm btn-primary col-1"><i class="fas fa-plus-circle">&nbsp;</i>Tambah</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Kode Perangkat</th>
                  <th>Nama Layanan</th>
                  <th>Object Type</th>
                  <th>Nama Perangkat</th>
                  {{-- <th>Created At</th> --}}
                  {{-- <th>Updated At</th> --}}
                  <th>Act</th>
                </tr>
                </tr>
                </thead>
                <tbody>
                @foreach ($perangkat as $item)                   
                <tr>
                  <td>{!! $item->id !!}</td>
                  <td>{!! $item->nama_layanan !!}</td>
                  <td>{!! $item->tipe_objeks !!}</td>
                  <td>{!! $item->nama_perangkats !!}</td>
                  {{-- <td>{!! $item->created_at->format('d/m/Y') !!}</td> --}}
                  {{-- <td>{!! $item->updated_at->format('d/m/Y') !!}</td> --}}
                  <td width="103px">
                    <div class="">
                    <a class="btn btn-block btn-sm btn-success col-12 d-inline" href="/pages/items/perangkat/edit/{{$item->id}}">Edit</a>
                    <a class="btn btn-block btn-sm btn-danger col-12 d-inline" href="/pages/items/perangkat/delete/{{$item->id}}">Hapus</a>
                    </div>
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
