		<script type="text/javascript" src="<?php echo base_url(); ?>assets/highcharts/api/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/highcharts/js/highcharts.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/highcharts/js/highcharts-3d.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/highcharts/js/modules/exporting.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/highcharts/charts/linenonpbb.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/highcharts/charts/pienonpbb.js"></script>
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
		
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styleinput.css" type="text/css">
		
		<div class="form-style-2">
			<div class="form-style-2-heading">Form Input Data PBB Madiun</div>
			<?php echo form_open('home/veriflogin'); ?>
				<label for="field1"><span>Nama Kecamatan <span class="required">*</span></span>
					<select name="kecamatan" class="select-field">
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
					<span>Targer PBB <span class="required">*</span></span>
					<input type="text" class="tel-number-field" id="tagerpbb1" value="" maxlength="3" size="10" onkeyup="moveOnMax(this,'tagerpbb2')" />
					<input type="text" class="tel-number-field" id="tagerpbb2" size="10" value="" maxlength="3" onkeyup="moveOnMax(this,'tagerpbb3')" />
					<input type="text" class="tel-number-field" id="tagerpbb3" size="10" value="" maxlength="3" onkeyup="moveOnMax(this,'tagerpbb4')" />
					<input type="text" class="tel-number-field" id="tagerpbb4" size="10" value="" maxlength="3" onkeyup="moveOnMax(this,'tagerpbb5')" />
					<input type="text" class="tel-number-field" id="tagerpbb5" size="10" value="" maxlength="3" />
				</label>
				<label>
					<span>Telephone</span><input type="text" class="tel-number-field" id="tel_no_1" maxlength="3" size="10" value="" onkeyup="moveOnMax(this,'tel_no_2')" />
					<input type="text" class="tel-number-field" id="tel_no_2" value="" maxlength="3" size="10" onkeyup="moveOnMax(this,'tel_no_3')" />
					<input type="text" class="tel-number-field" id="tel_no_3" size="10" value="" maxlength="3" onkeyup="moveOnMax(this,'tel_no_3')" />
					<input type="text" class="tel-number-field" id="tel_no_4" size="10" value="" maxlength="3" />
				</label>
				<label for="field4"><span>Regarding</span><select name="field4" class="select-field">
				<option value="General Question">General</option>
				<option value="Advertise">Advertisement</option>
				<option value="Partnership">Partnership</option>
				</select></label>
				<label for="field5"><span>Message <span class="required">*</span></span><textarea name="field5" class="textarea-field"></textarea></label>
				<label><span>&nbsp;</span><input type="submit" value="Submit" /></label>
			<?php echo form_close(); ?>
		</div>
	</body>
</html>