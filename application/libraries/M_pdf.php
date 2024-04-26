<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

 include_once APPPATH.'/third_party/mpdf/mpdf.php';

class M_pdf {

    public $param;
    public $pdf;

    public function __construct($param = '"en-GB-x","A4","","",10,10,10,10,6,3')
    {
        $this->param =$param;
        $this->pdf = new mPDF($this->param);
    }
    
    public function tampil()
    {
		$msg = 'www.veriarinal.com';
		//if (!$msg) $msg = "Le site du spipu\r\nhttp://spipu.net/";

		$err = '';
		if (!in_array($err, array('L', 'M', 'Q', 'H'))) $err = 'L';
		require_once( APPPATH.'/third_party/mpdf/qrcode/qrcode.class.php' );
		$qrcode = new QRcode(utf8_encode($msg), $err);
		//$qrcode->disableBorder();
		//$qrcode->displayPNG(100);		
		//echo $qrcode->displayHTML();
		//echo "tampil";
		//echo exit;
		}
}
