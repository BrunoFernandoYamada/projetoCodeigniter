<?php

class Admin extends CI_Controller{
    
    public function index(){
        $data['title'] = 'Entrar';
        $this->load->view('admin/login',$data);   
    }
    
    public function Painel(){
        $data['title'] = 'Painel do Administrador';
        $this->load->view('admin/painel',$data);
    }
    
    public function ListarProdutos(){
        $this->load->model('produto_model');
        $data['title'] = 'Listagem de Produtos';
        
        $config = array(
            "base_url" => base_url('admin/listar-produtos/p'),
            "per_page" => 3,
            "num_links" => 3,
            "uri_segment" => 4,
            "total_rows" => $this->produto_model->countAll(),
            "full_tag_open" => "<ul class='pagination'>",
            "full_tag_close" => "</ul>",
            "first_link" => FALSE,
            "last_link" => FALSE,
            "first_tag_open" => "<li>",
            "first_tag_close" => "</li>",
            "prev_link" => "Anterior",
            "prev_tag_open" => "<li class='prev'>",
            "prev_tag_close" => "</li>",
            "next_link" => "Próxima",
            "next_tag_open" => "<li class='next'>",
            "next_tag_close" => "</li>",
            "last_tag_open" => "<li>",
            "last_tag_close" => "</li>",
            "cur_tag_open" => "<li class='active'><a href='#'>",
            "cur_tag_close" => "</a></li>",
            "num_tag_open" => "<li>",
            "num_tag_close" => "</li>"
         );
        
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        
        $offset = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        
        $data['listaProdutos'] = $this->produto_model->listar($config['per_page'],$offset);
          
        $this->load->view('admin/listagem_produtos',$data);
    }
    
    public function ListarClientes(){
        $data['title'] = 'Listagem de Clientes';
        $this->load->view('admin/listagem_clientes',$data);
    }
    
    public function ListarVendas(){
        $data['title'] = 'Listagem de Vendas';
        $this->load->view('admin/listagem_vendas',$data);
    }
    
    public function ListarMaisVendidos(){
        $data['title'] = 'Mais Vendidos';
        $this->load->view('admin/listagem_mais_vendidos',$data);
    }
    public function ListarMaisVisitados(){
        $data['title'] = 'Mais Visitados';
        $this->load->view('admin/listagem_mais_visitados',$data);
    }
    
    
}

