<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Racing+Sans+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">
   
	<title>Onlineshop</title>
</head>
<body>
   <?php $this->load->view('layout/top_layout')?>

   <h1>PILIH BARANGMU</h1>
   
   <div class="row">
   	
   <?php foreach ($products as $product)  : ?> 
   	<div class=" col-sm-3 col-md-3">
   		<div class="thumbnail">
   		<CENTER><img src="<?php echo base_url('uploads/'.$product->image)?>" width="120" height="150"></CENTER>

   			<div class="caption">
   				<h3 style="min-height: 60px;"><?=$product->name?></h3>
   				<p><?=$product->description?></p>
   				<p>Rp. <?=$product->price?></p>
   				<p>
   					<?=anchor('Main/add_to_cart/' .$product->id, 'Buy' , [
                       'class' => 'btn btn-primary',
                       'role'  =>'button'
   					])?>
   				</p>
   			</div>
   		</div>
   	</div>
    <?php endforeach;?>
   
 </div>

</body>
</html>