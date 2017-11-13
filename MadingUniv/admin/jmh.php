<?php

date_default_timezone_set('Asia/Jakarta');
if(isset($_POST['save']))
{
   
    mysqli_query($con,"insert into tbjdwlmatkulharian values('','$tbjdwlmatkultetap','$status_dosen','$berita')");
    echo "
    <script>
    location.assign('index.php?page=jmh&ps=true2');
    </script>
    ";
}
elseif(isset($_POST['update']))
{   
    
    mysqli_query($con,"update tbjdwlmatkulharian set idjdwltetap='$tbjdwlmatkultetap',status_dosen='$status_dosen',berita='$berita' where idjdwlharian='$id'");
    echo "
    <script>
    location.assign('index.php?page=jmh&ps=true1');
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
    $data=mysqli_fetch_row(mysqli_query($con,"select * from tbjdwlmatkulharian where idjdwlharian='".$_GET['id']."'"));

}

$qa=mysqli_query($con,"select * from tbjdwlmatkultetap,tbmatkul,tbkelas,tbruangan,tbpegawai where tbjdwlmatkultetap.kodematkul = tbmatkul.kodematkul and tbjdwlmatkultetap.idkelas = tbkelas.idkelas and tbjdwlmatkultetap.idruangan = tbruangan.idruangan and tbjdwlmatkultetap.idpegawai = tbpegawai.idpegawai");

?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Form Input Jadwal Matakuliah Harian</h3>
            </div>
            <form class="form-horizontal" method="post">
               <input type="hidden" name="id" value="<?php echo isset($data[0])?$data[0]:''; ?>">
                <div class="box-body" id="showform">
                <div class="form-group">
                 <label for="satu" class="col-sm-2 control-label">Nama Matakuliah</label>
                 <div class="col-sm-10">
                    <select name=tbjdwlmatkultetap id=tbjdwlmatkultetap class="form-control">
                        <?php
                            while($qu = mysqli_fetch_row($qa)){

                                echo '<option value="'.$qu[0].'" '.(($qu[0]== $data[1])?'selected="selected"':"").'>'.$qu[8].'</option>';
                                
                            }

                        ?>
                    </select>
                    </div>
                    </div>



                    <div class="form-group">
                     <label for="dua" class="col-sm-2 control-label">Status Dosen</label>
                    <div class="col-sm-10">
                        <input type="radio" name="status_dosen" <?php if(isset($data[2]) && $data[2]=="Ada")echo"checked";?> value="Hadir" id="hadir" >
                                Hadir
                        <input type="radio" name="status_dosen" <?php if(isset($data[2]) && $data[2]=="Tidak")echo"checked";?> value="Tidak Hadir" id="tidakhadir" >
                                Tidak Hadir
                        </div>
                    </div>
                  <div class="form-group">
                         <label for="tiga" class="col-sm-2 control-label" >Isi Berita</label>
                            <div class="col-sm-10" id="isiberita">
                                <textarea class="form-control konten" placeholder="Isi Berita" name="berita"><?php echo isset($data[3])     ?$data[3]:''; ?></textarea>
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
    
<script type="text/javascript">
  	$("#hadir").on('click', function(){
  		$("#isiberita").hide();
  	});
  	$("#tidakhadir").on('click', function(){
  		$("#isiberita").show();
  	});
</script>