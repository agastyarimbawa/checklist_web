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
              <li class="breadcrumb-item"><a href="/pages/items/alat">Alat</a></li>
              <li class="breadcrumb-item active">Daftar Alat</li>
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
              <a href="/pages/items/alat/tambah" class="btn btn-block btn-sm btn-primary col-1"><i class="fas fa-plus-circle">&nbsp;</i>Tambah</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Kode Alat</th>
                  <th>Deskripsi Perangkat</th>
                  <th>Nama Layanan</th>
                  <th>Object Type</th>
                  <th>Nama Perangkat</th>
                  <th>Nama Lokasi</th>
                  {{-- <th>Merek</th>
                  <th>Model</th>
                  <th>Serial Number</th>
                  <th>Year Construct</th>
                  <th>Status</th> --}}
                  {{-- <th>Created At</th> --}}
                  {{-- <th>Updated At</th> --}}
                  <th>Act</th>
                </tr>
                </tr>
                </thead>
                <tbody>
                @foreach ($alat as $item)                   
                <tr>
                  <td>{!! $item->id !!}</td>
                  <td>{!! $item->deskripsi_perangkat !!}</td>
                  <td>{!! $item->nama_layanan !!}</td>
                  <td>{!! $item->tipe_objeks !!}</td>
                  <td>{!! $item->nama_perangkats !!}</td>
                  <td>{!! $item->nama_lokasi !!}</td>
                  {{-- <td>{!! $item->merek !!}</td>
                  <td>{!! $item->model !!}</td>
                  <td>{!! $item->serial_number !!}</td>
                  <td>{!! $item->year_construct !!}</td>
                  <td>{!! $item->status !!}</td> --}}
                  {{-- <td>{!! $item->created_at->format('d/m/Y') !!}</td> --}}
                  {{-- <td>{!! $item->updated_at->format('d/m/Y') !!}</td> --}}
                  <td width="132px">
                    <div class="">
                      <a class="btn btn-info btn-sm col-12 d-inline" href="/pages/items/alat/edit/{{$item->id}}"><i class="fas fa-pencil-alt"></i> Edit</a>
                      <a class="btn btn-danger btn-sm col-12 d-inline" href="/pages/items/alat/delete/{{$item->id}}"><i class="fas fa-trash"></i> Hapus</a>
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
