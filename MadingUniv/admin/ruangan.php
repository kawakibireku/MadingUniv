<?php
if(isset($_POST['save']))
{
    
    mysqli_query($con,"insert into tbruangan values('','$nama_ruangan')");
    echo "
    <script>
    location.assign('index.php?page=ruangan&ps=true2');
    </script>
    ";
}
elseif(isset($_POST['update']))
{
    
    mysqli_query($con,"update tbruangan set nama_ruangan='$nama_ruangan' where idruangan='$id'");
    echo "
    <script>
    location.assign('index.php?page=ruangan&ps=true1');
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
    $data=mysqli_fetch_row(mysqli_query($con,"select * from tbruangan where idruangan='".$_GET['id']."'"));

}

?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Form Input Data Ruangan</h3>
            </div>
            <form class="form-horizontal" method="post">
               <input type="hidden" name="id" value="<?php echo isset($data[0])?$data[0]:''; ?>">
                <div class="box-body">
                    <div class="form-group">
                        <label for="satu" class="col-sm-2 control-label">Nama Ruangan</label>
                        <div class="col-sm-10">
                            <input type="text" required value="<?php echo isset($data[1])?$data[1]:''; ?>" name="nama_ruangan" class="form-control" id="satu" placeholder="Nama Ruangan">
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
    