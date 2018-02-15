<?php
defined('BASEPATH') OR exit('No direct sript access allowed');
?>
<?php $this->load->view('commons/header'); ?>

<!--INICIO DO SLIDER-->
<div id="carousel-example-generic" class="carousel slide">

    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1" ></li>
        <li data-target="#carousel-example-generic" data-slide-to="2" ></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <img class="img-responsive img-full" src="<?= base_url('assets/img/imagem1.jpg'); ?>" alt="">
        </div>

        <div class="item">
            <img class="img-responsive img-full" src="<?= base_url('assets/img/imagem2.jpg'); ?>" alt="">
            <div class="carousel-caption">
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>

        </div>

        <div class="item">
            <img class="img-responsive img-full" src="<?= base_url('assets/img/imagem3.jpg'); ?>" alt="">
            <div class="carousel-caption">
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>
    </div>

    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="icon-next"></span>
    </a>
</div>
<!-- FIM DO SLIDER-->
<div id="localizacao" class="col-md-12">
    <a href="<?= base_url() ?>">Página Inicial</a>
</div>

<!-- INICIO DO CONTEUDO-->
<div id="general-content" class="container-fluid" >

    <div id="content" class="col-md-9 pull-left">
        <div id="sub-titulo" class="row">
            <h3>Produtos em destaque</h3>
        </div>

        <div class="produtos">

            <?php
            if ($produtos) {
                if(count($produtos) < 6){
                    $tamanho = count($produtos);
                }else{
                    $tamanho = 6;
                }
                for($i = 0; $i < $tamanho; $i++){
                
                    ?>

                    <div id="item-produto">
                        <img class="produto-img" src="<?= base_url($produtos[$i]->imagem); ?>">
                        <span class="produto-titulo"><?= $produtos[$i]->nome_produto ?></span>

                        <?php if ($produtos[$i]->desconto > 0 && $produtos[$i]->desconto != null) { ?>

                            <h5 id="de"><?= 'De: R$ ' . $produtos[$i]->preco ?></h5>
                            <h4 id="por"><?= 'Por: R$ ' . $produtos[$i]->desconto ?></h4>

                        <?php } else { ?>
                            <h5 id="de"><br></h5>
                            <h4 id="por"><?= 'Preço: R$ ' . $produtos[$i]->preco ?></h4>

                        <?php } ?>                        
                        <a href="<?= base_url('single/' . $produtos[$i]->id_produto) ?>" class="btn btn-primary">Comprar</a>
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

<!-- FIM DO CONTEUDO-->

<?php
$this->load->view('commons/footer');
?>