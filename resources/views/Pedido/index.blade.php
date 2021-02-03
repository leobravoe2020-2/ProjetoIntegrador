<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Index de Pedidos</title>
</head>
<body>
    <div class="container">
        <div class="row">
            {{-- Parte esquerda --}}
            <div class="col-lg-4">
                <div class="row my-3">
                    <div class="col-5">
                        <a href="#" class="btn btn-primary w-100">Voltar</a>
                    </div>
                    <form class="col-7" method="POST" action="#">
                        @csrf
                        <input type="submit" class="btn btn-primary w-100" value="Novo Pedido">
                    </form>
                </div>
                <div class="list-group my-3">
                    <a href="#" class="list-group-item list-group-item-action" data-toggle="list">Pedido 5</a>
                    <a href="#" class="list-group-item list-group-item-action active" data-toggle="list">Pedido 4</a>
                    <a href="#" class="list-group-item list-group-item-action" data-toggle="list">Pedido 3</a>
                    <a href="#" class="list-group-item list-group-item-action" data-toggle="list">Pedido 2</a>
                    <a href="#" class="list-group-item list-group-item-action" data-toggle="list">Pedido 1</a>
                  </div>
            </div>
            {{-- Parte do meio --}}
            <div class="col-lg-4">
                <label>Adicione Produtos</label>
                {{-- Formulario de Tipo de Produto --}}
                <form action="">
                    @csrf
                    <div class="form-group">
                        <select class="form-control">
                            <option>Pizza</option>
                            <option>Suco</option>
                            <option>Cerveja</option>
                        </select>
                    </div>
                </form>
                {{-- Formulario de Produto --}}
                <form action="">
                    @csrf
                    <div class="form-group">
                        <select class="form-control">
                            <option>Pepperoni</option>
                            <option>Quatro Queijos</option>
                        </select>
                    </div>
                </form>
                <input type="text" class="form-control" value="1">
                {{-- Botão adicionar produto no pedido --}}
                <form method="POST" class="my-3" action="#">
                    @csrf
                    <input type="submit" class="btn btn-primary w-100" value="Adicionar Produto">
                </form>
                {{-- Formulario de Endereço --}}
                <form action="">
                    @csrf
                    <div class="form-group">
                        <select class="form-control">
                            <option>Rua X</option>
                            <option>Rua Y</option>
                        </select>
                    </div>
                </form>
                {{-- Botão enviar --}}
                <form method="POST" class="my-3" action="#">
                    @csrf
                    <input type="submit" class="btn btn-primary w-100" value="Enviar Pedido">
                </form>
            </div>
            {{-- Parte da direita --}}
            <div class="col-lg-4">
                <input type="text" id="id-text-status" value="Estado: Aberto">
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>