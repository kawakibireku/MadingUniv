

<?php
$con=mysqli_connect('localhost','root','','madingdb');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="refresh" content="180"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jadwal Kuliah</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link href="css/testing.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
  <!--   <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top" onclick=$("#menu-close").click();>Start Bootstrap</a>
            </li>
            <li>
                <a href="#top" onclick=$("#menu-close").click();>Home</a>
            </li>
            <li>
                <a href="#about" onclick=$("#menu-close").click();>About</a>
            </li>
            <li>
                <a href="#services" onclick=$("#menu-close").click();>Services</a>
            </li>
            <li>
                <a href="#portfolio" onclick=$("#menu-close").click();>Portfolio</a>
            </li>
            <li>
                <a href="#contact" onclick=$("#menu-close").click();>Contact</a>
            </li>
        </ul>
    </nav> -->
 
    <!-- Header -->
        <div class="container-fluid">
            <div class="row">  
               <div class="col-md-3 col-lg-6 judul ">
                <img src="img/bgheader1.gif" height="130px" width="1350px" align="left">
                </div>
            </div>
        </div>
        <hr></hr>
        <div class="container-fluid">
          <div class="row text-center">
            <i>
            <font color="black">
              Today's date is : 
              <strong>
               <span id="time"></span>
              </strong>           
            </font>
            </i>101
          </div>
        </div>
          <div class="container-fluid">
            <div class="row align-items-start">
                <div class="col-xs-6 col-md-6">
                    <div class="col-md-6 col-lg-12">
                        <h2>Informasi Kampus</h2>
                        <div id="CarouselBerita" class="carousel slide" data-ride="carousel" data-interval="10000">
                              <!-- Indicators -->
                              <ol class="carousel-indicators">
                                <li data-target="#CarouselBerita" data-slide-to="0" class="active"></li>
                                <li data-target="#CarouselBerita" data-slide-to="1"></li>
                                <li data-target="#CarouselBerita" data-slide-to="2"></li>
                                <!-- <li data-target="#CarouselBerita" data-slide-to="3"></li> -->
                              </ol>
							
                                          <?php
                                          $r_judulberita = array();
                                          $r_imgberita = array();
                                          $r_isiberita = array();
                                          $qu=mysqli_query($con,"select * from tbinformasi_kampus");
                                          while ($has=mysqli_fetch_row($qu))
                                          {
                                            $r_judulberita[] = $has[3];
                                          }
                                          ?>
                                           <?php
                                          $qu=mysqli_query($con,"select * from tbinformasi_kampus order by idinfo");
                                          while ($has=mysqli_fetch_row($qu))
                                          {
                                            $r_imgberita[] = $has[2];
                                          }
                                          ?>
                                           <?php
                                          $qu=mysqli_query($con,"select * from tbinformasi_kampus");
                                          while ($has=mysqli_fetch_row($qu))
                                          {
                                            $r_isiberita[] = $has[4];
                                          }
                                          ?>
                            <div class="carousel-inner" role="listbox">
                              <?php
                                for($i = 0; $i < count($r_judulberita); $i++){
                                  ?>
<div class="item <?php if($i == 0) echo'active';?>">
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Judul Informasi</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td><?php echo $r_judulberita[$i]; ?></td>
      </tr>
    </tbody>
  </table>

  <img class="img-fluid center-block" src="img/<?php echo $r_imgberita[$i]; ?>" alt="Chania">

  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Isi Informasi</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td><?php echo $r_isiberita[$i]; ?></td>
      </tr>
    </tbody>
  </table>
</div>                                  
                                  <?php
                                }
                              ?>
                                
                              </div>
                              <!-- end item -->
                        </div>
					  
                                <!-- end carousel -->
                        </div>
                        <!-- end column -->
                    </div>    
                    <!-- end column -->
              
				
                <div class="col-sm-3 col-lg-6">
                    <div class="col-lg-12">
                        <h2>Jadwal Ruangan</h2>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
                              <!-- Indicators -->
                              <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                              </ol>


                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                  <h4><b>Lab 116</b></h4>
                                   <table class="table table-condensed">
                                        <thead>
                                          <tr>
                                            <th>Waktu</th>
                                            <th>Mata Kuliah</th>
                                            <th>Nama Dosen</th>
                                            <th>Status</th>
                                          </tr>
                                        </thead>

                                        <tbody>
                                          <?php
                                          $today = date('l');
                                            
                                            if($today == 'Monday'){
                                              $today = 'Senin';
                                            }elseif($today == 'Tuesday'){
                                              $today = 'Selasa';
                                            }elseif($today == 'Wednesday'){
                                              $today = 'Rabu';
                                            }elseif($today == 'Thursday'){
                                              $today = 'Kamis';
                                            }elseif($today == 'Friday'){
                                              $today = 'Jumat';
                                            }elseif($today == 'Saturday'){
                                              $today = 'Sabtu';
                                            }elseif($today == 'Sunday'){
                                              $today = 'Minggu';
                                            }
                                          
                                          // $qu=mysqli_query($con,"select * from tbjdwlmatkulharian order by idjdwlharian where hari=$today ");
                                          $qa=mysqli_query($con,"select tbjdwlmatkultetap.jam, tbmatkul.nama_matkul, tbpegawai.namapegawai, tbjdwlmatkulharian.status_dosen from tbjdwlmatkultetap, tbjdwlmatkulharian,tbmatkul,tbkelas,tbruangan,tbpegawai where tbjdwlmatkultetap.kodematkul = tbmatkul.kodematkul and tbjdwlmatkultetap.idjdwltetap = tbjdwlmatkulharian.idjdwltetap and  tbjdwlmatkultetap.idkelas = tbkelas.idkelas and tbjdwlmatkultetap.idruangan = tbruangan.idruangan and tbjdwlmatkultetap.idpegawai = tbpegawai.idpegawai and tbjdwlmatkultetap.hari = '$today' and tbruangan.nama_ruangan = 'lab.116'");

                                          while($has=mysqli_fetch_row($qa)) 
                                          {
                                          ?>
                                          <tr>
                                                <td><?php echo $has[0]; ?></td>
                                                <td><?php echo $has[1]; ?></td>
                                                <td><?php echo $has[2]; ?></td>
                                                <td><?php echo $has[3]; ?></td>
                                               
                                              </tr>
                                           <?php 
                                            }
                                          ?>                                        
                                        </tbody>                                         
                                      </table>

                                </div>
                                <!-- end item -->
                                <div class="item">
                                <h4><b>Lab 117</b></h4>
                                     <table class="table table-condensed">
                                        <thead>
                                          <tr>
                                            <th>Waktu</th>
                                            <th>Mata Kuliah</th>
                                            <th>Nama Dosen</th>
                                            <th>Status</th>
                                          </tr>
                                        </thead>

                                        <tbody>
                                          <?php
                                          $today = date('l');
                                            
                                            if($today == 'Monday'){
                                              $today = 'Senin';
                                            }elseif($today == 'Tuesday'){
                                              $today = 'Selasa';
                                            }elseif($today == 'Wednesday'){
                                              $today = 'Rabu';
                                            }elseif($today == 'Thursday'){
                                              $today = 'Kamis';
                                            }elseif($today == 'Friday'){
                                              $today = 'Jumat';
                                            }elseif($today == 'Saturday'){
                                              $today = 'Sabtu';
                                            }elseif($today == 'Sunday'){
                                              $today = 'Minggu';
                                            }
                                          
                                          // $qu=mysqli_query($con,"select * from tbjdwlmatkulharian order by idjdwlharian where hari=$today ");
                                          $qa=mysqli_query($con,"select tbjdwlmatkultetap.jam, tbmatkul.nama_matkul, tbpegawai.namapegawai, tbjdwlmatkulharian.status_dosen from tbjdwlmatkultetap, tbjdwlmatkulharian,tbmatkul,tbkelas,tbruangan,tbpegawai where tbjdwlmatkultetap.kodematkul = tbmatkul.kodematkul and tbjdwlmatkultetap.idjdwltetap = tbjdwlmatkulharian.idjdwltetap and  tbjdwlmatkultetap.idkelas = tbkelas.idkelas and tbjdwlmatkultetap.idruangan = tbruangan.idruangan and tbjdwlmatkultetap.idpegawai = tbpegawai.idpegawai and tbjdwlmatkultetap.hari = '$today' and tbruangan.nama_ruangan = 'lab.117'");

                                          while($has=mysqli_fetch_row($qa)) 
                                          {
                                          ?>
                                          <tr>
                                                <td><?php echo $has[0]; ?></td>
                                                <td><?php echo $has[1]; ?></td>
                                                <td><?php echo $has[2]; ?></td>
                                                <td><?php echo $has[3]; ?></td>
                                               
                                              </tr>
                                           <?php 
                                            }
                                          ?>    
                                        </tbody>
                                      </table>
                                </div>
                                <!-- end item -->
                                <div class="item">
                                <h4><b>Ruangan 115</b></h4>
                                     <table class="table table-condensed">
                                        <thead>
                                          <tr>
                                            <th>Waktu</th>
                                            <th>Mata Kuliah</th>
                                            <th>Nama Dosen</th>
                                            <th>Status</th>
                                          </tr>
                                        </thead>

                                        <tbody>
                                          <?php
                                          $today = date('l');
                                            
                                            if($today == 'Monday'){
                                              $today = 'Senin';
                                            }elseif($today == 'Tuesday'){
                                              $today = 'Selasa';
                                            }elseif($today == 'Wednesday'){
                                              $today = 'Rabu';
                                            }elseif($today == 'Thursday'){
                                              $today = 'Kamis';
                                            }elseif($today == 'Friday'){
                                              $today = 'Jumat';
                                            }elseif($today == 'Saturday'){
                                              $today = 'Sabtu';
                                            }elseif($today == 'Sunday'){
                                              $today = 'Minggu';
                                            }
                                          
                                          // $qu=mysqli_query($con,"select * from tbjdwlmatkulharian order by idjdwlharian where hari=$today ");
                                          $qa=mysqli_query($con,"select tbjdwlmatkultetap.jam, tbmatkul.nama_matkul, tbpegawai.namapegawai, tbjdwlmatkulharian.status_dosen from tbjdwlmatkultetap, tbjdwlmatkulharian,tbmatkul,tbkelas,tbruangan,tbpegawai where tbjdwlmatkultetap.kodematkul = tbmatkul.kodematkul and tbjdwlmatkultetap.idjdwltetap = tbjdwlmatkulharian.idjdwltetap and  tbjdwlmatkultetap.idkelas = tbkelas.idkelas and tbjdwlmatkultetap.idruangan = tbruangan.idruangan and tbjdwlmatkultetap.idpegawai = tbpegawai.idpegawai and tbjdwlmatkultetap.hari = '$today' and tbruangan.nama_ruangan = '115'");

                                          while($has=mysqli_fetch_row($qa)) 
                                          {
                                          ?>
                                          <tr>
                                                <td><?php echo $has[0]; ?></td>
                                                <td><?php echo $has[1]; ?></td>
                                                <td><?php echo $has[2]; ?></td>
                                                <td><?php echo $has[3]; ?></td>
                                               
                                              </tr>
                                           <?php 
                                            }
                                          ?>                
                                        </tbody>
                                      </table>
                                </div>
                                <!-- end item -->
                                <div class="item">
                                <h4><b>Ruangan 118</b></h4> 
                                    <table class="table table-condensed">
                                        <thead>
                                          <tr>
                                            <th>Waktu</th>
                                            <th>Mata Kuliah</th>
                                            <th>Nama Dosen</th>
                                            <th>Status</th>
                                          </tr>
                                        </thead>

                                        <tbody>
                                          <?php
                                          $today = date('l');
                                            
                                            if($today == 'Monday'){
                                              $today = 'Senin';
                                            }elseif($today == 'Tuesday'){
                                              $today = 'Selasa';
                                            }elseif($today == 'Wednesday'){
                                              $today = 'Rabu';
                                            }elseif($today == 'Thursday'){
                                              $today = 'Kamis';
                                            }elseif($today == 'Friday'){
                                              $today = 'Jumat';
                                            }elseif($today == 'Saturday'){
                                              $today = 'Sabtu';
                                            }elseif($today == 'Sunday'){
                                              $today = 'Minggu';
                                            }
                                          
                                          // $qu=mysqli_query($con,"select * from tbjdwlmatkulharian order by idjdwlharian where hari=$today ");
                                          $qa=mysqli_query($con,"select tbjdwlmatkultetap.jam, tbmatkul.nama_matkul, tbpegawai.namapegawai, tbjdwlmatkulharian.status_dosen from tbjdwlmatkultetap, tbjdwlmatkulharian,tbmatkul,tbkelas,tbruangan,tbpegawai where tbjdwlmatkultetap.kodematkul = tbmatkul.kodematkul and tbjdwlmatkultetap.idjdwltetap = tbjdwlmatkulharian.idjdwltetap and  tbjdwlmatkultetap.idkelas = tbkelas.idkelas and tbjdwlmatkultetap.idruangan = tbruangan.idruangan and tbjdwlmatkultetap.idpegawai = tbpegawai.idpegawai and tbjdwlmatkultetap.hari = '$today' and tbruangan.nama_ruangan = '118'");

                                          while($has=mysqli_fetch_row($qa)) 
                                          {
                                          ?>
                                          <tr>
                                                <td><?php echo $has[0]; ?></td>
                                                <td><?php echo $has[1]; ?></td>
                                                <td><?php echo $has[2]; ?></td>
                                                <td><?php echo $has[3]; ?></td>
                                               
                                              </tr>
                                           <?php 
                                            }
                                          ?>
                                        </tbody>
                                      </table>
                                </div>
                                <!-- end item -->
                                <div class="item">
                                <h4><b>Ruangan 103</b></h4>
                                    <table class="table table-condensed">
                                        <thead>
                                          <tr>
                                            <th>Waktu</th>
                                            <th>Mata Kuliah</th>
                                            <th>Nama Dosen</th>
                                            <th>Status</th>
                                          </tr>
                                        </thead>

                                        <tbody>
                                         <?php
                                          $today = date('l');
                                            
                                            if($today == 'Monday'){
                                              $today = 'Senin';
                                            }elseif($today == 'Tuesday'){
                                              $today = 'Selasa';
                                            }elseif($today == 'Wednesday'){
                                              $today = 'Rabu';
                                            }elseif($today == 'Thursday'){
                                              $today = 'Kamis';
                                            }elseif($today == 'Friday'){
                                              $today = 'Jumat';
                                            }elseif($today == 'Saturday'){
                                              $today = 'Sabtu';
                                            }elseif($today == 'Sunday'){
                                              $today = 'Minggu';
                                            }
                                          
                                          // $qu=mysqli_query($con,"select * from tbjdwlmatkulharian order by idjdwlharian where hari=$today ");
                                          $qa=mysqli_query($con,"select tbjdwlmatkultetap.jam, tbmatkul.nama_matkul, tbpegawai.namapegawai, tbjdwlmatkulharian.status_dosen from tbjdwlmatkultetap, tbjdwlmatkulharian,tbmatkul,tbkelas,tbruangan,tbpegawai where tbjdwlmatkultetap.kodematkul = tbmatkul.kodematkul and tbjdwlmatkultetap.idjdwltetap = tbjdwlmatkulharian.idjdwltetap and  tbjdwlmatkultetap.idkelas = tbkelas.idkelas and tbjdwlmatkultetap.idruangan = tbruangan.idruangan and tbjdwlmatkultetap.idpegawai = tbpegawai.idpegawai and tbjdwlmatkultetap.hari = '$today' and tbruangan.nama_ruangan = '103'");

                                          while($has=mysqli_fetch_row($qa)) 
                                          {
                                          ?>
                                          <tr>
                                                <td><?php echo $has[0]; ?></td>
                                                <td><?php echo $has[1]; ?></td>
                                                <td><?php echo $has[2]; ?></td>
                                                <td><?php echo $has[3]; ?></td>
                                               
                                              </tr>
                                           <?php 
                                            }
                                          ?>
                                        </tbody>
                                      </table>
                                </div>
                                <!-- end item -->
                                <div class="item">
                                <h4><b>Ruangan 104</b></h4> 
                                    <table class="table table-condensed">
                                        <thead>
                                          <tr>
                                            <th>Waktu</th>
                                            <th>Mata Kuliah</th>
                                            <th>Nama Dosen</th>
                                            <th>Status</th>
                                          </tr>
                                        </thead>

                                        <tbody>
                                          <?php
                                          $today = date('l');
                                            
                                            if($today == 'Monday'){
                                              $today = 'Senin';
                                            }elseif($today == 'Tuesday'){
                                              $today = 'Selasa';
                                            }elseif($today == 'Wednesday'){
                                              $today = 'Rabu';
                                            }elseif($today == 'Thursday'){
                                              $today = 'Kamis';
                                            }elseif($today == 'Friday'){
                                              $today = 'Jumat';
                                            }elseif($today == 'Saturday'){
                                              $today = 'Sabtu';
                                            }elseif($today == 'Sunday'){
                                              $today = 'Minggu';
                                            }
                                          
                                          // $qu=mysqli_query($con,"select * from tbjdwlmatkulharian order by idjdwlharian where hari=$today ");
                                          $qa=mysqli_query($con,"select tbjdwlmatkultetap.jam, tbmatkul.nama_matkul, tbpegawai.namapegawai, tbjdwlmatkulharian.status_dosen from tbjdwlmatkultetap, tbjdwlmatkulharian,tbmatkul,tbkelas,tbruangan,tbpegawai where tbjdwlmatkultetap.kodematkul = tbmatkul.kodematkul and tbjdwlmatkultetap.idjdwltetap = tbjdwlmatkulharian.idjdwltetap and  tbjdwlmatkultetap.idkelas = tbkelas.idkelas and tbjdwlmatkultetap.idruangan = tbruangan.idruangan and tbjdwlmatkultetap.idpegawai = tbpegawai.idpegawai and tbjdwlmatkultetap.hari = '$today' and tbruangan.nama_ruangan = '104'");

                                          while($has=mysqli_fetch_row($qa)) 
                                          {
                                          ?>
                                          <tr>
                                                <td><?php echo $has[0]; ?></td>
                                                <td><?php echo $has[1]; ?></td>
                                                <td><?php echo $has[2]; ?></td>
                                                <td><?php echo $has[3]; ?></td>
                                               
                                              </tr>
                                           <?php 
                                            }
                                          ?>
                                        </tbody>
                                      </table>
                                </div>
                                <!-- end item -->
                            </div>
                        <!-- end carousel -->
                    </div>
					</div>
                    <div class="col-lg-12">
                        <h2>Jadwal Matakuliah</h2>
                        <div id="CarouselMatkul" class="carousel slide" data-ride="carousel" data-interval="10000">
                              <!-- Indicators -->
                              <ol class="carousel-indicators">
                                <li data-target="#CarouselMatkul" data-slide-to="0" class="active"></li>
                                <li data-target="#CarouselMatkul" data-slide-to="1"></li>
                                <li data-target="#CarouselMatkul" data-slide-to="2"></li>
                                <!-- <li data-target="#CarouselMatkul" data-slide-to="3"></li> -->
                              </ol>


                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                <div class="table-responsive">
                                   <table class="table table-condensed">
                                        <thead>
                                          <tr>
                                            <th>Hari</th>
                                            <th>Waktu</th>
                                            <th>Matakuliah</th>
                                            <th>Dosen</th>
                                            <th>Kelas</th>
                                            <th>Semester</th>
                                            <th>Ruang</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                            $today = date('l');
                                            
                                            if($today == 'Monday'){
                                              $today = 'Senin';
                                            }elseif($today == 'Tuesday'){
                                              $today = 'Selasa';
                                            }elseif($today == 'Wednesday'){
                                              $today = 'Rabu';
                                            }elseif($today == 'Thursday'){
                                              $today = 'Kamis';
                                            }elseif($today == 'Friday'){
                                              $today = 'Jumat';
                                            }elseif($today == 'Saturday'){
                                              $today = 'Sabtu';
                                            }elseif($today == 'Sunday'){
                                              $today = 'Minggu';
                                            }

                                            echo $today." - Reguler Pagi";

                                            $qu=mysqli_query($con,"select * from tbjdwlmatkultetap order by idjdwltetap where hari= '$today'");
                                             $qa=mysqli_query($con,"select tbjdwlmatkultetap.idjdwltetap,tbmatkul.nama_matkul,tbkelas.kelas,tbmatkul.semester,tbruangan.nama_ruangan,tbpegawai.namapegawai,tbjdwlmatkultetap.hari,tbjdwlmatkultetap.jam from tbjdwlmatkultetap,tbmatkul,tbkelas,tbruangan,tbpegawai where tbjdwlmatkultetap.kodematkul = tbmatkul.kodematkul and tbjdwlmatkultetap.idkelas = tbkelas.idkelas and tbjdwlmatkultetap.idruangan = tbruangan.idruangan and tbjdwlmatkultetap.idpegawai = tbpegawai.idpegawai and tbjdwlmatkultetap.hari= '$today' and tbkelas.kelas like 'A%'");

                                             while($has=mysqli_fetch_row($qa))
                                             {   
                                          ?>
                                              <tr>
                                                <td><?php echo $has[6]; ?></td>
                                                <td><?php echo $has[7]; ?></td>
                                                <td><?php echo $has[1]; ?></td>
                                                <td><?php echo $has[5]; ?></td>
                                                <td><?php echo $has[2]; ?></td>
                                                <td><?php echo $has[3]; ?></td>
                                                <td><?php echo $has[4]; ?></td>
                                              </tr>
                                          <?php 
                                            }
                                          ?>
                                        </tbody>
                                      </table>
                                    </div>
                                </div>
                                <!-- end item -->
                               
                                <div class="item">
                                  <div class="table-responsive">
                                    <table class="table table-condensed">
                                        <thead>
                                          <tr>
                                            <th>Hari</th>
                                            <th>Waktu</th>
                                            <th>Matakuliah</th>
                                            <th>Dosen</th>
                                            <th>Kelas</th>
                                            <th>Semester</th>
                                            <th>Ruang</th>
                                          </tr>
                                        </thead>

                                        <tbody>
                                          <?php
                                             $today=date('l');

                                              if($today == 'Monday'){
                                              $today = 'Senin';
                                            }elseif($today == 'Tuesday'){
                                              $today = 'Selasa';
                                            }elseif($today == 'Wednesday'){
                                              $today = 'Rabu';
                                            }elseif($today == 'Thursday'){
                                              $today = 'Kamis';
                                            }elseif($today == 'Friday'){
                                              $today = 'Jumat';
                                            }elseif($today == 'Saturday'){
                                              $today = 'Sabtu';
                                            }elseif($today == 'Sunday'){
                                              $today = 'Minggu';
                                            }

                                            echo $today." - Reguler Sore";

                                            $qu=mysqli_query($con,"select * from tbjdwlmatkultetap order by idjdwltetap where hari= '$today'");
                                             $qa=mysqli_query($con,"select tbjdwlmatkultetap.idjdwltetap,tbmatkul.nama_matkul,tbkelas.kelas,tbmatkul.semester,tbruangan.nama_ruangan,tbpegawai.namapegawai,tbjdwlmatkultetap.hari,tbjdwlmatkultetap.jam from tbjdwlmatkultetap,tbmatkul,tbkelas,tbruangan,tbpegawai where tbjdwlmatkultetap.kodematkul = tbmatkul.kodematkul and tbjdwlmatkultetap.idkelas = tbkelas.idkelas and tbjdwlmatkultetap.idruangan = tbruangan.idruangan and tbjdwlmatkultetap.idpegawai = tbpegawai.idpegawai and tbjdwlmatkultetap.hari = '$today' and tbkelas.kelas like 'B%'");

                                             while($has=mysqli_fetch_row($qa))
                                             {   
                                          ?>
                                              <tr>
                                                <td><?php echo $has[6]; ?></td>
                                                <td><?php echo $has[7]; ?></td>
                                                <td><?php echo $has[1]; ?></td>
                                                <td><?php echo $has[5]; ?></td>
                                                <td><?php echo $has[2]; ?></td>
                                                <td><?php echo $has[3]; ?></td>
                                                <td><?php echo $has[4]; ?></td>
                                              </tr>
                                          <?php 
                                            }
                                          ?>
                                           
                                        </tbody>
                                      </table>
                                      </div>
                                </div>
                                <!-- end item -->
                            </div>
                    </div>

                    <!-- end column berita-jadwalkuliah -->
                </div>
            <!-- end row -->
          </div>
      </div>
  </div>
