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
		<script language=Javascript>
			  function isNumberKey(evt)
			  {
				 var charCode = (evt.which) ? evt.which : event.keyCode
				 if (charCode > 31 && (charCode < 48 || charCode > 57))
					return false;

				 return true;
			  }
		</script>
		
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styleinput.css" type="text/css">
		
		<div class="form-style-2">
			<div class="form-style-2-heading">Form Input Data PBB Madiun</div>
			<?php echo form_open('homecon/doinputpbb'); ?>
				<label>
					<span>Nama Kecamatan <span class="required">*</span></span>
					<select name="kecamatan" class="select-field" required="required">
						<option value="GEMARANG">GEMARANG</option>
						<option value="BALEREJO">BALEREJO</option>
						<option value="DAGANGAN">DAGANGAN</option>
						<option value="DOLOPO">DOLOPO</option>
						<option value="GEGER">GEGER</option>
						<option value="JIWAN">JIWAN</option>
						<option value="KAREE">KAREE</option>
						<option value="KEBONSARI">KEBONSARI</option>
						<option value="MADIUN">MADIUN</option>
						<option value="MEJAYAN">MEJAYAN</option>
						<option value="PILANGKENCENG">PILANGKENCENG</option>
						<option value="SARADAN">SARADAN</option>
						<option value="SAWAHAN">SAWAHAN</option>
						<option value="WONOASRI">WONOASRI</option>
						<option value="WUNGU">WUNGU</option>
					</select>
				</label>
				<label for="field2">
					<span>Target PBB <span class="required">*</span></span>
					<input type="text" class="tel-number-field" name="tagetpbb1" id="tagetpbb1" maxlength="3" onkeyup="moveOnMax(this,'tagetpbb2')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" name="tagetpbb2" id="tagetpbb2" maxlength="3" onkeyup="moveOnMax(this,'tagetpbb3')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" name="tagetpbb3" id="tagetpbb3" maxlength="3" onkeyup="moveOnMax(this,'tagetpbb4')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" name="tagetpbb4" id="tagetpbb4" maxlength="3" onkeyup="moveOnMax(this,'tagetpbb5')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" name="tagetpbb5" id="tagetpbb5" maxlength="3" onkeypress="return isNumberKey(event)" required="required"/>
				</label>
				<label>
					<span>Pendapatan PBB <span class="required">*</span></span>
					<input type="text" class="tel-number-field" name="pendapatanpbb1" id="pendapatanpbb1" maxlength="3" onkeyup="moveOnMax(this,'pendapatanpbb2')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" name="pendapatanpbb2" id="pendapatanpbb2" maxlength="3" onkeyup="moveOnMax(this,'pendapatanpbb3')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" name="pendapatanpbb3" id="pendapatanpbb3" maxlength="3" onkeyup="moveOnMax(this,'pendapatanpbb4')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" name="pendapatanpbb4" id="pendapatanpbb4" maxlength="3" onkeyup="moveOnMax(this,'pendapatanpbb5')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" name="pendapatanpbb5" id="pendapatanpbb5" maxlength="3" onkeypress="return isNumberKey(event)" required="required"/>
				</label>
				<label>
					<span>Denda PBB <span class="required">*</span></span>
					<input type="text" class="tel-number-field" name="dendapbb1" id="dendapbb1" maxlength="3" onkeyup="moveOnMax(this,'dendapbb2')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" name="dendapbb2" id="dendapbb2" maxlength="3" onkeyup="moveOnMax(this,'dendapbb3')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" name="dendapbb3" id="dendapbb3" maxlength="3" onkeyup="moveOnMax(this,'dendapbb4')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" name="dendapbb4" id="dendapbb4" maxlength="3" onkeyup="moveOnMax(this,'dendapbb5')" onkeypress="return isNumberKey(event)"/>
					<input type="text" class="tel-number-field" name="dendapbb5" id="dendapbb5" maxlength="3" onkeypress="return isNumberKey(event)" required="required"/>
				</label>
				<label>
					<span>Tahun <span class="required">*</span></span><input type="text" class="input-field" name="tahunpbb" size="6" maxlength="4" onkeypress="return isNumberKey(event)" required="required"/>
				</label>
				<label><span>&nbsp;</span><input type="submit" value="Submit" name="inputpbb"/></label>
			<?php echo form_close(); ?>
		</div>
	</body>
</html>