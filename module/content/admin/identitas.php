
        
<?php
	switch(@$_GET['aksi']) {
		default:
?>
        <div class="row">
          <div class="col-lg-12">

           <div class="card card-widget widget-user">
              <div class="widget-user-header text-white"
                   style="background: url('dist/img/kuningan.jpg') center center;">
                <h3 class="widget-user-username text-right">Kabupaten Kuningan</h3>
                <h5 class="widget-user-desc text-right">Jawa Barat</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle" src="dist/img/logo.png" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">1.055.000</h5>
                      <span class="description-text">Jumlah Penduduk</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">361</h5>
                      <span class="description-text">Jumlah Desa</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">1.194 Km</h5>
                      <span class="description-text">Luas Wilayah</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->

          </div>
        </div>
		
		
		
		
        <div class="row">

				  <div class="col-md-3">
					<div class="info-box">
					  <span class="info-box-icon bg-info"><i class="fa fa-home"></i></span>
					  <div class="info-box-content">
						<span class="info-box-text">Jumlah Rumah</span>
						<span class="info-box-number">200.000</span>
					  </div>
					</div>
				  </div>


				  <div class="col-md-3">
					<div class="info-box">
					  <span class="info-box-icon bg-secondary"><i class="fa fa-home"></i></span>
					  <div class="info-box-content">
						<span class="info-box-text">Total Rutilahu</span>
						<span class="info-box-number">9.100</span>
					  </div>
					</div>
				  </div>
				  
				  <div class="col-md-3">
					<div class="info-box">
					  <span class="info-box-icon bg-warning"><i class="fa fa-home"></i></span>
					  <div class="info-box-content">
						<span class="info-box-text">Rutilahu Dalam Penyelesaian</span>
						<span class="info-box-number">800</span>
					  </div>
					</div>
				  </div>

				  <div class="col-md-3">
					<div class="info-box">
					  <span class="info-box-icon bg-success"><i class="fa fa-home"></i></span>
					  <div class="info-box-content">
						<span class="info-box-text">Rutilahu Sudah Penyelesaian</span>
						<span class="info-box-number">2.400</span>
					  </div>
					</div>
				  </div>

          <div class="col-md-12">
		    <div class="card">
                <div class="progress">
                  <div class="progress-bar bg-primary progress-bar-striped" role="progressbar"
                       aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 26%">
                    26% Penyelesaian
                  </div>
                </div>
			</div>
		  </div>
		  
		</div>
		
		
		<div class="row">
			<div class="col-md-4">
				<div class="card card-info card-outline">
				  <div class="card-header">
					<h3 class="card-title">Perbandingan Rumah</h3>

				  </div>
				  <div class="card-body">
					<canvas id="rumah" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
				  </div>
				  <!-- /.card-body -->
				</div>
			</div>
			<div class="col-md-4">
				<div class="card card-info card-outline">
				  <div class="card-header">
					<h3 class="card-title">Perbandingan Penyelesaian</h3>

				  </div>
				  <div class="card-body">
					<canvas id="rutilahu" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
				  </div>
				  <!-- /.card-body -->
				</div>
			</div>
			<div class="col-md-4">
				<div class="card card-info card-outline">
				  <div class="card-header">
					<h3 class="card-title">Kondisi Kerusakan Rutilahu</h3>

				  </div>
				  <div class="card-body">
					<canvas id="kondisi" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
				  </div>
				  <!-- /.card-body -->
				</div>
			</div>
		</div>
		
<script src="plugins/chart.js/Chart.min.js"></script>
<script>
  $(function () {
    var rumahCanvas = $('#rumah').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'Total Rumah', 
          'Total Rutilahu',
      ],
      datasets: [
        {
          data: [200000,9100],
          backgroundColor : ['#17a2b8', '#6c757d'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    var rumah = new Chart(rumahCanvas, {
      type: 'pie',
      data: donutData,
      options: donutOptions      
    })
  })

  $(function () {
    var rutilahuCanvas = $('#rutilahu').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'Total Rutilahu',
          'Proses',
          'Sudah',
      ],
      datasets: [
        {
          data: [9100,800,2400],
          backgroundColor : ['#6c757d', '#ffc107', '#28a745'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    var rutilahu = new Chart(rutilahuCanvas, {
      type: 'pie',
      data: donutData,
      options: donutOptions      
    })
  })

  $(function () {
    var kondisiCanvas = $('#kondisi').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'Ringan',
          'Sedang',
          'Berat',
      ],
      datasets: [
        {
          data: [3000,2100,4000],
          backgroundColor : ['#28a745', '#ffc107', '#dc3545'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    var kondisi = new Chart(kondisiCanvas, {
      type: 'pie',
      data: donutData,
      options: donutOptions      
    })
  })

</script>

<?php

	break;
	
	case 'edit':
?>
					<div class="card">
								<div class="card-header">
									<h5 class="modal-title">Edit</h5>
								</div>
								<div class="card-body">
									<form role="form" method="post" action="/update/profil/biodata" enctype="multipart/form-data">
										<div class="form-group">
											<p>
											<label>Cover/Background</label>
											<input name="file" type="file" class="form-control" accept=".png,.jpg,.jpeg">
											</p>

											<p>
											<label>Logo</label>
											<input name="file" type="file" class="form-control" accept=".png,.jpg,.jpeg">
											</p>

											<p>
											<label>Jumlah Penduduk<span class="text-danger"> *</span></label>
											<input name="lat" type="number" class="form-control" placeholder="Silakan diisi" value="3274" required>
											</p>

											<p>
											<label>Jumlah Rumah<span class="text-danger"> *</span></label>
											<input name="lat" type="number" class="form-control" placeholder="Silakan diisi" value="1000" required>
											</p>
											
											<p>
											<label>Luas Wilayah<span class="text-danger"> *</span></label>
											<input name="lat" type="text" class="form-control" placeholder="Silakan diisi" value="22,6263" required>
											</p>

										</div>
								</div>
								<div class="modal-footer justify-content-between">
									<input type="submit" class="btn btn-primary" value="Simpan">
								</div>
								</form>
			  	    </div>

<?php
	
	break;
	
	}
?>