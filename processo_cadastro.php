<?php
// Coletando dados do formulario
$nome = isset($_POST['nome']) ? $_POST['nome'] :'Ananimo';
$email = $_POST['email'] ?? 'Nao informado';
$idade = $_POST['idade'] ?? 'Nao informado';

// Armazenando dados em um array associativo
$usuario = [
    'nome' => $nome,
    'email'=> $email,
    'idade'=> $idade
];

// Funcao para saudacao
function saudacao($nome) {
    return "Ola $nome, seja bem vindo ao nosso sistema!";
}

// Exibindo uma mensagem de boas-vindas
echo saudacao($usuario['nome']) . "<br>";
echo "Aqui estao os detalhes do seu cadastro:<br>";
echo "Nome: " . $usuario['nome'] . "<br>";
echo "Email: " . $usuario['email'] . "<br>";
echo "Idade: " . $usuario['idade'] . "<br>";

// Adicionando comentarios explicativos sobre o codigo
// Este script processa as entradas de um formulario e exibe uma mensagem personalizada
?>