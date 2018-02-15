<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Principal extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('Produto_model');
    }


    public function index(){   
        
        $data['produtos'] = $this->Produto_model->listar_destaque();
       
        $data['title'] = 'Página Inicial';
        
       $this->load->view('home_page',$data);
    }
    
    public function Single($codigo = NUll){
        if($codigo!=null){
            
            $data['title'] = 'Produto';
            
            $data['produto'] = $this->Produto_model->getProdutoById($codigo);
            
            $this->load->view('single', $data);
        }else{
            redirect(base_url('produtos'));
        }
    }
    
     public function Cadastrar(){
        $data['title'] = 'Cadastro';
        $this->load->view('cadastrar', $data);
    }
    
    public function Contato(){
        $data['title'] = 'Contato';
        $this->load->view('contato', $data);
    }
    
    public function Produtos(){ 
        $data['title'] = 'Produtos';
        
        if($this->Produto_model->listar()){
            $data['produtos'] = $this->Produto_model->listar();
        }else{
            $data['produtos'] = null;
        }
        $this->load->view('produtos', $data);
    }
    
    public function Quem_Somos(){
        $data['title'] = 'Quem Somos';
        $this->load->view('quem_somos', $data);
    }
    
    public function Carrinho(){
        $data['title'] = 'Carrinho';
        $this->load->view('carrinho', $data);
    }
    
    public function Login(){
        $data['title'] = 'Entrar';
        $this->load->view('login', $data);
    }
}
