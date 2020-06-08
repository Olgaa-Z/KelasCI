<?php
class Berita extends Ci_Controller{

	function form(){
		$this->load->view('berita_form_v');

	}

	function index() {     
        $this->load->view('berita_v');
        
    }

    function delete($id){
    	$this->Berita_m->delete($id);
    	redirect('Berita');
    }

    function insert(){
    	$nm_file = time() . '.png';   
         $config['upload_path'] = './assets/upload_berita/';
         $config['allowed_types'] = 'jpg|jpeg|png';   
         $config['file_name'] = $nm_file;   
         $config['overwrite'] = TRUE;
         $this->upload->initialize($config);

         								//gambar == name dari form
         if ($this->upload->do_upload('gambar'))
             {   
             $gambar = $this->upload->data();   
             $data = array(      
             //judul_berita diambil dari $row dan database 
                 'judul_berita' => $this->input->post('judul'),
                 'isi_berita' => $this->input->post('isi'),       
                 'gambar_berita' => $gambar['file_name']);
             $this->Berita_m->insert_db($data);
         
         }else {   
             $error = array(   
                 'error' => $this->upload->display_errors()   
                     );  
             echo json_encode($error);
         
         } 
         redirect('Berita');
    }


    function edit($id){
    	$data['berita'] = $this->Berita_m->select_id($id);
    	$this->load->view('edit_berita_v', $data);
    }

    function editform(){
        $id_berita = $this->input->post('id_berita');
        $nm_file = $this->input->post('nm_foto');
        $config['upload_path'] = './assets/upload_berita/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = $nm_file;
        $config['overwrite'] = TRUE;
        $this->upload->initialize($config);

        if ($this->upload->do_upload('gambar')) {
            $gambar = $this->upload->data();
            $data = array(
                // 'judul' => $this->input->post('judul'),
                'isi_berita' => $this->input->post('isi'),
                'gambar_berita' => $gambar['file_name']
            );
        } else {
            $data = array(
                'judul_berita' => $this->input->post('judul'),
                'isi_berita' => $this->input->post('isi')
               
            );  
        }
        
        $this->Berita_m->edit_db($id_berita, $data);
        redirect('Berita');
    }
}
