<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="jumbotron">
  <h1 class="display-4">Calculadora PHP</h1>
</div>

    <div class="Calculadora">
        <form method="post" action="">
            <div class="form-group">
                <label for="Valor1">Valor 1</label>
                <input type="text" class="form-control" name="num1" placeholder="Ingresa el primer valor">
            </div>
            <div class="form-group">
                <label for="Valor2">Valor2</label>
                <input type="text" class="form-control" name="num2" placeholder="Ingresa el segundo valor. ">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="suma">Sumar</button>
                <button type="submit" class="btn btn-primary" name="resta">Restar</button>
                <button type="submit" class="btn btn-primary" name="multiplica">Multiplicar</button>
                <button type="submit" class="btn btn-primary" name="divide">Dividir</button>
            </div>

            <div class="form-group">
                    <h2>Resultado:</h2>
                    <?php
                    include 'Operaciones.php';
                    $calculadora = new Operaciones();
                    if (isset($_POST['suma']) | isset($_POST['resta']) | isset($_POST['multiplica']) | isset($_POST['divide'])) {
                        $calculadora->setNum1($_POST['num1']);
                        $calculadora->setNum2($_POST['num2']);
                        if (isset($_POST['suma'])) {
                            $calculadora->sumar();
                        } elseif (isset($_POST['resta'])) {
                            $calculadora->restar();
                        } elseif (isset($_POST['multiplica'])) {
                            $calculadora->multiplicar();
                        } elseif (isset($_POST['divide'])) {
                            $calculadora->dividir();
                        }
                    }
                    ?>
                
            </div>

            



        </form>
    </div>

</body>

</html>