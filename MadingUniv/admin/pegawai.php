<?php


if(isset($_POST['save']))
{    
    
    mysqli_query($con,"insert into tbpegawai values('$nip','$namapegawai','$kelamin','$alamat','$notelepon','$jabatan','$status')");
    echo "
    <script>
    location.assign('index.php?page=pegawai&ps=true2');
    </script>
    ";
    }
    elseif (isset($_POST['update'])) 
    {
        mysqli_query($con,"update tbpegawai set idpegawai='$nip',namapegawai='$namapegawai',kelamin='$kelamin',alamat='$alamat',notelepon='$notelepon',jabatan='$jabatan',status='$status' where idpegawai='$id'");
        echo "
        <script>
        location.assign('index.php?page=pegawai&ps=true1');
        </script>
        ";
    }
    
    
/*pesan berhasil update*/
if(isset($_GET['ps'])=='true2')
    echo "<div class='alert alert-success' role='alert'>Data Berhasil Tersimpan</div>";
elseif(isset($_GET['ps'])=='true1')
    echo "<div class='alert alert-success' role='alert'>Data Berhasil Terupdate</div>";

if(isset($_GET['id']))
$data=mysqli_fetch_row(mysqli_query($con,"select * from tbpegawai where idpegawai='".$_GET['id']."'"));

?>
  
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Form Input Data Pegawai</h3>
                </div>
                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                   <input type="hidden" name="id" value="<?php echo isset($_GET['id'])?$_GET['id']:''; ?>">
                    <div class="box-body">

                        <div class="form-group">
                            <label for="satu" class="col-sm-2 control-label">NIP</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="NIP" name="nip" id="dua" value="<?php echo isset($data[0])?$data[0]:''; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dua" class="col-sm-2 control-label">Nama Pegawai</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Nama Pegawai" name="namapegawai" id="tiga" value="<?php echo isset($data[1])?$data[1]:''; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tiga" class="col-sm-2 control-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <input type="radio" name="kelamin" <?php if(isset($data[2]) && $data[2]=="Laki-laki")echo"checked" ;?> value="Laki-laki" >
                                Laki-laki
                                <input type="radio" name="kelamin" <?php if(isset($data[2]) && $data[2]=="Perempuan")echo"checked" ;?> value="Perempuan" >
                                Perempuan
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="empat" class="col-sm-2 control-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Alamat" name="alamat" id="empat" value="<?php echo isset($data[3])?$data[3]:''; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lima" class="col-sm-2 control-label">Nomor Telepon</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Nomor Telepon" name="notelepon" id="lima" value="<?php echo isset($data[4])?$data[4]:''; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="enam" class="col-sm-2 control-label">Jabatan</label>
                            <div class="col-sm-10">
                                <select name="jabatan" id="jabatan" class="form-control" value="<?php echo isset($data[5])?$data[5]:''; ?>">
                                    <option value="Admin">Admin</option>
                                    <option value="Dosen">Dosen</option>
                                    <option value="Prodi">Prodi</option>
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="tujuh" class="col-sm-2 control-label">Status</label>
                            <div class="col-sm-10">
                                <input type="radio" name="status" <?php if(isset($data[6]) && $data[6]=="Dosen Tetap")echo"checked";?> value="Dosen Tetap" >
                                Dosen Tetap
                                <input type="radio" name="status" <?php if(isset($data[6]) && $data[6]=="Dosen Luar")echo"checked";?> value="Dosen Luar" >
                                Dosen Luar
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
    </div>
    <!-- /.row -->
