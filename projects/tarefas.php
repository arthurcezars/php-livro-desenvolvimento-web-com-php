<?php
require '../vendor/autoload.php';
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

$factory = (new Factory())->withServiceAccount('../firebaseconfig.json')->withDatabaseUri('url para o banco no firebase');

$database = $factory->createDatabase();
$tarefas = $database->getReference('tarefas')->getSnapshot();
$lista_tarefas = $tarefas->getValue();

if (isset($_POST['nome']) && $_POST['nome'] != '') {
    $tarefa = array();

    $tarefa['nome'] = $_POST['nome'];

    if (isset($_POST['descricao'])) {
        $tarefa['descricao'] = $_POST['descricao'];
    } else {
        $tarefa['descricao'] = '';
    }

    if (isset($_POST['prazo'])) {
        $tarefa['prazo'] = $_POST['prazo'];
    } else {
        $tarefa['prazo'] = $_POST['prazo'];
    }

    $tarefa['prioridade'] = $_POST['prioridade'];

    if (isset($_POST['concluida'])) {
        $tarefa['concluida'] = $_POST['concluida'];
    } else {
        $tarefa['concluida'] = '';
    }

    $database->getReference('tarefas/' . count($lista_tarefas))->set($tarefa);

    // header 'Location' redireciona para a página que desejar.
    header("Location: tarefas.php");
}

/* Versão do prejoto usando sessão e envio do formulario com get
session_start();


if (isset($_GET['nome']) && $_GET['nome'] != '') {
    $tarefa = array();

    $tarefa['nome'] = $_GET['nome'];

    if (isset($_GET['descricao'])) {
        $tarefa['descricao'] = $_GET['descricao'];
    } else {
        $tarefa['descricao'] = '';
    }

    if (isset($_GET['prazo'])) {
        $tarefa['prazo'] = $_GET['prazo'];
    } else {
        $tarefa['prazo'] = '';
    }

    $tarefa['prioridade'] = $_GET['prioridade'];

    if (isset($_GET['concluida'])) {
        $tarefa['concluida'] = $_GET['concluida'];
    } else {
        $tarefa['concluida'] = '';
    }

    $_SESSION['lista_tarefas'][] = $tarefa;
}

$lista_tarefas = array();

if (isset($_SESSION['lista_tarefas'])) {
    $lista_tarefas = $_SESSION['lista_tarefas'];
}
*/

include './template-tarefas.php';