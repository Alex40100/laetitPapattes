<?php
class Actualite_model extends CI_Model {

        public function __construct(){
                parent::__construct();
                $this->load->database();
        }     
public function set_actualite()
{
    $this->load->helper('url');

    $slug = url_title($this->input->post('title'), 'dash', TRUE);

    $data = array(
        'title' => $this->input->post('title'),
        'slug' => $slug,
        'content' => $this->input->post('content')
    );
           
    return $this->db->insert('actualites', $data);
}

public function get_actualite($slug = FALSE)
{
        if ($slug === FALSE)
        {
                $query = $this->db->get('actualites');
                return $query->result_array();
        }

        $query = $this->db->get_where('actualites', array('slug' => $slug));
        return $query->row_array();
}

public function update_actualite()
{
    $this->load->helper('url');

    $slug = url_title($this->input->post('title'), 'dash', TRUE);
    

    $data = array(
        'title' => $this->input->post('title'),
        'slug' => $slug,
        'content' => $this->input->post('content')
    );
           $this->db->set($data);
           $this->db->where('slug', $slug);
    return $this->db->update('actualites', $data);
}

public function delete_actualite($slug= NULL)
{
    $this->load->helper('url');

   
           
           $this->db->where('slug', $slug);
    return $this->db->delete('actualites');
}

public function pub_actualite($slug= NULL)
{
    $this->load->helper('url');
    $data = array(
        'date_pub'=>date("Y-m-d H:i:s"),
        'status' => "P"
        );
           $this->db->set($data);
   
           
           $this->db->where('slug', $slug);
    return $this->db->update('actualites', $data);
}

}