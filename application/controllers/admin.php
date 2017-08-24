<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public $isLoggedIn = false;
	public $data = array();

	public function __construct()
	{
	    parent::__construct();

	    if(isset($this->session->userdata['user']->id))
		{
			$this->isLoggedIn = true;
			$this->data['isLoggedIn'] = true;
			$this->data['loggedInFollower'] = $this->session->userdata['adminuser'];
		}
		else
		{
			$this->isLoggedIn = false;
			$this->data['isLoggedIn'] = false;
		}

		
	}

	public function index()
	{	
		if(!$this->isLoggedIn()){
			redirect('admin/login');
		}


		$this->load->view('admin/home',$this->data);
	}

	public function newcontent()
	{
		$this->Images->put(array("title"=>"New","subtitle"=>"","color"=>"","path"=>""));
		redirect('admin/content');
	}

	public function escapeInputs($array)
	{
		$output = array();
		foreach ($array as $key => $value) {
			$output[$key] = $this->db->escape($value);
		}

		return $output;
	}


	public function testimonials()
	{
		if(isset($_POST['uploadId']))
		{
			$this->Testimonials->update(array("title"=>$_POST['title'],"name"=>$_POST['name'],"text"=>$_POST['text']),array("id"=>$_POST['uploadId']));
				redirect('admin/testimonials');
		}
		$this->data['testimonials'] = $this->Testimonials->get();
		$this->load->view('admin/testimonials',$this->data);
	}

	public function content()
	{	
		//$_POST = $this->escapeInputs($_POST);
		

		if(isset($_POST['remove']))
		{
			$this->Images->delete(array("id"=>$_POST['uploadId']));
			redirect('admin/content');
		}

		if(isset($_POST['uploadId']))
		{	
			if($_FILES["fileToUpload"]["name"] != "")
			{

				$targetFile = $this->uploadImage('background');
				if($targetFile){
					$this->Images->update(array("path"=>$targetFile,"title"=>$_POST['title'],"subtitle"=>$_POST['subtitle'],"color"=>$_POST['color']),array("id"=>$_POST['uploadId']));
					redirect('admin/content');
				}
			}	
			else
			{
				$this->Images->update(array("title"=>$_POST['title'],"subtitle"=>$_POST['subtitle'],"color"=>$_POST['color']),array("id"=>$_POST['uploadId']));
				redirect('admin/content');
			}
			
		}

		if(isset($_POST['address']))
		{
			unset($_POST['submit']);
			$this->Info->update($_POST,array("id"=>1));
				redirect('admin/content');
		}

		$this->data['info'] = $this->Info->get()[0];
		$this->data['images'] = $this->Images->get();
		$this->load->view('admin/content',$this->data);
	}

	public function team()
	{	

		if(isset($_POST['memberId']))
		{	
			if($_FILES["fileToUpload"]["name"] != ""){
				$targetFile = $this->uploadImage('team');
				$this->Team->update(array("image"=>$targetFile,"name" =>$_POST['name'],"title" =>$_POST['title']),array("id"=>$_POST['memberId']));
				redirect('admin/team');
			}
			else
			{
				$this->Team->update(array("name" =>$_POST['name'],"title" =>$_POST['title']),array("id"=>$_POST['memberId']));
				redirect('admin/team');
			}
		}

		$this->data['team'] = $this->Team->get();
		$this->load->view('admin/team',$this->data);
	}


	public function articles()
	{
		
		if(isset($_POST['articleId']))
		{	
			if($_FILES["fileToUpload"]["name"] != ""){
				$targetFile = $this->uploadImage('articles');
				$this->Articles->update(array("image"=>$targetFile,"text" =>$_POST['text'],"title" =>$_POST['title']),array("id"=>$_POST['articleId']));
				redirect('admin/articles');
			}
			else
			{
				$this->Articles->update(array("text" =>$_POST['text'],"title" =>$_POST['title']),array("id"=>$_POST['articleId']));
				redirect('admin/articles');
			}
		}

		$this->data['articles'] = $this->Articles->get();
		$this->load->view('admin/articles',$this->data);
	}

	public function news()
	{	
		if(isset($_POST['newId']))
		{	
			if($_FILES["fileToUpload"]["name"] != ""){
				$targetFile = $this->uploadImage('news');
				$this->News->update(array("image"=>$targetFile,"text" =>$_POST['text'],"title" =>$_POST['title']),array("id"=>$_POST['newId']));
				redirect('admin/news');
			}
			else
			{
				$this->News->update(array("text" =>$_POST['text'],"title" =>$_POST['title']),array("id"=>$_POST['newId']));
				redirect('admin/news');
			}
		}

		$this->data['news'] = $this->News->get();
		$this->load->view('admin/news',$this->data);
	}

	public function uploadImage($directory)
	{	
		$target_dir = $_SERVER['DOCUMENT_ROOT']."/ansme/public/".$directory."/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}

		// // Check if file already exists
		// if (file_exists($target_file)) {
		//     echo "Sorry, file already exists.";
		//     $uploadOk = 0;
		// }
		
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		        return basename($_FILES["fileToUpload"]["name"]);
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}

		return false;
	}

	public function isLoggedIn()
	{
		if(isset($this->session->userdata['admin']))
			return true;
		return false;
	}

	public function logout()
	{
		$this->session->unset_userdata('admin');
		redirect('admin');
	}

	public function login()
	{

		if(isset($_POST['username']))
		{
			$process = $this->Adminuser->checkLogin($_POST['username'],$_POST['password']);
			if($process)
			{	
				$admin = $process;
				$admin->user_id = $process->id;
				$this->session->set_userdata('admin',$admin);
				redirect('admin');
			}
			else
			{
				$this->data['error'] = 'Login Failed';
			}
			// var_dump($process);
			// exit();
		}
		$this->load->view('admin/login',$this->data);
	} 
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */