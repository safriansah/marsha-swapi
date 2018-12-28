<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PlanetController extends CI_Controller {

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
	 var $menu="3";
	public function index()
	{
	    $url="https://swapi.co/api/planets/";
	    $data=json_decode(file_get_contents($url), true);
	    $data["kode"]="Planet";
	    $data["menu"]=$this->menu;
		
		$this->load->view('header', $data);
		$this->load->view('planet');
		$this->load->view('footer');
	}
	
	public function pagination($id)
	{
	    $data["results"]=null;
	    $data["count"]=null;
	    $url="https://swapi.co/api/planets/?page=$id";
	    $data=json_decode(file_get_contents($url), true);
	    $data["kode"]="Planet";
	    $data["menu"]=$this->menu;
		
		$this->load->view('header', $data);
		$this->load->view('planet');
		$this->load->view('footer');
	}
	
	public function detail($id)
	{
		$data["count"]=null;
	    $url="https://swapi.co/api/planets/$id";
	    $data["results"]=json_decode(file_get_contents($url), true);
	    $data["kode"]="Planets";
	    $data["menu"]=$this->menu;
		
		$this->load->view('header', $data);
		$this->load->view('planet_detail');
		$this->load->view('footer');
	}
}
