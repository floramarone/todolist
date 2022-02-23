<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    </head>
    <body> 
        <a href="<?php echo base_url() . 'home';?>">Home</a>
        <div class="jumbotron text-center">
            <h1>Cadastro de User</h1><br>
          <div class="row">
            <!--Responsivo para smartphone, tablet e PC-->
            <div class="col-xs-1 col-sm-1 col-lg-3"></div>
            <div class="col-xs-10 col-sm-10 col-lg-6">
        <?php echo form_open('user/inserirUser'); ?>
            <input class="form-control" type="text" name="nomeUsuario" required placeholder="Nome aqui..."/>
            <br><br>
            <input class="form-control" type="text" name="user" required placeholder="User aqui..."/>
            <br><br>
            <input class="form-control" type="password" name="senha" required placeholder="Senha aqui..."/>
            <br><br>
            <input class="form-control" type="text" name="perfilAcesso" required placeholder="Perfil Acesso aqui..."/>
            <br><br>
            
            <input type="submit" name="salvarUser" value="Salvar">
            <input type="reset" name="limpar" value="Limpar">
        <?php echo form_close(); ?>
        </div>
        </div>
        </div>
        <div class="jumbotron text-center">
        <h2>Lista de Users</h2>
        <div id="pricing" class="container-fluid">
        <table class="table table-bordered table-striped" style="background-color:#9dbbc7">
            <thead>
                <tr>
                    <th>Nome</th><th>User</th><th>Perfil</th><th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user->nomeUsuario; ?></td>
                    <td><?php echo $user->user; ?></td>
                    <td><?php echo $user->perfilAcesso; ?></td>
                    <td>
                        
                        <a href="<?php echo base_url() . 
                                'user/editar/' .
                                $user->idusuario;?>">Editar</a> | 
                        <?php if($user->user != $this->session->userdata('logado')->user){ ?>
                        <a href="<?php echo base_url() . 
                                'user/excluir/' .
                                $user->idusuario;?>">Excluir</a>
                        <?php } ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    </body>
</html>
