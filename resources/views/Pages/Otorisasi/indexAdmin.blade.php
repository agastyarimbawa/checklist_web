@extends('template.dashboard')
@section('title', 'Checklist Peralatan')

@section('konten')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Checklist</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <hr class="solid">
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <h3>Belum Dihitung</h3>
                <p>Checklist Normal</p>
              </div>
              <div class="icon">
                <i class="fa fa-check-circle"></i>
              </div>
              <a href="#" class="small-box-footer">View Details <i class="fas fa-arrow-circle-right"></i></a>
            </div>

            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>
                <p>Unchecked</p>
              </div>
              <div class="icon">
                <i class="fa fa-spinner"></i>
              </div>
              <a href="#" class="small-box-footer">View Details <i class="fas fa-arrow-circle-right"></i></a>
            </div>

            <div class="small-box bg-gradient-blue">
              <div class="inner">
                <h3>{{ $layanan }}</h3>
                <p>Total Layanan</p>
              </div>
              <div class="icon">
                <i class="fa fa-thumbtack"></i>
              </div>
              <a href="/pages/items/layanan" class="small-box-footer">View Details <i class="fas fa-arrow-circle-right"></i></a>
            </div>

          </div>
          
          <div class="col-lg-3 col-6">
            
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Checklist Bermasalah</p>
              </div>
              <div class="icon">
                <i class="fa fa-times-circle"></i>
              </div>
              <a href="#" class="small-box-footer">View Details <i class="fas fa-arrow-circle-right"></i></a>
            </div>

            <div class="small-box bg-info">
              <div class="inner">
                <h3>65</h3>

                <p>Checklist Items</p>
              </div>
              <div class="icon">
                <i class="fa fa-tasks"></i>
              </div>
              <a href="#" class="small-box-footer">View Details <i class="fas fa-arrow-circle-right"></i></a>
            </div>

            <div class="small-box bg-gray-dark">
              <div class="inner">
                <h3>{{ $alat }}</h3>
                <p>Total Items</p>
              </div>
              <div class="icon">
                <i class="fa fa-tools"></i>
              </div>
              <a href="/pages/items/alat" class="small-box-footer">View Details <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-md-6">
            <!-- DONUT CHART -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Donut Chart</h3>
                
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="donutChart" style="min-height: 250px; height: 370px; max-height: 370px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <div class="container-fluid">
            <div class="row">
              <!-- BAR CHART -->
              <div class="col-12">
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Bar Chart</h3>
    
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart">
                    <canvas id="barChart" style="min-height: 250px; height: 450px; max-height: 450px; max-width: 100%;"></canvas>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div> <!--container-fluid-->
        </div> <!-- row -->

      <!-- /.card -->
    </section>
    <!-- right col -->
    <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->
  
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

</section>