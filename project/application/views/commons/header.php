<?php
defined('BASEPATH') OR exit('No direct sript access allowed');
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/estilo.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap-theme.min.css'); ?>">
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <div id="all" class="container-fluid">

            <div id="header" class="row-fluid">
                <div id="header-inner" class="row-fluid">
                    <div id="logo-inner" class="col-md-9">
                        <img src="<?= base_url('assets/img/logo-long.png'); ?>" class="img-responsive" alt="Responsive image">
                    </div>
                    <div class="col-md-3">
                        <div id="cad-link" class="row-fluid pull-right">
                            <a href="<?= base_url('cadastrar'); ?>"><span class="glyphicon glyphicon-plus"></span> Cadastrar-se</a> 
                            <a href="<?= base_url('login'); ?>"><span class="glyphicon glyphicon-user"></span> Entrar</a>
                        </div>

                        <div id="carrinho" class="row-fluid pull-right">
                            <a href="<?=base_url('carrinho')?>" id="btn-carrinho" type="button" class="btn btn-default btn-lg ">
                                <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Meu Carrinho<br/>
                                <p href="#">0 produtos</p>
                            </a>
                        </div> 
                    </div>
                </div>

            </div>

            <div id="menu" class="row-fluid">

                <!--MENU DE NAVEGAÇÃO-->
                <nav id="menu-nav"class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="<?=($this->router->fetch_class() == 'Principal' && $this->router->fetch_method() == 'index')? 'active' : null;?>"><a id="menu-ativo" href="<?=base_url()?>">HOME <span class="sr-only">(current)</span></a></li>
                                <li class="<?=($this->router->fetch_class() == 'Principal' && $this->router->fetch_method() == 'Produtos')? 'active' : null;?>"><a href="<?=base_url('produtos')?>">CATALOGO DE PRODUTOS</a></li>
                                <li class="<?=($this->router->fetch_class() == 'Principal' && $this->router->fetch_method() == 'Quem_Somos')? 'active' : null;?>"><a href="<?= base_url('quem_somos'); ?>">QUEM SOMOS</a></li>
                                <li class="<?=($this->router->fetch_class() == 'Principal' && $this->router->fetch_method() == 'Carrinho')? 'active' : null;?>"><a href="<?= base_url('carrinho'); ?>">MEU CARRINHO</a></li>
                                <li class="<?=($this->router->fetch_class() == 'Principal' && $this->router->fetch_method() == 'Contato')? 'active' : null;?>"><a href="<?= base_url('contato'); ?>">CONTATO</a></li>
                            </ul>

                            <form class="navbar-form navbar-left pull-right">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Pesquisar">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-default">
                                            <span class="glyphicon glyphicon-search"></span> Ir
                                        </button>
                                    </span>
                                </div>
                            </form>

                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
                <!-- FIM MENU DE NAVEGAÇÃO-->
            </div>
            <!-- FIM MENU DOMENU-->
