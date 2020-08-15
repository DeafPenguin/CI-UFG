<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{

	 public function __construct(){
	  parent::__construct();
	  $this->load->database();
	  $this->load->model('User_model');
	  $this->load->model('Language_model');
	}

	public function index(){
		$this->load->helper('url');
		$this->load->view('login');	
	}

	public function logUser(){
		if($this->input->post('submit') != NULL) // clicou no botão login
		{	
			// POST data
			$postData = $this->input->post();	
			$result = $this->User_model->canLogin($postData['email'], $postData['password']);
			
			if($result){	// entra nesse if se a senha e email estão corretos	 
				$this->load->helper('url'); 
				$this->User_model->setUserSession($postData['email'], $postData['password']);
				// redireciona para a pagina principal
				redirect('Main/events?lang=' .  $this->Language_model->getLanguage());
			}
			else{ // exibe erro
				// // Invalid login!
				// $this->load->helper('url');
				// $this->load->view('login');
				echo"
					<script language='javascript' type='text/javascript'>
						alert('Login e/ou senha incorretos');
						window.location.href='';
					</script>";
			}
		}
		// recarrega a 
		    // esse helper deve ser do codeigniter pesquisar depois.
			$this->load->helper('url');
			$this->load->view('login');
		// else{
		// 	$this->load->helper('url');
		// 	$this->load->view('login');
		// 	echo"
		// 			<script language='javascript' type='text/javascript'>
		// 				alert('Login e/ou senha em branco, favor preencher');
		// 				window.location.href='';
		// 			</script>";
		// }
	}   
}
?>