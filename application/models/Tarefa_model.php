<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pessoa_model
 *
 * @author jairb
 */
class Tarefa_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function inserir($t) {
        return $this->db->insert('tarefa', $t); //pessoa é o nome da tabela no banco
    }
    
    function deletar($id) {
        $this->db->where('idTarefa',$id);
        return $this->db->delete('tarefa');
    }
    
    function editar($idTarefa){
        $this->db->where('idTarefa',$idTarefa);
        $result = $this->db->get('tarefa');
        return $result->result();
    }
    
    function atualizar($data) {
        $this->db->where('idTarefa',$data['idTarefa']);
        $this->db->set($data);
        return $this->db->update('tarefa');
    }

    /**
     * Este método retorna a lista de tarefas.
     * @return type
     */
    function listar() {
        $this->db->select('*');
        $this->db->from('tarefa');
//        $this->db->where('status', 'Aberto');
        $this->db->order_by('data', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
    
    function listarAberto() {
        $this->db->select('*');
        $this->db->from('tarefa');
        $this->db->where('status', 'Aberto');
        $this->db->order_by('data', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
    
    function listarFechado() {
        $this->db->select('*');
        $this->db->from('tarefa');
        $this->db->where('status', 'Fechado');
        $this->db->or_where('status', 'Concluído');
        $this->db->order_by('data', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
    
    function listarAtraso() {
        //$todaydate=date('Y-m-d');
        $todaydate = date('Y-m-d H:i:s', (time() - 864000));
        $this->db->select('*');
        $this->db->from('tarefa');
        $this->db->where('status', 'Aberto');
        //$this->db->where('data' > $todaydate);
        $this->db->where('data < ',  $todaydate);
        //$this->db->where('data BETWEEN DATE_SUB(NOW(), INTERVAL 10 DAY) AND NOW()');
        //$this->db->where('data <', 'DATE_SUB(NOW(), INTERVAL 10 DAY)');
        $this->db->order_by('data', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
}
