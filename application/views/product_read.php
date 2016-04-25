<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Product Read</h2>
        <table class="table">
	    <tr><td>product_name</td><td><?php echo $product_name; ?></td></tr>
	    <tr><td>product_price</td><td><?php echo $product_price; ?></td></tr>
	    <tr><td>prodcut_images</td><td><?php echo $prodcut_images; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('product') ?>" class="btn btn-default">Cancel</button></td></tr>
	</table>
    </body>
</html>