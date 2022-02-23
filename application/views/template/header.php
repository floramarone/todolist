
<!DOCTYPE html>
<html lang="pt-br">

    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            
            <!-- LINK COM BOOTSTRAP QUE ESTA NA PASTA ASSETS -->
            <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
            
            <!-- LINK COM DATATABLES QUE ESTA NA WEB -->
            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.6.0/jszip-2.5.0/dt-1.11.4/af-2.3.7/b-2.2.2/b-html5-2.2.2/b-print-2.2.2/r-2.2.9/sb-1.3.1/sp-1.4.0/datatables.min.css"/>
 


            <title>Projeto ToDoList</title>
        </head>
        <body>

            <div class="container">
                <?php if ($this->session->userdata('estou_logado')) { ?>
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="#">Menu</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                            <ul class="nav justify-content-center">

                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>login/sair">Sair</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url(); ?>tarefa">Tarefas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url(); ?>tarefa/relatorio/">Relatórios</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url(); ?>user">Usuário</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled"> <?php echo $this->session->userdata('logado')->nomeUsuario; ?></a>
                                </li>
                            </ul>

                        <?php } ?>
                    </div>
            </div>
        </body>

