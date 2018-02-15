<?php
defined('BASEPATH') or exit('No direct script access allowed');

$this->load->view('commons/header');
?>

<div id="localizacao" class="col-md-12">
    <a href="<?= base_url() ?>">Home</a> &raquo; <a href="#">Produtos</a>
</div>
<!-- INICIO DO CONTEUDO-->
<div id="general-content" class="container-fluid" >

    <div id="content" class="col-md-9 pull-left">
        <div id="sub-titulo" class="row">
            <h3>Produtos</h3>
        </div>

        <div class="produtos">

            <?php
            if ($produtos) {
                foreach ($produtos as $produto) {
                    ?>

                    <div id="item-produto">
                        <img class="produto-img" src="<?= base_url($produto->imagem); ?>">
                        <span class="produto-titulo"><?= $produto->nome_produto ?></span>

                        <?php if ($produto->desconto > 0 && $produto->desconto != null) { ?>

                            <h5 id="de"><?= 'De: R$ ' . $produto->preco ?></h5>
                            <h4 id="por"><?= 'Por: R$ ' . $produto->desconto ?></h4>

                        <?php } else { ?>
                            <h5 id="de"><br></h5>
                            <h4 id="por"><?= 'Preço: R$ ' . $produto->preco ?></h4>

                        <?php } ?>                        
                        <a href="<?= base_url('single/' . $produto->id_produto) ?>" class="btn btn-primary">Comprar</a>
                    </div>

                    <?php
                }
            } else {
                ?>
                <h3>Não há produtos disponíveis</h3>
            <?php } ?>        
        </div>

    </div>

    <!--INICIO DO SIDEBAR-->
    <div id="sidebar" class="col-md-3 pull-right">
        <div id="sub-titulo" class="row">
            <h3>Redes sociais</h3>
        </div>

        <div class="sociais">

            <div id="facebook">
                <div class="texto row-fluid"><p>Curta nossa página<br>no facebook</p></div>
                <a href="https://pt-br.facebook.com/" target="blank"class="btn btn-warning pull-left">Curtir</a>
                <img src="<?= base_url('assets/img/facebook.png'); ?>" class="pull-right"/>                
            </div>

            <div id="twitter">
                <div class="texto row-fluid"><p>Acesse nosso Instagram<br>aqui</p></div>
                <a href="https://twitter.com/?lang=pt-br" target="blank"class="btn btn-warning pull-left">Acessar</a>
                <img src="<?= base_url('assets/img/instagram_logo.png'); ?>" class="pull-right"/>   
            </div>
        </div>
    </div>

    <!--FIM DO SLIDER-->
</div>

<?php
$this->load->view('commons/footer');
?>

