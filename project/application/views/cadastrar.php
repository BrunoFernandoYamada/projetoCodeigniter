<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>



<?php $this->load->view('commons/header'); ?>

<div id="localizacao" class="col-md-12">
    <a href="<?= base_url() ?>">Home</a> &raquo; <a href="#">Cadastro</a>
</div>

<div class="container formulario">

    <h1 class="form-header titulo-inner col-md-12">
        Formulário de cadastro
    </h1>
    <div id="formulario-contato">
        <form class="form" action="" method="post" accept-charset="utf-8">
            <div class="form-group col-md-8">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" placeholder="Nome" required="true">
            </div>
            
            <div class="form-group col-md-4">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpf" placeholder="CPF" required="true">
            </div>

            <div class="form-group col-md-9">
                <label for="rua">Rua</label>
                <input type="text" class="form-control" id="rua" placeholder="Rua" required="true">
            </div>

            <div class="form-group col-md-3">
                <label for="numero">Número</label>
                <input type="text" class="form-control" id="numero" placeholder="Número" required="true">
            </div>

            <div class="form-group col-md-4"> 
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" id="bairro" placeholder="Bairro" required="true">
            </div>

            <div class="form-group col-md-4">
                <label for="cidade">Cidade</label>
                <select  class="form-control" id="cidade" required="true">
                    <option>São Paulo</option>
                    <option>Rio de Janeiro</option>
                </select>
            </div>
            
            <div class="form-group col-md-4">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" id="cep" placeholder="CEP" required="true">
            </div>
            
            <div class="form-group col-md-12">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" required="true">
            </div>
            
            <div class="form-group col-md-6">
                <label for="telefone">Telefone</label>
                <input type="telefone" class="form-control" id="telefone" placeholder="Telefone">
            </div>
            
            <div class="form-group col-md-6">
                <label for="celular">Celular</label>
                <input type="celular" class="form-control" id="celular" placeholder="Celular">
            </div>
            
            <div class="form-group col-md-6 pull-left">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" id="senha" placeholder="Digite uma senha" required="true">
            </div>
            
            <div class="col-md-12 btn-form">
                <a href="<?= base_url(); ?>" class="btn btn-default">Cancelar</a>
                <button type="submit" class="btn btn-success">Enviar</button>
            </div>      
        </form>
    </div>
</div>

<?php $this->load->view('commons/footer'); ?>
