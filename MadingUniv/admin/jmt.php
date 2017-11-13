<?php


if(isset($_POST['save']))
{
   
    mysqli_query($con,"insert into tbjdwlmatkultetap values('','$nama_matkul','$kelas','$nama_ruangan','$tbpegawai','$hari','$jam')");
    echo "
    <script>
    location.assign('index.php?page=jmt&ps=true2');
    </script>
    ";
}

elseif(isset($_POST['update']))
{
    
    mysqli_query($con,"update tbjdwlmatkultetap set kodematkul='$nama_matkul',idkelas='$tbkelas',idruangan='$nama_ruangan', idpegawai='$tbpegawai',hari='$hari',jam='$jam' where idjdwltetap='$id'");
    echo "
    <script>
    location.assign('?page=jmt&ps=true1');
    </script>
    ";
}

/*pesan berhasil update*/
if(isset($_GET['ps'])=='true2')
    echo "<div class='alert alert-success' role='alert'>Data Berhasil Tersimpan</div>";
elseif(isset($_GET['ps'])=='true1')
    echo "<div class='alert alert-success' role='alert'>Data Berhasil Terupdate</div>";

if(isset($_GET['id']))
{
    $data=mysqli_fetch_row(mysqli_query($con,"select * from tbjdwlmatkultetap where idjdwltetap='".$_GET['id']."'"));

}


$tbmatkul = mysqli_query($con,"select * from tbmatkul");
$tbkelas = mysqli_query($con,"select * from tbkelas");
$tbruangan = mysqli_query($con,"select * from tbruangan");
$tbpegawai = mysqli_query($con,"select * from tbpegawai");

?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Form Input Jadwal Matakuliah Tetap</h3>
            </div>
            <form class="form-horizontal" method="post">
               <input type="hidden" name="id" value="<?php echo isset($data[0])?$data[0]:''; ?>">
                <div class="box-body">
                    
                    <div class="form-group">
                        <label for="satu" class="col-sm-2 control-label">Nama Matakuliah</label>
                        <div class="col-sm-10">
                           <select name=nama_matkul id=nama_matkul class="form-control">
                               <?php
                                while($tbmatkul2 = mysqli_fetch_row($tbmatkul)){
                                
                                echo '<option value="'.$tbmatkul2[0].'" '.(($tbmatkul2[0]==$data[1])?'selected="selected"':"").'>'.$tbmatkul2[1].'</option>';
                                
                    
                                }
                               ?>
                           </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dua" class="col-sm-2 control-label">Kelas</label>
                        <div class="col-sm-10">
                            <select name=kelas id=kelas class="form-control">
                               <?php
                                while($tbkelas2 = mysqli_fetch_row($tbkelas)){

                                echo '<option value="'.$tbkelas2[0].'" '.(($tbkelas2[0]==$data[2])?'selected="selected"':"").'>'.$tbkelas2[1].'</option>';
                            
                            }
                               ?>
                           </select>
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label for="tiga" class="col-sm-2 control-label">Nama Ruangan</label>
                        <div class="col-sm-10">
                           <select name=nama_ruangan id=nama_ruangan class="form-control">
                               <?php
                                while($tbruangan2 = mysqli_fetch_row($tbruangan)){
                                
                                echo '<option value="'.$tbruangan2[0].'" '.(($tbruangan2[0]==$data[3])?'selected="selected"':"").'>'.$tbruangan2[1].'</option>';
                                
                            }
                               ?>
                           </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="empat" class="col-sm-2 control-label">Nama Dosen</label>
                        <div class="col-sm-10">
                           <select name=tbpegawai id=tbpegawai class="form-control">
                               <?php
                                while($tbpegawai2 = mysqli_fetch_row($tbpegawai)){

                                echo '<option value="'.$tbpegawai2[0].'" '.(($tbpegawai2[0]==$data[4])?'selected="selected"':"").'>'.$tbpegawai2[1].'</option>';


                            }
                               ?>
                           </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lima" class="col-sm-2 control-label">Hari</label>
                        <div class="col-sm-10">
                           <select name=hari id=hari class="form-control">
                               <option value="Senin">Senin</option>
                               <option value="Selasa">Selasa</option>
                               <option value="Rabu">Rabu</option>
                               <option value="Kamis">Kamis</option>
                               <option value="Jumat">Jumat</option>
                               <option value="Sabtu">Sabtu</option>
                               <option value="Minggu">Minggu</option>
                           </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lima1" class="col-sm-2 control-label">Jam</label>
                        <div class="col-sm-10">
                           <select name=jam id=jam class="form-control">
                               <option value="09.00 sd 11.00">09.00 sd 11.00</option>
                               <option value="11.00 sd 13.00">11.00 sd 13.00</option>
                               <option value="13.00 sd 15.00">13.00 sd 15.00</option>
                               <option value="15.00 sd 17.00">15.00 sd 17.00</option>
                               <option value="17.00 sd 19.00">17.00 sd 19.00</option>
                               <option value="19.00 sd 21.00">19.00 sd 21.00</option>
                               
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
    