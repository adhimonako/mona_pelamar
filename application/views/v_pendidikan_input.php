<div class="box box-succesful">
    <div class="box-header">
        <h3 class="box-title">Input User</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
        <?php echo validation_errors();?>
        <form role="form" method="post" action="<?php echo base_url();?>pendidikan/input_pendidikan">
            <!-- text input -->
            <div class="form-group">
                <label>Nama Jenjang Pendidikan</label>
                <input type="text" name="pendidikan_nama" class="form-control"  />
            </div>
            <input type="hidden" name="id_pendidikan" class="form-control" />
            <div class="box-footer">
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
         </form>
    </div><!-- /.box-body -->
</div><!-- /.box -->