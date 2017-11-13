<?php
$con=mysqli_connect('localhost','root','','madingdb');

if(isset($_GET['del'])){
    $id=$_GET['del'];   
}

if(isset($_GET['data']))
{
    switch($_GET['data'])
    {
        case 'edit_jmt':
        mysqli_query($con,"delete from tbjdwlmatkultetap where idjdwltetap='$id'");
        header("location:index.php?page=edit_jmt");
        break;
        
        case 'edit_jmh':
        mysqli_query($con,"delete from tbjdwlmatkulharian where idjdwlharian='$id'");
        header("location:index.php?page=edit_jmh");
        break;
        
        case 'list_informasi':
        $data=mysqli_fetch_row(mysqli_query($con,"select poster from tbinformasi_kampus where id='$idinfo'"));
        unlink("../img/$data[0]");
        mysqli_query($con,"delete from tbinformasi_kampus where idinfo='$id'");
        header("location:index.php?page=list_informasi");
        break;
        
        case 'edit_pegawai':
        mysqli_query($con,"delete from tbpegawai where tbpegawai.idpegawai='$id'");
        header("location:index.php?page=edit_pegawai");
        break;
        
        case 'edit_matkul':
        mysqli_query($con,"delete from tbmatkul where kodematkul='$id'");
        header("location:index.php?page=edit_matkul");
        break;
        
        case 'list_ruangan':
        mysqli_query($con,"delete from tbruangan where idruangan='$id'");
        header("location:index.php?page=list_ruangan");
        break;
        
        case 'list_kelas':
        mysqli_query($con,"delete from tbkelas where idkelas='$id'");
        header("location:index.php?page=list_kelas");
        break;
        
        case 'user_level':
        mysqli_query($con,"delete from tbuser where iduser='$id'");
        header("location:index.php?page=user_level");
        break;
        
    }
}
?>