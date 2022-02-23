<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tarefa
 *
 * @author jairb
 */
class Tarefa extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('estou_logado')) {
            redirect('Login');
        }
        $this->load->model('Tarefa_model', 'tarefa'); //tarefa este é um apelido para o model
    }

    public function index() {
        $this->load->view('template/header');
        $lista['tarefas'] = $this->tarefa->listar();
        $this->load->view('tarefaCadastro', $lista);
        $this->load->view('template/footer');
        
    }

    public function inserir() {
        //nome no vetor deve ser o mesmo nome do campo na tabela
        $dados['titulo'] = $this->input->post('titulo');
        $dados['status'] = $this->input->post('status');
        $dados['data'] = $this->input->post('data');
       
        $result = $this->tarefa->inserir($dados);
        if ($result == true) {
            $this->session->set_flashdata('true', 'msg');
            redirect('tarefa');
        } else {
            $this->session->set_flashdata('err', 'msg');
            redirect('tarefa');
        }
    }

    public function excluir($id) {
        $result = $this->tarefa->deletar($id);
        if ($result == true) {
            $this->session->set_flashdata('true', 'msg');
            redirect('tarefa');
        } else {
            $this->session->set_flashdata('err', 'msg');
            redirect('tarefa');
        }
    }

    public function editar($idTarefa) {
        $data['tarefa'] = $this->tarefa->editar($idTarefa);
        $this->load->view('tarefaEditar', $data);
    }
    
    public function relatorio() {
        $this->load->view('template/header');
        $lista['tarefas'] = $this->tarefa->listar();
        $lista['tarefasAberto'] = $this->tarefa->listarAberto();
        $lista['tarefasFechado'] = $this->tarefa->listarFechado();
        $lista['tarefasAtraso'] = $this->tarefa->listarAtraso();
        $this->load->view('tarefaRelatorio', $lista);
        
        $this->load->view('template/footer');
        
    }

    public function atualizar() {
        //nome no vetor deve ser o mesmo nome do campo na tabela
        $dados['idTarefa'] = $this->input->post('idTarefa');
        $dados['titulo'] = $this->input->post('titulo');
        $dados['data'] = $this->input->post('data');
        $dados['status'] = $this->input->post('status');
        
        if ($this->tarefa->atualizar($dados) == true) {
            $this->session->set_flashdata('true', 'msg');
            redirect('tarefa');
        } else {
            $this->session->set_flashdata('err', 'msg');
            redirect('tarefa');
        }
    }

}
