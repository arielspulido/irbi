<?php

    // NEEDS THOROUGH REVIEW AND REVISION...

	// Get Area when user is under Distribution Department
	// if ($_SESSION['SESS_ROLE']=="11" OR $_SESSION['SESS_ROLE']=="13" OR $_SESSION['SESS_ROLE']=="28" OR $_SESSION['SESS_ROLE']=="35") {
	// 	/* OLDER SYSTEM */
	// 	$sql = "SELECT disareas.branch, posusers.csm_id FROM posusers INNER JOIN disareas On disareas.id = posusers.branch_id WHERE posusers.user_id=".$_SESSION['SESS_USER_ID'];
	// 	$result = $mysqli->query($sql);
	// 	$row = $result->fetch_array();
	// 	$gArea = $row['branch'];
	// 	$gId_personnel= $row['csm_id'];
	// 	/* NEW DX SYSTEM */
	// 	// $sql = "SELECT csm FROM dxpersonnel WHERE oldsys_id='$gId_personnel'";
	// 	$sql = "SELECT fullname FROM posusers WHERE user_id='$gId_personnel'";
	// 	$result = $mysqli->query($sql);
	// 	$row = $result->fetch_array();
	// 	$gPersonnel = $row['fullname'];
    //     $result->free();
	// } 
	
	
    
    // Start link creation here...
	$link = "<ol class='breadcrumb float-right'><div class='form-row'><a class='text-primary' href=";

    // Include the link target direction...
	if ($_SESSION['SESS_ROLE']=="1") {
		if ($gPassthru=='1') {
			$link .= "'../pospassthru/index.php'"; 
		} else {
			$link .= "'../deptBranches/index.php'"; 
		}
	}

	// Link type identification...

	$type = '0';
	
    if ($_SESSION['SESS_ROLE']=="36") { $link .= "'../36_socialenterprise/index.php'"; 	}             // RESERVED FOR MEMBERS
	
	// Type Branch
	if ($_SESSION['SESS_ROLE']=="1")  { $link .= "'../deptBranches/index.php'";			    $type='1';	} // Done.
	if ($_SESSION['SESS_ROLE']=="6")  { $link .= "'../deptAdministration/index.php'"; 	    $type='1';	} // Done.
	if ($_SESSION['SESS_ROLE']=="7")  { $link .= "'../deptAdmin_Staff/index.php'"; 	        $type='1';	} // Done.
    if ($_SESSION['SESS_ROLE']=="9")  { $link .= "'../deptWarehouse/index.php'"; 		    $type='1';	} // Done.
    if ($_SESSION['SESS_ROLE']=="10") { $link .= "'../deptFinance-Services/index.php'";	    $type='1';	} // Done.
    if ($_SESSION['SESS_ROLE']=="14") { $link .= "'../deptAudit/index.php'";			    $type='1';	} // Done.
	if ($_SESSION['SESS_ROLE']=="17") { $link .= "'../deptFinance-Deposits/index.php'";	    $type='1';	} // Done.
	if ($_SESSION['SESS_ROLE']=="24") { $link .= "'../deptFinance/index.php'";	            $type='1';	} // Done.
    if ($_SESSION['SESS_ROLE']=="30") { $link .= "'../deptHumanResource/index.php'";        $type='1';	} // Done.
	if ($_SESSION['SESS_ROLE']=="38") { $link .= "'../deptAccounting/index.php'"; 		    $type='1';	} // Done.
    if ($_SESSION['SESS_ROLE']=="39") { $link .= "'../deptFinance-Cashier/index.php'";	    $type='1';	} // Done.
    if ($_SESSION['SESS_ROLE']=="40") { $link .= "'../deptFinance-Confirmation/index.php'";	$type='1';	} // Done.
    
    // Type Distribution
    if ($_SESSION['SESS_ROLE']=="11") { $link .= "'../deptEd-Distribution/index.php'";	    $type='2';	} // Done.

    // Type Online
	if ($_SESSION['SESS_ROLE']=="37") { $link .= "'../deptEd-eCommerce/index.php'";         $type='3';	} // Done.

    // Type NO BRANCH - Prime School
	if ($_SESSION['SESS_ROLE']=="26") { $link .= "'../deptPrime-Cashier/index.php'";         $type='4';	} // Done.
	if ($_SESSION['SESS_ROLE']=="27") { $link .= "'../deptPrime-Registrar/index.php'";       $type='4';	} // Done.
    

    
    // - LINK TYPES - //

        // Type Branch
        if ($_SESSION['SESS_ROLE']=="3")  { $link .= "'../03_smsoutbound/index.php'"; 		$type='1';	}
        if ($_SESSION['SESS_ROLE']=="8")  { $link .= "'../08_inventory/index.php'"; 		$type='1';	}
        if ($_SESSION['SESS_ROLE']=="12") { $link .= "'../12_posgm/index.php'";			    $type='1';	}
        if ($_SESSION['SESS_ROLE']=="15") { $link .= "'../15_miskyc/index.php'";			$type='1';	}
        if ($_SESSION['SESS_ROLE']=="22") { $link .= "'../22_poschairman/index.php'";	    $type='1';	}

        // Type Distribution
        if ($_SESSION['SESS_ROLE']=="13") { $link .= "'../13_dxfield/index.php'";			$type='2';	}
        if ($_SESSION['SESS_ROLE']=="35") { $link .= "'../35_dxdeposits/index.php'";		$type='2';	}
	
	
	
    // Type Access
	if ($_SESSION['SESS_ROLE']=="28") { 
		$link="<ol class='breadcrumb float-right'><div class='form-row'><a class='text-primary' 
            href='../disauditor/index.php'' role='button' aria-haspopup='false' aria-expanded='false'><i><b>".
                $global_Access_Name.($gPassthru==1 ? '+':'')."</b>&nbsp;".$gArea." Area Dashboard</i></a></div></ol><div class='clearfix'></div>"; 
		$type='1';
	}

	if ($_SESSION['SESS_ROLE']=="32") { 
		$link="<ol class='breadcrumb float-right'><div class='form-row'><a class='text-primary' 
            href='../admindata/index.php' role='button' aria-haspopup='false' aria-expanded='false'><i><b>".
                $global_Access_Name."</b>&nbsp; Dashboard</i></a></div></ol><div class='clearfix'></div>"; 
		$type='1';
	}

	if ($_SESSION['SESS_ROLE']=="33") { 
		$link="<ol class='breadcrumb float-right'><div class='form-row'><a class='text-primary' 
            href='../adminaffiliates/index.php' role='button' aria-haspopup='false' aria-expanded='false'><i><b>".
                $global_Access_Name."</b>&nbsp; Dashboard</i></a></div></ol><div class='clearfix'></div>"; 
		$type='1';
	}
	


	// Display the Link (Right-most side of DASHBOARD row) 
	if ($type == '0') { 
		echo $link; 

	} elseif ($type=='1') {
        echo $link ."role='button' aria-haspopup='false' aria-expanded='false'><i><b>".
            $global_Access_Name.
            ($gPassthru == 1 ? 
                '+' : 
                '').
                "</b>, ".$global_Branch_Name." Branch Dashboard</i></a></div></ol><div class='clearfix'></div>";
    
    } elseif ($type=='2') {
		echo $link ."role='button' aria-haspopup='false' aria-expanded='false'><i><b>".
            $global_Access_Name.
            ($gPassthru == 1 ? 
                '+' :
                '').
                "</b>&nbsp;".$global_Field_Personnel." Dashboard</i></a></div></ol><div class='clearfix'></div>";
    
    } elseif ($type=='3') {
		echo $link ."role='button' aria-haspopup='false' aria-expanded='false'><i><b>".
            $global_Access_Name.
            ($gPassthru == 1 ? 
                '+' :
                '').
                "</b>&nbsp;".$global_Online_Shop." Online</i></a></div></ol><div class='clearfix'></div>";
    
    } elseif ($type=='4') {
		echo $link ."role='button' aria-haspopup='false' aria-expanded='false'><i><b>".
            $global_Access_Name.
            ($gPassthru==1 ? 
                '+' :
                '').
                "</b> Dashboard</i></a></div></ol><div class='clearfix'></div>";

	}
?>