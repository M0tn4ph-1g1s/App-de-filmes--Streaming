<?php

//criar a conexao
$conn = mysqli_connect("localhost", "root","", "bdredesocial");

/*
$username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);*/


$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];

$result_usuario = "INSERT INTO tbusuarios(nome,sobrenome,username,password,email) VALUES ('$nome','$sobrenome','$username','$password','$email')";
$resultado_usuario = mysqli_query($conn , $result_usuario);

if(mysqli_insert_id($conn)){
	header("Location: index2.php");
}
else{
	header("Location: index2.php");

}

