<?php

function t($language_key,$filename = 'user',$tokens = NULL,$language = NULL)
{
	$CI =& get_instance();
	
	if($language == NULL) {
		$language = $CI->session->userdata('language');
		if(!$language) $language = $CI->config->item('language');
	}
	
	$CI->lang->load($filename,$language);
	
	$translation = $CI->lang->line($language_key);
	
	$result = $translation ? $translation : $language_key; 
	
	if (!empty($tokens)) {
		foreach($tokens as $token => $value) {
			$result = str_replace($token,$value,$result);
		}
	}
	
	return $result;
 
}

function get_lang() {

	$CI =& get_instance();
	
	$lang = $CI->session->userdata('language');
	if(!$lang) $lang = $CI->config->item('language');
	
	return $lang;
}





?>