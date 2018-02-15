<?php
defined('BASEPATH') or exit('No direc script access allowed');

$this->load->view('admin/commons/header');

?>

<div class="conteudo col-lg-10">
    <h3 id="title" class="row-fluid">Listagem de Clientes</h3>
    <a class="btn-adicionar btn btn-primary pull-right"><span class="glyphicon glyphicon-plus"></span> Adicionar Novo</a>
    <form>
        <table class="table table-striped">
            <tr>
                <td>Nome</td>
                <td>CPF</td>
                <td>RG</td>
                <td>Data de Cadastro</td>
                <td>Ações</td>
            </tr>
            
            <tr>
                <td>Nome</td>
                <td>CPF</td>
                <td>RG</td>
                <td>Data de Cadastro</td>
                <td>Ações</td>
            </tr>
        </table>
    </form>
</div>

<?php

$this->load->view('admin/commons/footer');
?>