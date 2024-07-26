<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <title> Cadastro de Fornecedor </title>
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Ponto do Poder</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="home.php"><i class="fa fa-home"></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="clientes.php"> <i class="fa fa-users"></i> Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="produtos.php"> <i class="fa fa-cubes"></i> Produtos</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-cogs"></i> Módulos
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="fornecedores.php">Fornecedores</a></li>
                                <li><a class="dropdown-item" href="#">Financeiro</a></li>
                                <li><a class="dropdown-item" href="#">Vendas</a></li>
                                <li><a class="dropdown-item" href="#">Fiscal</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container">
        <hr>
        <div class="row">
            <div >
                <div class="card text-center">
                    <div class="card-header">
                        Cadastro de Fornecedor
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">
                                        <i class="fa fa-address-card"></i> Nome Completo
                                    </label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">
                                        <i class="fa fa-envelope-o"></i> Email
                                    </label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">
                                        <i class="fa fa-phone"></i></i> Telefone/Contato
                                    </label>
                                    <input type="text" class="form-control" id="telefone" aria-describedby="emailHelp">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">
                                        <i class="fa fa-globe"></i></i> Endereço
                                    </label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">
                                        <i class="fa-solid fa-scroll"></i> CNPJ
                                    </label>
                                    <input type="text" class="form-control" id="cep" aria-describedby="emailHelp">
                                </div>

                            </div>
                        </div>
                    <div>
                        <input type="submit" action="">
                    </div>

                    </div>
                    <!-- <div class="card-footer text-body-secondary">
                    2 days ago
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/jquery.mask.min.js"></script>
    <script src="https://kit.fontawesome.com/7f377bb488.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#cpf').mask('000.000.000-00');
            $('#cep').mask('00.000-000');
            $('#telefone').mask('(00) 00000-0000');
            $('#whatsapp').mask('(00) 00000-0000');
            $('#R$').maskMoney({prefix:'R$ ', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
        });
    </script>
</body>

</html>