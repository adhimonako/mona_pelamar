<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pendidikan extends MY_Controller 
{
        public function Index()
	{
		$this->load->model('m_pendidikan');
		$data["data_view"] = $this->m_pendidikan->get();
		$data["content"] = $this->load->view('v_pendidikan_all',$data, true);
		$this->load->view('main', $data);
	}
        
	public function input_pendidikan() 
	{
            	$this->load->model('m_pendidikan');

		$this->form_validation->set_rules("pendidikan_nama","Nama Jenjang","required");
                if ($this->form_validation->run() == FALSE) {
			//echo $data['error'] = validation_errors();
		} else {
			$id = $this->input->post("id_pendidikan");
                        $nama_pendidikan = $this->input->post("pendidikan_nama");
			$data = array("pendidikan_nama"=>$nama_pendidikan);
			//var_dump($data);
			$id_pendidikan = $this->m_pendidikan->save($data,$id);
			?>
                            <script type="text/javascript">
                                    alert( "Jenjang Pendidikan berhasil ditambahkan.");
                                    window.location = "<?php echo base_url().$this->uri->segment(1);?>";
                            </script>
			<?php
		}
		$data["content"] = $this->load->view('v_pendidikan_input','', true);		
		$this->load->view('main',$data);     
	}

        public function edit($id){
		$this->load->model('m_pendidikan');
		$this->form_validation->set_rules("pendidikan_nama","Nama Jenjang","required");
                $is_submited = $this->input->post('submit'); 
                if ($is_submited){
                    
                    if ($this->form_validation->run() == FALSE) {
                            //echo $data['error'] = validation_errors();
                    } else {
                            //$id = $this->input->post("pendidikan_id");
                            $nm_pendidikan = $this->input->post("pendidikan_nama");
                            $data = array("pendidikan_nama"=>$nm_pendidikan);
                            //var_dump($data);
                            $id_pendidikan = $this->m_pendidikan->save($data,$id);
                            ?>
                                    <script type="text/javascript">
                                            alert( "Update Jenjang Pendidikan Sukses");
                                    </script>
                            <?php
                            redirect(base_url() . $this->uri->segment(1));
                    }
                }
		$data["pendidikan"] = $this->m_pendidikan->get_single_pendidikan($id);
		$data["content"] = $this->load->view('v_pendidikan_edit',$data, true);		
		$this->load->view('main',$data);     
        }

        public function hapus($id)
	{
		$this->load->model('m_pendidikan');
		$this->m_pendidikan->delete($id);
		redirect('pendidikan');
	}
        
}