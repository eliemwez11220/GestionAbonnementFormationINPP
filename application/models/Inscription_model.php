<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Inscription_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get inscription by ins_id
     */
    function get_inscription($ins_id)
    {
        return $this->db->get_where('inscriptions',array('ins_id'=>$ins_id))->row_array();
    }
    
    /*
     * Get all inscriptions count
     */
    function get_all_inscriptions_count()
    {
        $this->db->from('inscriptions');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all inscriptions
     */
    function get_all_inscriptions($params = array())
    {
        $this->db->order_by('ins_id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('inscriptions')->result_array();
    }
        
    /*
     * function to add new inscription
     */
    function add_inscription($params)
    {
        $this->db->insert('inscriptions',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update inscription
     */
    function update_inscription($ins_id,$params)
    {
        $this->db->where('ins_id',$ins_id);
        return $this->db->update('inscriptions',$params);
    }
    
    /*
     * function to delete inscription
     */
    function delete_inscription($ins_id)
    {
        return $this->db->delete('inscriptions',array('ins_id'=>$ins_id));
    }
}
