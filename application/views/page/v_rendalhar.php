<!--Content -->
    <div class="container">
  		<h4>Pengajuan Pengadaan</h4>
  		<div style="margin-top:20px;">
  		<form>
  			<fieldset>
	  		<table class="table table-striped">
			  <!-- Tanggal -->
			  <tr>
			    <th>Tanggal Dokumen</th>
			    <th><div class="input-append date" id="dp3" data-date="<?php echo date('d-m-Y'); ?>" data-date-format="dd-mm-yyyy">
							<input class="span2" size="16" type="text" name="tanggal" value="<?php echo date('d-m-Y'); ?>" readonly>
							<span class="add-on"><i class="icon-calendar"></i></span>
					  	</div></th>
			  </tr>
			  <!-- Pemilik Aktivitas -->
			  <tr>
			  	<th>Pemilik Aktivitas</th>
			  	<th><select id="selectbasic" name="pemilikaktv" class="input-xlarge" placeholder="Pilih Pemilik">
			      <option>Pemeliharaan</option>
			      <option>Operasional</option>
			      <option>Administrasi</option>
			    </select></th>
			  </tr>
			  <!-- Jenis Aktivitas -->
			  <tr>
			  	<th>Jenis Aktivitas</th>
			  	<th><select id="selectbasic" name="jenisaktv" class="input-xlarge" placeholder="Pilih Pemilik">
			      <option>Preventif</option>
			      <option>Periodik</option>
			      <option>Produktif</option>
			      <option>Prediktif</option>
			    </select></th>
			  </tr>
			  <!-- Pekerjaan -->
			  <tr>
			  	<th>Perkerjaan</th>
			  	<th><select id="selectbasic" name="pekerjaan" class="input-xlarge" placeholder="Pilih Pemilik">
			      <option>Jasa</option>
			      <option>Material</option>
			    </select></th>
			  </tr>
			  <!-- Kode Aktivitas -->
			  <tr>
			  	<th>Kode Aktivitass</th>
			  	<th><select id="selectbasic" name="kodeaktv" class="input-xlarge" placeholder="Pilih Pemilik">
			      <option>Jasa</option>
			      <option>Material</option>
			    </select></th>
			  </tr>
			  <!-- Nama Aktivitas -->
			  <tr>
			  	<th>Nama Aktivitas</th>
			  	<th><input type="text" placeholder="Nama Aktivitas" name="aktv" class="input-xlarge" required></th>
			  </tr>
			  <!-- Deskripsi -->
			  <tr>
			  	<th>Deskripsi</th>
			  	<th><textarea rows="5" name="deskripsi" placeholder="Deskripsi" required></textarea></th>
			  </tr>
			  <!-- Budget -->
			  <tr>
			  	<th>Budget</th>
			  	<th><div class="input-prepend input-append">
					  <span class="add-on">Rp.</span>
					  <input class="span2" id="appendedPrependedInput" type="text" placeholder="5000000" required>
					</div>
				</th>
			  </tr>
			  <!-- Kelengkapan dokumen -->
			  <tr>
			  	<th>Kelengkapan Dokumen</th>
			  	<th>
			  		<label class="checkbox inline">
					  <input type="checkbox" id="inlineCheckbox1" value="TOR" name="chktor"> TOR
					</label>
					<label class="checkbox inline">
					  <input type="checkbox" id="inlineCheckbox2" value="DMR" name="chkdmr"> DMR
					</label>
					<label class="checkbox inline">
					  <input type="checkbox" id="inlineCheckbox3" value="PR" name="chkpr"> PR
					</label>
				</th>
			  </tr>
			  <!-- Button -->
			  <tr>
			  	<th></th>
			  	<th>
				  	<button class="btn btn-success" type="submit">Konfirmasi Dokumen</button>
	  				<button class="btn btn btn-danger" type="cancel">Cancel</button>
  				</th>
			  </tr>
			</table>
	  		</fieldset>
		</form>
		</div>
    </div>
   <!--/Content -->