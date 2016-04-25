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
        <h2 style="margin-top:0px">Product_detail <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
                <label for="productdet_images">productdet_images <?php echo form_error('productdet_images') ?></label>
                <textarea class="form-control" rows="3" name="productdet_images" id="productdet_images" placeholder="productdet_images"><?php echo $productdet_images; ?></textarea>
            </div>
	    <div class="form-group">
                <label for="int">product_id <?php echo form_error('product_id') ?></label>
                <input type="text" class="form-control" name="product_id" id="product_id" placeholder="product_id" value="<?php echo $product_id; ?>" />
            </div>
	    <input type="hidden" name="productdet_id" value="<?php echo $productdet_id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('product_detail') ?>" class="btn btn-default">Cancel</button>
	</form>
    </body>
</html>