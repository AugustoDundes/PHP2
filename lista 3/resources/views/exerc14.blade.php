<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 14</title>
  </head>
  <body>
    <h1>Calculadora!!!</h1>
    <form action="/respostaexerc14" method="POST">
        @CSRF
        <input type="number" name="valor1"/>
        <button type="submit">Calcula em milhas</button>
    </form>
  </body>
</html>