<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	$config["tables"] = array(		
		"tbladdress" =>  array(
			"CaseID" => array(
				"mandatory" => true,
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
			"CaseID" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"CodeTest" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"PlaceTest" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"NamePlace" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"TypeClient" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"DatTest" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "date"
			),
			"OtherPlace" => array(
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
		"tblhbc" =>  array(
			"Hid" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"Hname" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"Hphone" => array(
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
		"tblhbccase" =>  array(
			"Hid" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"caseID" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"DateReg" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "date"
			),
			"code" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			)
		),       
		"tblhealth" =>  array(
			"Hid" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"HealthName" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"ODname" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"Province" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			)
		),        
		"tbllabo" =>  array(
			"CaseID" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"CD4" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"Cd" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"DatCD4" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "date"
			),
			"ViralLoad" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"DatViral" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "date"
			),
			"code" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			)
		),          
		"tbllog" =>  array(
			"Uid" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"caseID" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"Event" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"Detail" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"dat" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "date"
			)
		),           
		"tblnamepreart" =>  array(
			"Code" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"Sevicename" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			)
		),    
		"tblnote" =>  array(
			"CaseID" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"Da" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"Note" => array(
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
		"tblpac" =>  array(
			"CaseID" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"CodePac" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"DaPac" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"Hospital" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"feeding" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"DaContrim" => array(
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
		"tblpactest" =>  array(
			"CodePac" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"typetest" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"result" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"dat" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "date"
			),
			"Code" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			)
		),       
		"tblpchild" =>  array(
			"CaseID" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"ChildStatus" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"MotherStatus" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"McaseID" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"ClinicID" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"ARTnum" => array(
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
		"tblpersonal" =>  array(
			"CaseID" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"DateReg" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "date"
			),
			"Name" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"Dob" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"Sex" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"Code" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
		),      
		"tblppregnancy" =>  array(
			"CaseID" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"PregnanStatus" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"ClinicID" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"ARTnum" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"Site" => array(
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
		"tblprovince" =>  array(
			"Pid" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"ProvinceEng" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"ProvinceKh" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			)
		),      
		"tblpwdelivery" =>  array(
			"CaseID" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"Dhiv" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"Ahiv" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"Startarv" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"Place" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"Dadelivery" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"Pacsyrup" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"ResultPreg" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"code" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			)
		),    
		"tblpwpacend" =>  array(
			"CaseID" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"CodePac" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"Dat" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "date"
			),
			"Preart" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"sitecode" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"code" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			)
		),      
		"tblpwpregant" =>  array(
			"CaseID" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"PMcode" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"DaPreg" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"AgePreg" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"DaExPreg" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"Place" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"code" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			)
		),     
		"tblregoi" =>  array(
			"CaseID" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"DatReg" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"Site" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"ClinicID" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"ART" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"DaART" => array(
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
		"tblstatus" =>  array(
			"CaseID" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"Status" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"da" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"code" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			)
		),        
		"tbltempact" =>  array(
			"caseID" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"Type" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			)
		),       
		"tbluser" =>  array(
			"CaseID" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"House"=> array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"	
			),
			"Street" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"Village" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"Commune" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"District" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"Province" => array(
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
		"tblvcctcode" =>  array(
			"SiteCode" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"SiteName" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"OdName" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			)
		),      
		"tblvillage" =>  array(
			"Cid" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"Vid" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			),
			"VillageEn" => array(
				"mandatory" => true,
				"condition" => "",
				"type" => "text"
			)
		)
	);
?>
