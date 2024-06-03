<?php ?>
<form action="">
	<div class="form-row text-white">
        <div class="form-group col-md-1">
            <img src='<?php echo $cfg_folder_user_profile.$global_Avatar; ?>'
                height="100" 
                width="100" 
                class="img-thumbnail" 
                onerror="this.onerror=null; this.src='<?php echo $cfg_folder_logo.$cfg_site_logo; ?>'"
                alt="Profile Image" >
        </div>
		<div class="form-group col-md-3"><label>Fullname</label>
			<input type="text" class="form-control" value="<?php echo $global_Fullname ; ?>" disabled >
		</div>
		<div class="form-group col-md-1"><label>Username</label>
			<input type="text" class="form-control" value="<?php echo $global_User_Name; ?>" disabled >
		</div>
		<div class="form-group col-md-2"><label>Assigned Role</label>
			<input type="text" class="form-control" value="<?php echo $global_Access_Name; ?>" disabled >
		</div>
		<div class="form-group col-md-2">
			<label><?php echo ($global_Is_Mobile_Verified=='1' ? 'Verified Mobile Number' : "<font color='red'><b>UNVERIFIED</b></font>");  ?></label>
			<input type="text" class="form-control" value="<?php echo $global_Mobile_Number; ?>" disabled >
		</div>
		<div class="form-group col-md-3">
			<label><?php echo ($global_Is_Email_Verified=='1' ? 'Verified eMail Address' : "<font color='red'><b>UNVERIFIED</b></font>");  ?></label>
			<input type="email" class="form-control" value="<?php echo $global_Email_Address; ?>" disabled >
		</div>
	</div>
	<hr>
</form>