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
	<title>ONLINE SHOP</title>
</head>
<body>
	<?php $this->load->view('layout/top_layout')?>

	<table class="table table-bordered table-striped table-hover">
		
		<thead>
			<tr>
				<th>No</th>
				<th>Product</th>
				<th>jumlah</th>
				<th>Price</th>
				<th>Subtotal</th>

			</tr>
		</thead>
       <tbody>
       	  <?php
       	  $i=0;
       	  foreach ($this->cart->contents() as $items) :
       	  	$i++;
       	  ?>
       	  <tr>
       	  	<td><?= $i ?></td>
       	  	<td><?= $items['name'] ?></td>
       	  	<td><?= $items['qty'] ?></td>
       	  	<td align="right"><?=number_format($items['price'],0,',','.')?></td>
       	  	<td align="right"><?=number_format($items['subtotal'],0,',','.')?></td>
       	  </tr>
       	  <?php endforeach; ?>
       	</tbody>
       	<tfoot>
       		<tr>
       			<td align="right" colspan="4">Total</td>
       			<td align="right"><?=number_format($this->cart->total(),0,',','.')?></td>
       		</tr>
       	</tfoot>

       </tbody>


	</table>
	<div align="center">
		<?=anchor('Main/clear_cart','Clear cart',['class'=>'btn btn-danger'])?>
		<?=anchor(base_url(),'Continue Shopping',['class'=>'btn btn-primary'])?>
		<?=anchor('order','Check Out',['class'=>'btn btn-success'])?>
	</div>

</body>
</html>