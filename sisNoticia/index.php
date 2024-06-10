<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>
<style>
    body {
        font-family: 'Roboto', sans-serif;
        background-color: #111;
        color: #fff;
        display: flex; /* Habilita flexbox no body */
        justify-content: center; /* Alinha itens flexbox no centro */
        align-items: center; /* Alinha itens flexbox no centro */
        min-height: 100vh; /* Define a altura mínima do body como 100% da viewport */
    }

    .container {
        background-color: #222;
        padding: 3em;
        border-radius: 10px;
        max-width: 800px;
        text-align: center;
    }

    h2 {
        color: white;
        margin-bottom: 2em;
    }

    .card {
        background-color: #333;
        border: none;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .card-header {
        background-color: orange;
        color: #fff;
        padding: 1em 0;
    }

    label {
        color: white;
    }

    .form-control {
        background-color: #333;
        color: #fff;
        border: 1px solid #555;
        border-radius: 5px;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
    }

    .btn-secondary {
        background-color: #6c757d;
        border: none;
    }

    .alert-danger {
        background-color: #dc3545;
        border: none;
        color: #fff;
    }

    a {
        color: orange;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    /* Estilo para labels */
    label {
        color: white;
        font-weight: bold;
        font-size: 1.2em;
        margin-bottom: 0.5em;
    }

    .mt-3 {
        color: white;
        font-weight: bold;
        font-size: 1.1em;
        margin-bottom: 0.5em;
    }

    .mt-3 a {
        color: orange;
        text-decoration: none;
    }

    .mt-3 a:hover {
        text-decoration: underline;
    }
</style>

<body>
    <section class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h2 class="mb-4">Login</h2>
                    </div>
                    <div class="card-body">
                        <form action="config/processar_login.php" method="post">
                            <div class="form-group mb-3">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>

                            <div class="form-group mb-3">
                                <label for="senha">Senha:</label>
                                <input type="password" class="form-control" id="senha" name="senha">
                            </div>

                            <p class="mt-3">Ainda não é Cliente? <a href="cadastro.html">Cadastrar</a></p>

                            <?php
                            // Captura se existe o erro no navegador
                            // Capturar a variavel, verificar se é 1 se for executa
                            if (isset($_GET['erro']) && $_GET['erro'] == 1) {
                                echo "<div class='alert alert-danger'role='alert'>";
                                echo "E-mail ou senha inválido !";
                                echo "</div>";
                            }
                            ?>

                            <div class="text-center m-3">
                                <button type="submit" class="btn btn-primary mr-2">Logar</button>
                                <button type="reset" class="btn btn-secondary">Limpar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>