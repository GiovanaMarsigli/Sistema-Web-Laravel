<DOCTYPE html>
<html lang=en>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <title>Sistema Web</title>
    </head>
    <body>
            <div class="container">
                <div class="row">
                    <div class="col">
                    <nav class="navbar navbar-expand-lg bg-primary mb-4" data-bs-theme="dark">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="#" >PROJETO WEB</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                             <a class="nav-link active" aria-current="page" href="index.blade.php">Cadastrar</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="listar.blade.php">Consultar</a>
                                        </li>
                                     </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="mb-3 fs-5">Cadastrar - Agendamento de Potenciais Clientes</p>
                        <p class="mb-3">Sistema Utilizado para agendamento de serviços.</p>
                    </div>          
                </div>
                <table class="container text-center text-bg-primary mb-6 table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Bairro</th>
                            <th scope="col">CEP</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                             <td>Larissa</td>
                             <td>Rua X, N°123</td>
                             <td>Jd.Cotinha</td>
                             <td>03889100</td>
                             <td>São Paulo</td>
                             <td>São Paulo</td>
                             <td>Nenhuma</td>
                         </tr>
                    </tbody>
                </table>
            </body>
</html>