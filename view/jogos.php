<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Jogos</h2>
  <p>Listagem de jogos disponíveis para compra:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Estilo</th>
        <th>Preço</th>
      </tr>
    </thead>
    <tbody>

    <?php foreach($jogos as $jogo){ ?> 
    
      <tr>
        <td><?=$jogo->nome?></td>
        <td><?=$jogo->estilo?></td>
        <td><?=$jogo->preco?></td>
      </tr>
    
    <?php } ?>
      
    </tbody>
  </table>
</div>

</body>
</html>