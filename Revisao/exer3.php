<?php require("cabecalho.php"); ?>
<h1>Exercício 3</h1>
<form action="exer3.php" method="post">
    <div class="row">
        <div class="col">
            <label for="lucro_empresa" class="form-label">
                Informe o lucro da empresa:
            </label>
            <input type="text" name="lucro_empresa" id="lucro_empresa" class="form-control"/>
        </div>
        <div class="col">
            <label for="funcionario" class="form-label">
                Informe o funcionário:
            </label>
            <input type="text" name="funcionario" id="funcionario" class="form-control"/>
        </div>
        <div class="col">
            <label for="escala" class="form-label">
                Informe o desempenho(1 a 5):
            </label>
            <input type="text" name="escala" id="escala" class="form-control"/>
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
        $lucro_empresa = $_POST['lucro_empresa'];
        $funcionario = $_POST['funcionario'];
        $escala = $_POST['escala'];
        if ($escala == 1){
            $resultado = $lucro_empresa * 0.0010;
        }
        else if($escala == 2){
            $resultado = $lucro_empresa * 0.0020;
        }
        else if($escala == 3){
            $resultado = $lucro_empresa * 0.0030;
        }
        else if($escala == 4){
            $resultado = $lucro_empresa * 0.0040;
        }
        else if($escala == 5){
            $resultado = $lucro_empresa * 0.0070;
        }
        echo "O bônus do: ".$funcionario." é de: ". $resultado;
    }

    require("rodape.php"); ?>

    <form action="ecer4.php">
        <button>Atividade 4</button>
    </form>
