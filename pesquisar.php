<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Mostrar aluno pesquisado</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
    <body> <h2>Mostrar aluno procurado</h2>
      <div class="container">
        <?php
        // pesquisar.php 
        $nomeproc = $_POST['nome'];
        if (!$nomeproc) {
            echo "Digite o nome novamente.";
        }
        echo "<p>Nome procurado: $nomeproc. </p>";
        include 'conexao.php';  
        $procura = "Select * from alunos
            where nome like '%".$nomeproc ."%'";
        $result = mysqli_query($conexao, $procura);
        $nregistros = mysqli_num_rows($result);
        echo "Nº de registros encontrados: $nregistros";
        ?>
        <table border="1"> 
            <tr><td>Código: <td>Nome: <td>Nota: </tr> 
            <?php
            for ($i = 0; $i < $nregistros; $i++) {
                $registro = mysqli_fetch_assoc($result);
                echo '<tr> <td>' . $registro['codigo'] . '</td>';
                echo '<td>' . $registro['nome'] . '</td>';
                echo '<td>' . $registro['nota'] . '</td>';
                echo '<td><a href = "alterar.php?codigo='.$registro['codigo'].'">Alterar</a>  <a href = "remover.php?codigo='.$registro['codigo'].'">Remover</a></td> ';
                echo '</tr>'; echo '</p>';
            }
            ?> </table>
          <div><a href="listar.php"> Listar alunos </a></div>
          <div><a href="index.html"> Voltar ao início</a></div>
    </div>
          </body>
</html> 

