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
	  $h=$Impar/2;
	if ($Impar%2 != 0)
	{
		
		for ($b = $h +1; $b > 0; $b-=1)
			{
				for ($a = $h - $b; $a > 0; $a-=1)
				{
		
					echo  " * ";
				}
		
			echo "<br>";
			}
			for ($b=0; $b < $h ; $b++)
			{
				for ($a=$b; $a < $h ; $a++)
				{
		
					echo  " * ";
		
				}
				echo "<br>";
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