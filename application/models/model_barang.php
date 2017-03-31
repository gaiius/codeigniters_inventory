<?php 
class model_barang extends ci_model{

	public function tampil_list_data(){
			$query="select * from barang";
			return $this->db->query($query);
	}
	public function input_data($data){
		$this->db->insert('barang',$data);
	}
	
	public function ambil_data($id){
		$data = array('id_barang'=>$id);
		return $this->db->get_where('barang',$data);
	}
	function edit_data($data,$id)
    {
        $this->db->where('id_barang',$id);
        $this->db->update('barang',$data);
    }
	
	function hapus_data($id)
    {
        $this->db->where('id_barang',$id);
        $this->db->delete('barang');
    }

}