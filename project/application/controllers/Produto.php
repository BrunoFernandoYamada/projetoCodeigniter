<?php

class Produto extends CI_COntroller {

    public function __construct() {
        parent::__construct();
        $this->load->library(array('form_validation', 'session'));
        $this->load->model('Produto_model');
        date_default_timezone_set('America/Sao_Paulo');
    }

    public function Adicionar() {
        $data['title'] = 'Adicionar Produto';
        $this->form_validation->set_rules('nome_produto', 'Nome do Produto', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('codigo', 'Código', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('descricao', 'Descrição', 'trim|required|min_length[10]');
        $this->form_validation->set_rules('preco', 'Preço', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['formErrors'] = validation_errors();
        } else {

            $uploadImagem = $this->UploadArquivo('imagem');

            if ($uploadImagem['error']) {
                $data['formErrors'] = $uploadImagem['message'];
            } else {

                $produto = $this->input->post();
                $produto['data_cadastro'] = date('Y-m-d H:i:s');
                $produto['imagem'] = 'produtos_img/' . $uploadImagem['filedata']['file_name'];
                $res = $this->Produto_model->inserir($produto);
                if ($res) {
                    $this->session->set_flashdata('success_msg', 'Produto Cadastrado com sucesso');
                    $data['formErrors'] = null;
                } else {
                    $data['formErrors'] = 'Não foi possível salvar o produto';
                }
            }
        }
        $this->load->view('admin/produto/produto_adicionar', $data);
    }

    public function Excluir($id = NULL) {

        $res = $this->Produto_model->excluir($id);

        if ($res) {
            $this->session->set_flashdata('success_msg', 'Produto excluido com sucesso!');
        } else {
            $this->session->set_flashdata('error_msg', 'Não foi Possível excluir cadastro!');
        }
        redirect(base_url('admin/listar-produtos'));
    }

    public function Editar($id = NULL) {
        $data['title'] = 'Editar Produto';
        $data['produto'] = $this->Produto_model->getProdutoById($id);

        $this->load->view('admin/produto/produto_editar', $data);
    }

    public function Atualizar() {

        $this->form_validation->set_rules('nome_produto', 'Nome do Produto', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('codigo', 'Código', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('descricao', 'Descrição', 'trim|required|min_length[10]');
        $this->form_validation->set_rules('preco', 'Preço', 'required');

        $produto = $this->input->post();

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error_msg', validation_errors());
        } else {    
            $image = $_FILES['image'];
            if ($image['name'] != null) {
                $uploadImagem = $this->UploadArquivo('image');
                if ($uploadImagem['error']) {
                    $this->session->set_flashdata('error_msg', $uploadImagem['message']);
                } else {
                    $produto['imagem'] = 'produtos_img/' . $uploadImagem['filedata']['file_name'];
                }
            }

            if (!isset($produto['id_produto'])) {
                $this->session->set_flashdata('error_msg', 'Não foi possível altera produto!');
                redirect(base_url('admin/listar-produtos'));
            } else {
                $res = $this->Produto_model->atualizar($produto);

                if ($res) {
                    $this->session->set_flashdata('success_msg', 'Produto Atualizado com sucesso!');
                    redirect(base_url('admin/listar-produtos'));
                    
                } else {
                    $this->session->set_flashdata('error_msg', 'Não foi possível altera produto!');        
                    redirect(base_url('admin/listar-produtos'));
                    
                }
            }
        }
        redirect(base_url('admin/produto/editar/') . $produto['id_produto']);
        
    }
    
     public function Visualizar($id = NULL) {
        $data['title'] = 'Visualizar Produto';
        $data['produto'] = $this->Produto_model->getProdutoById($id);

        $this->load->view('admin/produto/produto_visualizar', $data);
    }

    public function UploadArquivo($arquivo) {

        $this->load->library('upload');

        $path = './produtos_img';

        $config['upload_path'] = $path;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '5120';
        $config['encrypt_name'] = false;

        if (!is_dir($path)) {
            mkdir($path, 0777, $recursicve = true);
        }

        $this->upload->initialize($config);

        if (!$this->upload->do_upload($arquivo)) {
            $data['error'] = true;
            $data['message'] = $this->upload->display_errors();
        } else {
            $data['error'] = false;
            $data['filedata'] = $this->upload->data();
        }
        return $data;
    }

}
