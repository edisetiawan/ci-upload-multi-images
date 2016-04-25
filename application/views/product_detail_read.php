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
        <h2 style="margin-top:0px">Product_detail Read</h2>
        <table class="table">
	    <tr><td>productdet_images</td><td><img src="<?php echo base_url();?>/uploads/<?php echo $productdet_images; ?>" width='20%' height='20%'></td></tr>
	    <tr><td>product_id</td><td><?php echo $product_id; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('product_detail') ?>" class="btn btn-default">Cancel</button></td></tr>
	</table>
    </body>
</html>