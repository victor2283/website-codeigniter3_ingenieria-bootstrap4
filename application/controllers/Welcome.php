<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//$this->load->model('Productos_model');
		//$this->load->model('Rutas_web_model');
		//$this->load->helper("botones_menu_principal");
		//$this->load->helper("encabezado_pagina");
		//$this->load->helper("contenidos");
	   
	
	}
	public function index(){
		$this->output->cache(1);		
		$this->rutas('index');
	}
	
	public function rutas($a){
	
	$this->load->view('plantilla/head');
		$this->load->view('plantilla/header');
   
     if ($a=='Welcome') {
		$this->load->view('contenidos/index');
	 } else {
		$this->load->view('contenidos/'.$a); 
	 }
	 
	
		
	
	
				
	
   
   $this->load->view('plantilla/footer');

	}}
