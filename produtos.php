<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="dist/css/dataTables.bootstrap5.css">  
    <link rel="stylesheet" href="dist/css/responsive.bootstrap5.css">
    <link rel="stylesheet" href="dist/css/buttons.bootstrap5.css"> 
    <title> Página de Produtos </title>
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
            <div class="col-md-2">
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true"> Menu de Produtos </li>
                    <li class="list-group-item"> <a href="novo_produto.php"><i class="fa-solid fa-plus fa-beat"></i> Adicionar</a></i></li>
                    <!-- <li class="list-group-item">Perfil</li>
                    <li class="list-group-item">Posição Financeira</li>
                    <li class="list-group-item">Carga Inicial</li> -->
                </ul>
            </div>
            <div class="col-md-10">
                <table class="table table-striped nowrap" style="width:100%" id="myTable">
                    <thead class="table-warning">
                        <th> Nome </th>    
                        <th> Cod </th>    
                        <th> Fornecedor </th>    
                        <th> R$ Compra </th>    
                        <th> R$ Venda </th>    
                        <th> Quant. </th>
                        <th> Lucro </th>
                        <th> Ações </th>
                    </thead>
            
                    <tbody>
                        <tr>
                            <td>Perneira</td>
                            <td>001</td>
                            <td>Big Ferramentas</td>
                            <td>R$ 10,00</td>
                            <td>R$ 25,00 </td>
                            <td>30</td>
                            <td>R$ 15,00</td>
                            <td>
                                <button class="btn btn-sm btn-secondary" title="Editar"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>
                                
                                <button class="btn btn-sm btn-secondary" title="Excluir"> <i class="fa fa-trash" aria-hidden="true"></i> </button>

                                <button class="btn btn-sm btn-secondary" title="Visualizar"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                            </td>
                        </tr>
            
                        <tr>
                            <td>Colete Refletor</td>
                            <td>002</td>
                            <td>Big Ferramentas</td>
                            <td>R$ 8,00</td>
                            <td>R$ 20,00 </td>
                            <td>40</td>
                            <td>R$ 12,00</td>
                            <td>
                                <button class="btn btn-sm btn-secondary" title="Editar"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>
                                
                                <button class="btn btn-sm btn-secondary" title="Excluir"> <i class="fa fa-trash" aria-hidden="true"></i> </button>

                                <button class="btn btn-sm btn-secondary" title="Visualizar"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                            </td>
                        </tr>

                        <tr>
                            <td>Botas de Segurança - Bico de Aço</td>
                            <td>003</td>
                            <td>Botas EPI</td>
                            <td>R$ 30,00</td>
                            <td>R$ 55,00 </td>
                            <td>35</td>
                            <td>R$ 25,00</td>
                            <td>
                                <button class="btn btn-sm btn-secondary" title="Editar"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>
                                <button class="btn btn-sm btn-secondary" title="Excluir"> <i class="fa fa-trash" aria-hidden="true"></i> </button>
                                <button class="btn btn-sm btn-secondary" title="Visualizar"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Botas de Segurança - Bico de PVC</td>
                            <td>004</td>
                            <td>Botas  EPI</td>
                            <td>R$ 25,00</td>
                            <td>R$ 50,00 </td>
                            <td>35</td>
                            <td>R$ 25,00</td>
                            <td>
                                <button class="btn btn-sm btn-secondary" title="Editar"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>
                                <button class="btn btn-sm btn-secondary" title="Excluir"> <i class="fa fa-trash" aria-hidden="true"></i> </button>
                                <button class="btn btn-sm btn-secondary" title="Visualizar"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Capacete de Segurança</td>
                            <td>005</td>
                            <td>Equipamentos de EPI</td>
                            <td>R$ 20,00</td>
                            <td>R$ 50,00 </td>
                            <td>40</td>
                            <td>R$ 30,00</td>
                            <td>
                                <button class="btn btn-sm btn-secondary" title="Editar"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>
                                <button class="btn btn-sm btn-secondary" title="Excluir"> <i class="fa fa-trash" aria-hidden="true"></i> </button>
                                <button class="btn btn-sm btn-secondary" title="Visualizar"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                            </td>
                        </tr>
                        
                        
            
                        <tr>
                            <td>Balaclava</td>
                            <td>006</td>
                            <td>Equipamentos de EPI</td>
                            <td>R$ 15,00</td>
                            <td>R$ 25,00 </td>
                            <td>50</td>
                            <td>R$ 10,00</td>
                            <td>
                                <button class="btn btn-sm btn-secondary" title="Editar"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>
                                <button class="btn btn-sm btn-secondary" title="Excluir"> <i class="fa fa-trash" aria-hidden="true"></i> </button>
                                <button class="btn btn-sm btn-secondary" title="Visualizar"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                            </td>
                        </tr>
            
                        <tr>
                            <td>Óculos de Segurança- Proteção UV</td>
                            <td>007</td>
                            <td>Construtora Nordeste</td>
                            <td>R$ 13,00</td>
                            <td>R$ 25,00 </td>
                            <td>40</td>
                            <td>R$ 12,00</td>
                            <td>
                                <button class="btn btn-sm btn-secondary" title="Editar"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>
                                <button class="btn btn-sm btn-secondary" title="Excluir"> <i class="fa fa-trash" aria-hidden="true"></i> </button>
                                <button class="btn btn-sm btn-secondary" title="Visualizar"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Calça Brim Cinza com Refletivo</td>
                            <td>008</td>
                            <td>Construtora Nordeste</td>
                            <td>R$ 50,00</td>
                            <td>R$ 75,00 </td>
                            <td>50</td>
                            <td>R$ 25,00</td>
                            <td>
                                <button class="btn btn-sm btn-secondary" title="Editar"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>
                                <button class="btn btn-sm btn-secondary" title="Excluir"> <i class="fa fa-trash" aria-hidden="true"></i> </button>
                                <button class="btn btn-sm btn-secondary" title="Visualizar"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Calça Tática verde</td>
                            <td>009</td>
                            <td>Construtora Nordeste</td>
                            <td>R$ 55,00</td>
                            <td>R$ 80,00 </td>
                            <td>40</td>
                            <td>R$ 25,00</td>
                            <td>
                                <button class="btn btn-sm btn-secondary" title="Editar"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>
                                <button class="btn btn-sm btn-secondary" title="Excluir"> <i class="fa fa-trash" aria-hidden="true"></i> </button>
                                <button class="btn btn-sm btn-secondary" title="Visualizar"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Luvas de raspa de couro</td>
                            <td>010</td>
                            <td>Construtora Nordeste</td>
                            <td>R$ 12,00</td>
                            <td>R$ 35,00 </td>
                            <td>35</td>
                            <td>R$ 23,00</td>
                            <td>
                                <button class="btn btn-sm btn-secondary" title="Editar"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>
                                <button class="btn btn-sm btn-secondary" title="Excluir"> <i class="fa fa-trash" aria-hidden="true"></i> </button>
                                <button class="btn btn-sm btn-secondary" title="Visualizar"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                            </td>
                        </tr>
                    </tbody>
            
                    <tfoot>
                        <th> Nome </th>    
                        <th> Cod </th>    
                        <th> Fornecedor </th>    
                        <th> R$ Compra </th>    
                        <th> R$ Venda </th>    
                        <th> Quant. </th>
                        <th> Lucro </th>
                        <th> Ações </th>
                    </tfoot>
            
                </table>
            </div>
        </div>
    </div>
 
    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/dataTables.min.js"></script>
    <script src="dist/js/dataTables.bootstrap5.js"></script>
    <script src="dist/js/dataTables.responsive.js"></script>
    <script src="dist/js/responsive.bootstrap5.js"></script>
    <script src="dist/js/dataTables.buttons.js"></script>
    <script src="dist/js/buttons.bootstrap5.js"></script>
    <script src="dist/js/jszip.min.js"></script>
    <script src="dist/js/pdfmake.min.js"></script>
    <script src="dist/js/vfs_fonts.js"></script>
    <script src="dist/js/buttons.html5.min.js"></script>
    <script src="dist/js/buttons.print.min.js"></script>
    <script src="dist/js/buttons.colVis.min.js"></script>
    <script src="https://kit.fontawesome.com/7f377bb488.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
        let table = new DataTable('#myTable', {
                        responsive: true,
                        layout: {
                            topStart: {
                                buttons: ['copy', 'excel', 'pdf', 'colvis']
                            }
                        },
                        stateSave: true,
                        language: {
                            url:"https://cdn.datatables.net/plug-ins/1.11.3/i18n/pt_br.json"
                        }
                    });
    </script>

</body>
</html>