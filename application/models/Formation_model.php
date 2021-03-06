<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Formation_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get formation by forma_id
     */
    function get_formation($forma_id)
    {
        return $this->db->get_where('formations',array('forma_id'=>$forma_id))->row_array();
    }
    
    /*
     * Get all formations count
     */
    function get_all_formations_count()
    {
        $this->db->from('formations');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all formations
     */
    function get_all_formations($params = array())
    {
        $this->db->order_by('forma_id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('formations')->result_array();
    }
        
    /*
     * function to add new formation
     */
    function add_formation($params)
    {
        $this->db->insert('formations',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update formation
     */
    function update_formation($forma_id,$params)
    {
        $this->db->where('forma_id',$forma_id);
        return $this->db->update('formations',$params);
    }
    
    /*
     * function to delete formation
     */
    function delete_formation($forma_id)
    {
        return $this->db->delete('formations',array('forma_id'=>$forma_id));
    }
}
