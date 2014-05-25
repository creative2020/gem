<div id="footer" class="row">
    
    <div class="col-md-10 col-md-offset-1">
        
    <div class="row">
          
             <div class="col-md-6 footer-gem">
                 
                 <?php 
                    $co_name = get_field('company_name', 'option'); 
                    $co_phone = get_field('company_phone', 'option');
                 
                 ?>
        
                <p>&copy; <?php echo $co_name; ?> | <?php echo $co_phone; ?></p>
                 
            </div>
            <div class="col-md-6">
            
                <p class="pull-right"><a href="http://2020creative.com" id="2020 Creative" title="website design">2020 Creative</a>
                <?php
                    $my_theme = wp_get_theme();
                    echo "v" . $my_theme->get( 'Version' );
                ?>
                
                </p>
                 
            </div>
			
    </div>
        
    </div>  
        
    
</div> <!-- end footer -->       
        
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>