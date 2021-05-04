<header class="my-2">
    <h1>Listagem de Contatos</h1>
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
                    <td><?= $contato['tipo_contato_id'] ?></td>
                    <td><?= $contato['nome'] ?></td>
                    <td><?= $contato['telefone'] ?></td>
                    <td><?= $contato['celular'] ?></td>
                    <td><?= $contato['email'] ?></td>
                    <td><?= $contato['criado_em'] ?></td>
                    <td><?= $contato['atualizado_em'] ?></td>
                    <td></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>