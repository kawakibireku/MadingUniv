<?php
date_default_timezone_set('Asia/Jakarta');
if(isset($_POST['save']))
{    
    
    $getId=mysqli_fetch_row(mysqli_query($con,"select max(idinfo) from tbinformasi_kampus"));
    
    if(!empty($_FILES['foto']['tmp_name']))
    { 
        $ext=strtolower(substr($_FILES['foto']['name'],-3));
        if($ext=='gif')
            $ext=".gif";
        else
            $ext=".png";
        move_uploaded_file($_FILES['foto']['tmp_name'], "../img/" . basename(($getId[0]+1).$ext));
    }
    
    mysqli_query($con,"insert into tbinformasi_kampus values('','".date('Y-m-d')."','".($getId[0]+1).$ext."','$judulinfo','$isi_informasi')");
    
      echo "
    <script>
    location.assign('index.php?page=informasi&ps=true2');
    </script>
    ";
}
elseif(isset($_POST['update']))
{
    if(!empty($_FILES['foto']['tmp_name']))
    { 
        unlink("../img/$poster");
        $ext=strtolower(substr($_FILES['foto']['name'],-3));
        if($ext=='gif')
            $ext=".gif";
        else
            $ext=".png";
        move_uploaded_file($_FILES['foto']['tmp_name'], "../img/" . basename(($_GET['id']).$ext));
        
        mysqli_query($con,"update tbinformasi_kampus set judulinfo='$judulinfo',poster='".$_GET['id'].$ext."',isi_informasi='$isi_informasi' where idinfo='".$_GET['id']."'");
    }
    else
        mysqli_query($con,"update tbinformasi_kampus set judulinfo='$judulinfo',isi_informasi='$isi_informasi' where idinfo='".$_GET['id']."'");
    
    echo "
    <script>
    location.assign('index.php?page=informasi&ps=true1');
    </script>
    ";
}

/*pesan berhasil update*/
if(isset($_GET['ps'])=='true2')
    echo "<div class='alert alert-success' role='alert'>Data Berhasil Tersimpan</div>";
elseif(isset($_GET['ps'])=='true1')
    echo "<div class='alert alert-success' role='alert'>Data Berhasil Terupdate</div>";

if(isset($_GET['id']))
$data=mysqli_fetch_row(mysqli_query($con,"select * from tbinformasi_kampus where idinfo='".$_GET['id']."'"));

?>
    <style>
        #image-holder {
            margin-top: 8px;
        }
        
        #image-holder img {
            border: 8px solid #DDD;
            max-width:100%;
        }
    </style>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Form Input Informasi</h3>
                </div>
                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                   <input type="hidden" name="id" value="<?php echo isset($_GET['id'])?$_GET['id']:''; ?>">
                   <input type="hidden" name="poster" value="<?php echo isset($data[2])?$data[2]:''; ?>">
                    <div class="box-body">

                        <div class="form-group">
                            <label for="dua" class="col-sm-2 control-label">Tanggal</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="dua" value="<?php echo isset($_GET['id'])?$data[1]:date('d-m-Y'); ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="satu" class="col-sm-2 control-label">Judul Informasi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Judul Informasi" name="judulinfo" id="satu" value="<?php echo isset($data[3])?$data[3]:''; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dua" class="col-sm-2 control-label">Isi Informasi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control konten" placeholder="Isi Informasi" name="isi_informasi"><?php echo isset($data[4])?$data[4]:''; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="empat" class="col-sm-2 control-label">Poster</label>
                            <div class="col-sm-10">
                                <input type="file" accept="image/*" name="foto" class="form-control" id="foto">
                                <div id="image-holder">
                                   <?php
                                    if(isset($_GET['id']))
                                        echo "<img src='../img/$data[2].'?rand='".rand()."' alt=''>";
                                    ?>
                                </div>
                                <script>
                                    $("#foto").on('change', function () {

                                        //Get count of selected files
                                        var countFiles = $(this)[0].files.length;

                                        var imgPath = $(this)[0].value;
                                        var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
                                        var image_holder = $("#image-holder");
                                        image_holder.empty();

                                        var x = document.getElementById("foto");
                                        var file = x.files[0];

                                        if (extn == "png" || extn == "jpg" || extn == "jpeg" || extn == "gif") {
                                            if (typeof (FileReader) != "undefined") {

                                                //loop for each file selected for uploaded.
                                                for (var i = 0; i < countFiles; i++) {

                                                    var reader = new FileReader();
                                                    reader.onload = function (e) {
                                                        $("<img />", {
                                                            "src": e.target.result,
                                                            "class": "thumb-image"
                                                        }).appendTo(image_holder);
                                                    }

                                                    image_holder.show();
                                                    reader.readAsDataURL($(this)[0].files[i]);
                                                }

                                            } else {
                                                alert("This browser does not support FileReader.");
                                            }
                                        } else {
                                            alert("hanya boleh foto bertype PNG, JPG dan GIF");
                                            var control = $("#foto");
                                            control.replaceWith(control.val('').clone(true));
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                        <!--input image awal-->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <input onclick="change_url()" type="submit" class="btn btn-info pull-right" value="Save" name="<?php echo isset($_GET['id'])?'update':'save'; ?>">
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>
        <!--/.col (right) -->
    </div>
    <!-- /.row -->