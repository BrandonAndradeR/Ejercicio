<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function Other()
	{
		$Impar=$_POST['NumImpar'];
	  
	if ($Impar%2 != 0)
	{
		
		for ($var=$Impar; $var > 0; $var--)
		{
			$num;
			while($num <= $Impar)
			{
				echo "*";
				$num--;
			}
			$var++;
		}
		

	}
	else if  ($Impar%2 == 0)
	{
		?>

		No es impar

	<?php
	}
		
	}
}