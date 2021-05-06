<div class="card">
    <div class="card-header">
        <h1 class="card-title">Contato <?= $contato['id'] ?></h1>
    </div>
    <div class="card-body">
        <p>
            <strong>Nome: </strong><?= $contato['nome'] ?><br>
            <strong>Tipo: </strong><?= $contato['tipo'] ?><br>
            <strong>Celular: </strong><?= $contato['celular'] ?><br>
            <strong>Telefone: </strong><?= $contato['telefone'] ?><br>
            <strong>E-mail: </strong><?= $contato['email'] ?>
        </p>
    </div>
    <div class="card-footer">
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <?php if(previous_url() !== current_url()) { ?>
                <a class="btn btn-sm btn-info text-white" href="<?= base_url(previous_url()) ?>">
                    <i class="far fa-caret-square-left"></i>
                </a>
            <?php } ?>
            <a class="btn btn-sm btn-warning text-white" href="<?= base_url("editar/{$contato['id']}") ?>">
                <i class="fas fa-pencil-alt"></i>
            </a>
            <a class="btn btn-sm btn-danger" href="<?= base_url("excluir/{$contato['id']}") ?>">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </div>
</div>