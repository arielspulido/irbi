<?php


    //  Generic Extraction of GLOBAL VARIABLES

	$sql = "SELECT t2.user_id, t2.lecturer_id, t2.username, t2.fullname, t2.branch_id, t2.defaultmember, t2.accesslevel, t2.extendedfunctions, t2.pos2, t2.csm_id, pos2, t2.defaultsep, t2.icon,
				t2.multiaccess, t2.logactivity, t2.branch, t2.address, t2.product_type, t2.access, t2.permit, Max(t1.date) AS seminarschedule, t2.is_verifyemail, t2.is_verifymobile, 
				t2.dateofbirth, t2.banned, t2.prefix, t2.midfix, t2.cohbeginamt, t2.cohbegindate, t2.lockdate, t2.mindate, t2.maxdate, t2.is_crudsales, t2.emailaddress, t2.mobile_number, t2.mobilehash,
				t2.inventorybegindate, t2.supplier_id, t2.acctcode_id, t2.branchdept_id, t2.productfusekey, t2.is_multiple5k, t2.is_showpromo, t2.nickname, 
                t2.latest_actual_audit, t2.recent_actual_audit, t2.sec, t2.tin, t2.tinbranch, t2.receiver
			FROM sersemschedule t1
			INNER JOIN 
				(SELECT posusers.user_id, posusers.lecturer_id, posusers.username, posusers.fullname, posusers.branch_id, posusers.defaultmember, posusers.accesslevel, posusers.extendedfunctions, posusers.csm_id,  
					posusers.pos2, posusers.defaultsep, posusers.icon, posusers.multiaccess, posusers.logactivity,  posusers.is_verifyemail, posusers.is_verifymobile, posusers.dateofbirth, posusers.emailaddress, 
                    posusers.mobile_number, posusers.mobilehash,
					posoperations.permit, posoperations.prefix, posbranches.branch, posbranches.address, posbranches.product_type, posbranches.midfix, posbranches.cohbeginamt, posbranches.cohbegindate,
					posaccess.access, posusers.banned, posusers.lockdate, posusers.mindate, posusers.maxdate, posusers.is_crudsales, posbranches.inventorybegindate,					
					posusers.supplier_id, posusers.acctcode_id, posusers.branchdept_id, posusers.productfusekey, posbranches.is_multiple5k, posusers.is_showpromo, posusers.nickname, 
                    posbranches.latest_actual_audit, posbranches.recent_actual_audit, posbranches.sec, posbranches.tin, posbranches.tinbranch, posbranches.receiver
					FROM posusers
					LEFT OUTER JOIN posbranches ON posusers.branch_id = posbranches.id
					INNER JOIN posaccess ON posusers.accesslevel = posaccess.id
					LEFT JOIN posoperations ON posoperations.id = posbranches.operations_id
					WHERE posusers.user_id = ".$_SESSION['SESS_USER_ID'].") AS t2 ON t1.branch_id = t2.branch_id"; 

    if ($_SESSION['SESS_ROLE']=="37") {
        $sql = "SELECT posusers.user_id, posusers.lecturer_id, posusers.username, posusers.fullname, posusers.branch_id, posusers.defaultmember, posusers.accesslevel, posusers.extendedfunctions, posusers.csm_id,  
                    posusers.pos2, posusers.defaultsep, posusers.icon, posusers.multiaccess, posusers.logactivity,  posusers.is_verifyemail, posusers.is_verifymobile, posusers.dateofbirth, posusers.emailaddress, 
                    posusers.mobile_number, posusers.mobilehash, '' AS seminarschedule,
                    '' as permit, '' as prefix, osshops.branch, '' as address , '' as product_type, '' as midfix, '' as cohbeginamt, '' as cohbegindate,
                    posaccess.access, posusers.banned, posusers.lockdate, posusers.mindate, posusers.maxdate, posusers.is_crudsales, '' as inventorybegindate,					
                    posusers.supplier_id, posusers.acctcode_id, posusers.branchdept_id, posusers.productfusekey, '' as is_multiple5k, posusers.is_showpromo, posusers.nickname, 
                    '' as latest_actual_audit, '' as recent_actual_audit, '' as sec, '' as tin, '' as tinbranch, '' as receiver
                    FROM posusers
                    LEFT JOIN osshops ON posusers.branch_id = osshops.id
                    INNER JOIN posaccess ON posusers.accesslevel = posaccess.id
                    WHERE posusers.user_id = ".$_SESSION['SESS_USER_ID']; 
    }
    
	$result = $mysqli->query($sql);
	$row = $result->fetch_array();


    //  Variable Extaction per Specific Access
    $sql = "";


	//  Logout the USER when Ban is implemented while Logged-In
	if ($row['banned']==1) {
		header("location: ../user_authentication/logout.php");
		exit();
	}

    //  ==========================================================================================================================
    //  THE SESSION VARIABLES (As defined in: ../user_authentication/index_authenticate.php prior to specific folder redirection)
                                        // $gMy_id                          = $row['user_id'];
                                        // $gFullname                       = $row['fullname'];

                                        // $_SESSION['SESS_USER_ID']        = $row['user_id'];
                                        // $_SESSION['SESS_ROLE']           = $row['accesslevel'];
                                        // $_SESSION['SESS_USERNAME']       = $row['username'];
                                        // $_SESSION['SESS_FULLNAME']       = $row['fullname'];
                                        // $_SESSION['SESS_MULTIACCESS']    = $row['multiaccess'];
    //  ==========================================================================================================================    

        //  Setting of User Data derived from Extraction of Global Variables
        $global_User_Id                 /*= $gId_user */                    = $row['user_id'];
        $global_User_Name               /*= $gFullname */                   = $row['username'];
        $global_Fullname                /*= $gAccessName */                 = $row['fullname'];
        $global_Access_Id               /*= $global_Access_Id */            = $row['accesslevel'];
        $global_Access_Name             /*= $gAccess */                     = $row['access'];
        $global_Birthdate		        /*= $gBday */	                    = $row['dateofbirth'];
        $global_Banned                  /*= $gBanned */                     = $row['banned'];
        $global_Avatar                  /*= $gIcon */                       = $row['icon'];
        $global_Multi_Access            /*= $gMultiAccess */                = $row['multiaccess'];
        $global_Nickname                                                    = $row['nickname'];

        //  Default Dates
        $global_Date_Start              /*= $gminDate */        			= $row['mindate'];
        $global_Date_End                /*= $gmaxDate */			        = $row['maxdate'];
        $global_Date_COH                /*= $gDateCOH */        			= $row['cohbegindate'];
        $global_Date_Inventory_Begin    /*= $gInvBeginDate */       		= $row['inventorybegindate'];
        $global_Date_Recent_Audit       /*= $gRecentActualAudit */          = $row['recent_actual_audit'];
        $global_Date_Latest_Audit       /*= $gLatestActualAudit */          = $row['latest_actual_audit'];

        $global_Amount_COH              /*= $gAmountCOH	*/          		= $row['cohbeginamt'];

        //  Additional DATA required to validate redirection for (Profile Updating ../user_settings/index.php)
        $global_Email_Address           /*= $gEmail_address */	            = $row['emailaddress'];
        $global_Is_Email_Verified       /*= $gIs_verifyemail */	            = $row['is_verifyemail'];
        $global_Mobile_Number           /*= $gMobile_number */              = $row['mobile_number'];
        $global_Is_Mobile_Verified      /*= $gIs_verifymobile */            = $row['is_verifymobile'];
        $global_Mobile_Hash             /*= $gIs_verifymobile */            = $row['mobilehash'];


        //  =====> Assigned Data *** COMMON ***
        $global_Branch_Id               /*= $gId_branch */                  = $row['branch_id'];
        $global_Branch_Name             /*= $gBranch */ 			        = $row['branch'];
	    $global_Branch_Address          /*= $gAddress */ 			        = $row['address'];
        $global_Branch_Operations       /*= $gOperations */ 		        = $row['permit'];
        $global_Branch_SEC                                                  = $row['sec'];
        $global_Branch_TIN                                                  = $row['tin'].$row['tinbranch'];
	    $global_Prefix                  /*= $gPrefix */			            = $row['prefix'];
	    $global_Midfix                  /*= $gMidfix */			            = $row['midfix'];
        $global_Suffix                                                      = "";
        $global_Default_SKU                                                 = '48090146842395';             // Mix 10 Yellow
        $global_Seminar_Schedule        /* = $gSeminarSchedule */ 	        = $row['seminarschedule'];
        $global_Branch_Receiver         /* = $gSeminarSchedule */ 	        = $row['receiver'];

        //   =====> Assigned Data *** Cashiers (deptBranches) ***
        $gId_lecturer 		                                                = $row['lecturer_id'];
        $gDefaultCustomer 	                                                = $row['defaultmember'];        // ID of Branch in members table
        $gExtendedFunctions                                                 = $row['extendedfunctions'];    // Auditor Tag
        $gPassthru			                                                = $row['pos2'];                 // Passthru Tag (Used for Cashier with Date Override) Date is Fixed on Seminar Schedule + 00:00:00
        $gDefaultSEP 		                                                = $row['defaultsep'];           // ID of Branch in memberssep table
        $gProductType		                                                = $row['product_type'];         // 1 = Superstore
        $gPos2 				                                                = $row['pos2'];
        $gShowPromoTables                                                   = $row['is_showpromo'];

        //   =====> Assigned Data *** Distribution ***
        $global_CSM_Personnel           /*= $gId_personnel */ 		        = $row['csm_id'];

        //   =====> Assigned Data *** Accounting and Finance ***
        $global_Branch_Department       /*= $gBranchDept */         		= $row['branchdept_id'];
		$global_Account_Code            /*= $gAccountCode */        		= $row['acctcode_id'];
        $global_Supplier                /*= $gSupplier */       			= $row['supplier_id'];	
        $global_Branch_Multiple_5k      /*= $is_Multiple5K */               = $row['is_multiple5k'];   

        //
        // D E P R E C A T E D
        //
        // =====> Assigned Data *** Cashier Plus ***
        // $gProductFuseKey       = $row['productfusekey'];
        // $gLockDate              = $row['lockdate'];
        // if ($gLockDate>0) {
        //     $gSeminarSchedule	= date("Y-m-d");
        //     $gSeminarOriginal	= $row['seminarschedule'];
        // } else {
        //     $gSeminarSchedule 	= $row['seminarschedule'];
        // }

        // =====> Assigned Data *** Lazada Shoppee Cashiers ***
        // $gIs_CRUD               = $row['is_crudsales'];
        
	$result->free();
    //
    // *** END OF GLOBAL VARIABLE EXTRACTION ***
    //
    
	// Get SHOP when user is under Online Sales Department
   
    if ($global_Access_Id == "37") {
        $sql = "SELECT branch FROM osshops WHERE id = '$global_Branch_Id'";
        $result = $mysqli->query($sql);
        $row = $result->fetch_array();
        $global_Online_Shop = $row['branch'];
        $result->free();
    }

    // Get Area when user is under Distribution Department
    if ($global_Access_Id == "11") {
        $sql = "SELECT branch FROM disareas WHERE id = '$global_Branch_Id' ";
        $result = $mysqli->query($sql);
        $row = $result->fetch_array();
        $global_Dx_Area = $row['branch'];
        $result->free();
        //
        // $global_Branch_Id set to default: 1 DIGOS CITY
        //
    }
    
    // Get Personnel when user is under Distribution Department 
    if ($global_Access_Id == "11" ) {  /* $global_Access_Id=="14" or $global_Access_Id=="17"  */
        $sql = "SELECT fullname FROM posusers WHERE user_id = '$global_CSM_Personnel'";
        $result = $mysqli->query($sql);
        $row = $result->fetch_array();
        $global_Field_Personnel = $row['fullname'];
        $result->free();
        //
        // $global_CSM_Personnel set to default: 337 CABALUNA, ADONIS C. (FD)
        // 
    }

                //     TEST SQL
                //     Select
                //     dokalternatibo.posusers.user_id,
                //     dokalternatibo.posusers.fullname,
                //     dokalternatibo.posusers.multiaccess,
                //     dokalternatibo.posusers.accesslevel,
                //     dokalternatibo.posusers.banned,
                //     dokalternatibo.posusers.branch_id,
                //     dokalternatibo.posusers.csm_id,
                //     dokalternatibo.posusers.username,
                //     dokalternatibo.posusers.mindate,
                //     dokalternatibo.posusers.maxdate,
                //     dokalternatibo.posusers.lecturer_id,
                //     dokalternatibo.posusers.defaultmember,
                //     dokalternatibo.posusers.mobile_number,
                //     dokalternatibo.posusers.logactivity,
                //     dokalternatibo.posusers.dateofbirth,
                //     dokalternatibo.posusers.emailaddress,
                //     dokalternatibo.posusers.is_verifyemail,
                //     dokalternatibo.posusers.is_verifymobile,
                //     dokalternatibo.posusers.extendedfunctions,
                //     dokalternatibo.posusers.pos2,
                //     dokalternatibo.posusers.defaultsep,
                //     dokalternatibo.posusers.icon,
                //     dokalternatibo.posusers.lockdate,
                //     dokalternatibo.posusers.is_crudsales,
                //     dokalternatibo.posusers.supplier_id,
                //     dokalternatibo.posusers.acctcode_id,
                //     dokalternatibo.posusers.branchdept_id,
                //     dokalternatibo.posusers.productfusekey,
                //     dokalternatibo.posusers.is_showpromo,
                //     dokalternatibo.posbranches.branch,
                //     dokalternatibo.posbranches.address,
                //     dokalternatibo.posbranches.product_type,
                //     dokalternatibo.posbranches.midfix,
                //     dokalternatibo.posbranches.cohbeginamt,
                //     dokalternatibo.posbranches.cohbegindate,
                //     dokalternatibo.posbranches.inventorybegindate,
                //     dokalternatibo.posbranches.is_multiple5k,
                //     dokalternatibo.posbranches.latest_actual_audit,
                //     dokalternatibo.posbranches.recent_actual_audit,
                //     dokalternatibo.posbranches.sec,
                //     dokalternatibo.posbranches.tin,
                //     dokalternatibo.posbranches.tinbranch,
                //     dokalternatibo.posaccess.access,
                //     dokalternatibo.posoperations.permit,
                //     dokalternatibo.posoperations.prefix
                // From
                //     dokalternatibo.posusers Inner Join
                //     dokalternatibo.posbranches On dokalternatibo.posbranches.id = dokalternatibo.posusers.branch_id Inner Join
                //     dokalternatibo.posaccess On dokalternatibo.posaccess.id = dokalternatibo.posusers.accesslevel Inner Join
                //     dokalternatibo.posoperations On dokalternatibo.posoperations.id = dokalternatibo.posbranches.operations_id
                // Where
                //     dokalternatibo.posusers.banned = 0
?>