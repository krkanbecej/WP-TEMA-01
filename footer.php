    
  <!-- Footer -->
   </div><!-- /.row -->
    </div><!-- /.container -->

<footer><!--footer -->
    
    <div class='clearfix'></div>
<div class='footer_widget_area'><!--footer_widget_area -->
    <?php if (is_active_sidebar('footer1')): ?><!--witget boks 1 -->
    <div class='footer_widget_area1'>
    <?php dynamic_sidebar('footer1'); ?>
    </div>
  <?php endif; ?>
  <?php if (is_active_sidebar('footer2')): ?><!--witget boks 2 -->
    <div class='footer_widget_area2'>
    <?php dynamic_sidebar('footer2'); ?>
    </div>
  <?php endif; ?>
<?php if (is_active_sidebar('footer3')): ?><!--witget boks 3 -->
    <div class='footer_widget_area3'>
    <?php dynamic_sidebar('footer3'); ?>
    </div><!--/footer_widget_area -->
  <?php endif; ?>
  </div>
      <div class="col-lg-8 col-md-10 ">
          <h3>Ovo je moj futer</h3>
          </div>
       <div class='footerDovnArea'>
        
        <div id="futernav">
				     <?php wp_nav_menu( array('theme_location' =>'drugi' ));  ?>
        </div>

      </div>
     
  </footer><!-- /footer -->

  <?php wp_footer(); ?><!-- dodavanje java skriptova na kraju dokumenta  -->
</body>
</html>