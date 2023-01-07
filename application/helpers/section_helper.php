<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function loadtypesection($code=''){
	$CI = & get_instance();
	$CI->load->model('Masterdb');
	$result = $CI->Masterdb->fetchall_condition("label_type","(type = 'section' and isactive = 1) or code = 'NN'");
	if(empty($code)){
		return $result;
	}else{
		$name = "";
		foreach ($result as $r) {
			if($code == $r->code){
				$name = $r->name;				
			}
		}
		return $name;
	}

}

function loadtypelayout($code=''){
	$CI = & get_instance();
	$CI->load->model('Masterdb');
	$result = $CI->Masterdb->fetchall_condition("label_type","(type = 'layout' and isactive = 1) or code = 'NN'");
	if(empty($code)){
		return $result;
	}else{
		$name = "";
		foreach ($result as $r) {
			if($code == $r->code){
				$name = $r->name;				
			}
		}
		return $name;
	}
}

function loadtypelayoutsidebar($code=''){
	$CI = & get_instance();
	$CI->load->model('Masterdb');
	$result = $CI->Masterdb->fetchall_condition("label_type","((type = 'layout' and isactive = 1) and (code = 'TH' or code = 'LST') ) or code = 'NN'");
	if(empty($code)){
		return $result;
	}else{
		$name = "";
		foreach ($result as $r) {
			if($code == $r->code){
				$name = $r->name;				
			}
		}
		return $name;
	}
}


function loadtypealgo($code=''){
	$CI = & get_instance();
	$CI->load->model('Masterdb');
	$result = $CI->Masterdb->fetchall_condition("label_type","(type = 'algo' and isactive = 1) or code = 'NN'");
	if(empty($code)){
		return $result;
	}else{
		$name = "";
		foreach ($result as $r) {
			if($code == $r->code){
				$name = $r->name;				
			}
		}
		return $name;
	}
	
}

function menus($code=''){
	$CI = & get_instance();
	$CI->load->model('Masterdb');
	$result = $CI->Masterdb->fetchall_condition("menu",array("isMain"=>1));
	if(empty($code)){
		return $result;
	}else{
		$name = "";
		foreach ($result as $r) {
			if($code == $r->code){
				$name = $r->name;				
			}
		}
		return $name;
	}

	
}


