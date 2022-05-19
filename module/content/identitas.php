        <div class="alert alert-danger">
          <h5><i class="icon fas fa-ban"></i> Perhatian!</h5>
          Halaman ini hanya sebatas tampilan, belum bisa dilakukan proses CRUD<br>
          tetapi project aplikasi yang anda buat wajib sampai fitur2nya berfungsi tidak hanya sekedar tampilan atau dengan kata lain bisa sampai CRUD.
        </div>
        
<?php
	switch(@$_GET['aksi']) {
		
		default:
?>
        <div class="row">
          <div class="col-lg-12">

           <div class="card card-widget widget-user">
              <div class="widget-user-header text-white"
                   style="background: url('dist/img/puncak.jpg') center center;">
                <h3 class="widget-user-username text-right">Desa Cirahayu</h3>
                <h5 class="widget-user-desc text-right">Kecamatan Luragung</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle" src="dist/img/logo.png" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">3.274</h5>
                      <span class="description-text">Jumlah Penduduk</span>
                    </div>
                    <!-- /.description-block -->
                  </div>

                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">22,6263 KM</h5>
                      <span class="description-text">Luas Wilayah</span>
                    </div>
                    <!-- /.description-block -->
                  </div>

                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">-7.0125814, 108.6096858</h5>
                      <span class="description-text">Koordinat</span>
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
			<div class="col-md-4">
			  <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="dist/img/avatar5.png"
                       alt="Kepala Desa">
                </div>

                <h3 class="profile-username text-center">Supyana</h3>

                <p class="text-muted text-center">Kepala Desa</p>

                <ul class="list-group list-group-unbordered mb-3">
                </ul>

                <a href="https://wa.me/6281221473049" class="btn btn-primary btn-block"><b>081221473049</b></a>
              </div>
			  </div>
			</div>
			
			<div class="col-md-8">

				<div class="row">
				  
				  <div class="col-md-6">
					<div class="info-box">
					  <span class="info-box-icon bg-info"><i class="fa fa-envelope"></i></span>
					  <div class="info-box-content">
						<span class="info-box-text">Email</span>
						<span class="info-box-number">cirahayu@kuningankab.go.id</span>
					  </div>
					</div>
				  </div>

				  <div class="col-md-6">
					<div class="info-box">
					  <span class="info-box-icon bg-info"><i class="fa fa-globe"></i></span>
					  <div class="info-box-content">
						<span class="info-box-text">Situs Web</span>
						<span class="info-box-number">www.desa-cirahayu.kuningankab.go.id</span>
					  </div>
					</div>
				  </div>

				  <div class="col-md-6">
					<div class="info-box">
					  <span class="info-box-icon bg-success"><i class="fa fa-home"></i></span>
					  <div class="info-box-content">
						<span class="info-box-text">Jumlah Rumah</span>
						<span class="info-box-number">1.000</span>
					  </div>
					</div>
				  </div>


				  <div class="col-md-6">
					<div class="info-box">
					  <span class="info-box-icon bg-success"><i class="fa fa-home"></i></span>
					  <div class="info-box-content">
						<span class="info-box-text">Total Rutilahu</span>
						<span class="info-box-number">110</span>
					  </div>
					</div>
				  </div>
				  
				  <div class="col-md-6">
					<div class="info-box">
					  <span class="info-box-icon bg-success"><i class="fa fa-home"></i></span>
					  <div class="info-box-content">
						<span class="info-box-text">Rutilahu Dalam Penyelesaian</span>
						<span class="info-box-number">40</span>
					  </div>
					</div>
				  </div>

				  <div class="col-md-6">
					<div class="info-box">
					  <span class="info-box-icon bg-success"><i class="fa fa-home"></i></span>
					  <div class="info-box-content">
						<span class="info-box-text">Rutilahu Sudah Penyelesaian</span>
						<span class="info-box-number">10</span>
					  </div>
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
		
		
		<button type="button" class="btn btn-block btn-sm btn-outline-warning mb-2" data-toggle="modal" data-target="#edit">
		<i class="fas fa-edit"></i> Edit</button>
				
					<div class="modal fade" id="edit">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Edit</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form role="form" method="post" action="/update/profil/biodata" enctype="multipart/form-data">
										<div class="form-group">
											<p>
											<label>Cover/Background Desa</label>
											<input name="file" type="file" class="form-control" accept=".png,.jpg,.jpeg">
											</p>

											<p>
											<label>Logo Desa</label>
											<input name="file" type="file" class="form-control" accept=".png,.jpg,.jpeg">
											</p>

											<p>
											<label>Foto Kepala Desa</label>
											<input name="file" type="file" class="form-control" accept=".png,.jpg,.jpeg">
											</p>

											<p>
											<label>Nama Kepala Desa<span class="text-danger"> *</span></label>
											<input name="name" type="text" class="form-control" placeholder="Silakan diisi" value="Supyana" required>
											</p>

											<p>
											<label>Nomor Handphone Kepala Desa<span class="text-danger"> *</span></label>
											<input name="hp" type="text" class="form-control" value="081221473049" required>
											</p>

											<p>
											<label>Koordinat Latitude<span class="text-danger"> *</span></label>
											<input name="lat" type="text" class="form-control" placeholder="Silakan diisi" value="-7.0125814" required>
											</p>

											<p>
											<label>Koordinat Longitude<span class="text-danger"> *</span></label>
											<input name="long" type="text" class="form-control" placeholder="Silakan diisi" value="108.6096858" required>
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

											<p>
											<label>Email<span class="text-danger"> *</span></label>
											<input name="lat" type="email" class="form-control" placeholder="Silakan diisi" value="cirahayu@kuningankab.go.id" required>
											</p>

											<p>
											<label>Situs Web<span class="text-danger"> *</span></label>
											<input name="lat" type="url" class="form-control" placeholder="Silakan diisi" value="www.desa-cirahayu.kuningankab.go.id" required>
											</p>


										</div>
								</div>
								<div class="modal-footer justify-content-between">
									<input type="submit" class="btn btn-primary" value="Simpan">
								</div>
								</form>
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
          data: [1000,110],
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
          data: [110,40,10],
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
          data: [110,40,10],
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
											<label>Cover/Background Desa</label>
											<input name="file" type="file" class="form-control" accept=".png,.jpg,.jpeg">
											</p>

											<p>
											<label>Logo Desa</label>
											<input name="file" type="file" class="form-control" accept=".png,.jpg,.jpeg">
											</p>

											<p>
											<label>Foto Kepala Desa</label>
											<input name="file" type="file" class="form-control" accept=".png,.jpg,.jpeg">
											</p>

											<p>
											<label>Nama Kepala Desa<span class="text-danger"> *</span></label>
											<input name="name" type="text" class="form-control" placeholder="Silakan diisi" value="Supyana" required>
											</p>

											<p>
											<label>Nomor Handphone Kepala Desa<span class="text-danger"> *</span></label>
											<input name="hp" type="text" class="form-control" value="081221473049" required>
											</p>

											<p>
											<label>Koordinat Latitude<span class="text-danger"> *</span></label>
											<input name="lat" type="text" class="form-control" placeholder="Silakan diisi" value="-7.0125814" required>
											</p>

											<p>
											<label>Koordinat Longitude<span class="text-danger"> *</span></label>
											<input name="long" type="text" class="form-control" placeholder="Silakan diisi" value="108.6096858" required>
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

											<p>
											<label>Email<span class="text-danger"> *</span></label>
											<input name="lat" type="email" class="form-control" placeholder="Silakan diisi" value="cirahayu@kuningankab.go.id" required>
											</p>

											<p>
											<label>Situs Web<span class="text-danger"> *</span></label>
											<input name="lat" type="url" class="form-control" placeholder="Silakan diisi" value="www.desa-cirahayu.kuningankab.go.id" required>
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