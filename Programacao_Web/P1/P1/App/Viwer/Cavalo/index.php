<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Cavalos</title>
</head>
<body>
    <h1>Lista de Cavalos</h1>

    <?php if (isset($_GET['success'])): ?>
        <div style="color: green;">
            <?php
            if ($_GET['success'] == 1) echo "Cavalo cadastrado com sucesso!";
            if ($_GET['success'] == 2) echo "Cavalo atualizado com sucesso!";
            if ($_GET['success'] == 3) echo "Cavalo excluído com sucesso!";
            ?>
        </div>
    <?php endif; ?>

    <a href="?action=create">Novo Cavalo</a><br><br>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Raça</th>
                <th>Cor</th>
                <th>Sexo</th>
                <th>Ações</th> <!-- coluna faltando -->
            </tr>
        </thead>
        <tbody>
            <?php if (empty($cavalo)): ?>
                <tr>
                    <td colspan="6" style="text-align: center;">Nenhum Cavalo cadastrado</td> <!-- colspan corrigido de 5 para 6 -->
                </tr>
            <?php else: ?>
                <?php foreach ($cavalo as $cavalos): ?>
                    <tr>
                        <td><?= $cavalos['id'] ?></td>
                        <td><?= htmlspecialchars($cavalos['cav_nome']) ?></td>
                        <td><?= htmlspecialchars($cavalos['cav_raca']) ?></td>
                        <td><?= htmlspecialchars($cavalos['cav_cor']) ?></td>
                        <td><?= htmlspecialchars($cavalos['cav_sexo']) ?></td>
                        <td>
                            <a href="?controller=cavalo&action=edit&id=<?= $cavalos['id'] ?>">Editar</a>
                            <a href="?controller=cavalo&action=delete&id=<?= $cavalos['id'] ?>"
                                onclick="return confirm('Tem certeza que deseja excluir este cavalo?')">Excluir</a> 
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>