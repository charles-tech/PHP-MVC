<div class="row container">
    <div class="col s12">
        <h3>Página Consulta</h3>
    </div>
</div>
<div class="container col s12">

    <table>
        <tr>
            <th>#</th>
            <th>Nome:</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>

        <?php foreach($consulta as $registro):?>

        <tr>
            <td><?php echo $registro['id'] ?></td>
            <td><?php echo $registro['nome'] ?></td>
            <td><?php echo $registro['email'] ?></td>
            <td>
                <a href="?router=Site/editar/&id=<?php echo base64_encode($registro['id']) ?>">Editar</a> |
                <a href="?router=Site/confirmeDelete/&id=<?php echo base64_encode($registro['id']) ?>"
                    class="red-text">Deletar</a>
            </td>
        </tr>
        <?php endforeach; ?>

    </table>

</div>