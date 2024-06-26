
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tela Login</title>
    <link rel="icon" href="./img/favicons/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/login.css">
</head>

<body class="bg-dark">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-5">
                                       
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <form method="get">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" type="email" name="email" placeholder="name@example.com" />
                                            <label for="inputEmail">Email</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" type="password" name="senha" placeholder="Password" />
                                            <label for="inputPassword">Senha</label>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0"> <button type="submit" name="btnLogar">Logar</button>

                                        </div>
                                    </form>
                                    <?php
                                    if (isset($_GET["erro"]) && $_GET["erro"] == 1) { ?>
                                        <div class="alert alert-danger mt-3" role="alert">
                                            Usuário ou senha incorreta
                                        </div>
                                    <?php }  ?>
                                    <?php
                                    if (isset($_GET["erro"]) && $_GET["erro"] == 2) { ?>
                                        <div class="alert alert-danger mt-3" role="alert">
                                            Usuário não existe
                                        </div>
                                    <?php }  ?>
                                    <?php
                                    if (isset($_GET["erro"]) && $_GET["erro"] == 3) { ?>
                                        <div class="alert alert-warning mt-3" role="alert">
                                            Preencher os campos (Email e Senha)
                                        </div>
                                    <?php }  ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
  
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
  
</body>
</html>
