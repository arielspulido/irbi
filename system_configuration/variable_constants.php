<?php

    // Local Constants
    $cfg_site_title = 'Dok Alternatibo';
    $cfg_author = 'ASPulido Consultancy';
    $cfg_site_meta_description = 'Dok Alternatibo Online System';
    $cfg_site_meta_keywords = 'Dok Alternatibo Ecommerce & Distribubtion Department Mix10 Red';


    // Assets Folders
    $cfg_favicon = 'favicon.ico';
    $cfg_site_logo = 'dokalternatibo.png';
    $cfg_folder_deposits =  '../system_assets/deposits/';
    $cfg_folder_logo = '../system_assets/pdf_logo/';
    $cfg_folder_backgrounds = '../system_assets/backgrounds/';
    $cfg_folder_user_profile = '../system_assets/user_profile/';
    $cfg_folder_hr_file = '../system_assets/hr_file/';
    $cfg_folder_portal =  '../system_assets/member_orders/';


    // CLASSES Folders
    $cfg_folder_pdf = '../class_pdf/';
    $cfg_folder_phpmailer = '../class_phpmailer/';
    $cfg_folder_sms = '../class_sms/';


    // System Background
    $cfg_background_image = 8; // date('N'); 

    // Start Date of Dok Alternatibo Loyalty & Privilege Card Membership
    $cfg_DALPC_Accumulation = '2023-10-01';

    // Report Constants
    $cfg_report_header = 'DOK ALTERNATIBO';
    $cfg_footer_version = 'DOK ALTERNATIBO Version 3.0.0 (System-Generated)';

    // 2nd Row Report Headers 

        // Head Office
        $cfg_report_ho_address_line1 = 'HEAD OFFICE';
        $cfg_report_ho_address_line2 = 'Admin Bldg., Roxas Extension, Digos City, Davao del Sur, 8002';
        $cfg_report_ho_address_line3 = 'Contact Numbers: (09xx) 123-4567 | eMail Address: dokalternatibo_admin@gmail.com';

        // Accounting Department
        $cfg_report_accounting_address_line1 = 'ACCOUNTING DEPARTMENT';
        $cfg_report_accounting_address_line2 = 'Prime Complex, Brgy. Tiguman, Digos City, Davao del Sur, 8002';
        $cfg_report_accounting_address_line3 = 'Contact Numbers: (09xx) 123-4567 | eMail Address: accountingdepartment@gmail.com';

        // Audit Department
        $cfg_report_audit_address_line1 = 'AUDIT DEPARTMENT';
        $cfg_report_audit_address_line2 = 'Prime Complex, Brgy. Tiguman, Digos City, Davao del Sur, 8002';
        // $cfg_report_audit_address_line3 = 'Contact Numbers: (09xx) 123-4567 | eMail Address: auditdepartment@gmail.com';
        $cfg_report_audit_address_line3 = '';

        // Distribution Department
        $cfg_report_dx_address_line1 = 'DISTRIBUTION DEPARTMENT';
	    $cfg_report_dx_address_line2 = 'Prime Complex, Brgy. Tiguman, Digos City, Davao del Sur, 8002';
	    $cfg_report_dx_address_line3 = 'Contact Numbers: (0906) 496-7235 | eMail Address: dokalternatibo.mix10.haplus@gmail.com';

        // Finance Department
        $cfg_report_finance_address_line1 = 'FINANCE DEPARTMENT';
        $cfg_report_finance_address_line2 = 'Admin Bldg., Roxas Extension, Digos City, Davao del Sur, 8002';
        $cfg_report_finance_address_line3 = 'Contact Numbers: (09xx) 123-4567 | eMail Address: dokalternatibo_admin@gmail.com';

        // Prime School
        $cfg_report_ps_address_line1 = 'Parallel Street, Brgy. Tiguman, Digos City';
        $cfg_report_ps_address_line2 = 'Contact Numbers: (0951) 378-3351 & (0995) 845-6052';
        $cfg_report_ps_address_line3 = 'eMail Address: dokalternatibo2015@gmail.com';

        //  Finance Department CASHIER Constants
        $cfg_ho_cashier_coh_date = '2023-08-01';
        $cfg_ho_cashier_coh_amount = '9524.76';
        $cfg_ho_cashier_user_id = 1306;


    // SMS Settings 
    
        /* 
        LEGACY SETTINGS
        $system_sms_ip = "1";
        $system_sms_add_salescart_am = "1";
        $system_sms_add_salescart_pm = "1";
        */

        /* DABIGCCoop SMS Credentials (ALTERNATIBO Sender ID) */
	    $gIuser = 'dabigccoop';
	    $gIpass = 'isms79801388';

        /* SMS SENDING @deptBranches  */
        $is_send_sms = 0;
        //$varNumberToContact1 = '09255001330';   // MED
        $varNumberToContact1 = '09484850225';   // DALPC - ASPulido
        $varNumberToContact2 = '09686368000';   // RLucero

        /* SMS SENDING @PrimeSchool  */    
        $is_send_sms_prime = 1;

    // AUDITORS Array
    $global_Auditors = array("38", "267", "1481", "7");
                       // 14-Lucero, Renie 
                       // 14-Pulido, Ariel
                       // 14-Tercio, Chester Jade
                       //  7-Pulido, Ariel

?>