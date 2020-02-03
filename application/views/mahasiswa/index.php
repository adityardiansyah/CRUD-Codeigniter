<div class="container mt-4">
	<div class="col-md-12">
		<h3>Daftar Mahasiswa</h3>
		<a href="<?= base_url('mahasiswa/form')?>" class="btn btn-primary mb-4 float-right">Tambah Mahasiswa</a>
		<?php if($this->session->flashdata('msg')): ?>
		<div class="alert alert-info" role="alert">
			<?= $this->session->flashdata('msg') ?>
		</div>
		<?php endif ?>
		<form class="form-inline my-2 my-lg-0" method="post" action="<?= base_url('mahasiswa')?>">
			<input class="form-control mr-sm-2" type="search" name="keyword" placeholder="Search" aria-label="Search" autocomplete="off" autofocus>
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit" value="Submit">Search</button>
		</form>
		<table class="table">
			<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Nama</th>
				<th scope="col">NRP</th>
				<th scope="col">Jurusan</th>
				<th scope="col">#</th>
			</tr>
			</thead>
			<tbody>
			<?php foreach($mahasiswa as $value): ?>
			<tr>
				<th scope="row"><?= ++$start; ?></th>
				<td><?= $value['nama']?></td>
				<td><?= $value['nrp']?></td>
				<td><?= $value['nama_jurusan']?></td>
				<td>
					<a href="<?= base_url('mahasiswa/delete/'.$value['id'])?>">Hapus</a> |
					<a href="<?= base_url('mahasiswa/form/'.$value['id'])?>">Ubah</a>
				</td>
			</tr>
			<?php endforeach ?>
			</tbody>
		</table>
		<b>Total Mahasiswa : <?= $total_rows ?></b>

		<?= $this->pagination->create_links() ?>
	</div>
</div>
