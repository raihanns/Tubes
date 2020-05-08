<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>jQuery UI Datepicker - Default functionality</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
</script>

<form id="formregister" action="<?= site_url('User/insertAppointment') ?>" method="post">
          <div class="form-group">
              <div class="form-row">
                  <div class="col-sm-6">
                      <label for="nama_depan">Nama Depan</label>
                      <input type="text" class="form-control" name="nama_depan" value="<?= set_value('nama_depan') ?>" required>
                  </div>
                  <div class="col-sm-6">
                      <label for="nama_belakang">Nama Belakang</label>
                      <input type="text" class="form-control" name="nama_belakang" value="<?= set_value('nama_belakang') ?>" required>
                  </div>
                  <div class="col-sm-6">
                      <label for="rumahsakit">Rumah Sakit</label>
                      <select name="rumah_sakit" id="rumahsakit">
                          <option selected="selected">Choose one</option>
                          <?php foreach ($rs as $item) { ?>
                              <option value="<?php echo strtolower($item['nama']); ?>"><?php echo $item['nama']; ?></option>
                          <?php } ?>
                      </select>
                  </div>
                  <div class="col-sm-6">
                      Date: <input name="tanggal" type="text" id="datepicker">
              </div>
          </div>
          <a href="<?php echo base_url() ?>/user"><button type="button" class="btn btn-secondary" >Tidak</button></a>
<button type="submit" class="btn btn-primary button1">Submit</button>
</div>
</form>
