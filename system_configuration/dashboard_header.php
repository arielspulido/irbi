<div class="headerbar">
	<div class="headerbar-left">
		<a href="#" class="logo">
            <img alt="Logo" src="<?php echo $cfg_folder_logo.$cfg_favicon; ?>" />
                <span>
                    <b>&nbsp;<?php echo $cfg_site_title; ?></b>
                </span>
        </a>
	</div>
	<nav class="navbar-custom">
		<ul class="list-inline float-right mb-0">
			<li class="list-inline-item dropdown notif">
                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
					<i class="fa fa-fw fa-question-circle"></i>
				</a>
				<div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">  
					<div class="dropdown-item noti-title">
						<h5><small>Help & Support</small></h5>
					</div>
					<a href="#" class="dropdown-item notify-item">
                    <p class="notify-details ml-0">
							<br>
							<b>ARIEL S. PULIDO</b><br>
							<i>ECommerce, Distribution & IT Head</i>
							<hr>
							<span><i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;aspulidoconsultancy@gmail.com</span>
							<span><i class="fa fa-mobile"></i>&nbsp;&nbsp;&nbsp;+63.948.485.0225 TnT</span>
							<br>
                            <hr>
                            NOTICE: This is not a BIR-Registered POS System.
						</p>
					</a>
					<!-- <a title="My WeChat ID" target="_blank" href="#" class="dropdown-item noti-title">
						<h5><small><i class="fa fa-weixin"></i>&nbsp;&nbsp;&nbsp;ASPulido</small></h5>
					</a> -->
				</div>
			</li>
			<li class="list-inline-item dropdown notif">
                <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
					<img src='<?php echo $cfg_folder_user_profile.$global_Avatar; ?>'
                        height = "100" 
                        width = "100" 
                        class = 'avatar-rounded'
                        onerror = "this.onerror=null; this.src='<?php echo $cfg_folder_logo.$cfg_site_logo; ?>'"
                        alt = "Profile Picture" >
                </a>
				<div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                    <div class="dropdown-item noti-title">
                        <h5 class="text-overflow"><small><?php echo $global_Fullname; ?></small> </h5>
                    </div>
					<a href="../user_settings/index.php" class="dropdown-item notify-item"><i class="fa fa-user"></i><span> My Profile</span></a>
                    <a target="_blank" href="https://alternatiboshop.com" class="dropdown-item notify-item"><i class="fa fa-external-link"></i><span> Alternatibo Shop </span></a>
                    <a href="../user_authentication/logout.php" class="dropdown-item notify-item"><i class="fa fa-power-off"></i><span> Logout</span></a>
                </div>
            </li>
		</ul>
        <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left"><i class="fa fa-fw fa-bars"></i></button>
			</li>
		</ul>
	</nav>
</div>