<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header">
                <h2 class="box-title">Master Pendidikan</h2>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive">
                <div class="col-lg-2 pull-right">
                    <a href="<?php echo base_url().'pendidikan/input_pendidikan';?>"><button class="btn btn-success pull-right"><i class="fa fa-plus-circle"></i>Add</button></a>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenjang Pendidikan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $no = 1;  
                    ?>

                    <?php 
                        if (isset($data_view)) {
                            foreach ($data_view as $row ) {
                    ?>
                        <tr>
                            <td><?php echo $no++?></td>
                            <td><?php echo $row['pendidikan_nama'];?></td>
                            <td>
                                <a href="<?=base_url().'pendidikan/edit/'.$row['pendidikan_id'];?>"><span class="glyphicon glyphicon-edit"></span></a>
                                <a href="javascript:void(0)"><span class="glyphicon glyphicon-trash" onclick="hapus_ebook(<?php echo $row['pendidikan_id']?>)"></span></a>
                            </td>
                        </tr>
                    <?php 
                        } 
                    }
                    ?>
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>
<script src="<?php echo base_url();?>asset/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>asset/js/AdminLTE/app.js" type="text/javascript"></script>
<script type="text/javascript">
            function hapus_ebook(id) 
            {
                var r = confirm("Apakah Yakin menghapus? ");
                if (r == true) {
                    document.location.href = "<?php echo base_url();?>pendidikan/hapus/"+ id;
                }
            }

</script>