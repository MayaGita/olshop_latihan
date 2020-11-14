<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->library('cart');
    //load model
    $this->load->model('model_products');

  }

     public function index(){
        $data['products'] = $this->model_products->all();
        $this->load->view('index',$data);
      }
      public function add_to_cart($products_id){
        $products = $this->model_products->find($products_id);
        $data = array(
                        'id'      => $products->id,
                        'qty'     => 1,
                        'price'   => $products->price,
                        'name'    => $products->name
                   );
        $this->cart->insert($data);
        redirect(base_url());
      }
      public function cart(){
       $this->load->view('show_cart');    
      }
      public function clear_cart(){
        $this->cart->destroy();
        redirect(base_url());
      }
  
}
?>