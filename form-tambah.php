<script src="assets/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
  $(function () {

    //datepicker plugin
    $('.date-picker').datepicker({
      autoclose: true,
      todayHighlight: true
    });

    // toolip
    $('[data-toggle="tooltip"]').tooltip();
  });

  $(document).ready(function() {
    $('form#formTambah').submit(function() {
      $.ajax({
        method: 'POST',
        url: 'proses-simpan.php',
        data: $(this).serialize(),
        success: function(res) {
          alert(res);
          closeModal();
        }
      });

      return false;
    });
  });
</script>
      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="proses-simpan.php" id="formTambah">
            <div class="form-group">
              <label class="col-sm-4 control-label">NIS</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="nis" maxlength="5" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Nama Siswa</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="nama" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Tempat Lahir</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="tempat_lahir" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Tanggal Lahir</label>
              <div class="col-sm-4">
                <div class="input-group">
                  <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tanggal_lahir" autocomplete="off" required>
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-calendar"></i>
                  </span>
                </div>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-4 control-label">Jenis Kelamin</label>
              <div class="col-sm-6">
                <label class="radio-inline">
                  <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                </label>

                <label class="radio-inline">
                  <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                </label>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-4 control-label">Agama</label>
              <div class="col-sm-6">
                <select class="form-control" name="agama" placeholder="Pilih Agama" required>
                  <option value=""></option>
                  <option value="Islam">Islam</option>
                  <option value="Kristen Protestan">Kristen Protestan</option>
                  <option value="Kristen Katolik">Kristen Katolik</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Buddha">Buddha</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Alamat</label>
              <div class="col-sm-6">
                <textarea class="form-control" name="alamat" rows="3" required></textarea>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">No. Telepon</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="no_telepon" autocomplete="off" maxlength="12" onKeyPress="return goodchars(event,'0123456789',this)" required>
              </div>
            </div>
            
            <hr/>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-info btn-submit" name="simpan" value="Simpan">
                <a onclick="closeModal();" class="btn btn-default btn-reset">Batal</a>
              </div>
            </div>
          </form>
        </div> <!-- /.panel-body -->
      </div> <!-- /.panel -->
  