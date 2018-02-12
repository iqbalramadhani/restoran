<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Model_pantry extends CI_Model {
    
    var $table = 'bahan';
    var $column_order = array('nama_bahan','jumlah',null); //set column field database for datatable orderable
    var $column_search = array('nama_bahan'); //set column field database for datatable searchable just firstname , lastname , address are searchable
    var $order = array('id_bahan' => 'asc'); // default order
    
    private function _get_datatables_query()
    {

            $this->db->from($this->table);

            $i = 0;

            foreach ($this->column_search as $item) // loop column 
            {
                    if($_POST['search']['value']) // if datatable send POST for search
                    {

                            if($i===0) // first loop
                            {
                                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                                    $this->db->like($item, $_POST['search']['value']);
                            }
                            else
                            {
                                    $this->db->or_like($item, $_POST['search']['value']);
                            }

                            if(count($this->column_search) - 1 == $i) //last loop
                                    $this->db->group_end(); //close bracket
                    }
                    $i++;
            }

            if(isset($_POST['order'])) // here order processing
            {
                    $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
            } 
            else if(isset($this->order))
            {
                    $order = $this->order;
                    $this->db->order_by(key($order), $order[key($order)]);
            }
    }
    
    function get_datatables()
    {
            $this->_get_datatables_query();
            if($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
            $query = $this->db->get();
            return $query->result();
    }
    
    public function count_all()
    {
            $this->db->from($this->table);
            return $this->db->count_all_results();
    }
    
    function count_filtered()
    {
            $this->_get_datatables_query();
            $query = $this->db->get();
            return $query->num_rows();
    }
    
    function post($data){
        return $this->db->insert('bahan',$data);
        //return $this->db->insert_id();
        //$pelanggan = $this->db->get_where('pelanggan',array('nama'=>$nama))->row_array();
        /*coba pake qury*/
        
    }
    
    function get_one($id){
        $param = array('id_bahan' => $id);
        $data = $this->db->get_where('bahan',$param);
        return $data;
    }
    
    function data_user($nama){
        return $this->db->get_where('pelanggan',array('nama'=>$nama));
    }
    
    function tampil_data(){
        return $this->db->get('bahan');
    }
    
    function edit($id,$data){
        $this->db->where('id_bahan',$id);
        $this->db->update('bahan',$data);
    }
    
    function hapus($id){
        $this->db->where('id_bahan',$id);
        $this->db->delete('bahan');
    }
}
