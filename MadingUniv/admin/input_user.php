<?php
if(isset($_POST['save']))
{

    $salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
    $saltedPW =  $password . $salt;
    $hashedPW = hash('sha256', $saltedPW);
    $cek = mysqli_query($con,"select * from tbuser,tbpegawai where tbpegawai.idpegawai = '$tbpegawai' and tbpegawai.idpegawai = tbuser.idpegawai");

    if(mysqli_num_rows($cek)){
        echo "
        <script>
        location.assign('index.php?page=input_user&psa=false2');
        </script>
        ";
    }else{
        mysqli_query($con,"insert into tbuser values('','$tbpegawai','$hashedPW','$salt','$level')");
        echo "
        <script>
        location.assign('index.php?page=input_user&psa=true2');
        </script>
        ";
    }
}
elseif(isset($_POST['update']))
{   
    $salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
    $saltedPW =  $password . $salt;
    $hashedPW = hash('sha256', $saltedPW);

    mysqli_query($con,"update tbuser set idpegawai='$tbpegawai',password='$hashedPW',salt='$salt', level='$level'  where iduser='$id'");
    echo "
    <script>
    location.assign('index.php?page=input_user&psa=true1');
    </script>
    ";
}

/*pesan berhasil update*/
if(isset($_GET['psa'])=='true2'){
    echo "<div class='alert alert-success' role='alert'>Data Berhasil Tersimpan</div>";
}elseif(isset($_GET['psa'])=='true1'){
    echo "<div class='alert alert-success' role='alert'>Data Berhasil Terupdate</div>";
}elseif(isset($_GET['psa'])=='false2'){
    echo "<div class='alert alert-success' role='alert'>Username sudah ada</div>";
}

if(isset($_GET['id']))
{
    $data=mysqli_fetch_row(mysqli_query($con,"select * from tbuser where iduser='".$_GET['id']."'"));

}

$pegawai = mysqli_query($con,"select * from tbpegawai");

?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Form Input User</h3>
            </div>
            <form class="form-horizontal" method="post">
               <input type="hidden" name="id" value="<?php echo isset($data[0])?$data[0]:''; ?>">
                <div class="box-body">
                  
                    <div class="form-group">
                        <label for="dua" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                            <select name=tbpegawai id=tbpegawai class="form-control">
                               <?php
                                while($pegawai2 = mysqli_fetch_row($pegawai)){

                                echo '<option value="'.$pegawai2[0].'" '.(($pegawai2[0]==$data[0])?'selected="selected"':"").'>'.$pegawai2[0].'</option>';


                            }
                               ?>
							</select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dua1" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="text" required value="<?php echo isset($data[2])?$data[2]:''; ?>" name="password" class="form-control" id="dua1" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tiga" class="col-sm-2 control-label">Level</label>
                        <div class="col-sm-10">
                        <select name=level id=level class="form-control">
                            <<option value="Admin">Admin</option>
                            
                            <<option value="Prodi">Prodi</option>
                        </select>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <input type="submit" class="btn btn-info pull-left" value="Save" name="<?php echo isset($_GET['id'])?'update':'save'; ?>">
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
    </div>
    <!--/.col (right) -->
</div>   <!-- /.row -->
    