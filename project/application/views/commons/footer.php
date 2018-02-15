<?php
    defined('BASEPATH') OR exit('No direct sript access allowed');
?>

  <!-- INICIO DO FOOTER-->
            <div id="feet" class="row-fluid">
                <div id="cont-top" class="container" >
                    <div id='footer-menu' class="col-md-3">

                        <ul>
                            <h4><strong>INFORMAÇÕES</strong></h4>
                            <li><a href="#">Home <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">Sobre</a></li>
                            <li><a href="#">Contato</a></li>
                            <li><a href="#">Formas de envio</a></li>
                            <li><a href="#">Políticas</a></li>
                            <li><a href="#">Condições de uso</a></li>
                        </ul>
                    </div>

                    <div id='footer-menu' class="col-md-3">

                        <ul>
                            <h4><strong>OFERTAS</strong></h4>
                            <li><a href="#">Em destaque<span class="sr-only">(current)</span></a></li>
                            <li><a href="#">Promoções</a></li>
                            <li><a href="#">Novos produtos</a></li>
                            <li><a href="#">Mais vendidos</a></li>
                            <li><a href="#">Fabricantes</a></li>
                            <li><a href="#">Opiniões</a></li>
                        </ul>
                    </div>

                    <div id='footer-menu' class="col-md-3">

                        <ul>
                            <h4><strong>SUA CONTA</strong></h4>
                            <li><a href="#">Entrar <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">Criar conta</a></li>
                            <li><a href="#">Meu carrinho</a></li>
                            <li><a href="#">Cupons</a></li>
                            <li><a href="#">Novidades por email</a></li>
                            <li><a href="#">Formas de envio</a></li>
                        </ul>
                    </div>

                    <div id='footer-menu' class="col-md-3">

                        <ul style="list-style-type: none;">
                            <h4><strong>CONTATO</strong></h4>
                            <li><a href="#"><span class="glyphicon glyphicon-earphone"></span>  (14)99633-3333</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-phone-alt"></span>  (14)3322-3333</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-envelope"></span>  atelierdasu@gamil.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <div id="footer" class="row-fluid">
                <div class="container">
                    <div class="col-md-12 text-center">
                        <p id="copy">&copy; <?= date('Y') ?> Cantinho da Su. Todos os direitos Reservados.</p>
                    </div>
                </div>
            </div>
            <!-- FIM DO FOOTER-->

            <script language="JavaScript" type="text/javascript" src="<?= base_url('assets/js/jquery.js'); ?>"></script>
            <script language="JavaScript" type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
            <script language="JavaScript" type="text/javascript">
                $(document).ready(function () {
                    $('.carousel').carousel({
                        interval: 3000
                    });
                });
            </script>
        </div>

    </body>
</html>

