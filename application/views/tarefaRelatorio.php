<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

    <body>
        <a href="<?php echo base_url() . 'tarefa'; ?>">Voltar</a>
        <div class="jumbotron text-center">
            <h2>Todas Tarefas</h2><br>
            <div id="pricing" class="container-fluid">
                <table id="lista" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Titulo</th><th>Status</th><th>Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tarefas as $ta): ?>
                            <tr>
                                <td><?php echo $ta->titulo; ?></td>
                                <td><?php echo $ta->status; ?></td>
                                <td><?php echo $ta->data; ?></td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
       
        
        
        <div class="jumbotron text-center">
            <h2>Tarefas Abertas</h2><br>
            <div id="pricing" class="container-fluid">
                <table id="lista2" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Titulo</th><th>Status</th><th>Data</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php foreach ($tarefasAberto as $tas): ?>
                            <tr>
                                <td><?php echo $tas->titulo; ?></td>
                                <td><?php echo $tas->status; ?></td>
                                <td><?php echo $tas->data; ?></td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        
         <div class="jumbotron text-center">
            <h2>Tarefas Abertas a 10+ Dias</h2><br>
            <div id="pricing" class="container-fluid">
                <table id="lista3" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Titulo</th><th>Status</th><th>Data</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php foreach ($tarefasAtraso as $tas): ?>
                            <tr>
                                <td><?php echo $tas->titulo; ?></td>
                                <td><?php echo $tas->status; ?></td>
                                <td><?php echo $tas->data; ?></td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="jumbotron text-center">
            <h2>Tarefas Fechadas/Concluídas</h2><br>
            <div id="pricing" class="container-fluid">
                <table id="lista4" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Titulo</th><th>Status</th><th>Data</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php foreach ($tarefasFechado as $tas): ?>
                            <tr>
                                <td><?php echo $tas->titulo; ?></td>
                                <td><?php echo $tas->status; ?></td>
                                <td><?php echo $tas->data; ?></td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        
       
        
    </body>

