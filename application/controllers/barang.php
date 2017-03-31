<?php
class Barang extends CI_Controller{
    
    function __construct() {
        parent::__construct();
		$this->load->model('model_barang');
  }		
  
  public function index() {
	  $data['tampil_data_barang'] = $this->model_barang->tampil_list_data();
	    $this->load->view('design/header');
	    $this->load->view('barang/tampil_barang',$data);
		$this->load->view('design/footer');
	
	  
  }
  
  public function tambah_data_barang(){
		if(isset($_POST['save'])){
				$nama_barang = $this->input->post('nama_barang');
				$stok = $this->input->post('stok');
				$status = $this->input->post('status');
		$data=array('nama_barang' =>$nama_barang,
					'stok'=>$stok,
					'status'=>$status
					);
					$this->model_barang->input_data($data);
					redirect('barang');
		}else{
	$this->load->view('design/header');
		$this->load->view('barang/input_barang');
		$this->load->view('design/footer');
	        
        }
  }
  public function tampil_yang_mau_di_edit(){
			if(isset($_POST['save'])){
				$id = $this->input->post('id_barang');
				$nama_barang = $this->input->post('nama_barang');
				$stok = $this->input->post('stok');
				$status = $this->input->post('status');
		    $data=array(
			        'id_barang'=>$id,
					'nama_barang' =>$nama_barang,
					'stok'=>$stok,
					'status'=>$status
					);
					$this->model_barang->edit_data($data,$id);
					redirect('barang');
			}else{
				$id=$this->uri->segment(3);
				$data['data_edit'] = $this->model_barang->ambil_data($id)->row_array();
	    $this->load->view('design/header');
		$this->load->view('barang/edit_barang',$data);
		$this->load->view('design/footer');
				
			}
  }
  public function hapus_data()
    {
        $id=  $this->uri->segment(3);
        $this->model_barang->hapus_data($id);
        redirect('barang');
    }
  
}