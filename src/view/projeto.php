<?php 
include "modalCliente.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="styles/projeto.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <title>Lanchonete</title>
    <!-- Fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- Inserir bootstrap  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <fieldset class="border p-2" id="bordamenu">
        <legend class="w-auto" id="legendamenu">Menu</legend>
        <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
            <div class="container-fluid" id="navbardiv">
                <a class="navbar-brand" href="#"> <img src="lanchelogo.png" alt="lanche logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Novo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Fechar Pedido</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Salvar</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Cadastros
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Clientes</a></li>
                                <li><a class="dropdown-item" href="#">Bebidas</a></li>
                                <li><a class="dropdown-item" href="#">Lanches</a></li>
                                <li><a class="dropdown-item" href="#">Adicionais</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Relatórios
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Pedido Atual</a></li>
                                <li><a class="dropdown-item" href="#">Todos os Pedidos</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </fieldset>
    <main>
        <div class="containermaior">
            <div class="container">
                <div class="dados">

                    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#cadCliente" id="buttoncad"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16" id="icon4">
                            <path
                                d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                            <path
                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                        </svg></button>
                    <fieldset class="border p-2" id="bordadados">
                        <legend class="w-auto" id="legendadados">Dados</legend>
                        <br>
                        <label for="codigo">Código do Pedido</label>
                        <input class="form-control" type="text" placeholder="" id="idpedido">
                        <br>
                        <label for="nome_cliente">Nome do Cliente</label>
                        <br>
                        <input class="form-control" type="text" placeholder="" id="nomecliente">
                    </fieldset>

                </div>
                <br>
                <div class="divisoria">
                    <div class="tiposdelanches">
                        <div class="lanches">

                            <fieldset class="border p-2" id="bordalanches">
                                <legend class="w-auto" id="legendadados">Tipos de Lanches</legend>
                                <select class="form-control" id="selectlanche">
                                    <option value="X-Salada">X-Salada</option>
                                    <option value="X-Tudo">X-Tudo</option>
                                    <option value="MonstroBurguer">Monstro Burguer</option>
                                    <option value="BurgerBlaster">Burger Blaster</option>
                                    <option value="X-Ratao">X-Ratão</option>
                                </select>
                            </fieldset>
                        </div>
                        <br>

                        <div class="bebidas">
                            <div class="divBebidas">
                                <fieldset class="border p-2" id="bordalanches">
                                    <legend class="w-auto" id="legendadados">Bebidas</legend>
                                    <form action="projeto.css">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Sim
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Não
                                            </label>
                                        </div>
                                    </form>
                                </fieldset>
                            </div>
                            <br>

                            <div class="bebidasgeladas">
                                <fieldset class="border p-2" id="bordalanches">
                                    <legend class="w-auto" id="legendadados">Bebidas Geladas</legend>
                                    <form action="projeto.css">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Sim
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Não
                                            </label>
                                        </div>
                                    </form>
                                </fieldset>
                            </div>
                        </div>
                        <br>

                        <div class="tiposdebebidas">
                            <fieldset class="border p-2" id="bordalanches">
                                <legend class="w-auto" id="legendadados">Tipos de bebidas</legend>
                                <select class="form-control" id="selectbebida">
                                    <option value="coca-cola">Coca-Cola</option>
                                    <option value="SucodeMaracujá">Suco de Maracujá</option>
                                    <option value="FantaUva">Fanta Uva</option>
                                    <option value="SucodeLaranja">Suco de Laranja</option>
                                    <option value="Guaraná">Guaraná</option>
                                </select>
                            </fieldset>
                            <br>
                            <div class="input-group date">
                                <fieldset class="border p-2" id="bordadatapedido">
                                    <legend class="w-auto" id="legendadatapedido">Data do Pedido</legend>
                                    <input type="date" id="date" name="fav_language">
                                </fieldset>
                            </div>
                            <br>
                            <div class="observações">
                                <fieldset class="border p-2" id="bordaobs">
                                    <legend class="w-auto" id="legendaobservações">Observações</legend>
                                    <textarea class="form-control" id="dados_pedido" name="dados_pedido" rows="4"
                                        cols="7"></textarea>
                                </fieldset>
                            </div>
                            <br>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-plus-square" viewBox="0 0 16 16" id="icon">
                        <path
                            d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                        <path
                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-plus-square" viewBox="0 0 16 16" id="icon2">
                        <path
                            d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                        <path
                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-plus-square" viewBox="0 0 16 16" id="icon3">
                        <path
                            d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                        <path
                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                    </svg>
                    </svg>
                    <div class="adicionais">
                        <div class="adicionaisChild">
                            <fieldset class="border p-2" id="bordalanches">
                                <legend class="w-auto" id="legendadados">Adicionais</legend>
                                <form action="projeto.css">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Sim
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Não
                                        </label>
                                    </div>
                                </form>
                            </fieldset>
                        </div>
                        <div class="addChild">
                            <fieldset class="border p-2" id="bordalanches">
                                <legend class="w-auto" id="legendadados">Adicionais</legend>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Catchup </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Mostarda
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Maionese
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Batata Palha
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Molho
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Pimenta
                                    </label>
                                </div>
                            </fieldset>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container-pedidos">
                <div class="pedidos">
                    <fieldset class="border p-2" id="bordapedidos">
                        <legend class="w-auto" id="legendapedido">Pedidos</legend>
                        <textarea class="form-control" id="dados_pedido" name="dados_pedido" rows="20" cols="46"
                            placeholder="Os dados do pedido aparecerão aqui" readonly></textarea>
                    </fieldset>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
<?php
$host = "127.0.0.1";
$usuario = "root";
$senha = "";

$conexao = new mysqli($host, $usuario, $senha);
if ($conexao->connect_errno) {
    die("Erro: $conexao->connect_errno");
} else {
    echo "Conectado com sucesso!";
}
?>
</body>

</html>