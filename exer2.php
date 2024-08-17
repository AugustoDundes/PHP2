<?php require("cabecalho.php"); ?>
<h1>Exercício 2</h1>
<form action="exer2.php" method="post">
    <div class="row">
        <div class="col">
            <label for="horas_trabalhadas" class="form-label">
                Informe as horas trabalhadas no mês:
            </label>
            <input type="text" name="horas_trabalhadas" id="horas_trabalhadas" class="form-control"/>
        </div>
        <div class="col">
            <label for="valor_hora" class="form-label">
                Informe a hora final:
            </label>
            <input type="text" name="valor_hora" id="valor_hora" class="form-control"/>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-danger">Calcular</button>
        </div>
    </div>
</form>

<?php 
    if ($_POST){
        $valor_hora = $_POST['valor_hora'];
        $horas_trabalhadas = $_POST['horas_trabalhadas'];
        $resultado = $valor_hora * $horas_trabalhadas;
        $resultado = $resultado/4;
        echo "Salário semanal: ".$resultado;
    }

    require("rodape.php"); ?>

    <form action="exer3.php">
        <button>Atividade 3</button>
    </form>
