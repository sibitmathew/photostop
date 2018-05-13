<?php
class gallery extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('photomodel','',true);
		$this->load->library(array('session','photo'));
	}
	function index()
	{
		$data="";
		$data["title"]="Image Gallery";
		$this->load->view('headerview',$data);
		$data["gallery"]=$this->photomodel->getgallery();
		$this->load->view('gallery/galleryview',$data);
		$this->load->view('footerview');
	}
	function framegallery()
	{
		$data="";
		$data["title"]="Frame Gallery";
		$this->load->view('headerview',$data);
		$data["frame"]=$this->photomodel->getframegallery();
		$this->load->view('gallery/framegalleryview',$data);
		$this->load->view('footerview');
	}
	function papersgallery()
	{
		$data="";
		$data["title"]="Paper Gallery";
		$this->load->view('headerview',$data);
		$data["paper"]=$this->photomodel->getpapersgallery();
		$this->load->view('gallery/papergalleryview',$data);
		$this->load->view('footerview');
	}
	
}	