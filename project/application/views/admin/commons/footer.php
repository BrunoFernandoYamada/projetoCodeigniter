<div id="footer" class="row-fluid">
    <div class="container">
        <div class="col-md-12 text-center">
            <p id="copy">&copy; <?= date('Y') ?> Cantinho da Su. Todos os direitos Reservados.</p>
        </div>
    </div>
</div>


<script language="JavaScript" type="text/javascript" src="<?= base_url('assets/js/jquery.js'); ?>"></script>
<script language="JavaScript" type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script language="JavaScript" type="text/javascript">
    $(document).ready(function () {
        $('.carousel').carousel({
            interval: 3000
        });
    });
</script>
<script language="JavaScript" type="text/javascript" src="<?= base_url('assets/js/maskedinput.js'); ?>"></script>
<script language="JavaScript" type="text/javascript" src="<?= base_url('assets/js/jquery.maskMoney.js'); ?>"></script>

</body>
</html>