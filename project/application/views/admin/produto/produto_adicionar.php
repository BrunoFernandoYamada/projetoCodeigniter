<?php
defined('BASEPATH') or exit('No direc script access allowed');

$this->load->view('admin/commons/header');
?>


<div class="conteudo col-lg-10">
    <h3 id="title" class="row-fluid">Produto - Adicionar</h3>

    <?php if ($formErrors) { ?>
        <div class="alert alert-danger">
            <?= $formErrors ?>
        </div>
        <a href="produto_adicionar.php"></a>
        <?php
    } else {
        if ($this->session->flashdata('success_msg')) {
            ?>
            <div class="alert alert-success">
                <?= $this->session->flashdata('success_msg') ?>
            </div>
            <?php
        }
    }
    ?>


    <form action="<?= base_url('admin/produto/adicionar/') ?>" method="post" enctype="multipart/form-data">
        <div class="form-group col-md-3">
            <label for="codigo">Código</label>
            <input name="codigo" class="form-control" id="codigo" placeholder="Código" required="true">
        </div> 
        <div class="form-group col-md-9">
            <label for="nome_produto">Nome</label>
            <input name="nome_produto" class="form-control" id="nome_produto" placeholder="Nome" required="true">
        </div>
        <div class="form-group col-md-3">
            <label for="altura">Altura (cm)</label>
            <input type="text" name="altura" oninput="this.value=this.value.replace(/[^0-9.,]/g,'');" class="form-control" id="altura" placeholder="Altura">
        </div>
        <div class="form-group col-md-3">
            <label for="largura">Largura (cm)</label>
            <input type="text"  name="largura" oninput="this.value=this.value.replace(/[^0-9.,]/g,'');" class="form-control" id="largura" placeholder="Largura">
        </div>
        <div class="form-group col-md-3">
            <label for="comprimento">Comprimento (cm)</label>
            <input type="text" oninput="this.value=this.value.replace(/[^0-9.,]/g,'');" name="comprimento" class="form-control" id="comprimento" placeholder="Comprimento">
        </div>
        <div class="form-group col-md-3">
            <label for="peso">Peso (g)</label>
            <input type="text" oninput="this.value=this.value.replace(/[^0-9.,]/g,'');" name="peso" class="form-control" id="peso" placeholder="Peso">
        </div>
        <div class="form-group col-md-4">
            <label for="desconto">Desconto</label>
            <input name="desconto" class="form-control" id="desconto" placeholder="Desconto">
        </div>
        <div class="form-group col-md-4">
            <label for="preco">Preço</label>
            <input name="preco" class="form-control" id="preco" placeholder="Preço" required="true">
        </div>
        <div class="form-group col-md-4">
            <label for="qtd_estoque">Qtd estoque</label>
            <input type="text" name="qtd_estoque" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control" id="qtd_estoque" placeholder="Qtd estoque">
        </div>

        <div class="form-group col-lg-12">
            <label for="descricao">Descrição</label>
            <textarea name="descricao" class="form-control" id="descricao" rows="4" required="true"></textarea>
        </div>

        <div class="form-group col-lg-12">
            <label for="nome">Imagem</label>
            <input type="file" name="imagem" id="imagem">
        </div>
        <!--
        <div class="form-group">
            <input type="hidden" name="data_cadastro" class="form-control" id="data_cadastro" value="<?php date('Y-m-d H:i:s'); ?>">
        </div>
        -->
        <div class="col-md-12 text-right">
            <a href="<?=base_url("admin/listar-produtos")?>" class="btn btn-danger">Cancelar</a>
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>

    </form>
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