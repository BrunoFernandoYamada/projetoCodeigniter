<?php
defined('BASEPATH') or exit('No direc script access allowed');

$this->load->view('admin/commons/header');
?>


<div class="conteudo col-lg-10">
    <h3 id="title" class="row-fluid">Produto - Editar</h3>
    
    <?php if ($this->session->flashdata('error_msg')) { ?>
        <div class="alert alert-danger">
            <?= $this->session->flashdata('error_msg') ?>
        </div>
        <a href="produto_adicionar.php"></a>
        
    <?php } ?>

    <form action="<?= base_url('admin/produto/atualizar') ?>" method="post" enctype="multipart/form-data">
        <div class="form-group col-md-3">
            <label for="codigo">Código</label>
            <input name="codigo" class="form-control" id="codigo" placeholder="Código" required="true" value="<?=$produto['codigo']?>">
        </div> 
        <div class="form-group col-md-9">
            <label for="nome_produto">Nome</label>
            <input name="nome_produto" class="form-control" id="nome_produto" placeholder="Nome" required="true" value="<?=$produto['nome_produto']?>">
        </div>
        <div class="form-group col-md-3">
            <label for="altura">Altura (cm)</label>
            <input type="text" name="altura" oninput="this.value=this.value.replace(/[^0-9.,]/g,'');" name="altura" class="form-control" id="altura" placeholder="Altura" value="<?=$produto['altura']?>">
        </div>
        <div class="form-group col-md-3">
            <label for="largura">Largura (cm)</label>
            <input type="text" name="altura" oninput="this.value=this.value.replace(/[^0-9.,]/g,'');" name="largura" class="form-control" id="largura" placeholder="Largura" value="<?=$produto['largura']?>">
        </div>
        <div class="form-group col-md-3">
            <label for="comprimento">Comprimento (cm)</label>
            <input type="text" name="altura" oninput="this.value=this.value.replace(/[^0-9.,]/g,'');" name="comprimento" class="form-control" id="comprimento" placeholder="Comprimento" value="<?=$produto['comprimento']?>">
        </div>
        <div class="form-group col-md-3">
            <label for="peso">Peso (g)</label>
            <input type="text" name="altura" oninput="this.value=this.value.replace(/[^0-9.,]/g,'');" name="peso" class="form-control" id="peso" placeholder="Peso" value="<?=$produto['peso']?>">
        </div>
        <div class="form-group col-md-4">
            <label for="desconto">Desconto</label>
            <input name="desconto" class="form-control" id="desconto" placeholder="Desconto" value="<?=$produto['desconto']?>">
        </div>
        <div class="form-group col-md-4">
            <label for="preco">Preço</label>
            <input name="preco" class="form-control" id="preco" placeholder="Preço" required="true" value="<?=$produto['preco']?>">
        </div>
        <div class="form-group col-md-4">
            <label for="qtd_estoque">Qtd estoque</label>
            <input type="text" name="qtd_estoque" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="qtd_estoque" class="form-control" id="qtd_estoque" placeholder="Qtd estoque" value="<?=$produto['qtd_estoque']?>">
        </div>

        <div class="form-group col-lg-12">
            <label for="descricao">Descrição</label>
            <textarea name="descricao" class="form-control" id="descricao" required="true" rows="4"><?=$produto['descricao']?></textarea>
        </div>

        <div class="form-group col-lg-6">
            <label for="image">Imagem</label>
            <input type="file" name="image" id="image">
        </div>
        
        <div class="form-group col-lg-6">
            <label for="image">Preview</label>
            <img class="preview-img pull-right" src="<?=base_url(). $produto['imagem']?>">
        </div>
        
        <div class="form-group">
            <input type="hidden" name="id_produto" class="form-control" id="id_produto" value="<?=$produto['id_produto']?>">
        </div>
       
        <div class="col-md-12 text-right">
           <!-- <button class="btn btn-danger" onclick="javascript: window.history.back();">Cancelar</button> -->
           <a href="<?=base_url("admin/listar-produtos")?>" class="btn btn-danger">Cancelar</a>
            <button class="btn btn-success" type="submit">Alterar</button>
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