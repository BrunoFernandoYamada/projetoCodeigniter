<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('commons/header');
?>
<div id="localizacao" class="col-md-12">
    <a href="<?= base_url() ?>">Home</a> &raquo; <a href="#">Produtos</a> &raquo; <a href="#">Caixas</a>
</div>
<div id="general-content-single" class="row-fluid">
    <div id="produto-imagens" class="col-md-5">
        <div id="produto-img-single" class="col-md-12">
            <div id="imagem-single">
                <img src="<?= base_url($produto['imagem']) ?>" style="width: 100%; height: 100%; overflow: hidden;">
            </div>
        </div> 
    </div>
    <div id="produto-dados" class="col-md-7">
        <div id="produto-titulo-single" class="col-md-12">
            <span><h3><?= $produto['nome_produto'] ?></h3></span>
        </div>
        <div id="dados" class="row-fluid">
            <h6><?= 'Cod:' . $produto['codigo'] ?></h6>

            <?php if ($produto['desconto'] > 0 && $produto['desconto'] != null) { ?>

                <h5 id="de"><?= 'De: R$ ' . $produto['preco'] ?></h5>
                <h4 id="por"><?= 'Por: R$ ' . $produto['desconto'] ?></h4>

            <?php } else { ?>

                <h5 id="por"><?= 'Preço: R$ ' . $produto['preco'] ?></h5>

            <?php } ?>

            <a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span> Adicionar ao carrinho</a>


        </div>
    </div>

    <div id="produto-caracteristicas" class="col-md-12">
        <div id="produto-titulo-single" class="col-md-12">
            <span><h3>Descrição do Produto</h3></span>
        </div>
        <div id="caracteristicas-dados" class="col-md-12">
            <h5><strong>Informações</strong></h5>
            <p><?= $produto['descricao'] ?></p>
            <br>
            <h5><strong>Dimensões</strong></h5>
            <p><?= $produto['altura'] . ' X ' . $produto['largura'] . ' X ' . $produto['comprimento'] ?></p>
        </div>
    </div>

</div>

<?php
$this->load->view('commons/footer');
?>
