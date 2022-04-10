<?php session_start() ?>
<html>
  <head>
    <title>Lista de Contatos</title>
  </head>
  <body>
    <h1>Lista de Contatos</h1>
    <a href="../index.php">Home</a>

    <form>
      <fieldset>
        <legend>Nova Contato</legend>
        <label>
          Nome:
          <input type="text" name="nome" />
        </label>
        <label>
            Telefone:
            <input type="tel" name="telefone" id="">
        </label>
        <label>
            Email:
            <input type="email" name="email" id="">
        </label>
        <input type="submit" value="Cadastrar" />
      </fieldset>
    </form>
    
    <?php
      if (isset($_GET['nome'])) {
        $_SESSION['lista_contatos'][] = [$_GET['nome'], $_GET['telefone'], $_GET['email']];
      }

      $lista_contatos = array();

      if (isset($_SESSION['lista_contatos'])) {
        $lista_contatos = $_SESSION['lista_contatos'];
      }
    ?>

    <table>
      <thead>
        <tr>
          <th>Contatos</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($lista_contatos as $contato) : ?>
        <tr>
          <td><?php echo "$contato[0] - $contato[1] / $contato[2]"; ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </body>
</html>