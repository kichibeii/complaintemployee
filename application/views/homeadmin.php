<body style="background-color:rgb(255,255,255) !important ">
	<div class="container body" style="top: 0; bottom: 0; left: 0; height: 100%">
		<div class="main_container">
			<div class="right_col" role="main" style="margin-left:0px!importants      <div class="page-title">
				<div class="title-right" style="background-color: rgb(247,247,247)">
				</div>
			</div>
		</div>  
		<?=$this->session->flashdata('notification')?>
		<div class="clearfix"></div>
		<div class="">
			<div class="col-md-12 col-sm-12 col-xs-12" style="background-color:rgb(255,255,255)">
				<h1 style="text-align: center;color: black">Admin Complaint System</h1>

				<!-- konten di sini -->
				<div class="" role="tabpanel" data-example-id="togglable-tabs">

					<!-- tab header -->
					<ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
						<li role="presentation" class="active"><a href="#tab_content1" id="meeting-tab" role="tab" data-toggle="tab" aria-expanded="true">Complaint Baru</a>
						</li>
						<li role="presentation" class=""><a href="#tab_content2" role="tab" id="anggota-tab" data-toggle="tab" aria-expanded="false">Complaint Sedang Ditanggapi</a>
						</li>
						<li role="presentation" class=""><a href="#tab_content3" role="tab" id="allmeeting-tab" data-toggle="tab" aria-expanded="false">Complaint Selesai</a>
						</li>
					</ul>
					<!-- /tab header -->

					<!-- tab content -->
					<div id="myTabContent" class="tab-content">

						<!-- content 1 -->
						<div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="meeting-tab">
							<table class="table table-striped table-bordered dt-responsive nowrap table-bordered jambo_table bulk_action" cellspacing="0" width="100%">
								<thead>
									<tr class="heading">
										<th style="text-align: center">No</th>
										<th style="text-align: center">Tanggal Masuk</th>
										<th style="text-align: center">Keluhan</th>
										<th style="text-align: center">Tempat</th>
										<th style="text-align: center">Nama</th>
										<th style="text-align: center">Divisi</th>
										<th style="text-align: center">Tanggapi?</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$number = 0;
									foreach ($masuk as $key => $value): 
										$number++;
									?>
									<tr>
										<td style="text-align: center"><?=$number?></td>
										<td style="text-align: center"><?=date("d-m-Y",strtotime($value['masuk'])) ?></td>
										<td style="text-align: center"><?=$value['permasalahan'] ?></td>
										<td style="text-align: center"><?=$value['tempat'] ?></td>
										<td style="text-align: center"><?=$value['nama'] ?></td>
										<td style="text-align: center"><?=$value['divisi'] ?></td>
										<td style="text-align: center"><input type="checkbox" name="id_datanya" value=2> Ya</td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
						<input type="submit" style="position:fixed; bottom: 60px; right: 35px ; z-index: 1000!important"" class="btn btn-primary" value="Tanggapi">
					</div>
					<!-- content 1 -->

					<!-- content 2 -->
					<div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="anggota-tab">

						<table class="table table-striped table-bordered dt-responsive nowrap table-bordered jambo_table bulk_action" cellspacing="0" width="100%">
							<thead>
								<tr class="heading">
									<th style="text-align: center">No</th>
									<th style="text-align: center">Tanggal Mulai Ditanggapi</th>
									<th style="text-align: center">Keluhan</th>
									<th style="text-align: center">Tempat</th>
									<th style="text-align: center">Nama</th>
									<th style="text-align: center">Divisi</th>
									<th style="text-align: center">Selesai?</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$number = 0;
								foreach ($tanggapi as $key => $value): 
									$number++;
								?>
								<tr>
									<td style="text-align: center"><?=$number?></td>
									<td style="text-align: center"><?=date("d-m-Y",strtotime($value['tanggapi'])) ?></td>
									<td style="text-align: center"><?=$value['permasalahan'] ?></td>
									<td style="text-align: center"><?=$value['tempat'] ?></td>
									<td style="text-align: center"><?=$value['nama'] ?></td>
									<td style="text-align: center"><?=$value['divisi'] ?></td>
									<td style="text-align: center"><input type="checkbox" name="id_datanya" value=2> Ya</td>
								</tr>
							<?php endforeach ?>

						</tbody>
					</table>
					<input type="submit" style="position:fixed; bottom: 60px; right: 35px ; z-index: 1000!important"" class="btn btn-primary" value="Selesai">
				</div>

				<!-- content 2 -->

				<!-- content 3 -->
				<div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="allmeeting-tab">
					<table id="datatable" class="table table-striped table-bordered dt-responsive nowrap table-bordered jambo_table bulk_action" cellspacing="0" width="100%">
						<thead>
							<tr class="heading">
								<th style="text-align: center">No</th>
								<th style="text-align: center">Tanggal Penyelesaian</th>
								<th style="text-align: center">Keluhan</th>
								<th style="text-align: center">Tempat</th>
								<th style="text-align: center">Nama</th>
								<th style="text-align: center">Divisi</th>
								<th style="text-align: center">Jeda Waktu (tanggapi-selesai)</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$number = 0;
							foreach ($selesai as $key => $value): 
								$number++;
							?>
							<tr>
								<td style="text-align: center"><?=$number?></td>
								<td style="text-align: center"><?=date("d-m-Y",strtotime($value['selesai']))?></td>
								<td style="text-align: center"><?=$value['permasalahan'] ?></td>
								<td style="text-align: center"><?=$value['tempat'] ?></td>
								<td style="text-align: center"><?=$value['nama'] ?></td>
								<td style="text-align: center"><?=$value['divisi'] ?></td>
								<td style="text-align: center"><?php
									$datetime1 = date_create($value['masuk']);
									$datetime2 = date_create($value['selesai']);
									$interval = date_diff($datetime1, $datetime2);
									echo $interval->format('%a hari')
								?>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
				<!-- content 3 -->

			</div>

		</div>
	</div>
</div>
</div> 
</div>
</body>