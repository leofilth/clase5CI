<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Formulario extends CI_Controller {
    public function __construct()
    {
        parent:: __construct();
        $this->layout->setLayout('template');
    }
    public function index()
    {
        $file_name=null;
        if($this->input->post()) {
            //proceso la imagen
            $error = null;
            //valido la foto
            $config['upload_path'] = './uploads/archivos/';
            $config['allowed_types'] = 'jpg|jpeg';
            $config['overwrite'] = false;
            $config['encrypt_name'] = true;
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('archivo'))
            {
                $ima = $this->upload->data();
                $file_name = $ima["file_name"];

            }
            else {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('ControllerMessage', $error["error"]);
            }
            //proceso los datos
                echo "nombre: " . $this->input->post("username", true);
                echo "<br>";
                echo "password: " . sha1($this->input->post("pass", true));
                echo "<br>";
                echo "textArea: " . $this->input->post("textarea", true);
                echo "<br>";
                echo "Pais elegido: " . $this->input->post("paises", true);
                echo "<br>";
                echo "foto: ".$file_name;
                exit;
        }
        //ambiente sin post
        $this->layout->view('formulario');
    }
}