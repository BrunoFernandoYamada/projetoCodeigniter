<?php
defined('BASEPATH') or exit('No direc script access allowed');

$this->load->view('admin/commons/header');
?>


<div class="conteudo col-lg-10">
    <h3 id="title" class="row-fluid">Produto - Visualizar</h3>

    <?php if ($this->session->flashdata('error_msg')) { ?>
        <div class="alert alert-danger">
            <?= $this->session->flashdata('error_msg') ?>
        </div>
        <a href="produto_adicionar.php"></a>

    <?php } ?>

    <div class="col-md-8">

        <div class="col-md-12">        
            <p><strong>Código: </strong><?= $produto['codigo'] ?><p>
        </div> 

        <div class="col-md-12">
            <p><strong>Nome: </strong><?= $produto['nome_produto'] ?></p>
        </div>

        <div class="col-md-12">
            <p><strong>Altura: </strong><?= $produto['altura'] ?></p>
        </div>

        <div class="col-md-12">
            <p><strong>Largura: </strong><?= $produto['largura'] ?></p>
        </div>

        <div class="col-md-12">
            <p><strong>Comprimento: </strong><?= $produto['comprimento'] ?></p>
        </div>

        <div class="col-md-12">
            <p><strong>Peso: </strong><?= $produto['peso'] ?></p>
        </div>

        <div class="col-md-12">
            <p><strong>Desconto: </strong><?= $produto['desconto'] ?></p>
        </div>

        <div class="col-md-12">
            <p><strong>Preço: </strong><?= $produto['preco'] ?></p>
        </div>

        <div class="col-md-12">
            <p><strong>Qtd. estoque: </strong><?= $produto['qtd_estoque'] ?></p>
        </div>

        <div class="col-md-12">
            <p><strong>Descrição: </strong><?= $produto['descricao'] ?></p>
        </div>

    </div>

    <div class="col-md-4">

        <div class="col-lg-6">
            <p><strong>Preview: </strong></p>
            <img class="preview-img pull-right" src="<?= base_url() . $produto['imagem'] ?>">
        </div>

    </div>

    <div class="form-group">
        <input type="hidden" name="id_produto" class="form-control" id="id_produto" value="<?= $produto['id_produto'] ?>">
    </div>

    <div class="col-md-12 text-right">
        <!-- <button class="btn btn-danger" onclick="javascript: window.history.back();">Cancelar</button> -->
        <a href="<?= base_url("admin/listar-produtos") ?>" class="btn btn-danger">Voltar</a>
    </div>

</div>

<?php
$this->load->view('admin/commons/footer');
?>


<script>
    jQuery(function ($) {
        $("#codigo").mask("9999");
        /*
         $("#altura").mask("999,9");
         $("#comprimento").mask("999,9");
         $("#largura").mask("999,9");
         $("#peso").mask("999,9");
         */
    });
</script>

<script type="text/javascript">
    $(function () {
        $("#preco").maskMoney({symbol: 'R$ ',
            showSymbol: true, thousands: '.', decimal: ',', symbolStay: false});
        $("#desconto").maskMoney({symbol: 'R$ ',
            showSymbol: true, thousands: '.', decimal: ',', symbolStay: false});
    })
</script>