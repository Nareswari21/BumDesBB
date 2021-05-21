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
									<h2>Tabel Data Penerimaan Angsuran Pinjaman</h2>
									<p>Welcome to BUMDes <span class="bread-ntd">Bangun Bersama</span></p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
							<div class="breadcomb-report">
								<a href="<?php echo base_url() ?>penerimaanangsuran/export_excel" class="btn" data-placement="left"><i class="notika-icon notika-sent" data-toggle="tooltip" title="Download Report"></i></a>
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
                      <h2>Tabel Penerimaan Angsuran Pinjaman</h2>
                      <p>Tabel ini berisi data penerimaan angsuran pinjaman.</p>
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
			                    <th scope="col">ID Petugas</th>
			                    <th scope="col">Nama</th>
			                    <th scope="col">NIK</th>
			                    <th scope="col">Tabungan</th>
			                    <th scope="col">Biaya Angsuran</th>
			                    <th scope="col">Januari</th>
			                    <th scope="col">Februari</th>
			                    <th scope="col">Maret</th>
			                    <th scope="col">April</th>
			                    <th scope="col">Mei</th>
			                    <th scope="col">Juni</th>
			                    <th scope="col">Juli</th>
			                    <th scope="col">Agustus</th>
			                    <th scope="col">September</th>
			                    <th scope="col">Oktober</th>
			                    <th scope="col">November</th>
			                    <th scope="col">Desember</th>
			                    <th scope="col">Total Pembayaran</th>
			                    <th style="width: 125px;">Action</th>
			                  </tr>
			                </thead>
			                <tbody>
			                  <?php 
			                    $no=1;
			                    foreach($datas as $b){ 
			                  ?>
			                  <tr>
			                    <!-- <th scope="row"><?= $no++; ?></th> -->
			                    <td><?php echo $b->id_angsuran; ?></td>
			                    <td><?php echo $b->id_petugas; ?></td>
			                    <td><?php echo $b->nama; ?></td>
			                    <td><?php echo $b->nik; ?></td>
			                    <td><?php echo $b->tabungan; ?></td>
			                    <td><?php echo $b->biaya_angsuran; ?></td>
			                    <td><?php echo $b->januari; ?></td>
			                    <td><?php echo $b->februari; ?></td>
			                    <td><?php echo $b->maret; ?></td>
			                    <td><?php echo $b->april; ?></td>
			                    <td><?php echo $b->mei; ?></td>
			                    <td><?php echo $b->juni; ?></td>
			                    <td><?php echo $b->juli; ?></td>
			                    <td><?php echo $b->agustus; ?></td>
			                    <td><?php echo $b->september; ?></td>
			                    <td><?php echo $b->oktober; ?></td>
			                    <td><?php echo $b->november; ?></td>
			                    <td><?php echo $b->desember; ?></td>
			                    <td><?php echo $b->total_pembayaran; ?></td>
			                    <td>
			                        <a href="#editEmployeeModal" class="edit" data-toggle="modal" onclick="getData('<?php echo $b->id_angsuran?>', '<?php echo $b->id_petugas?>', '<?php echo $b->nama?>', '<?php echo $b->nik?>', '<?php echo $b->tabungan?>', '<?php echo $b->biaya_angsuran?>', '<?php echo $b->januari?>', '<?php echo $b->februari?>', '<?php echo $b->maret?>', '<?php echo $b->april?>', '<?php echo $b->mei?>', '<?php echo $b->juni?>', '<?php echo $b->juli?>', '<?php echo $b->agustus?>', '<?php echo $b->september?>', '<?php echo $b->oktober?>', '<?php echo $b->november?>', '<?php echo $b->desember?>', '<?php echo $b->total_pembayaran?>')"><i class="fa fa-pencil" data-toggle="tooltip" title="Edit"></i></a>                        
			                         <a href="#deleteEmployeeModal" class="delete" data-toggle="modal" onclick="getID(<?php echo $b->id_angsuran?>)"><i class="fa fa-trash" data-toggle="tooltip" title="delete"></i></a>
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
      <!-- <div id="addEmployeeModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <form action="<?php echo base_url(). 'penerimaanangsuran/tambah_aksi'; ?> "method="post">
                <div class="modal-header">            
                  <h4 class="modal-title">TAMBAH DATA</h4>
                </div>
                <div class="modal-body"> 
                  <div class="form-group">
                    <input type="hidden" class="form-control" name="id_angsuran" placeholder="id_angsuran">
                  </div>         
                  <div class="form-group">
                    <label>ID Petugas</label>
                    <input type="text" class="form-control" name="id_petugas" placeholder="id_petugas">
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
                    <label>Tabungan</label>
                    <input type="number" class="form-control" name="tabungan" placeholder="tabungan">
                  </div>
                  <div class="form-group">
                    <label>Januari</label>
                    <input type="number" class="form-control" name="januari"placeholder="januari">
                  </div>
                  <div class="form-group">
                    <label>Februari</label>
                    <input type="number" class="form-control" name="februari" placeholder="februari">
                  </div>
                  <div class="form-group">
                    <label>Maret</label>
                    <input type="number" class="form-control" name="maret" placeholder="maret">
                  </div>
                  <div class="form-group">
                    <label>April</label>
                    <input type="number" class="form-control" name="april" placeholder="april">
                  </div>
                  <div class="form-group">
                    <label>Mei</label>
                    <input type="number" class="form-control" name="mei" placeholder="mei">
                  </div>
                  <div class="form-group">
                    <label>Juni</label>
                    <input type="number" class="form-control" name="juni" placeholder="juni">
                  </div>
                  <div class="form-group">
                    <label>Juli</label>
                    <input type="number" class="form-control" name="juli" placeholder="juli">
                  </div>
                  <div class="form-group">
                    <label>Agustus</label>
                    <input type="number" class="form-control" name="agustus" placeholder="agustus">
                  </div> 
                  <div class="form-group">
                    <label>September</label>
                    <input type="number" class="form-control" name="september" placeholder="september">
                  </div>
                  <div class="form-group">
                    <label>Oktober</label>
                    <input type="number" class="form-control" name="oktober" placeholder="oktober">
                  </div>
                  <div class="form-group">
                    <label>November</label>
                    <input type="number" class="form-control" name="november" placeholder="november">
                  </div>
                  <div class="form-group">
                    <label>Desember</label>
                    <input type="number" class="form-control" name="desember" placeholder="desember">
                  </div>
                  <div class="form-group">
                    <label>Total Pembayaran</label>
                    <input type="number" class="form-control" name="total_pembayaran" placeholder="total_pembayaran">
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
                <form action="<?php echo base_url(). 'datasampah/hapus/'. $b->id_sampah?>" method="post">
                    <div class="modal-header">                      
                        <h4 class="modal-title">HAPUS DATA</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <input type="text" id="id_angsuran" name="id_angsuran" value=""/>
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
                <form action="<?php echo base_url(). 'penerimaanangsuran/reset/'?>" method="post">
                    <div class="modal-header">                      
                        <h4 class="modal-title">HAPUS DATA</h4>
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
              <form action="<?php echo base_url(). 'penerimaanangsuran/update'; ?> "method="post">
                <div class="modal-header">            
                  <h4 class="modal-title">EDIT DATA</h4>
                </div>
                <div class="modal-body"> 
                  <div class="form-group">
                    <input type="hidden" class="form-control" id="id_angsuran1" name="id_angsuran" value="" placeholder="id_angsuran">
                  </div>         
                  <div class="form-group">
                    <label>ID Petugas</label>
                    <input type="text" class="form-control" id="id_petugas" name="id_petugas" value="" placeholder="id_petugas" required="required">
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
                    <label>Tabungan</label>
                    <input type="number" class="form-control" id="tabungan" name="tabungan" value="0" placeholder="tabungan">
                  </div>
                  <div class="form-group">
                    <label>Biaya Angsuran</label>
                    <input type="number" class="form-control" id="biaya_angsuran" name="biaya_angsuran" value="0" placeholder="biaya_angsuran">
                  </div>
                  <div class="form-group">
                    <label>Januari</label>
                    <input type="number" class="form-control" id="januari" name="januari" value="0" placeholder="januari">
                  </div>
                  <div class="form-group">
                    <label>Februari</label>
                    <input type="number" class="form-control" id="februari" name="februari" value="0" placeholder="februari">
                  </div>
                  <div class="form-group">
                    <label>Maret</label>
                    <input type="number" class="form-control" id="maret" name="maret" value="0" placeholder="maret">
                  </div>
                  <div class="form-group">
                    <label>April</label>
                    <input type="number" class="form-control" id="april" name="april" value="0" placeholder="april">
                  </div>
                  <div class="form-group">
                    <label>Mei</label>
                    <input type="number" class="form-control" id="mei" name="mei" value="0" placeholder="mei">
                  </div>
                  <div class="form-group">
                    <label>Juni</label>
                    <input type="number" class="form-control" id="juni" name="juni" value="0" placeholder="juni">
                  </div>
                  <div class="form-group">
                    <label>Juli</label>
                    <input type="number" class="form-control" id="juli" name="juli" value="0" placeholder="juli">
                  </div>
                  <div class="form-group">
                    <label>Agustus</label>
                    <input type="number" class="form-control" id="agustus" name="agustus" value="0" placeholder="agustus">
                  </div> 
                  <div class="form-group">
                    <label>September</label>
                    <input type="number" class="form-control" id="september" name="september" value="0" placeholder="september">
                  </div>
                  <div class="form-group">
                    <label>Oktober</label>
                    <input type="number" class="form-control" id="oktober" name="oktober" value="0" placeholder="oktober">
                  </div>
                  <div class="form-group">
                    <label>November</label>
                    <input type="number" class="form-control" id="november" name="november" value="0" placeholder="november">
                  </div>
                  <div class="form-group">
                    <label>Desember</label>
                    <input type="number" class="form-control" id="desember" name="desember" value="0" placeholder="desember">
                  </div>
                  <div class="form-group">
                    <input type="hidden" class="form-control" name="total_pembayaran" value="0" placeholder="total_pembayaran">
                  </div>           
                </div>
                <div class="modal-footer">
                  <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                  <input type="submit" class="btn btn-default" value="Edit">
                </div>
              </form>
            </div>
          </div>
      </div>
      

  <script>
    function getID(data){
        document.getElementById("id_angsuran").value = data;
    }
  </script>
  <script>
    function getData(id_angsuran, id_petugas, nama, nik, tabungan, biaya_angsuran, januari,  februari, maret, april, mei, juni, juli, agustus, september, oktober, november, desember, total_pembayaran){
      document.getElementById("id_angsuran1").value = id_angsuran;
      document.getElementById("id_petugas").value = id_petugas;
      document.getElementById("nama").value = nama;
      document.getElementById("nik").value = nik;
      document.getElementById("tabungan").value = tabungan;
      document.getElementById("biaya_angsuran").value = biaya_angsuran;
      document.getElementById("januari").value = januari;
      document.getElementById("februari").value = februari;
      document.getElementById("maret").value = maret;
      document.getElementById("april").value = april;
      document.getElementById("mei").value = mei;
      document.getElementById("juni").value = juni;
      document.getElementById("juli").value = juli;
      document.getElementById("agustus").value = agustus;
      document.getElementById("september").value = september;
      document.getElementById("oktober").value = oktober;
      document.getElementById("november").value = november;
      document.getElementById("desember").value = desember;
      document.getElementById("total_pembayaran").value = total_pembayaran;
    }
  </script>