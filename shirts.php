<?php include 'inc/products.php'; ?>

<?php 
	$title = "Catalogs"; 
	$section = "shirts";
	include('inc/header.php'); 
?>
	<div class="section shirts page">
		<div class="wrapper">
			<h1>Mike's Full Catalog of Shirts</h1>
			<ul class="products">
				<?php foreach ($products as $key => $product) { 
						echo '<li>';
						echo '<a href="shirt.php?id='.$key.'">';
						echo '<img src="' . $product["img"] . '" alt="' . $product["name"] . '">';
						echo '<p>View Details</p>';
						echo '</a>';
						echo '</li>';
					}
				?>
			</ul>
		</div>
	</div>
<?php include('inc/footer.php'); ?>