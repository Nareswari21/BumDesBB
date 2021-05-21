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
									<h2>Tabel Data Debitur</h2>
									<p>Welcome to BUMDes <span class="bread-ntd">Bangun Bersama</span></p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
							<div class="breadcomb-report">
								<a href="<?php echo base_url() ?>itungdebit/export_excel" class="btn" data-placement="left"><i class="notika-icon notika-sent" data-toggle="tooltip" title="Download Report"></i></a>
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
                      <h2>Tabel Data Debitur</h2>
                      <p>Tabel ini adalah tabel tentang data debitur simpan pinjam.</p>
                      <div style="float:right;" class="col-lg-2">
                        <a href="#resetEmployeeModal" class="btn btn-default" class="btn" data-toggle="modal"><i class="fa fa-minus-circle"></i> <span>Hapus</span></a>
                        <!-- <a href="#addEmployeeModal" class="btn btn-default" class="btn" data-toggle="modal"><i class="fa fa-plus-circle"></i> <span>Tambah Data</span></a> -->
                      </div>
                  </div>
                  <div class="table-responsive">
			          <table class="table table-striped table-hover" id="example">
		                <thead>
		                  <tr>
		                    <th scope="col">No</th>
		                    <th scope="col">Tanggal Pencairan</th>
		                    <th scope="col">No Kontrak Peminjaman</th>
		                    <th scope="col">Jaminan</th>
		                    <th scope="col">NIK</th>
		                    <th scope="col">No KK</th>
		                    <th scope="col">Nama</th>
		                    <th scope="col">Alamat</th>
		                    <th scope="col">Tenor Peminjaman</th>
		                    <th scope="col">Biaya Angsuran</th>
		                    <th scope="col">Pokok Pinjaman</th>
		                    <th scope="col">Jasa Pinjaman</th>
		                    <th scope="col">Total Pembayaran Pokok</th>
		                    <th scope="col">Total Pembayaran Jasa</th>
		                    <th scope="col">Sisa Pokok</th>
		                    <th scope="col">Sisa Jasa</th>
		                    <th scope="col">Piutang Angsuran</th>
		                    <th style="width: 125px;">Action</th>
		                  </tr>
		                </thead>
		                <tbody>
		                  <?php 
		                    $no=1;
		                    foreach($datas as $b){ 
		                  ?>
		                  <tr>
		                   <!--  <td><?php echo $no++; ?></td> -->
		                    <td><?php echo $b->id_total; ?></td>
		                    <td><?php echo $b->tgl_pencairan; ?></td>
		                    <td><?php echo $b->no_kontrak_peminjaman; ?></td>
		                    <td><?php echo $b->jaminan; ?></td>
		                    <td><?php echo $b->nik; ?></td>
		                    <td><?php echo $b->no_kk; ?></td>
		                    <td><?php echo $b->nama; ?></td>
		                    <td><?php echo $b->alamat; ?></td>
		                    <td><?php echo $b->tenor_peminjaman; ?></td>
		                    <td><?php echo $b->biaya_angsuran; ?></td>
		                    <td><?php echo $b->pokok_pinjaman; ?></td>
		                    <td><?php echo $b->jasa_pinjaman; ?></td>
		                    <td><?php echo $b->total_pembayaranpokok; ?></td>
		                    <td><?php echo $b->total_pembayaranjasa; ?></td>
		                    <td><?php echo $b->sisa_pokok; ?></td>
		                    <td><?php echo $b->sisa_jasa; ?></td>
		                    <td><?php echo $b->piutang_angsuran; ?></td>
		                    <td>
		                        <a href="#editEmployeeModal" class="edit" data-toggle="modal"onclick="getData('<?php echo $b->id_total?>', '<?php echo $b->tgl_pencairan?>', '<?php echo $b->no_kontrak_peminjaman?>', '<?php echo $b->jaminan?>',  '<?php echo $b->nik?>', '<?php echo $b->no_kk?>', '<?php echo $b->nama?>', '<?php echo $b->alamat?>', '<?php echo $b->tenor_peminjaman?>', '<?php echo $b->biaya_angsuran?>', '<?php echo $b->pokok_pinjaman?>', '<?php echo $b->jasa_pinjaman?>', '<?php echo $b->total_pembayaranpokok?>', '<?php echo $b->total_pembayaranjasa?>', '<?php echo $b->sisa_pokok?>', '<?php echo $b->sisa_jasa?>', '<?php echo $b->piutang_angsuran?>')"><i class="fa fa-pencil" data-toggle="tooltip" title="Edit"></i></a>                        
		                         <a href="#deleteEmployeeModal" class="delete" data-toggle="modal" onclick="getID(<?php echo $b->id_total?>)"><i class="fa fa-trash" data-toggle="tooltip" title="delete"></i></a>
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
     <!--  <div id="addEmployeeModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <form action="<?php echo base_url(). 'itungdebit/tambah_aksi'; ?> "method="post">
                <div class="modal-header">            
                  <h4 class="modal-title">TAMBAH DATA</h4>
                </div>
                <div class="modal-body"> 
                  <div class="form-group">
                    <input type="hidden" class="form-control" name="id_total" placeholder="id_total">
                  </div>         
                  <div class="form-group">
                    <label>Tanggal Pencairan</label>
                    <input type="date" class="form-control" name="tgl_pencairan" placeholder="tgl_pencairan" required="required">
                  </div>
                  <div class="form-group">
                    <label>jaminan</label>
                    <input type="text" class="form-control" name="jaminan" placeholder="jaminan" required="required">
                  </div>
                  <div class="form-group">
                    <label>No Kontrak Peminjaman</label>
                    <input type="text" class="form-control" name="no_kontrak_peminjaman" placeholder="no_kontrak_peminjaman" required="required">
                  </div>
                  <div class="form-group">
                    <label>NIK</label>
                    <input type="text" class="form-control" name="nik" placeholder="nik" required="required">
                  </div>
                  <div class="form-group">
                    <label>No KK</label>
                    <input type="text" class="form-control" name="no_kk" placeholder="no_kk" required="required">
                  </div>
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="nama" required="required">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="alamat" required="required">
                  </div>
                  <div class="form-group">
                    <label>Tenor Peminjaman</label>
                    <input type="number" class="form-control" name="tenor_peminjaman" placeholder="tenor_peminjaman" required="required">
                  </div>
                  <div class="form-group">
                    <label>Pokok Pinjaman</label>
                    <input type="number" class="form-control" name="pokok_pinjaman" placeholder="pokok_pinjaman" required="required">
                  </div>
                  <div class="form-group">
                    <label>Jasa Pinjaman</label>
                    <input type="number" class="form-control" name="jasa_pinjaman" placeholder="jasa_pinjaman" required="required">
                  </div>
                  <div class="form-group">
                    <label>Total Pembayaran Pokok</label>
                    <input type="number" class="form-control" name="total_pembayaranpokok" placeholder="total_pembayaranpokok" required="required">
                  </div>
                  <div class="form-group">
                    <label>Total Pembayaran Jasa</label>
                    <input type="number" class="form-control" name="total_pembayaranjasa" placeholder="total_pembayaranjasa" required="required">
                  </div>
                  <div class="form-group">
                    <label>Sisa Pokok</label>
                    <input type="number" class="form-control" name="sisa_pokok" placeholder="sisa_pokok" required="required">
                  </div>
                  <div class="form-group">
                    <label>Sisa Jasa</label>
                    <input type="number" class="form-control" name="sisa_jasa
                    " placeholder="sisa_jasa" required="required">
                  </div>
                  <div class="form-group">
                    <label>Piutang Angsuran</label>
                    <input type="number" class="form-control" name="piutang_angsuran" placeholder="piutang_angsuran" required="required">
                  </div>     
                </div>
                <div class="modal-footer">
                  <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                  <input type="submit" class="btn btn-default" value="Add">
                </div>
              </form>
            </div>
          </div>
      </div> -->
      <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?php echo base_url(). 'itungdebit/hapus/'. $b->id_total?>" method="post">
                    <div class="modal-header">                      
                        <h4 class="modal-title">HAPUS DATA PENCAIRAN DANA</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <input type="text" id="id_total" name="id_total" value=""/>
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
                <form action="<?php echo base_url(). 'itungdebit/reset/'?>" method="post">
                    <div class="modal-header">                      
                        <h4 class="modal-title">HAPUS DATA DEBIT</h4>
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
              <form action="<?php echo base_url(). 'itungdebit/update/'?> "method="post">
                <div class="modal-header">            
                  <h4 class="modal-title">EDIT DATA</h4>
                </div>
                <div class="modal-body"> 
                  <div class="form-group">
                    <input type="hidden" class="form-control" name="id_total"  id="id_total1" value="" placeholder="id_total">
                  </div>         
                  <div class="form-group">
                    <label>Tanggal Pencairan</label>
                    <input type="date" class="form-control" name="tgl_pencairan" id="tgl_pencairan" value="" placeholder="tgl_pencairan" required="required">
                  <div class="form-group">
                    <label>No Kontrak Peminjaman</label>
                    <input type="text" class="form-control" name="no_kontrak_peminjaman" id="no_kontrak_peminjaman" value="" placeholder="no_kontrak_peminjaman" required="required">
                  </div>
                  </div><div class="form-group">
                    <label>Jaminan</label>
                    <input type="text" class="form-control" id="jaminan" name="jaminan" id="jaminan" value="" placeholder="jaminan" required="required">
                  </div>
                  <div class="form-group">
                    <label>NIK</label>
                    <input type="text" class="form-control" name="nik" id="nik" value="" placeholder="nik" required="required">
                  </div>
                  <div class="form-group">
                    <label>No KK</label>
                    <input type="text" class="form-control" name="no_kk" id="no_kk" value="" placeholder="no_kk" required="required">
                  </div>
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama"  id="nama" value="" placeholder="nama" required="required">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat"  id="alamat" value="" placeholder="alamat" required="required">
                  </div>
                  <div class="form-group">
                    <label>Tenor Peminjaman</label>
                    <input type="number" class="form-control" name="tenor_peminjaman"  id="tenor_peminjaman" value="0" placeholder="tenor_peminjaman" required="required">
                  </div>
                   <div class="form-group">
                    <label>Biaya Angsuran</label>
                    <input type="number" class="form-control" name="biaya_angsuran" id="biaya_angsuran" value="0" placeholder="biaya_angsuran" required="required">
                  </div>
                  <div class="form-group">
                    <label>Pokok Pinjaman</label>
                    <input type="number" class="form-control" name="pokok_pinjaman" id="pokok_pinjaman" value="0" placeholder="pokok_pinjaman" required="required">
                  </div> 
                  <div class="form-group">
                    <!-- <label>Jasa Pinjaman</label> -->
                    <input type="hidden" class="form-control" name="jasa_pinjaman"  id="jasa_pinjaman" value="0" placeholder="jasa_pinjaman" required="required">
                  </div> 
                  <div class="form-group">
                    <!-- <label>Total Pembayaran Pokok</label> -->
                    <input type="hidden" class="form-control" name="total_pembayaranpokok" id="total_pembayaranpokok" value="0" placeholder="total_pembayaranpokok" required="required">
                  </div> 
                  <div class="form-group">
                    <label>Total Pembayaran Jasa</label>
                    <input type="number" class="form-control" name="total_pembayaranjasa"  id="total_pembayaranjasa" value="0" placeholder="total_pembayaranjasa" required="required">
                  </div>  
                  <div class="form-group">
                    <label>Sisa Pokok</label>
                    <input type="number" class="form-control" name="sisa_pokok" id="sisa_pokok" value="0" placeholder="sisa_pokok" required="required">
                  </div>
                  <div class="form-group">
                    <label>Sisa Jasa</label>
                    <input type="number" class="form-control" name="sisa_jasa" id="sisa_jasa" value="0" placeholder="sisa_jasa" required="required">
                  </div> 
                  <div class="form-group">
                    <label>Piutang Angsuran</label>
                    <input type="number" class="form-control" name="piutang_angsuran" id="piutang_angsuran" value="0" placeholder="bulan yang belum dibayarkan" required="required">
                  </div>        
                </div>
                <div class="modal-footer">
                  <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                  <input type="submit" class="btn btn-default" value="Edit">
                </div>
              </form>
            </div>>
          </div>
      </div>

  <script>
    function getID(data){
        document.getElementById("id_total").value = data;
    }
  </script>
  <script>
    function getData(id_total, tgl_pencairan, no_kontrak_peminjaman, jaminan, nik, no_kk, nama, alamat, tenor_peminjaman, biaya_angsuran, pokok_pinjaman, jasa_pinjaman,total_pembayaranpokok, total_pembayaranjasa, sisa_pokok, sisa_jasa, piutang_angsuran){
      document.getElementById("id_total1").value = id_total;
      document.getElementById("tgl_pencairan").value = tgl_pencairan;
      document.getElementById("jaminan").value = jaminan;
      document.getElementById("no_kontrak_peminjaman").value = no_kontrak_peminjaman;
      document.getElementById("nik").value = nik;
      document.getElementById("no_kk").value = no_kk;
      document.getElementById("nama").value = nama;
      document.getElementById("alamat").value = alamat;
      document.getElementById("tenor_peminjaman").value = tenor_peminjaman;
      document.getElementById("biaya_angsuran").value = biaya_angsuran;
      document.getElementById("pokok_pinjaman").value = pokok_pinjaman;
      document.getElementById("total_pembayaranpokok").value = total_pembayaranpokok;
      document.getElementById("total_pembayaranjasa").value = total_pembayaranjasa;
      document.getElementById("sisa_pokok").value = sisa_pokok;
      document.getElementById("sisa_jasa").value = sisa_jasa;
      document.getElementById("piutang_angsuran").value = piutang_angsuran;
    }
  </script>