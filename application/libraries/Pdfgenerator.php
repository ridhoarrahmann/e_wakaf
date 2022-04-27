<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Name:  Pdfgenerator
* 
* Author: Jd Fiscus
* 	 	  jdfiscus@gmail.com
*         @iamfiscus
*          
*
* Origin API Class: http://code.google.com/p/Pdfgenerator/
* 
* Location: http://github.com/iamfiscus/Codeigniter-Pdfgenerator/
*          
* Created:  06.22.2010 
* 
* Description:  This is a Codeigniter library which allows you to convert HTML to PDF with the Pdfgenerator_gen library
* 
*/

class Pdfgenerator{
		
	public function __construct() {
		
		require_once APPPATH.'third_party/dompdf/dompdf_config.inc.php';
		ini_set('memory_limit','512M');
		$pdf = new Pdfgenerator();
		
		$CI =& get_instance();
		$CI->dompdf = $pdf;
		
	}
	
}