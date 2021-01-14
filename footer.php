</div> <!-- /.container -->
<?php 

if(function_exists("shf_login_block")){
    shf_login_block();
}

?>
<footer class="blog-footer">
    <span class="copyright">Copyright © <?php echo date("Y"); ?> Stud Book Selle Français | Tous droits réservés | <a href="/mention-legales">Mentions légales</a> | © photos : <a href="https://www.ouest-image.com/" target="_blank">Les Garennes</a> | Réalisé par <a href="https://www.services-peps.fr/" target="_blank">PEPS</a><span> | Site réalisé grâce au soutien du <a href="https://www.fondseperon.com/" target="_blank"><img alt="Fonds Éperon" src="/wp-content/themes/sellesfrancais/assets/images/Fonds Éperon logo.png" /></a> et de l'<a href="https://www.ifce.fr/" target="_blank"><img alt="IFCE" src="/wp-content/themes/sellesfrancais/assets/images/logo-ifce-mobile.png" /></a>.
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<?php wp_footer(); ?>
</body>
</html>