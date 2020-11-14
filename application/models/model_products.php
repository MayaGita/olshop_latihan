<?PHP
 
 class model_products extends CI_model{
 	public function all(){
 		$hasil=$this->db->get('products');
 		if($hasil->num_rows() > 0){
 			return $hasil->result();
 		}else{
 			return array();
 		}
 	}
 	public function find($id){
 		$hasil =$this->db->where('id',$id)
 		                 ->limit(1)
 		                 ->get('products');
 		if($hasil->num_rows() > 0){
 			return $hasil->row();
 		}else{
 			return array();
 		}                 
 	}
  
}