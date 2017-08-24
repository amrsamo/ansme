<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public $isLoggedIn = false;
	public $data = array();

	public function __construct()
	{
	    parent::__construct();

	    if(isset($this->session->userdata['user']->id))
		{
			$this->isLoggedIn = true;
			$this->data['isLoggedIn'] = true;
			$this->data['loggedInFollower'] = $this->session->userdata['follower'];
		}
		else
		{
			$this->isLoggedIn = false;
			$this->data['isLoggedIn'] = false;
		}

		
	}
	public function index()
	{
		$this->data['info'] = $this->Info->get()[0];
		$this->data['articles'] = $this->Articles->get();
		$this->data['news'] = $this->News->get();
		$this->data['team'] = $this->Team->get();
		$this->data['images'] = $this->Images->get();
		$this->data['testimonials'] = $this->Testimonials->get();

		$this->load->view('home',$this->data);
	}


	public function article($id)
	{
		$this->data['article'] = $this->Articles->get(array("id"=>$id))[0];
		$this->load->view('article',$this->data);
	}

	public function news($id)
	{
		$this->data['news'] = $this->News->get(array("id"=>$id))[0];
		$this->load->view('news',$this->data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */