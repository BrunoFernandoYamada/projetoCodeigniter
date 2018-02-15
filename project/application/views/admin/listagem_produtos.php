<?php
defined('BASEPATH') or exit('No direc script access allowed');

$this->load->view('admin/commons/header');
?>

<div class="conteudo col-lg-10">

    <h3 id="title" class="row-fluid">Listagem de Produtos</h3>

    <?php if ($this->session->flashdata('error_msg')) { ?>
        <div class="alert alert-danger">
            <p><?= $this->session->flashdata('error_msg'); ?></p>
        </div>
    <?php } else if ($this->session->flashdata('success_msg')) { ?>
        <div class="alert alert-success">
            <p><?= $this->session->flashdata('success_msg'); ?></p>
        </div>
    <?php } ?>
    <div class="row-fluid barra-pesquisar">
        <form class="form" method="get">
            <div class="col-md-7">
                <input type="text" id="pesquisar" class="form-control">
            </div>
            <div class="col-md-5 content-pesquisar">
                <input type="submit" id="btn-pesquisar" class="btn-adicionar btn btn-primary" value="Pesquisar">
            </div>
        </form>
    </div>
    <a href="<?= base_url('admin/produto/adicionar'); ?>" class="btn-adicionar btn btn-primary pull-right"><span class="glyphicon glyphicon-plus"></span> Adicionar Novo</a>
    <form>
        <table class="table-listagem table table-striped">
            <tr>
                <td>Código</td>
                <td>Imagem</td>
                <td>Nome</td>
                <td>Preço</td>
                <td>Quantidade</td>
                <td>Data de Cadastro</td>
                <td>Ações</td>
            </tr>

            <?php if (!$listaProdutos) { ?>

                <div>
                    <h3>Não há produtos cadastrados!</h3>
                </div>

                <?php
            } else {
                foreach ($listaProdutos as $produto) {
                    ?>

            <tr class="dados-tabela">
                        <td><?=$produto->codigo?></td>
                        <td><img class="table-img" src="<?= base_url() . $produto->imagem ?>"></td>
                        <td><?= $produto->nome_produto ?></td>
                        <td><?= 'R$ '.$produto->preco ?></td>
                        <td><?= $produto->qtd_estoque ?></td>
                        <td><?= date('d/m/Y', strtotime($produto->data_cadastro)); ?></td>
                        <td>
                            <a href="<?= base_url('admin/produto/visualizar/' . $produto->id_produto);?>" class="btn btn-success"><span class="glyphicon glyphicon-search"></span></a>
                            <a href="<?= base_url('admin/produto/editar/' . $produto->id_produto); ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>
                            <a href="<?= base_url('admin/produto/excluir/' . $produto->id_produto); ?>" class="btn btn-danger" onclick="return confirm('Deseja realmente excluir o produto?')"><span class="glyphicon glyphicon-trash"></span></a>    
                        </td>
                    </tr>

                <?php
                }
            }
            ?>    
        </table>
    </form>
    <div>
        <?= $pagination ?>
    </div>
</div>

<?php
$this->load->view('admin/commons/footer');
?>
