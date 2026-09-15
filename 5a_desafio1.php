<?php

$nome = $_POST["nome"] ?? "";
$ano = $_POST["ano"] ?? "";
$arquivo = fopen('log_acessos.txt', 'a');
$linha = $nome . ';' . $ano . "\n";
fwrite($arquivo, $linha);
fclose($arquivo);


if ($nome != "" && $ano != "") {

    $idade = date("Y") - $ano;

    if ($idade >= 18) {
        echo "Acesso permitido, $nome!";
    } else {
        echo "Acesso negado, $nome!";
    }
}
?>

<form method="post">
    Nome: <input type="text" name="nome"><br><br>
    Ano de Nascimento: <input type="number" name="ano"><br><br>
    <input type="submit" value="Verificar">
</form>