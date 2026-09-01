<? php 

$conexao = mysqli_connect("localhost", "nome", "email", "senha", "confirmSenha");

if($conexao) {
    echo "".mysquli_connect_error();
}

else {
    echo ";"
}




?>