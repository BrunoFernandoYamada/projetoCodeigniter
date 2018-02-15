<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Produto_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getProdutoById($id = NULL) {

        if ($id != NULL) {
            $this->db->where('id_produto', $id);
            $this->db->limit(1);
            $resultado = $this->db->get('produtos');

            return $resultado->row_array();
        }
    }

    function inserir($data) {

        $this->db->insert('produtos', $data);

        if ($this->db->insert_id()) {
            return true;
        } else {
            return false;
        }
    }

    function listar($limit = null, $offset = null) {

        $this->db->select('*')->from('produtos');
        
        if($limit){
            $this->db->limit($limit,$offset);
        }

        return $this->db->get()->result();
    }
    
    function countAll(){
        return $this->db->count_all('produtos');
    }
    
    function listar_destaque() {

        $this->db->select('*')->from('produtos')->order_by('data_cadastro','asc');
        $this->db->limit(6);
        return $this->db->get()->result();
    }

    function excluir($id) {
        $this->db->where('id_produto', $id);
        if ($this->db->delete('produtos')) {
            return true;
        } else {
            return false;
        }
    }
    
    function atualizar($produto){
        
        if($produto['id_produto'] == NULL){
            return false;
        }else{
            $this->db->where('id_produto', $produto['id_produto']);
            return $this->db->update('produtos',$produto);
        }
    }
    
    function pesquisar($palavra = null){
        if($palavra){
            $this->db->select('*')->from('produtos')->where('nome_produto',$palavra);
            return $this->db->get()->result();
        }else{
            return null;
        }
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

