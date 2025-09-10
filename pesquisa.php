<?php

$nome = $_POST['nome'];

if (strcasecmp($nome, "diario de um banana") == 0) {
    header("Location: diario.html");
}
if (strcasecmp($nome, "A hora da Estrela") == 0) {
    header("Location: ahora.html");
}
if (strcasecmp($nome, "memorias do subsolo") == 0) {
    header("Location: memorias.html");
}

echo "esse livro n existe pnc"
    
?>