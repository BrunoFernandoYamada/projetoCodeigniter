<?php
defined('BASEPATH') or exit('No direc script access allowed');

$this->load->view('admin/commons/header');

?>

<div class="conteudo col-lg-10">
    <h3 id="title" class="row-fluid">Listagem de Vendas</h3>
    <a class="btn-adicionar btn btn-primary pull-right"><span class="glyphicon glyphicon-plus"></span> Adicionar Novo</a>
    <form>
        <table class="table table-striped">
            <tr>
                <td>Nome</td>
                <td>Data</td>
                <td>valor</td>
                <td>Data da Venda</td>
                <td>Ações</td>
            </tr>
            
            <tr>
                <td>Nome</td>
                <td>Data</td>
                <td>valor</td>
                <td>Data da Venda</td>
                <td>Ações</td>
            </tr>
        </table>
    </form>
</div>

<?php

$this->load->view('admin/commons/footer');
?>
