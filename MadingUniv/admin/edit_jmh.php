<div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Jadwal Matakuliah Harian</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Nama Matakuliah</th>
                        <th>Nama Dosen</th>
                        <th>Hari</th>
                        <th>Jam</th>
                        <th>Ruangan</th>
                        <th>Kelas</th>
                        <th>Status Kehadiran</th>
                        <th>Berita</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php

                     $qu=mysqli_query($con,"select * from tbjdwlmatkulharian order by idjdwlharian desc");
                     $qa=mysqli_query($con,"select jmh.idjdwlharian, m.nama_matkul, tbpegawai.namapegawai, jmt.hari, jmt.jam, tbruangan.nama_ruangan, tbkelas.kelas, jmh.status_dosen, jmh.berita from tbjdwlmatkulharian jmh inner join tbjdwlmatkultetap jmt on jmt.idjdwltetap = jmh.idjdwltetap inner join tbmatkul m on m.kodematkul = jmt.kodematkul inner join tbpegawai on tbpegawai.idpegawai = jmt.idpegawai inner join tbruangan on tbruangan.idruangan = jmt.idruangan inner join tbkelas on tbkelas.idkelas = jmt.idkelas ");
					 
                     while($has=mysqli_fetch_row($qa))
                     {
						
                        echo "
                        <tr>
                        <td>$has[1]</td>
                        <td>$has[2]</td>
                        <td>$has[3]</td>
                        <td>$has[4]</td>
                        <td>$has[5]</td>
                        <td>$has[6]</td>
                        <td>$has[7]</td>
                        <td>$has[8]</td>
                        <td style='text-align:center'>
                        <a href='index.php?page=jmh&id=$has[0]'><span data-placement='top' data-toggle='tooltip' title='Edit'><button class='btn btn-primary btn-xs' data-title='Edit' data-toggle='modal' data-target='#edit' ><span class='glyphicon glyphicon-pencil'></span></button><span></a>
                        
                        <span data-placement='top' data-toggle='tooltip' title='Delete'><button onclick='datadel($has[0],&#39;edit_jmh&#39;)' class='btn btn-danger btn-xs' data-title='Delete' data-toggle='modal' data-target='#myModal' ><span class='glyphicon glyphicon-trash'></span></button><span>
                        </td>
                      </tr>
                        "; 
                     }
                     ?>
                      
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
<script>
    function datadel(value,jenis){
       document.getElementById('mylink').href="hapus.php?del="+value+"&data="+jenis;
    }
</script>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Data akan terhapus !</h4>
            </div>
            <div class="modal-body">
                Anda yakin ingin menghapus data ini ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a id="mylink" href=""><button type="button" class="btn btn-primary">Delete Data</button></a>
            </div>
        </div>
    </div>
</div>
         
          </div><!-- /.row -->