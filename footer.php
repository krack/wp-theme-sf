</div> <!-- /.container -->
<footer class="blog-footer">
    <hr />
    <span class="copyright">Copyright © <?php echo date("Y"); ?> by <a href="https://www.services-peps.fr/" target="_blank">PEPS</a><span>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<?php

wp_enqueue_script( 'sellesfrancais-menu', get_template_directory_uri() .'/js/menu.js', array(), null, true);

?>
<?php wp_footer(); ?>
</body>
</html>