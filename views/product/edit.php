<!-- Arquivo add.php (Product) -->

<section class="container-fluid">
    <div class="card my-4 mt-5">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="d-flex justify-content-between bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Editar Produto</h6>
                <a href="/produtos/listar" class="btn btn-light mb-1 me-4">
                    Listar
                </a>
            </div>
        </div>

        <div class="card-body p-6">
            <form method="post" action="">
                <div class="input-group input-group-outline mb-3">
                    <label for="name">
                        Nome
                        <input type="text" name="name" id="name" class="form-control">
                    </label>
                </div>

                <div class="input-group input-group-outline mb-3">
                    <label for="description" class="w-10">
                        Descrição
                        <input type="text" name="description" id="description" class="form-control">
                    </label>

                    <div class="input-group input-group-outline mb-3">
                        <label for="image">
                            Imagem
                            <input type="text" name="image" id="image" class="form-control">
                        </label>
                    </div>

                    <div class="input-group input-group-outline mb-3">
                        <label for="quantity">
                            Quantidade
                            <input type="text" name="quantity" id="quantity" class="form-control">
                        </label>
                    </div>

                    <div class="input-group input-group-outline mb-3">
                        <label for="preco">
                            Preço
                            <input type="text" name="preco" id="preco" class="form-control">
                        </label>
                    </div>

                    <div class="input-group input-group-outline mb-3">
                        <label for="disponibilidade">
                            Disponibilidade
                            <input type="text" name="disponibilidade" id="disponibilidade" class="form-control">
                        </label>
                    </div>


            </form>
        </div>
    </div>
</section>