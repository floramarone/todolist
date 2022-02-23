<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<a href="<?php echo base_url() . 'home'; ?>">Home</a>
<div class="jumbotron text-center">
    <h1>Cadastro de Tarefa</h1><br>
    <div class="row">
        <!--Responsivo para smartphone, tablet e PC-->
        <div class="col-xs-1 col-sm-1 col-lg-3"></div>
        <div class="col-xs-10 col-sm-10 col-lg-6">
            <?php echo form_open('tarefa/inserir'); ?>
            <input class="form-control" type="text" name="titulo" required placeholder="Titulo aqui..."/>
            <br>
<!--            <input class="form-control" type="select" name="status" required placeholder="Status aqui..."/>;
            <br><br>-->
            <label for="status">Status aqui:</label>
            <select class="form-control" name="status" id="status" required placeholder="Status aqui..." name="status">
                <option value="Aberto">Aberto</option>
                <option value="Em Andamento">Em Andamento</option>
                <option value="Fechado">Fechado</option>
                <option value="Concluído">Concluído</option>
            </select>
            <br><br>
            <input class="form-control" type="date" name="data" required placeholder="Data aqui..."/>
            <br><br>

            <input type="submit" name="salvarPF" value="Salvar">
            <input type="reset" name="limpar" value="Limpar">
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<div class="jumbotron text-center">
    <h2>Tarefas</h2><br>
    <div id="pricing" class="container-fluid">
        <table id="lista" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Titulo</th><th>Status</th><th>Data</th><th>Funções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tarefas as $tas): ?>
                    <tr>
                        <td><?php echo $tas->titulo; ?></td>
                        <td><?php echo $tas->status; ?></td>
                        <td><?php echo $tas->data; ?></td>
                        <td>


                            <a href="<?php
                            echo base_url() .
                            'tarefa/editar/' .
                            $tas->idTarefa;
                            ?>">Editar</a> | 
                            <a href="<?php
                            echo base_url() .
                            'tarefa/excluir/' .
                            $tas->idTarefa;
                            ?>">Excluir</a>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

