<div class="container mt-4">
	<div class="col-md-12">
		<?php if(validation_errors()): ?>
		<div class="alert alert-danger" role="alert">
			<?php echo validation_errors(); ?>
		</div>
		<?php endif ?>
		<div class="card">
			<h3 class="card-header">
				Tambah Mahasiswa
			</h3>
			<div class="card-body">
				<form method="post" action="">
					<div class="form-group">
						<label for="exampleInputEmail1">Nama</label>
						<input type="text" class="form-control" name="nama" value="<?= isset($data->nama)? $data->nama : ''?>">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">NRP</label>
						<input type="text" class="form-control" name="nrp" value="<?= isset($data->nrp)? $data->nrp : ''?>">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="text" class="form-control" name="email" value="<?= isset($data->email)? $data->email : ''?>">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<select name="jurusan" id="" class="form-control">
							<?php foreach ($jurusan as $value):?>
							<option value="<?= $value['id']?>" <?= isset($data->jurusan)?($data->jurusan == $value['id'])? 'selected' : '': ''  ?>><?= $value['nama']?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<button type="submit" name="submit" class="btn btn-primary float-right" value="Submit">Tambah</button>
				</form>
			</div>
		</div>
	</div>
</div>
