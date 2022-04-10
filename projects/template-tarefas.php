<html>
  <head>
    <title>Gerenciados de Tarefas</title>
    <link rel="stylesheet" href="../css/template-tarefas.css">
  </head>
  <body>
    <h1>Gerenciado de Tarefas</h1>
    <a href="../index.php">Home</a>

    <!-- Se for trabalhar com sessão remover o metodo post do form -->
    <form method="post">
      <fieldset>
        <legend>Nova tarefa</legend>
        <label>
          Tarefa:
          <input class="wide" type="text" name="nome" />
        </label>
        <label>
            Descrição (Opcional):
            <textarea  class="wide" name="descricao"></textarea>
        </label>
        <label>
            Prazo (Opcional):
            <input  class="wide" type="text" name="prazo" />
        </label>
        <fieldset class="prioridade">
            <legend>Prioridade:</legend>
            <label>
                <input type="radio" name="prioridade" value="baixa" checked />
                Baixa

                <input type="radio" name="prioridade" value="media" />
                Média

                <input type="radio" name="prioridade" value="alta" />
                Alta
            </label>
        </fieldset>
        <label>
            Tarefa concluída:
            <input class="tarefa" type="checkbox" name="concluida" value="sim" />
        </label>
        <input class="cadastrar" type="submit" value="Cadastrar" />
      </fieldset>
    </form>

    <table>
      <thead>
        <tr>
          <th>Tarefas</th>
          <th>Descrição</th>
          <th>Prazo</th>
          <th>Prioridade</th>
          <th>Concluída</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($lista_tarefas as $tarefa) : ?>
        <tr>
          <td><?php echo $tarefa['nome']; ?></td>
          <td><?php echo $tarefa['descricao']; ?></td>
          <td><?php echo $tarefa['prazo']; ?></td>
          <td><?php echo $tarefa['prioridade']; ?></td>
          <td><?php echo $tarefa['concluida']; ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </body>
</html>