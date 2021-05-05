<header class="my-2">
    <h1>Contato <?= $contato['id'] ?></h1>
    <hr>
</header>

<p>
    <strong>Nome: </strong><?= $contato['nome'] ?><br>
    <strong>Tipo: </strong><?= $contato['tipo'] ?><br>
    <strong>Celular: </strong><?= $contato['celular'] ?><br>
    <strong>Telefone: </strong><?= $contato['telefone'] ?><br>
    <strong>E-mail: </strong><?= $contato['email'] ?>
</p>

<p>
    <a class="btn btn-sm btn-warning text-white" href="<?= base_url("editar/{$contato['id']}") ?>">
        <i class="fas fa-pencil-alt"></i>
    </a>
    <a class="btn btn-sm btn-danger" href="<?= base_url("excluir/{$contato['id']}") ?>">
        <i class="fas fa-trash-alt"></i>
    </a>
</p>