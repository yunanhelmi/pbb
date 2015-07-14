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
			<?php echo form_open('home/veriflogin'); ?>
				<label for="field1"><span>Nama Pajak <span class="required">*</span></span>
					<input type="text" id="tagerpbb1" value="" maxlength="3" />
				</label>
				<label for="field2">
					<span>Target PBB <span class="required">*</span></span>
					<input type="text" class="tel-number-field" id="tagerpbb1" value="" maxlength="3" onkeyup="moveOnMax(this,'tagerpbb2')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" id="tagerpbb2" value="" maxlength="3" onkeyup="moveOnMax(this,'tagerpbb3')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" id="tagerpbb3" value="" maxlength="3" onkeyup="moveOnMax(this,'tagerpbb4')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" id="tagerpbb4" value="" maxlength="3" onkeyup="moveOnMax(this,'tagerpbb5')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" id="tagerpbb5" value="" maxlength="3" onkeypress="return isNumberKey(event)"/>
				</label>
				<label>
					<span>Pendapatan PBB <span class="required">*</span></span>
					<input type="text" class="tel-number-field" id="pendapatanpbb1" value="" maxlength="3" onkeyup="moveOnMax(this,'pendapatanpbb2')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" id="pendapatanpbb2" value="" maxlength="3" onkeyup="moveOnMax(this,'pendapatanpbb3')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" id="pendapatanpbb3" value="" maxlength="3" onkeyup="moveOnMax(this,'pendapatanpbb4')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" id="pendapatanpbb4" value="" maxlength="3" onkeyup="moveOnMax(this,'pendapatanpbb5')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" id="pendapatanpbb5" value="" maxlength="3" onkeypress="return isNumberKey(event)"/>
				</label>
				<label for="field1"><span>Bulan <span class="required">*</span></span>
					<select name="kecamatan" class="select-field">
						<option value="JANUARI">JANUARI</option>
						<option value="FEBRUARI">FEBRUARI</option>
						<option value="MARET">MARET</option>
						<option value="APRIL">APRIL</option>
						<option value="MEI">MEI</option>
						<option value="JUNI">JUNI</option>
						<option value="JULI">JULI</option>
						<option value="AGUSTUS">AGUSTUS</option>
						<option value="SEPTEMBER">SEPTEMBER</option>
						<option value="OKTOBER">OKTOBER</option>
						<option value="NOVEMBER">NOVEMBER</option>
						<option value="DESEMBER">DESEMBER</option>
					</select>
				</label>
				<label for="field1"><span>Tahun <span class="required">*</span></span><input type="text" class="input-field" name="field1" size="6" maxlength="4" value="" onkeypress="return isNumberKey(event)"/></label>
				<label><span>&nbsp;</span><input type="submit" value="Submit" /></label>
			<?php echo form_close(); ?>
		</div>
	</body>
</html>