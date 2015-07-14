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
			<div class="form-style-2-heading">Form Input Data Lain-Lain Madiun</div>
			<?php echo form_open('home/veriflogin'); ?>
				<label><span>Nama Pajak <span class="required">*</span></span>
					<select name="namapajaklain" class="select-field">
						<option value="Pajak Daerah">Pajak Daerah</option>
						<option value="Retribusi Daerah">Retribusi Daerah</option>
						<option value="Kekayaan Daerah">Kekayaan Daerah</option>
						<option value="PAD lain yang Sah">PAD lain yang Sah</option>
						<option value="Mineral">Mineral</option>
						<option value="Restoran">Restoran</option>
						<option value="Penerangan Jalan">Penerangan Jalan</option>
					</select>
				</label>
				<label>
					<span>Target Pajak <span class="required">*</span></span>
					<input type="text" class="tel-number-field" id="targetlain1" name="targetlain1" maxlength="3" onkeyup="moveOnMax(this,'targetlain2')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" id="targetlain2" name="targetlain2" maxlength="3" onkeyup="moveOnMax(this,'targetlain3')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" id="targetlain3" name="targetlain3" maxlength="3" onkeyup="moveOnMax(this,'targetlain4')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" id="targetlain4" name="targetlain4" maxlength="3" onkeyup="moveOnMax(this,'targetlain5')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" id="targetlain5" name="targetlain5" maxlength="3" onkeypress="return isNumberKey(event)"/>
				</label>
				<label>
					<span>Realisasi Pajak <span class="required">*</span></span>
					<input type="text" class="tel-number-field" id="realisasilain1" name="realisasilain1" maxlength="3" onkeyup="moveOnMax(this,'realisasilain2')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" id="realisasilain2" name="realisasilain2" maxlength="3" onkeyup="moveOnMax(this,'realisasilain3')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" id="realisasilain3" name="realisasilain3" maxlength="3" onkeyup="moveOnMax(this,'realisasilain4')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" id="realisasilain4" name="realisasilain4" maxlength="3" onkeyup="moveOnMax(this,'realisasilain5')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" id="realisasilain5" name="realisasilain5" maxlength="3" onkeypress="return isNumberKey(event)"/>
				</label>
				<label>
					<span>Denda <span class="required">*</span></span>
					<input type="text" class="tel-number-field" name="dendalain1" id="dendalain1" maxlength="3" onkeyup="moveOnMax(this,'dendalain2')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" name="dendalain2" id="dendalain2" maxlength="3" onkeyup="moveOnMax(this,'dendalain3')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" name="dendalain3" id="dendalain3" maxlength="3" onkeyup="moveOnMax(this,'dendalain4')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" name="dendalain4" id="dendalain4" maxlength="3" onkeyup="moveOnMax(this,'dendalain5')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" name="dendalain5" id="dendalain5" maxlength="3" onkeypress="return isNumberKey(event)" required="required"/>
				</label>
				<label>
					<span>Tahun <span class="required">*</span></span><input type="text" class="input-field" name="tahunlain" size="6" maxlength="4" name="tahunlain" onkeypress="return isNumberKey(event)"/>
				</label>
				<label><span>&nbsp;</span><input type="submit" value="Submit" name="inputlain"/></label>
			<?php echo form_close(); ?>
		</div>
	</body>
</html>