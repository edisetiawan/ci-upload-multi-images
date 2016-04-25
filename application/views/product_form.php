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
        <h2 style="margin-top:0px">Product <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
                <label for="varchar">product_name <?php echo form_error('product_name') ?></label>
                <input type="text" class="form-control" name="product_name" id="product_name" placeholder="product_name" value="<?php echo $product_name; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">product_price <?php echo form_error('product_price') ?></label>
                <input type="text" class="form-control" name="product_price" id="product_price" placeholder="product_price" value="<?php echo $product_price; ?>" />
            </div>
	    <div class="form-group">
                <label for="tinytext">prodcut_images <?php echo form_error('prodcut_images') ?></label>
                <input type="text" class="form-control" name="prodcut_images" id="prodcut_images" placeholder="prodcut_images" value="<?php echo $prodcut_images; ?>" />
            </div>
	    <input type="hidden" name="product_id" value="<?php echo $product_id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('product') ?>" class="btn btn-default">Cancel</button>
	</form>
    </body>
</html>