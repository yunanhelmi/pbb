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
			<div class="form-style-2-heading">Provide your information</div>
			<?php echo form_open('home/veriflogin'); ?>
				<label for="field1"><span>Name <span class="required">*</span></span><input type="text" class="input-field" name="field1" value="" /></label>
				<label for="field2"><span>Email <span class="required">*</span></span><input type="text" class="input-field" name="field2" value="" /></label>
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