<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <h2 style="margin-top:0px">Product_detail List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('product_detail/create'), 'Create', 'class="btn btn-primary"'); ?>
            </div>
        </div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th>No</th>
		    <th>productdet_images</th>
		    <th>product_id</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($product_detail_data as $product_detail)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><img src="<?php echo base_url();?>/uploads/<?php echo $product_detail->productdet_images; ?>" width='20%' height='10%'></td>
		    <td><?php echo $product_detail->product_id ?></td>
		    <td style="text-align:center">
			<?php 
			echo anchor(site_url('product_detail/read/'.$product_detail->productdet_id),'Read'); 
			echo ' | '; 
			echo anchor(site_url('product_detail/update/'.$product_detail->productdet_id),'Update'); 
			echo ' | '; 
			echo anchor(site_url('product_detail/delete/'.$product_detail->productdet_id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
			?>
		    </td>
	        </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#mytable").dataTable();
            });
        </script>
    </body>
</html>