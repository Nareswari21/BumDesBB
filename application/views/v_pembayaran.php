<div class="breadcomb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="breadcomb-list">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="breadcomb-wp">
								<div class="breadcomb-icon">
									<i class="notika-icon notika-windows"></i>
								</div>
								<div class="breadcomb-ctn">
									<h2>Tabel Data Pembayaran</h2>
									<p>Welcome to BUMDes <span class="bread-ntd">Bangun Bersama</span></p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
							<div class="breadcomb-report">
								<a href="<?php echo base_url() ?>pembayaran/export_excel" class="btn" data-placement="left"><i class="notika-icon notika-sent" data-toggle="tooltip" title="Download Report"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="data-table-area">
  <div class="container">
      <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="data-table-list">
                  <div class="basic-tb-hd">
                      <h2>Tabel Total Pembayaran</h2>
                      <p>Tabel ini berisi data total pembayaran dari penyewaan alat dan bangunan.</p>
                      <div style="float:right;" class="col-lg-3">
                        <a href="#resetEmployeeModal" class="btn btn-default" class="btn" data-toggle="modal"><i class="fa fa-minus-circle"></i> <span>Hapus</span></a>
                        <a href="#addEmployeeModal" class="btn btn-default" class="btn" data-toggle="modal"><i class="fa fa-plus-circle"></i> <span>Tambah Data</span></a>
                      </div>
                  </div>
                  <div class="table-responsive">
		            <table class="table table-striped table-hover" id="example">
		                <thead>
		                  <tr>
		                    <th scope="col">Nomor</th>
		                    <th scope="col">Tanggal Sewa</th>
		                    <th scope="col">Nama</th>
		                    <th scope="col">NIK</th>
		                    <th scope="col">Alamat</th>
		                    <!-- <th scope="col">Jenis Alat</th> -->
		                    <th scope="col">Biaya Sewa</th>
		                    <th scope="col">Lama Sewa</th>
		                    <th scope="col">Total Pembayaran</th>
		                    <th scope="col">Keterangan Bayar</th>
		                    <th style="width: 125px;">Action</th>
		                  </tr>
		                </thead>
		                <tbody>
		                  <?php 
		                    $no=1;
		                    foreach($datas as $b){ 
		                  ?>
		                  <tr>
		                    <!-- <td><?php echo $no++; ?></td> -->
		                    <td><?php echo $b->id_penyewa; ?></td>
		                    <td><?php echo $b->tgl_sewa; ?></td>
		                    <td><?php echo $b->nama; ?></td>
		                    <td><?php echo $b->nik; ?></td>
		                    <td><?php echo $b->alamat; ?></td>
		                   <!--  <td><?php echo $b->jenis_alat; ?></td> -->
		                    <td><?php echo $b->biaya_sewa; ?></td>
		                    <td><?php echo $b->lama_sewa; ?></td>
		                    <td><?php echo $b->total_pembayaran; ?></td>
		                    <td><?php echo $b->keterangan; ?></td>
		                    <td>
		                        <a href="#editEmployeeModal" class="edit" data-toggle="modal" onclick="getData('<?php echo $b->id_penyewa?>', '<?php echo $b->tgl_sewa?>', '<?php echo $b->nama?>', '<?php echo $b->nik?>', '<?php echo $b->alamat?>', '<?php echo $b->biaya_sewa?>', '<?php echo $b->lama_sewa?>', '<?php echo $b->total_pembayaran?>', '<?php echo $b->keterangan?>')"><i class="fa fa-pencil" data-toggle="tooltip" title="Edit"></i></a>                        
		                         <a href="#deleteEmployeeModal" class="delete" data-toggle="modal" onclick="getID(<?php echo $b->id_penyewa?>)"><i class="fa fa-trash" data-toggle="tooltip" title="delete"></i></a>
		                        </a>
		                    </td>
		                  </tr>
		                  <?php } ?>
		                </tbody>
		            </table>
		          </div>
		      </div>
          </div> 
     </div>
  </div>
