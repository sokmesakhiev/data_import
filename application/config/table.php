<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	$tables = array(		
		"tbladdress" =>  array(
			"CaseID" => array(
				"mandatory" => false,
				"condition" => "",
				"type" => "text"
			),
			"House" => array(
				"mandatory" => false,
				"condition" => "",
				"type" => "text"
			),
			"Street" => array(
				"mandatory" => false,
				"condition" => "",
				"type" => "text"
			),
			"Village" => array(
				"mandatory" => false,
				"condition" => "",
				"type" => "text"
			),
			"Commune" => array(
				"mandatory" => false,
				"condition" => "",
				"type" => "text"
			),
			"District" => array(
				"mandatory" => false,
				"condition" => "",
				"type" => "text"
			),
			"Province" => array(
				"mandatory" => false,
				"condition" => "",
				"type" => "text"
			),
			"Status" => array(
				"mandatory" => false,
				"condition" => "",
				"type" => "text"
			),
			"Code" => array(
				"mandatory" => false,
				"condition" => "",
				"type" => "text"
			)
		),       
		"tblcenter" =>  array(
			"ODname" => array(
				"mandatory" => false,
				"condition" => "",
				"type" => "text"
			),
			"Code" => array(
				"mandatory" => false,
				"condition" => "",
				"type" => "text"
			),
			"Province" => array(
				"mandatory" => false,
				"condition" => "",
				"type" => "text"
			),
			"Disctrict" => array(
				"mandatory" => false,
				"condition" => "",
				"type" => "text"
			),
		),        
		"tblcommune" =>  array(
			"Did" => array(
				"mandatory" => false,
				"condition" => "",
				"type" => "text"
			),
			"Cid" => array(
				"mandatory" => false,
				"condition" => "",
				"type" => "text"
			),
			"CommuneEN" => array(
				"mandatory" => false,
				"condition" => "",
				"type" => "text"
			)
		),       
		"tblconfirm" =>  array(
			"CaseID" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"Vcctname" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"VcctCode" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"Dat" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "date"
			),
			"Result" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"Code" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			)

		),       
		"tblcontact" =>  array(
			"CaseID" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"Phone" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"Status" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"Code" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			)
		),       
		"tbldistrict" =>  array(
			"Pid" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"Did" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"DistrictEng" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"DistrictKh" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			)
		),      
		"tblfirsttest" =>  array(
			"CaseID"
			"CodeTest"
			"PlaceTest"
			"NamePlace"
			"TypeClient"
			"DatTest"
			"OtherPlace"
			"Code"
		),     
		"tblhbc" =>  array(

		),           
		"tblhbccase" =>  array(

		),       
		"tblhealth" =>  array(

		),        
		"tbllabo" =>  array(

		),          
		"tbllog" =>  array(

		),           
		"tblnamepreart" =>  array(

		),    
		"tblnote" =>  array(

		),          
		"tblpac" =>  array(

		),           
		"tblpactest" =>  array(

		),       
		"tblpchild" =>  array(

		),        
		"tblpersonal" =>  array(

		),      
		"tblppregnancy" =>  array(

		),    
		"tblprovince" =>  array(

		),      
		"tblpwdelivery" =>  array(

		),    
		"tblpwpacend" =>  array(

		),      
		"tblpwpregant" =>  array(

		),     
		"tblregoi" =>  array(

		),         
		"tblstatus" =>  array(

		),        
		"tbltempact" =>  array(

		),       
		"tbluser" =>  array(
			"CaseID" => array(

			),
			"House"=> array(
				
			),
			"Street"=> array(
				
			),
			"Village"=> array(
				
			),
			"Commune"=> array(
				
			),
			"District"=> array(
				
			),
			"Province"=> array(
				
			),
			"Status"=> array(
				
			),
			"Code"=> array(
				
			)
		),          
		"tblvcctcode" =>  array(

		),      
		"tblvillage" =>  array(

		)
	);
?>
