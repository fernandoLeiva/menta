<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
		
		$this->load->model(FRM.'Forms');
		$aux = $this->Forms->obtenerPlantilla(10);

		$form = new StdClass();
		$form->nombre = $aux->nombre;
		$form->form = form($aux->items);
        $data['form'] = $form;
		$this->load->view('test',$data);
		$this->load->view(FRM.'scripts');
	}
}
