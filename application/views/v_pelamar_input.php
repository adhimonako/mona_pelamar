<div class="box box-succesful">
    <div class="box-header">
        <h3 class="box-title">Input Pelamar</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
        <?php echo validation_errors();?>
        <form role="form" method="post" action="<?php echo base_url();?>pelamar/input_pelamar">
            <!-- text input -->
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="pelamar_nama" class="form-control"  />
            </div>
            <div class="form-group">
                <label>Tempat Lahir</label>
                <input  type="text" name="pelamar_tmp_lahir" class="form-control"  />
            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input id="tgl_lahir" type="text" name="pelamar_tgl_lahir" class="form-control datepicker"  />
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <div class="radio">
                    <label> 
                        <input type="radio" name="pelamar_sex" class="iradio_flat-blue" value="1"/>
                        Laki-laki
                    </label>
                    <label> 
                        <input type="radio" name="pelamar_sex"  value="2" />
                        Perempuan
                    </label>               
                </div>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="pelamar_alamat" class="form-control"  />
            </div>
            <div class="form-group">
                <label>No. Telp</label>
                <input type="text" name="pelamar_telp" class="form-control"  />
            </div>
            <div class="form-group">
                <label>No. Handphone</label>
                <input type="text" name="pelamar_hp" class="form-control"  />
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="pelamar_email" class="form-control"  />
            </div>
            <div class="form-group">
                <label>Posisi Yang Dilamar</label>
                <div class="radio">
                    <label> 
                        <input type="radio" name="pelamar_posisi" class="iradio_flat-blue" value="1"/>
                        Tenaga Pendidik
                    </label>
                    <label> 
                        <input type="radio" name="pelamar_posisi"  value="2" />
                        Tenaga Kependidikan
                    </label>               
                </div>
            </div>
            <div class="form-group">
                <label>Tanggal Lamaran</label>
                <input type="text" name="pelamar_tgl_lamar" id="pelamar_tgl_masuk" class="form-control datepicker"  />
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="pelamar_keterangan" class="form-control"  />
            </div>
            <input type="hidden" name="id_pelamar" class="form-control" />
            <div class="box-footer">
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-success" value="submit" name="submit">Simpan</button>
            </div>
         </form>
    </div><!-- /.box-body -->
</div><!-- /.box -->