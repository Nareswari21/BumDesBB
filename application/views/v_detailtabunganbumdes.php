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
									<h2>Detail Tabungan BUMDes</h2>
									<p>Welcome to BUMDes <span class="bread-ntd">Bangun Bersama</span></p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
							<div class="breadcomb-report">
								<a href="<?php echo base_url() ?>tabunganbumdes/export_excel" class="btn" data-placement="left"><i class="notika-icon notika-sent" data-toggle="tooltip" title="Download Report"></i></a>
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
                      <h2>Detail Tabungan BUMDes</h2>
                      <p>Tabel ini adalah detail tabel data tabungan BUMDes berdasarkan kode bank.</p>
                  </div>
                  <div class="div.dataTables_wrapper">
		            <table class="table table-striped table-hover" id="example">
			            <thead>
	                        <tr>
	                            <th>Kode Bank</th>
	                            <th>Transaksi</th>
	                            <th>Menu</th>
	                            <th>ID Petugas</th>
	                            <th>Nominal</th>
	                        </tr>
	                    </thead>
		                  <tbody>
		                    <?php foreach($detail_transaksi as $b){ ?>
							<tr>
								<td class="cell" data-title="Kode Bank">
									<input type="text" name="kode_bank" value="<?php echo $b->kode_bank?>" readonly="readonly" required>
								</td> 
								<td class="cell" data-title="Tanggal Transaksi">
									<input type="date" name="tgl_transaksi" value="<?php echo $b->tgl_transaksi?>" readonly="readonly" required>
								</td>
								<td class="cell" data-title="Menu">
									<input type="text" name="menu" value="<?php echo $b->menu?>" readonly="readonly" required>
								</td>
								<td class="cell" data-title="ID Petugas">
									<input type="text" name="id_petugas" value="<?php echo $b->id_petugas?>" readonly="readonly" required>
								</td>
								<td class="cell" data-title="Nominal">
									<input type="number" name="nominal" value="<?php echo $b->nominal?>" readonly="readonly" required>
								</td>
							</tr>
		                  <?php } ?>
		                 </tbody>
		                 <tr>
		                 	<td></td>
							<td></td>
							<td></td>
							<td>
								Total
							</td>
							<td>
								<input type="number" name="total" value="<?php echo $total?>" readonly="readonly" required>
							</td>
						</tr>
		            </table>
		        </div>
		      </div>
		  </div>
      </div>
  </div>
</div>