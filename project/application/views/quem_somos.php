<?php
defined('BASEPATH') or exit('No direct script access allowed');

$this->load->view('commons/header');
?>

<div class="conteudo-quem-somos container-fluid">
    <h1 class="form-header titulo-inner">
        Quem somos
    </h1>
    <div class="conteudo-interno-quem-somos row-fluid">
        <div class="imagem-quem-somos col-sm-3">
            <img src="<?=base_url('assets/img/quem-somos.jpg')?>">
        </div>
        <div class="col-sm-8">
            <h3>Texto sobre a empresa</h3>
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
        </div>
        
    </div>
 
       
</div>

<?php
    $this->load->view('commons/footer');
?>
