<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelUser extends CI_Model
{
    public function simpanData($data = null)
    {
        $this->db->insert('user', $data);
    }
    public function cekData($where = null)
    {
        return $this->db->get_where('user',$where);
    }
    public function getUserWhere($where = null)
    {
        return $this->db->get_where('user', $where);
    }
    public function cekUserAccess($where = null)
    {
        $this->db->select('*');
        $this->db->form('access_menu');
        $this->db->where($where);
        return $this->db->get();
    }
    public function getUserlimit()
    { 
        $this->db->select('*');
        $this->db->form('user');
        $this->db->where(10, 0);
        return $this->db->get();
    }
}