</div>
      <div id="addEmployeeModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <form action="<?php echo base_url(). 'Pembayaran/tambah_aksi'; ?> "method="post">
                <div class="modal-header">            
                  <h4 class="modal-title">TAMBAH DATA</h4>
                </div>
                <div class="modal-body"> 
                  <div class="form-group">
                    <input type="hidden" class="form-control" name="id_penyewa" placeholder="id_penyewa">
                  </div> 
                  <div class="form-group">
                    <label>Tanggal Sewa</label>
                    <input type="date" class="form-control" name="tgl_sewa" placeholder="tgl_sewa" required="required">
                  </div>
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="nama" required="required">
                  </div>
                  <div class="form-group">
                    <label>NIK</label>
                    <input type="text" class="form-control" name="nik" placeholder="nik" required="required">
                  </div> 
                  <div class="form-group">
                    <label>Alamat</label>
                    <select class="form-control" name="alamat" required>
                    <option value="">No Selected</option>
                    <?php foreach ($alamats as $b):?>
                      <option value="<?php echo $b->nama_alamat;?>"><?php echo $b->nama_alamat?></option>
                    <?php endforeach;?>
                    </select>
                  </div>     
                  <div class="form-group">
                    <label>Biaya Sewa</label>
                    <select class="form-control" name="biaya_sewa" id="biaya_sewa" required>
                    <option value="">No Selected</option>
                    <?php foreach ($alats as $b):?>
                      <option value="<?php echo $b->biaya_sewa;?>"><?php echo $b->jenis_alat?></option>
                    <?php endforeach;?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Lama Sewa</label>
                    <input type="number" class="form-control" name="lama_sewa" placeholder="lama_sewa" required="required">
                  </div> 
                  <div class="form-group">
                    <!-- <label>Total Pembayaran</label> -->
                    <input type="hidden" class="form-control" name="total_pembayaran" placeholder="total_pembayaran" required="required">
                  </div>
                  <div class="form-group">
                     <label>Keterangan Bayar</label>
                     <select class="form-control" name="keterangan">
                      <option value="Sudah">Sudah Bayar</option>
                      <option value="Belum">Belum Bayar</option>
                     </select>
                  </div>        
                </div>
                <div class="modal-footer">
                  <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                  <input type="submit" class="btn btn-default" value="Add">
                </div>
              </form>
            </div>
          </div>
      </div>
      <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?php echo base_url(). 'pembayaran/hapus/'?>" method="post">
                    <div class="modal-header">                      
                        <h4 class="modal-title">HAPUS DATA PENYEWA</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <input type="text" id="id_penyewa" name="id_penyewa" value=""/>
                    <div class="modal-body">                    
                        <p>Anda Yakin ingin Menghapus data ini?</p>
                        <p class="text-warning"><small>aksi ini tidak bisa di ulangi</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-default" value="Delete">
                    </div>
                </form>
            </div>
        </div>
      </div>
      <div id="resetEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?php echo base_url(). 'pembayaran/reset'?>" method="post">
                    <div class="modal-header">                      
                        <h4 class="modal-title">HAPUS DATA PENYEWA</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">                    
                        <p>Anda Yakin ingin Menghapus data ini?</p>
                        <p class="text-warning"><small>aksi ini tidak bisa di ulangi</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-default" value="Delete">
                    </div>
                </form>
            </div>
        </div>
      </div>
      <div id="editEmployeeModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <form action="<?php echo base_url(). 'pembayaran/update'; ?> "method="post">
                <div class="modal-header">            
                  <h4 class="modal-title">EDIT DATA</h4>
                </div>
                <div class="modal-body"> 
                  <div class="form-group"> 
                    <input type="hidden" class="form-control" id="id_penyewa1" name="id_penyewa" value="" placeholder="id_penyewa">
                  </div> 
                  <div class="form-group">
                    <label>Tanggal Sewa</label>
                    <input type="date" class="form-control" id="tgl_sewa" name="tgl_sewa" value="" placeholder="tgl_sewa" required="required">
                  </div>
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="" placeholder="nama" required="required">
                  </div>
                  <div class="form-group">
                    <label>NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik" value="" placeholder="nik" required="required">
                  </div> 
                  <div class="form-group">
                    <label>Alamat</label>
                    <select class="form-control" name="alamat" id="alamat" value="" required>
                    <option value="">No Selected</option>
                    <?php foreach ($alamats as $b):?>
                      <option value="<?php echo $b->nama_alamat;?>"><?php echo $b->nama_alamat?></option>
                    <?php endforeach;?>
                    </select>
                  </div>    
                  <div class="form-group">
                    <label>Biaya Sewa</label>
                    <select class="form-control" name="biaya_sewa" id="biaya_sewa" value="" required>
                    <option value="">No Selected</option>
                    <?php foreach ($alats as $b):?>
                      <option value="<?php echo $b->biaya_sewa;?>"><?php echo $b->jenis_alat?></option>
                    <?php endforeach;?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Lama Sewa</label>
                    <input type="number" class="form-control" id="lama_sewa" name="lama_sewa" value="0" placeholder="lama_sewa" required="required">
                  </div> 
                  <div class="form-group">
                    <!-- <label>Total Pembayaran</label> -->
                    <input type="hidden" class="form-control" id="total_pembayaran" name="total_pembayaran" value="0" placeholder="total_pembayaran" required="required">
                  </div>
                  <div class="form-group">
                     <label>Keterangan Bayar</label>
                     <select class="form-control" id="keterangan" name="keterangan" value="" >
                      <option value="Sudah">Sudah Bayar</option>
                      <option value="Belum">Belum Bayar</option>
                     </select>
                  </div>        
                </div>
                <div class="modal-footer">
                  <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                  <input type="submit" class="btn btn-default" value="Add">
                </div>
              </form>
            </div>>
          </div>
      </div>
      

  <script>
    function getID(data){
        document.getElementById("id_penyewa").value = data;
    }
    function getData(id_penyewa, tgl_sewa, nama, nik, alamat, biaya_sewa, lama_sewa, total_pembayaran, keterangan){
      document.getElementById("id_penyewa1").value = id_penyewa;
      document.getElementById("tgl_sewa").value = tgl_sewa;
      document.getElementById("nama").value = nama;
      document.getElementById("nik").value = nik;
      document.getElementById("alamat").value = alamat;
      document.getElementById("biaya_sewa").value = biaya_sewa;
      document.getElementById("lama_sewa").value = lama_sewa;
      document.getElementById("total_pembayaran").value = total_pembayaran;
      document.getElementById("keterangan").value = keterangan;
    }
  </script>