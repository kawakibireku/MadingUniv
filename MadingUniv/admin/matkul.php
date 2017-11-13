<?php

if(isset($_POST['save']))
{
    
    mysqli_query($con,"insert into tbmatkul values('$id','$nama_matkul','$semester','$sks','$kurikulum')");
    echo "
    <script>
    location.assign('index.php?page=matkul&ps=true2');
    </script>
    ";
}
elseif(isset($_POST['update']))
{
    
    mysqli_query($con,"update tbmatkul set nama_matkul='$nama_matkul',semester='$semester',sks='$sks',kurikulum='$kurikulum' where kodematkul='$id'");
    echo "
    <script>
    location.assign('index.php?page=matkul&ps=true1');
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
    $data=mysqli_fetch_row(mysqli_query($con,"select * from tbmatkul where kodematkul='".$_GET['id']."'"));

}

?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Form Input Data Matakuliah</h3>
            </div>
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
               <input type="hidden" name="id" value="<?php echo isset($_GET['id'])?$_GET['id']:''; ?>">
                <div class="box-body">
                    <div class="form-group">
                        <label for="satu" class="col-sm-2 control-label">Kode Matakuliah</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Kode Matakuliah" name="id" id="satu" value="<?php echo isset($data[0])?$data[0]:''; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dua" class="col-sm-2 control-label">Nama Matakuliah</label>
                        <div class="col-sm-10">
                            <input type="text" required value="<?php echo isset($data[1])?$data[1]:''; ?>" name="nama_matkul" class="form-control" id="dua" placeholder="Nama Matakuliah">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tiga" class="col-sm-2 control-label">Semester</label>
                        <div class="col-sm-10">
                            <input type="text" required value="<?php echo isset($data[2])?$data[2]:''; ?>" name="semester" class="form-control" id="tiga" placeholder="Semester">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tiga1" class="col-sm-2 control-label">SKS</label>
                        <div class="col-sm-10">
                            <input type="text" required value="<?php echo isset($data[3])?$data[3]:''; ?>" name="sks" class="form-control" id="tiga1" placeholder="SKS">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="empat" class="col-sm-2 control-label">Kurikulum</label>
                        <div class="col-sm-10">
                            <input type="text" required value="<?php echo isset($data[4])?$data[4]:''; ?>" name="kurikulum" class="form-control" id="empat" placeholder="Kurikulum">
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
    