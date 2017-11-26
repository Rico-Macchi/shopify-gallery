<!DOCTYPE html>
<html>
    <head>
    	<!-- Stylesheet -->
    	<link href="<?= base_url('assets/core/css/bootstrap.min.css'); ?>" rel="stylesheet">
    	<link href="<?= base_url('assets/core/css/style.css'); ?>" rel="stylesheet">
        
        <!-- Shopify -->
        <script src="https://cdn.shopify.com/s/assets/external/app.js"></script>
        <script type="text/javascript">
            ShopifyApp.init({
                apiKey : '<?= $api_key; ?>',
                shopOrigin : '<?= 'https://'.$shop; ?>' 
            });
        </script>
		<script type="text/javascript">
			ShopifyApp.ready(function(){
				ShopifyApp.Bar.initialize({
					icon: '<?= base_url('assets/core/img/icon.png'); ?>',
					title: 'Add Collections',
					buttons: {
						primary: {
							label: 'Save',
							message: 'save',
							callback: function(){
								ShopifyApp.Bar.loadingOn();
								doSomeCustomAction();
							}
						}
					},
					breadcrumb: {
						label: "Add Collection",
						href: "/gallery/add",
						target: 'app',
						loading: false
					}
				});
			});
		</script>
    </head>
    <body>
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-12">
    				<h1 class="title">Add Collection</h1>
    			</div>
    		</div>
    	</div>
    	
    	<!-- Javascript -->
    	<script src="<?= base_url('assets/core/js/jquery.3.2.1.min.js'); ?>" type="text/javascript"></script>
    	<script src="<?= base_url('assets/core/js/popper.min.js'); ?>" type="text/javascript"></script>
    	<script src="<?= base_url('assets/core/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
    </body>

</html>