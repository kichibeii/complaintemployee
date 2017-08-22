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
										<th style="text-align: center">Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="text-align: center">1</td>
										<td style="text-align: center"><?=date('d-m-Y')?></td>
										<td style="text-align: center">AC tidak dingin</td>
										<td style="text-align: center">Meeting Room 2</td>
										<td style="text-align: center">Mukhibillah</td>
										<td style="text-align: center">IT&GA</td>
										<td style="text-align: center"><span class="glyphicon glyphicon-remove"></span></td>
									</tr>
								</tbody>
							</table>
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
										<th style="text-align: center">Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="text-align: center">1</td>
										<td style="text-align: center"><?=date('m-d-Y')?></td>
										<td style="text-align: center">AC tidak dingin</td>
										<td style="text-align: center">Meeting Room 2</td>
										<td style="text-align: center">Mukhibillah</td>
										<td style="text-align: center">IT&GA</td>
										<td style="text-align: center">sedang Ditanggapi</td>
									</tr>
								</tbody>
							</table>
						</div>

						<!-- content 2 -->

						<!-- content 3 -->
						<div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="allmeeting-tab">
							<table class="table table-striped table-bordered dt-responsive nowrap table-bordered jambo_table bulk_action" cellspacing="0" width="100%">
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
									<tr>
										<td style="text-align: center">1</td>
										<td style="text-align: center"><?=date('m-d-Y')?></td>
										<td style="text-align: center">AC tidak dingin</td>
										<td style="text-align: center">Meeting Room 2</td>
										<td style="text-align: center">Mukhibillah</td>
										<td style="text-align: center">IT&GA</td>
										<td style="text-align: center">3 bulan</td>
									</tr>
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