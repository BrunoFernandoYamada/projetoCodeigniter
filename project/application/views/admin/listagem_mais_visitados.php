<?php
defined('BASEPATH') or exit('No direc script access allowed');

$this->load->view('admin/commons/header');

?>

<div class="conteudo col-lg-10">
    <h3 id="title" class="row-fluid">Mais Visitados</h3>
    <a class="btn-adicionar btn btn-primary pull-right"><span class="glyphicon glyphicon-plus"></span> Adicionar Novo</a>
    <form>
        <table class="table table-striped">
            <tr>
                <td>Imagem</td>
                <td>Nome</td>
                <td>Preço</td>
                <td>Quantidade</td>
                <td>Ações</td>
            </tr>
            
            <tr>
                <td>Imagem</td>
                <td>Nome</td>
                <td>Preço</td>
                <td>Quantidade</td>
                <td>Ações</td>
            </tr>
        </table>
    </form>
</div>

<?php

$this->load->view('admin/commons/footer');
?>
