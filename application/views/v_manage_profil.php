<?php 
    if($this->session->userdata("nm_user") == "")
    {
        redirect ("login","refresh");
    }
 ?>
<div class="box box-succesful">
    <div class="box-header">
        <h3 class="box-title">Manage Your Profil</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
        <?php echo validation_errors();?>
        <form role="form" method="post" action="<?php echo base_url();?>user/manage_profil">
            <?php 
            
                if (isset($user)) {
                    foreach ($user as $row ) {
            ?>
            <!-- text input -->
            <div class="form-group">
                <label>Nama User</label>
                <input type="text" name="nama_user" class="form-control" value="<?php echo $row['user_nama'];?>" />
            </div>
            <div class="form-group">
                <label>Email User</label>
                <input type="email" name="email_user" class="form-control" value="<?php echo $row['user_email'];?>" />
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="nm_user" class="form-control" value="<?php echo $row['user_username'];?>" />
            </div>
             <div class="form-group">
                <label>Password</label>
                <input type="password" name="pass_user" class="form-control" placeholder="Password" />
            </div>
             <div class="form-group">
                <label>Confrim Password</label>
                <input type="password" name="pass_confrim" class="form-control" placeholder="Confrim Password" />
            </div>
                <input type="hidden" name="id_user" class="form-control" />
            <?php
                }
            }
            ?>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div><!-- /.box-body -->
</div><!-- /.box -->