<main>
    <section>
        <a href="index.php">
            <button class="btn btn-primary">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3">Cadastrar vaga</h2>

    <form method="POST">

        <div class="mb-3">
            <label class="form-label" for="titulo">Título</label>
            <input type="text" class="form-control" name="titulo">
        </div>

        <div class="mb-3">
            <label class="form-label" for="descricao">Descrição</label>
            <textarea class="form-control" name="descricao" rows="5"></textarea>
        </div>

        <div class="mb-3">
            <label class="">Status</label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label">Ativo
                <input class="form-check-input" type="radio" name="ativo" value="s" checked>
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label">Inativo
                <input class="form-check-input" type="radio" name="ativo" value="n">
            </label>
        </div>
        <div class="my-3">
            <button class="btn btn-success" type="submit">Enviar</button>
        </div>


    </form>
</main>