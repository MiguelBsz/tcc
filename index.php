<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM login WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: /TCC/testesdb/usuáriocomum/inicial.php");

        }

    }

}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <script src="./js/acesso.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/324b71f187.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@300;400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/colors.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/login-container.css">
    <link rel="stylesheet" href="./css/form-container.css">
    <link rel="stylesheet" href="./css/form.css">
    <link rel="stylesheet" href="./css/form-title.css">
    <link rel="stylesheet" href="./css/form-social.css">
    <link rel="stylesheet" href="./css/social-icon.css">
    <link rel="stylesheet" href="./css/form-input-container.css">
    <link rel="stylesheet" href="./css/form-input.css">
    <link rel="stylesheet" href="./css/form-button.css">
    <link rel="stylesheet" href="./css/overlay-container.css">
    <link rel="stylesheet" href="./css/overlay.css">
    <link rel="stylesheet" href="./css/mobile-text.css">

    <script src="./js/login.js" defer></script>
    <title>Login - Docon</title>
</head>
<body>
    <main>
        <div class="login-container" id="login-container">
            <div class="form-container">
                <form action="" method="POST" class="form form-login">
                    <h2 class="form-title">Entrar com</h2>
                    <div class="form-social">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                    <p class="form-text">ou utilize sua conta</p>
                    <div class="form-input-container">
                        <input type="text" name="email" class="form-input" placeholder="email">
                        <input type="password" name="senha" class="form-input" placeholder="senha">
                    
                        <button type="submit" class="form-button">Entrar</button>
                    
                    </form>
                                       
                    <p class="mobile-text">
                        Não tem conta?
                        <a href="#" id="open-register-mobile">Registre-se</a>
                    </p>
                </form>
                </div>
                <?php
                    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        
        if(!empty($dados['SendCadUser'])){

            $query_usuario = "INSERT INTO login (nome, email, senha) VALUES('".$dados['nome']."','".$dados['email']."','".$dados['senha']."')";
            
            $mysqli->query($query_usuario);
        }
        ?>
                <form action="" method="POST" class="form form-register">
                    <h2 class="form-title">Criar Conta</h2>
                    <div class="form-social">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                    <p class="form-text">ou cadastre seu email</p>

                    <div class="form-input-container">
                        <input type="text" name="nome" class="form-input" placeholder="Nome">
                        <input type="email" name="email" class="form-input" placeholder="Email">
                        <input type="password" name="senha" class="form-input" placeholder="Senha"><br>

                    </div>

                    <input type="submit" name="SendCadUser" value="cadastrar" class="form-button">

                    <p class="mobile-text">
                        Já tem conta?
                        <a href="#" id="open-login-mobile">Login</a>
                    </p>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <h2 class="form-title form-title-light">Já tem conta?</h2>
                    <p class="form-text">Excelente! Para entrar na nossa plataforma faça login com suas informações</p>
                    <button class="form-button form-button-light" id="open-login">Entrar</button>
                </div>
                <div class="overlay">
                    <h2 class="form-title form-title-light">Seja bem vindo!</h2>
                    <p class="form-text">Cadastre-se e comece a usar a nossa plataforma</p>
                    <button class="form-button form-button-light" id="open-register">Cadastrar</button>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
