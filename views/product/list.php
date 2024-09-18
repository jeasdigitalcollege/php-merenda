<!-- Arquivo list.php (Product) -->

<section class="container-fluid">
    <div class="card my-4 mt-5">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="d-flex justify-content-between bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Listar Produtos</h6>

                <a href="/produtos/adicionar" class="btn btn-light mb-1 me-4">
                    Adicionar
                </a>
            </div>
        </div>

        <div class="card-body p-2">
            <table class="table table-hover align-items-center text-center">
                <thead>
                    <tr>
                        <th>#Id</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Imagem</th>
                        <th>Quantidade</th>
                        <th>Preço</th>
                        <th>Disponibilidade</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    for ($i = 1; $i <= 10; $i++) {
                        echo
                        "<tr>
                            <td>{$i}</td>
                            <td>Nome {$i}</td>
                            <td>Dscrição {$i}</td>                         
                            <td>Imagem {$i}</td>
                            <td>Quantidade {$i}</td>
                            <td>Preço {$i}</td>
                            <td>Disponibilidade {$i}</td>
                            <td>
                                <a class='btn btn-outline-danger btn-sm' href='/produtos/editar'>Editar</a>
                                <a class='btn btn-outline-warning btn-sm' href='/produtos/excuir'>Excluir</a>
                            </td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>