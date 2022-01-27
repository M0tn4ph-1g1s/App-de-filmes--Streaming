<?php
    /*if(isset($_SESSION['msg'])){
    	echo $_SESSION['msg'];
    	unset($_SESSION['msg']);
    }*/
    //pega o texto inserido no input-text do formulario
    $username = $_GET['username1'];
    $password = $_GET['password1'];
    $email = $_GET['email1'];
    
    //realiza a conexao com o banco 
    $conn = mysqli_connect("localhost", "root","", "bdredesocial");

    //faz uma requisição
    $result_usuarios = "SELECT * FROM tbusuarios";
    $resultado_usuarios = mysqli_query($conn,$result_usuarios);
    
    //com um laço de repetição percorre os dados consultados e faz a verificação com as variaveis com os dados do input-text
    //caso sim leva para a pagina inicial paginapub2.php
    while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
    	if ($row_usuario['username'] == $username && $row_usuario['password'] == $password && $row_usuario['email'] == $email){
            //cria uma sessão com as variaveis
    		session_start();      
            $_SESSION["loginSessao"] = $username;
            $_SESSION["senhaSessao"] = $password;
            $_SESSION["emailSessao"] = $email;
            //seta um cookie no $email
            setcookie("login",$email);
            header('Location:paginapub2.php');
    	}
		else{
			header("Location:index2.php");
			
		}
    }

?>