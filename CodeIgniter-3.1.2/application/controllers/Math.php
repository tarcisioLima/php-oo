<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Math extends CI_Controller{
     
    public function formulario(){
		$this->load->view('somar');
	}
	
	public function somar(){
	    $n1= $this->input->post("num1");
	    $n2= $this->input->post("num2");
	    $soma = $n1 + $n2;
	    $data['n1'] = $n1;
	    $data['n2'] = $n2;
	    $data['res']  = $soma;
	    $this->load->view('sucCalc',$data);
	    #echo "Soma: " . ($n1 + $n2);
	}
}

?>