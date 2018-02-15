<?php
defined('BASEPATH') or exit('No direc script access allowed');
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/painel.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap-theme.min.css'); ?>">
        <title><?php echo $title; ?></title>  
    </head>
    <body>
        <div class="general-content row-fluid">
            <div class="header col-md-12">
                <h4 class="col-md-11">Cantinho da Su</h4><button class="btn-sair btn btn-danger pull-right col-md-1"><span class="glyphicon glyphicon-off"></span> Sair</button>
            </div> 
            <div class="sidebar col-lg-2 row">
                <ul class="menu nav nav-pills nav-stacked">
                    <li><a href="<?=base_url('admin/painel');?>">Inicio</a></li>
                    <li><a href="<?=base_url('admin/listar-produtos/p');?>">Produtos</a></li>
                    <li><a href="<?=base_url('admin/listar-clientes');?>">Clientes</a></li>
                    <li><a href="<?=base_url('admin/listar-vendas');?>">Vendas</a></li>
                    <li><a href="<?=base_url('admin/listar-mais-vendidos');?>">Mais Vendidos</a></li>
                    <li><a href="<?=base_url('admin/listar-mais-visitados');?>">Mais Visitados</a></li>
                </ul>      
            </div>
         
        </div>