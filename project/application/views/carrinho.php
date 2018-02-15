<?php
defined('BASEPATH') or exit('No direct script access allowed');

$this->load->view('commons/header');
?>

<div id="localizacao" class="col-md-12">
    <a href="<?= base_url() ?>">Home</a> &raquo; <a href="#">Carrinho</a>
</div>

<div class="conteudo-carrinho container-fluid">
    <h1 class="form-header titulo-inner">
        Carrinho de compras
    </h1>
    <table class="tabela-carrinho table table-striped">
        
        <tr>
            <td><strong>Produto</strong></td>
            <td><strong>Quantidade</strong></td>
            <td><strong>Valor Unitário</strong></td>
            <td><strong>Sub Total</strong></td>
            <td><strong>Ação</strong></td>
        </tr>
        <tr>
            <td>kit com 3 caixas</td>
            <td>2</td>
            <td>R$ 120,00</td>
            <td>R$ 240,00</td>
            <td><a href="#" class="btn btn-danger">Excluir</a></td>
        </tr>
        <tr>
            <td colspan="2">Total<td>
            <td>R$ 240,00</td>
        </tr>
    </table>
       
</div>

<?php
    $this->load->view('commons/footer');
?>

