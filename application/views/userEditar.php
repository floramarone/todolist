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
        <a href="<?php echo base_url() . 'user';?>">Voltar</a>
        <div class="jumbotron text-center">
            <div class="row">
            <!--Responsivo para smartphone, tablet e PC-->
            <div class="col-xs-1 col-sm-1 col-lg-3"></div>
            <div class="col-xs-10 col-sm-10 col-lg-6">
                <h1>Editar User</h1><br>
        
        <?php echo form_open('user/atualizar'); ?>
            
            <input type="hidden" name="idusuario" required value="<?php echo $user[0]->idusuario; ?>"/>
            <input class="form-control" type="text" name="nomeUsuario" required placeholder="Nome aqui..." value="<?php echo $user[0]->nomeUsuario; ?>"/>
            <br><br>
            <input class="form-control" type="text" name="user" required placeholder="User aqui..." value="<?php echo $user[0]->user; ?>"/>
            <br><br>
            <input class="form-control" type="password" name="senha" required placeholder="Senha aqui..." value="<?php echo $user[0]->senha; ?>"/>
            <br><br>
            <input class="form-control" type="text" name="perfilAcesso" required placeholder="Perfil Acesso aqui..." value="<?php echo $user[0]->perfilAcesso; ?>"/>
            <br><br>
            <input type="submit" name="salvarUser" value="Salvar">
            
        <?php echo form_close(); ?>
        </div>   
        </div>   
        </div>   
    </body>
</html>
