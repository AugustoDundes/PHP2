<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 13</title>
  </head>
  <body>
    <h1>Calculadora!!!</h1>
    <form action="/respostaexerc13" method="POST">
        @CSRF
        <input type="number" name="valor1"/>
        <button type="submit">Calcula em centímetros</button>
    </form>
  </body>
</html>