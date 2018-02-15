<?php
defined('BASEPATH') OR exit('No direct sript access allowed');
?>
<?php $this->load->view('commons/header'); ?>
<div class="conteudo-login">
    <form class="form-horizontal form-login">
        <div class="form-group">
            <label for="email" class=" control-label">Email</label>          
            <input type="email" class="form-control" id="email" placeholder="Email">      
        </div>
        <div class="form-group">
            <label for="senha" class="control-label">Senha</label>          
            <input type="password" class="form-control" id="senha" placeholder="Password">
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Lembrar senha
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Entrar</button>
            </div>
        </div>
    </form>
</div>
<?php
$this->load->view('commons/footer');
?>