<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Agendamentos</title>
</head>
<body>
    <h1>Crie um novo Agendamento</h1>

    <form action="validaDados.php" method="POST">
  <fieldset>
    <legend>Selecione qual serviço deseja:</legend>
    <div>
      <input type="radio" id="corte_cabelo" name="servico" value="Corte de Cabelo" />
      <label for="corte_cabelo">Corte de Cabelo</label>

      <input type="radio" id="pintar_unhas" name="servico" value="Pintar Unhas" />
      <label for="pintar_unhas">Pintar Unhas</label>

      <input type="radio" id="chapinha" name="servico" value="Chapinha" />
      <label for="chapinha">Chapinha</label>
    </div><br>
    <div>
        <label for="date" style="display: block; margin-bottom: 10px;">
            Selecione a data e horário:
            <input id="dtagend" type="datetime-local" name="dtagend" />
        </label>
        
    </div>
    <div>
      <button type="submit">Cadastrar</button>
    </div>
  </fieldset>
</form>

    
</body>
</html>