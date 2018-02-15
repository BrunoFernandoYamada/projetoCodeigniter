<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('commons/header'); ?>

<div id="localizacao" class="col-md-12">
    <a href="<?= base_url() ?>">Home</a> &raquo; <a href="#">Contato</a>
</div>

<div class="container formulario">

    <h1 class="form-header titulo-inner">
        Contato
    </h1>
    <div id="formulario-contato">
        <form class="form" action="" method="post" accept-charset="utf-8">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" placeholder="Nome" size="32" required="true">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" size="32" required="true">
            </div>
            <div class="form-group">
                <label for="mensagem">Mensagem</label>
                <textarea id="mensagem" class="form-control" rows="5" required="true"></textarea>
            </div>
            <a href="<?= base_url(); ?>" class="btn btn-default">Cancelar</a>
            <button type="submit" class="btn btn-success">Enviar</button>
        </form>
    </div>
</div>


<?php $this->load->view('commons/footer'); ?>