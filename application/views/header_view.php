<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="<?php echo base_url()?>assets/css/styles.css">
   <script src="<?php echo base_url()?>assets/js/jquery-latest.min.js" type="text/javascript"></script>
   <script src="<?php echo base_url()?>assets/js/script.js"></script>
<script type="text/javascript">
		   $(function(){
		    // this will get the full URL at the address bar
		    var url = window.location.href; 

		    // passes on every "a" tag 
		    $("#cssmenu a").each(function() {
		            // checks if its the same on the address bar
		        if(url == (this.href)) { 
		            $(this).closest("li").addClass("active");
		        } 
		    });
		});
   </script>
   <title>Main</title>
</head>