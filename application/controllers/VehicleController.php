<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VehicleController extends CI_Controller {

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
	 var $menu="6";
	public function index()
	{
	    $url="https://swapi.co/api/vehicles/";
	    $data=json_decode(file_get_contents($url), true);
	    $data["kode"]="Vehicles";
	    $data["menu"]=$this->menu;
		
		$this->load->view('header', $data);
		$this->load->view('vehicle');
		$this->load->view('footer');
	}
	
	public function pagination($id)
	{
	    $data["results"]=null;
	    $data["count"]=null;
	    $url="https://swapi.co/api/vehicles/?page=$id";
	    $data=json_decode(file_get_contents($url), true);
	    $data["kode"]="Vehicle";
	    $data["menu"]=$this->menu;
		
		$this->load->view('header', $data);
		$this->load->view('vehicle');
		$this->load->view('footer');
	}
	
	public function detail($id)
	{
		$data["count"]=null;
	    $url="https://swapi.co/api/vehicles/$id";
	    $data["results"]=json_decode(file_get_contents($url), true);
	    $data["kode"]="Vehicle";
	    $data["menu"]=$this->menu;
		
		$this->load->view('header', $data);
		$this->load->view('vehicle_detail');
		$this->load->view('footer');
	}
}
