

<script>
    $(document).ready(function(){
        $('#editprofil').modal('show');
    }); 
</script>

<div class="modal" id="editprofil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalLabel">Edit Profil</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- isi form ini -->
					<form method="post" action="">
						<div class="col-12"><img style="height:80px; width:80px;"src="<?php echo base_url('/assets/img/profile/') . $user['image']; ?>"></div>
						<div class="form-group">
							<label for="formGroupExampleInput">Nama Depan</label>
							<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Depan" name="namadepan" value="" required>
						</div>
						<div class="form-group">
							<label for="formGroupExampleInput">Nama Belakang</label>
							<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Belakang" name="namabelakang" value="" required>
						</div>
						<div class="form-group">
							<label for="formGroupExampleInput2">Email</label>
							<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email" name="email" value="" required>
						</div>
						<div class="form-group">
							<label for="formGroupExampleInput2">Password</label>
							<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Password" name="password" value="" required>
						</div>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">Profile Picture</span>
							</div>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="uploadImage" name="uploadImage" accept='image/*' required>
								<label class="custom-file-label text-left" for="uploadImage">Choose file</label>
							</div>
						</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
					<input type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
				</div>
				</form>
			</div>
		</div>
	</div>
	</div>