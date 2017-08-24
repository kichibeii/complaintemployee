<body style="background: rgb(254,254,254)">
	<div class="col-md-12 col-sm-12 col-xs-12 ">
		<a class="pull-right" href="<?=base_url('Home/allcomplaint')?>"><button class="btn">All Meeting</button></a>
	</div>
	<h1 style="text-align: center;color: black">Complaint Form</h1>
	<br>
	<?= form_open('Complaint/insert')?>
	<div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
		<div class="form-horizontal form-label-left">
			<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12">
					Tempat
				</label>
				<div class="col-md-6 col-sm-6 col-xs-6">
					<input name="tempat" class="form-control col-md-7 col-xs-12" type="text" placeholder="Tempat terjadinya masalah" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12">
					Kepada
				</label>
				<div class="col-md-6 col-sm-6 col-xs-6">
					<select name="kepada"  class="form-control col-md-7 col-xs-12">
						<option value="1">IT</option>
						<option value="2">GA</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12">
					Permasalahan
				</label>
				<div class="col-md-6 col-sm-6 col-xs-6">
					<input  name="permasalahan" class="form-control col-md-7 col-xs-12" type="text" placeholder="Apa keluhannya?" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12">
					Nama
				</label>	
				<div class="col-md-6 col-sm-6 col-xs-6">
					<input name="nama"  class="form-control col-md-7 col-xs-12" type="text" placeholder="Siapa Namamu?" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12">
					Divisi
				</label>
				<div class="col-md-6 col-sm-6 col-xs-6">
					<input  name="divisi" class="form-control col-md-7 col-xs-12" type="text" placeholder="Apa divisimu?" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12">
					Handphone
				</label>
				<div class="col-md-6 col-sm-6 col-xs-6">
					<input  name="handphone" class="form-control col-md-7 col-xs-12" type="text" placeholder="Nomer Handphonemu?" required>
				</div>
			</div>
			<?= $this->session->flashdata('alert') ?>
			<div class="form-group pull-right">
				<button type="submit" class="btn btn-success">Submit</button>
			</div>
		</div>
	</div>
	<?=form_close();?>
</body>

