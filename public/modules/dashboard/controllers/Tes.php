
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tes extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		echo CI_VERSION;

	}
	function tes2(){

	}
	function xx(){
		$data="123";
		echo password_hash($data,PASSWORD_DEFAULT). "<br/>";

		var_dump(password_verify("123",$data)) ;
		 //echo password_hash("gungunpriatna", PASSWORD_DEFAULT)."\n"; 
	}

}

/* End of file Tes.php */
/* Location: ./application/controllers/Tes.php */
