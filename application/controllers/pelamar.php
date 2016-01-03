<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pelamar extends MY_Controller 
{
        public function Index()
	{
		$this->load->model('m_pelamar');
		$data["data_view"] = $this->m_pelamar->get();
		$data["content"] = $this->load->view('v_pelamar_all',$data, true);
		$this->load->view('main', $data);
	}
        
	public function input_pelamar() 
	{
            	$this->load->model('m_pelamar');

		$this->form_validation->set_rules("pelamar_nama","pelamar_nama","required");
		$this->form_validation->set_rules("pelamar_tmp_lahir","pelamar_tmp_lahir","required");
		$this->form_validation->set_rules("pelamar_tgl_lahir","pelamar_tgl_lahir","required");
		$this->form_validation->set_rules("pelamar_telp","pelamar_telp","required");
		$this->form_validation->set_rules("pelamar_alamat","pelamar_alamat","required");
		$this->form_validation->set_rules("pelamar_tgl_lamar","pelamar_tgl_lamar","required");

                if ($this->form_validation->run() == FALSE) {
			//echo $data['error'] = validation_errors();
		} else {
			$id = $this->input->post("id_pelamar");
			$pelamar_nama = $this->input->post("pelamar_nama");
			$pelamar_tmp_lahir = $this->input->post("pelamar_tmp_lahir");
			$pelamar_tgl_lahir = $this->input->post("pelamar_tgl_lahir");
			$pelamar_sex = $this->input->post("pelamar_sex");
			$pelamar_telp = $this->input->post("pelamar_telp");
			$pelamar_hp = $this->input->post("pelamar_hp");
			$pelamar_alamat = $this->input->post("pelamar_alamat");
			$pelamar_posisi = $this->input->post("pelamar_posisi");
			$pelamar_tgl_lamar = $this->input->post("pelamar_tgl_lamar");
			$pelamar_keterangan = $this->input->post("pelamar_keterangan");
                        
			$data = array("pelamar_nama"=>$pelamar_nama,"pelamar_tmp_lahir"=>$pelamar_tmp_lahir, "pelamar_tgl_lahir" => $pelamar_tgl_lahir, "pelamar_sex" => $pelamar_sex, "pelamar_telp" => $pelamar_telp, "pelamar_hp" => $pelamar_hp, "pelamar_alamat" => $pelamar_alamat, "pelamar_posisi" => $pelamar_posisi, "pelamar_tgl_lamar" => $pelamar_tgl_lamar, "pelamar_keterangan" => $pelamar_keterangan, "pelamar_status" => 1 );
			//var_dump($data);
			$this->m_pelamar->save($data,$id);
                        
			?>
                            <script type="text/javascript">
                                    alert( "Pelamar berhasil ditambahkan.");
                                    window.location = "<?php echo base_url().$this->uri->segment(1);?>";
                            </script>
			<?php
		}
		$data["content"] = $this->load->view('v_pelamar_input','', true);		
		$this->load->view('main',$data);     
	}

        public function edit($id){
		$this->load->model('m_pelamar');

                $is_submited = $this->input->post('submit'); 
                if ($is_submited){
                    $this->form_validation->set_rules("nm_pelamar","Username","required");
                    $this->form_validation->set_rules("nama_pelamar","Nama_User","required");
                    $this->form_validation->set_rules("email_pelamar","Email","required");
                    if ($this->form_validation->run() == FALSE) {
                            //echo $data['error'] = validation_errors();
                    } else {
                            //$id = $this->input->post("pelamar_id");
                            $nm_pelamar = $this->input->post("nm_pelamar");
                            $email_pelamar = $this->input->post("email_pelamar");
                            $nama = $this->input->post("nama_pelamar");
                            $data = array("pelamar_pelamarname"=>$nm_pelamar,"pelamar_email"=>$email_pelamar,"pelamar_nama"=>$nama);
                            //var_dump($data);
                            $id_pelamar = $this->m_pelamar->save($data,$id);
                            ?>
                                    <script type="text/javascript">
                                            alert( "Update Profil Sukses");
                                    </script>
                            <?php
                            redirect(base_url() . $this->uri->segment(1));
                    }
                }
		$data["pelamar"] = $this->m_pelamar->get_single_pelamar($id);
		$data["content"] = $this->load->view('v_pelamar_edit',$data, true);		
		$this->load->view('main',$data);     
        }

        public function hapus($id)
	{
		$this->load->model('m_pelamar');
		$this->m_pelamar->delete($id);
		redirect('pelamar');
	}
        
}