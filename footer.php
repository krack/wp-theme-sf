

</div> <!-- /.container -->
<?php 

if(function_exists("shf_login_block")){
    shf_login_block();
}

?>
<footer class="blog-footer">
    <hr />
    <span class="copyright">Copyright © <?php echo date("Y"); ?> Stud Book Selle Français | Tous droits réservés | <a href="/mention-legales">Mentions légales</a> | Réalisé par <a href="https://www.services-peps.fr/" target="_blank">PEPS</a><span>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<?php wp_footer(); ?>
</body>
</html>