<header class="my-2">
    <h1><?= $title ?></h1>
    <hr>
</header>

<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Tipo</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Celular</th>
                <th>Email</th>
                <th>Cadastrado em</th>
                <th>Atualizado em</th>
                <th>Opções</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($contatos as $key => $contato) { ?>
                <tr>
                    <td><?= $contato['id'] ?></td>
                    <td><?= $contato['tipo'] ?></td>
                    <td><?= $contato['nome'] ?></td>
                    <td><?= $contato['telefone'] ?></td>
                    <td><?= $contato['celular'] ?></td>
                    <td><?= $contato['email'] ?></td>
                    <td><?= $contato['criado_em'] ?></td>
                    <td><?= $contato['atualizado_em'] ?></td>
                    <td>
                        <?php if($contato['apagado_em']) { ?>
                            <a class="btn btn-sm btn-success" href="<?= base_url("desfazer/{$contato['id']}") ?>">
                                <i class="fas fa-trash-restore"></i>
                            </a>
                        <?php } else { ?>
                            <a class="btn btn-sm btn-primary" href="<?= base_url("visualizar/{$contato['id']}") ?>">
                                <i class="fas fa-search"></i>
                            </a>
                            <a class="btn btn-sm btn-warning text-white" href="<?= base_url("editar/{$contato['id']}") ?>">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a class="btn btn-sm btn-danger" href="<?= base_url("excluir/{$contato['id']}") ?>">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        <?php } ?>    
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>