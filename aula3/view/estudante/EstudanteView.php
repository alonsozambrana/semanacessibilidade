<?php $estudantes = $_REQUEST['estudantes']; ?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Lista de Estudantes </title>
</head>

<body class="bg-dark">
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view/navbar.php'; ?>





    <div class="container">
        <h1 class="text-light text-center mt-2">Semana da Acessibilidade ULBRA TORRES</h1>

        <img src="/<?php echo FOLDER; ?>/view/download.jpeg" class="rounded mx-auto d-block" alt="A imagem mostra duas mãos segurando peças de quebra-cabeça, representando o autismo. As mãos estão fromando um coração">

        <br>
        <a href="/<?php echo FOLDER; ?>/?controller=Estudante&acao=salvar" class="btn btn-success">Cadastrar Estudante</a>
        <br>
        <table class="container mt-5 md-3 table table-dark">
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>IDADE</th>
                <th>AÇÕES</th>                
            </tr>

            <?php foreach ($estudantes as $estudanteAtual) { ?> <!--   "WHILE" do php, fazendo repetir os estudantes, nome e id-->
                <tr>
                    <td><?php echo $estudanteAtual['id']; ?></td>
                    <td><?php echo $estudanteAtual['nome']; ?></td>
                    <td><?php echo $estudanteAtual['idade']; ?></td>
                    <td>
                        <a href="/<?php echo FOLDER; ?>?controller=Estudante&acao=editar&id=<?php echo $estudanteAtual ['id']; ?>" class="btn btn-primary">Editar</a>
                        <a href="/<?php echo FOLDER; ?>?controller=Estudante&acao=excluir&id=<?php echo $estudanteAtual ['id']; ?>" class="btn btn-primary">Excluir</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>