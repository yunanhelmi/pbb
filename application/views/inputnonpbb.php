		<script>
			/*
			Auto tabbing script- By JavaScriptKit.com
			http://www.javascriptkit.com
			This credit MUST stay intact for use
			*/
			function moveOnMax(field,nextFieldID)
			{
				if(field.value.length >= field.maxLength)
				{
					document.getElementById(nextFieldID).focus();
				}
			}
		</script>
		<SCRIPT language=Javascript>
			  function isNumberKey(evt)
			  {
				 var charCode = (evt.which) ? evt.which : event.keyCode
				 if (charCode > 31 && (charCode < 48 || charCode > 57))
					return false;

				 return true;
			  }
		</SCRIPT>
		
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styleinput.css" type="text/css">
		
		<div class="form-style-2">
			<div class="form-style-2-heading">Form Input Data NON PBB Madiun</div>
			<?php echo form_open('homecon/doinputnonpbb'); ?>
				<label><span>Nama Pajak <span class="required">*</span></span>
					<select name="namapajaknon" class="select-field">
						<option value="BPHTB">BPHTB</option>
						<option value="Parkir">Parkir</option>
						<option value="Air Tanah">Air Tanah</option>
						<option value="Hotel">Hotel</option>
						<option value="Mineral">Mineral</option>
						<option value="Restoran">Restoran</option>
						<option value="Penerangan Jalan">Penerangan Jalan</option>
					</select>
				</label>
				<label>
					<span>Target Pajak <span class="required">*</span></span>
					<input type="text" class="tel-number-field" id="targetnon1" name="targetnon1" maxlength="3" onkeyup="moveOnMax(this,'targetnon2')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" id="targetnon2" name="targetnon2" maxlength="3" onkeyup="moveOnMax(this,'targetnon3')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" id="targetnon3" name="targetnon3" maxlength="3" onkeyup="moveOnMax(this,'targetnon4')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" id="targetnon4" name="targetnon4" maxlength="3" onkeyup="moveOnMax(this,'targetnon5')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" id="targetnon5" name="targetnon5" maxlength="3" onkeypress="return isNumberKey(event)"/>
				</label>
				<label>
					<span>Realisasi Pajak <span class="required">*</span></span>
					<input type="text" class="tel-number-field" id="realisasinon1" name="realisasinon1" maxlength="3" onkeyup="moveOnMax(this,'realisasinon2')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" id="realisasinon2" name="realisasinon2" maxlength="3" onkeyup="moveOnMax(this,'realisasinon3')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" id="realisasinon3" name="realisasinon3" maxlength="3" onkeyup="moveOnMax(this,'realisasinon4')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" id="realisasinon4" name="realisasinon4" maxlength="3" onkeyup="moveOnMax(this,'realisasinon5')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" id="realisasinon5" name="realisasinon5" maxlength="3" onkeypress="return isNumberKey(event)"/>
				</label>
				<label>
					<span>Denda <span class="required">*</span></span>
					<input type="text" class="tel-number-field" name="dendanon1" id="dendanon1" maxlength="3" onkeyup="moveOnMax(this,'dendanon2')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" name="dendanon2" id="dendanon2" maxlength="3" onkeyup="moveOnMax(this,'dendanon3')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" name="dendanon3" id="dendanon3" maxlength="3" onkeyup="moveOnMax(this,'dendanon4')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" name="dendanon4" id="dendanon4" maxlength="3" onkeyup="moveOnMax(this,'dendanon5')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" name="dendanon5" id="dendanon5" maxlength="3" onkeypress="return isNumberKey(event)" required="required"/>
				</label>
				<label>
					<span>Tahun <span class="required">*</span></span><input type="text" class="input-field" name="field1" size="6" maxlength="4" name="tahunnon" onkeypress="return isNumberKey(event)"/>
				</label>
				<label><span>&nbsp;</span><input type="submit" value="Submit" name="inputnonpbb"/></label>
			<?php echo form_close(); ?>
		</div>
	</body>
</html>