<br>
<br>
<br>
<br>
    

    <!-- Footer -->
<style type="text/css">
  .container-fluid1{
    position: fixed;
    bottom: 0;
    background-color: lightseagreen;
    color: white;
  }
</style>
        <div class="container-fluid1" style="padding: 0px!important;">
            <div class="row">
                <div class="col-lg-12" style="float: none!important;">
                    <div class="runtext">
                        <marquee style="height: 25px; font-size: xx-large; ">

                      <?php
                      $qu=mysqli_query($con,"select * from tbjdwlmatkulharian");
                      while ($has=mysqli_fetch_row($qu)) 
                      {
                        ?>
                        <b><?php echo str_replace("<p>", "", str_replace("<br>", "", str_replace("</p>", "", $has[3])));?></b>
                        <?php
                      }
                      ?>
                        </marquee>
                    </div>
                </div>
            </div>
        </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
    // Disable Google Maps scrolling
    // See http://stackoverflow.com/a/25904582/1607849
    // Disable scroll zooming and bind back the click event
    var onMapMouseleaveHandler = function(event) {
        var that = $(this);
        that.on('click', onMapClickHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('iframe').css("pointer-events", "none");
    }
    var onMapClickHandler = function(event) {
            var that = $(this);
            // Disable the click handler until the user leaves the map area
            that.off('click', onMapClickHandler);
            // Enable scrolling zoom
            that.find('iframe').css("pointer-events", "auto");
            // Handle the mouse leave event
            that.on('mouseleave', onMapMouseleaveHandler);
        }
        // Enable map zooming with mouse scroll when the user clicks the map
    $('.map').on('click', onMapClickHandler);
    var today = new Date();
    document.getElementById('time').innerHTML=today;
    </script>

</body>

</html>
