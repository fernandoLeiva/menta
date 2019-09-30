<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
		$resp = getJson('balderramo');

		$form = new StdClass();
		$form->nombre = $resp->form;
		$form->form = form($resp->plantilla);
        $data['form'] = $form;
		$this->load->view('test',$data);
		$this->load->view(FRM.'scripts');
	}
}
