<!-- Arquivo add.php (Customer) -->

<section class="container-fluid">
    <div class="card my-4 mt-5">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="d-flex justify-content-between bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Editar Clientes</h6>
                <a href="/clientes/listar" class="btn btn-light mb-1 me-4">
                    Listar
                </a>
            </div>
        </div>

        <div class="card-body p-5">
            <form method="post" action="">
                <div class="input-group input-group-outline mb-3">
                    <label for="name">
                        Nome
                        <input type="text" name="name" id="name" class="form-control">
                    </label>
                </div>

                <div class="input-group input-group-outline mb-3">
                    <label for="email" class="w-10">
                        Email
                        <input type="text" name="email" id="email" class="form-control">
                    </label>

                    <div class="input-group input-group-outline mb-3">
                        <label for="telefone">
                            Telefone
                            <input type="text" name="telefone" id="telefone" class="form-control">
                        </label>
                    </div>

                    <div class="input-group input-group-outline mb-3">
                        <label for="foto">
                            Foto
                            <input type="text" name="foto" id="foto" class="form-control">
                        </label>
                    </div>

            </form>
        </div>
    </div>
</section>