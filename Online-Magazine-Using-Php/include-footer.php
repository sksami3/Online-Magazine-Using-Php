</div>
</section>



    <!-- Footer
    ============================================= -->
    <footer id="footer" style="margin-top: 0px !important; ">
      <div class="container">
        <!-- Footer Widgets
        ============================================= -->
        <div class="footer-widgets-wrap clearfix">
            <?php echo $general[1]; ?>
        </div><!-- .footer-widgets-wrap end -->
      </div>

      <!-- Copyrights
      ============================================= -->
      <div id="copyrights">
        <div class="container clearfix">
          &copy; <?php echo date("Y") ?> - <?php echo $general[0]; ?> - All right Reserved<br>
        </div>
      </div><!-- #copyrights end -->
    

    </footer><!-- #footer end -->
  </div><!-- #wrapper end -->



  <!-- Go To Top
  ============================================= -->
  <div id="gotoTop" class="fa fa-angle-up"></div>

  <script type="text/javascript" src="<?php echo $baseurl; ?>/assets/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo $baseurl; ?>/assets/js/plugins.js"></script>
  <script type="text/javascript" src="<?php echo $baseurl; ?>/assets/js/functions.js"></script>
  <script type="text/javascript" src="<?php echo $baseurl; ?>/assets/js/jquery-ui.js"></script>

<script>
   $(function () {
           
            $("#datepicker").datepicker({
                onSelect: function(dateText, inst) { 
        window.location = '<?php echo $baseurl; ?>/archive/' + dateText;
    },
        dateFormat: "dd-mm-yy"
             
            });
        });
</script>
    

</body>
</html>
