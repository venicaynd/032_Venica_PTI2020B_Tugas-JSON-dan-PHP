<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">	<title>V-Shop</title>
	
</head>
<body>
	<div class="container mt-3 text-center" >
		<h1>Our Product</h1>
		<p>Berikut ini beberapa produk yang tersedia pada laman website V-Shop :</p>
		
	<table class="table table-striped" >
		<thead>
			<tr class="table-warning text-center">
				<th>Product Image</th>
				<th>Name</th>
				<th>Price</th>
				<th>Size</th>
				<th>Color</th>
				<th>Ready Stok</th>
				<th>Order</th>
			</tr>
		</thead>
		
		<?php
			$json_data = file_get_contents("data.json");
			$data = json_decode($json_data, true);
			if(count($data) != 0 ){
				foreach($data as $product){
					?>
					<tr class="text-center">
						<td> <img src="<?php echo $product['gambar']?>" alt="" width="140px" </td>
						<td> <?php echo $product['name']?> </td>
						<td> <?php echo $product['harga']?> </td>
						<td> <?php echo $product['ukuran']?> </td>
						<td> <?php echo $product['warna']?> </td>
						<td> <?php echo $product['stok']?> </td>
						<td>
							<div class="order">
								<button class="btn btn-warning">Order Now</button>
							</div>
						</td>
					</tr>
					<?php
				}
			}
		?>
	</table>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script></body>
</html>