<!DOCTYPE html>
<html>
    <head>
        <!-- Shopify -->
        <script src="https://cdn.shopify.com/s/assets/external/app.js"></script>
        <script type="text/javascript">
            ShopifyApp.init({
                apiKey : '<?= $api_key; ?>',
                shopOrigin : '<?= 'https://'.$shop; ?>',
                debug: true
            });

			ShopifyApp.ready(function() {
				ShopifyApp.Bar.initialize({
					buttons: {
						secondary: {
							label: 'Add Collection',
							callback: function(){
								alert('help');
							}
						}
					}
				});
				ShopifyApp.Bar.loadingOff();
			});
		</script>
		
		<!-- Stylesheet -->
		<link href="<?= base_url('assets/core/css/bootstrap.min.css'); ?>" rel="stylesheet">
		<link href="<?= base_url('assets/core/css/style.css'); ?>" rel="stylesheet">
    </head>
    <body>
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-12 col-sm-6">
    				<h1 class="title">Collections</h1>
    			</div>
    			<div class="col-12 col-sm-6 add-button">
    				<a href="<?= base_url('gallery/add'); ?>" class="btn btn-shopify">Add Collection</a>
    			</div>
    		</div>
    	</div>
    	
    	<!-- Javascript -->
    	<script src="<?= base_url('assets/core/js/jquery.3.2.1.min.js'); ?>" type="text/javascript"></script>
    	<script src="<?= base_url('assets/core/js/popper.min.js'); ?>" type="text/javascript"></script>
    	<script src="<?= base_url('assets/core/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
    </body>

</html>