<body style="background: rgb(254,254,254)">
	<h1 style="text-align: center;color: black">Seluruh Keluhan</h1>
	<br>
	<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1   col-xs-10 col-xs-offset-1 ">
		<table id="datatable" class="table table-striped table-bordered dt-responsive nowrap table-bordered jambo_table bulk_action" cellspacing="0" width="100%">
			<thead>
				<tr class="heading">
					<th style="text-align: center">No</th>
					<th style="text-align: center">Keluhan</th>
					<th style="text-align: center">Kepada</th>
					<th style="text-align: center">Tempat</th>
					<th style="text-align: center">Nama</th>
					<th style="text-align: center">Divisi</th>
					<th style="text-align: center">Status</th>
					<th style="text-align: center">Keterangan</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$number = 0;
				foreach($complaints as $complaint_item): 
					$number = $number + 1;
				?>
				<tr>
					<td style="text-align: center"><?=$number?></td>
					<td style="text-align: center"><?=$complaint_item['permasalahan']?></td>
					<td style="text-align: center"><?=$complaint_item['kepada']?></td>
					
					<td style="text-align: center"><?=$complaint_item['tempat']?></td>
					<td style="text-align: center"><?=$complaint_item['nama']?></td>
					<td style="text-align: center"><?=$complaint_item['divisi']?></td>
					<?php 
					if($complaint_item['tolak']==1){
						?>
						<td style="text-align: center"><span class="glyphicon glyphicon-remove"></span> <br>Tolak</td>
						<?php 
					}else if($complaint_item['tanggapi']==NULL){
						?>
						<td style="text-align: center"><span class="glyphicon glyphicon-refresh"></span><br> Masuk</td>
						<?php 
					}else if($complaint_item['selesai']==null){
						?>
						<td style="text-align: center"><span class="glyphicon glyphicon-eye-open"></span> <span class="glyphicon glyphicon-eye-open"></span> Tanggapi</td>
						<?php 
					}else{
						?>
						<td style="text-align: center" style="color: lightgreen"><span class="glyphicon glyphicon-ok"></span> Selesai</td>
						<?php }?>
						<td style="text-align: center"><?=$complaint_item['keterangan']?></td>	
					</tr>
				<?php endforeach?>
			</tbody>
		</table>
	</div>
</body>