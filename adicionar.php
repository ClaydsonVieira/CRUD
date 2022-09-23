<!doctype html>
<html> 
    <head> 
        <title>Adicionar aluno </title> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
<body><h2> Adicionar dados</h2>    
 <div class="container"> 
    <?php //adicionar.php
    // $codigo = $_POST['codigo'];
     $nome = $_POST['nome'];
     $nota = $_POST['nota'];

     include 'conexao.php';
    //$adicionar = "INSERT INTO alunos (codigo,nome,nota) VALUES ('".$codigo."','".$nome."','".$nota."')";
    //código é auto increment
     $adicionar = "INSERT INTO alunos (nome,nota) VALUES ('".$nome."','".$nota."')";
     $result = mysqli_query($conexao, $adicionar);
     if ($result==1) echo "<p>Dados adicionados.<br></p>";
     else "<p>Dados não adicionados.<br></p>";
    ?>
    <p> <a href="index.html">Voltar à entrada</a>
    <p> <a href="listar.php">Listar alunos</a>
    
    </div>
</body>
</html> 
