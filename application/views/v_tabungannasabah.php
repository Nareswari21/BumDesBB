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
									<h2>Tabel Tabungan Nasabah</h2>
									<p>Welcome to BUMDes <span class="bread-ntd">Bangun Bersama</span></p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
							<div class="breadcomb-report">
								<a href="<?php echo base_url() ?>tabungannasabah/export_excel" class="btn" data-placement="left"><i class="notika-icon notika-sent" data-toggle="tooltip" title="Download Report"></i></a>
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
                      <h2>Tabel Tabungan Nasabah</h2>
                      <p>Tabel ini adalah tabel data tabungan Nasabah BUMDes.</p>
                      <div style="float:right;" class="col-lg-3">
                        <a href="#resetEmployeeModal" class="btn btn-default" class="btn" data-toggle="modal"><i class="fa fa-minus-circle"></i> <span>Hapus</span></a>
                        <a href="#addEmployeeModal" class="btn btn-default" class="btn" data-toggle="modal"><i class="fa fa-plus-circle"></i> <span>Tambah Data</span></a>
                      </div>
                  </div>
                  <div class="div.dataTables_wrapper">
		            <table class="table table-striped table-hover" id="example">
		                  <thead>
		                    <tr>
		                      <th scope="col">No</th>
		                      <th scope="col">NIK</th>
		                      <th scope="col">Tanggal Transaksi</th>
		                      <th scope="col">Menu</th>
		                      <th scope="col">ID Petugas</th>
		                      <th scope="col">Nominal</th>
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
		                      <td><?php echo $b->id_tabungannasabah; ?></td>
		                      <td><?php echo $b->nik; ?></td>
		                      <td><?php echo $b->tgl_transaksi; ?></td>
		                      <td><?php echo $b->menu; ?></td>
		                      <td><?php echo $b->id_petugas; ?></td>
		                      <td><?php echo $b->nominal; ?></td>
		                      <td>
		                          <a href="<?php echo base_url(). 'tabungannasabah/detail/' . $b->nik ?>" class="view" title="View" data-toggle="tooltip"><i class="fa fa-eye"></i></a>
		                          <a href="#editEmployeeModal" class="edit" data-toggle="modal" onclick="getData('<?php echo $b->id_tabungannasabah?>', '<?php echo $b->nik?>', '<?php echo $b->tgl_transaksi?>', '<?php echo $b->menu?>', '<?php echo $b->id_petugas?>', '<?php echo $b->nominal?>')"><i class="fa fa-pencil" data-toggle="tooltip" title="Edit"></i></a>                        
		                           <a href="#deleteEmployeeModal" class="delete" data-toggle="modal" onclick="getID(<?php echo $b->id_tabungannasabah?>)"><i class="fa fa-trash" data-toggle="tooltip" title="delete"></i></a>
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
      <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?php echo base_url(). 'tabungannasabah/hapus/'. $b->id_tabungannasabah?>" method="post">
                    <div class="modal-header">                      
                        <h4 class="modal-title">HAPUS DATA</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <input type="text" id="id_tabungannasabah" name="id_tabungannasabah" value=""/>
                    <div class="modal-body">                    
                        <p>Anda Yakin ingin Menghapus data ini?</p>
                        <p class="text-warning"><small>aksi ini tidak bisa di ulangi</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </div>
                </form>
            </div>
        </div>
      </div>
      <div id="resetEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?php echo base_url(). 'tabungannasabah/reset'?>" method="post">
                    <div class="modal-header">                      
                        <h4 class="modal-title">RESET DATA</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">                    
                        <p>Anda Yakin ingin Menghapus data ini?</p>
                        <p class="text-warning"><small>aksi ini tidak bisa di ulangi</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </div>
                </form>
            </div>
        </div>
      </div>
      <div id="addEmployeeModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <form action="<?php echo base_url(). 'tabungannasabah/tambah_aksi'; ?> "method="post">
                <div class="modal-header">            
                  <h4 class="modal-title">TAMBAH DATA</h4>
                </div>
                <div class="modal-body"> 
                  <div class="form-group">
                    <input type="hidden" class="form-control" name="id_tabungannasabah" placeholder="id_tabungannasabah">
                  </div>
                  <div class="form-group">
                    <label>NIK</label>
                    <select class="form-control" name="nik" required>
                    <option value="">No Selected</option>
                    <?php foreach ($rekenings as $b):?>
                      <option value="<?php echo $b->nik;?>"><?php echo $b->nik?></option>
                    <?php endforeach;?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Tanggal Transaksi</label>
                    <input type="date" class="form-control" name="tgl_transaksi" placeholder="tgl_transaksi" required="required">
                  </div>
                  <div class="form-group">
                     <label>Menu</label>
                     <select class="form-control" name="menu">
                      <option value="Setor Tabungan">Setor Tabungan</option>
                      <option value="Tarik Tabungan">Tarik Tabungan</option>
                     </select>
                  </div>
                  <div class="form-group">
                    <label>ID Petugas</label>
                    <select class="form-control" name="id_petugas" required>
                    <option value="">No Selected</option>
                    <?php foreach ($rekenings as $b):?>
                      <option value="<?php echo $b->id_petugas;?>"><?php echo $b->id_petugas?></option>
                    <?php endforeach;?>
                    </select>
                  </div>  
                  <div class="form-group">
                    <label>Nominal</label>
                    <input type="number" class="form-control" name="nominal" placeholder="nominal" required="required">
                  </div>      
                </div>
                <div class="modal-footer">
                  <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                  <input type="submit" class="btn btn-danger" value="Add">
                </div>
              </form>
            </div>
          </div>
      </div>
      <div id="editEmployeeModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <form action="<?php echo base_url(). 'tabungannasabah/update'; ?> "method="post">
                <div class="modal-header">            
                  <h4 class="modal-title">EDIT DATA</h4>
                </div>
                <div class="modal-body"> 
                  <div class="form-group">
                    <input type="hidden" class="form-control" id="id_tabungannasabah1" name="id_tabungannasabah" value="" placeholder="id_tabungannasabah">
                  </div>
                  <div class="form-group">
                    <label>NIK</label>
                    <select class="form-control" name="nik" id="nik" value="" required>
                    <option value="">No Selected</option>
                    <?php foreach ($rekenings as $b):?>
                      <option value="<?php echo $b->nik;?>"><?php echo $b->nik?></option>
                    <?php endforeach;?>
                    </select>
                  </div> 
                  <div class="form-group">
                    <label>Tanggal Transaksi</label>
                    <input type="date" class="form-control" id="tgl_transaksi" name="tgl_transaksi" value="" placeholder="tgl_transaksi" required="required">
                  </div>
                  <div class="form-group">
                     <label>Menu</label>
                     <select class="form-control" id="menu" name="menu" value="" >
                      <option value="Setor Tabungan">Setor Tabungan</option>
                      <option value="Tarik Tabungan">Tarik Tabungan</option>
                     </select>
                  </div>
                  <div class="form-group">
                    <label>ID Petugas</label>
                    <select class="form-control" name="id_petugas" id="id_petugas" value="" required>
                    <option value="">No Selected</option>
                    <?php foreach ($rekenings as $b):?>
                      <option value="<?php echo $b->id_petugas;?>"><?php echo $b->id_petugas?></option>
                    <?php endforeach;?>
                    </select>
                  </div>    
                  <div class="form-group">
                    <label>Nominal</label>
                    <input type="number" class="form-control" id="nominal" name="nominal" value="" placeholder="nominal" required="required">
                  </div>
                </div>         
                <div class="modal-footer">
                  <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                  <input type="submit" class="btn btn-danger" value="Edit">
                </div>
              </form>
            </div>
          </div>
      </div>
      

  <script>
    function getID(data){
        document.getElementById("id_tabungannasabah").value = data;
    }
  </script>
  <script>
    function getData(id_tabungannasabah, nik, tgl_transaksi, menu, id_petugas, nominal){
        document.getElementById("id_tabungannasabah1").value = id_tabungannasabah;
        document.getElementById("nik").value = nik;
        document.getElementById("tgl_transaksi").value = tgl_transaksi;
        document.getElementById("menu").value = menu;
        document.getElementById("id_petugas").value = id_petugas;
        document.getElementById("nominal").value = nominal;
    }
  </script>