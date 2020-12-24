<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Formateur extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Formateur_model');
    } 

    /*
     * Listing of formateurs
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('formateur/index?');
        $config['total_rows'] = $this->Formateur_model->get_all_formateurs_count();
        $this->pagination->initialize($config);

        $data['formateurs'] = $this->Formateur_model->get_all_formateurs($params);
        
        $data['_view'] = 'formateur/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new formateur
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('matricule','Matricule','required|is_unique[formateurs.matricule]');
		$this->form_validation->set_rules('noms','Noms','required');
		$this->form_validation->set_rules('email','Email','is_unique[formateurs.email]');
		$this->form_validation->set_rules('telephone','Telephone','is_unique[formateurs.telephone]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'matricule' => $this->input->post('matricule'),
				'noms' => $this->input->post('noms'),
				'specialite' => $this->input->post('specialite'),
				'telephone' => $this->input->post('telephone'),
				'grade' => $this->input->post('grade'),
				'email' => $this->input->post('email'),
            );
            
            $formateur_id = $this->Formateur_model->add_formateur($params);
            redirect('formateur/index');
        }
        else
        {            
            $data['_view'] = 'formateur/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a formateur
     */
    function edit($ens_id)
    {   
        // check if the formateur exists before trying to edit it
        $data['formateur'] = $this->Formateur_model->get_formateur($ens_id);
        
        if(isset($data['formateur']['ens_id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('matricule','Matricule','required|is_unique[formateurs.matricule]');
			$this->form_validation->set_rules('noms','Noms','required');
			$this->form_validation->set_rules('email','Email','is_unique[formateurs.email]');
			$this->form_validation->set_rules('telephone','Telephone','is_unique[formateurs.telephone]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'matricule' => $this->input->post('matricule'),
					'noms' => $this->input->post('noms'),
					'specialite' => $this->input->post('specialite'),
					'telephone' => $this->input->post('telephone'),
					'grade' => $this->input->post('grade'),
					'email' => $this->input->post('email'),
                );

                $this->Formateur_model->update_formateur($ens_id,$params);            
                redirect('formateur/index');
            }
            else
            {
                $data['_view'] = 'formateur/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The formateur you are trying to edit does not exist.');
    } 

    /*
     * Deleting formateur
     */
    function remove($ens_id)
    {
        $formateur = $this->Formateur_model->get_formateur($ens_id);

        // check if the formateur exists before trying to delete it
        if(isset($formateur['ens_id']))
        {
            $this->Formateur_model->delete_formateur($ens_id);
            redirect('formateur/index');
        }
        else
            show_error('The formateur you are trying to delete does not exist.');
    }
    
}
