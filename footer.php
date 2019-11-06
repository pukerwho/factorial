    </section>
    <footer id="footer" class="footer shadow-lg py-5">
    	<div class="container mx-auto">
    		<div class="flex items-center flex-col text-center">
		    	<div class="footer_name text-2xl mb-3">
		    		<?php echo carbon_get_theme_option( 'crb_namesite' ); ?>
		    	</div>		
		    	<div class="mb-3">
		    		Код за ЄДРПОУ: <span><?php echo carbon_get_theme_option( 'crb_edrpoy' ); ?></span>
		    	</div>
		    	<div class="flex items-center mr-10">
            <div class="flex items-center mr-2">
              <img src="<?php bloginfo('template_url') ?>/img/phone.svg" alt="" width="20px" class="mr-3"><span>Телефон:</span>
            </div>
            <div>
              <?php $phones = carbon_get_theme_option('crb_phones');
              foreach ($phones as $phone): ?>
                <span><?php echo $phone['crb_phone'] ?> </span>
              <?php endforeach; ?>  
            </div>
          </div>
    		</div>
    	</div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>