        </main>
        <footer>
            <h2>Fábio Freitas</h2>
            <div class="list-socials">
                <div class="single-social"><a href="<?php echo InfoVar::show('facebook'); ?>" target="_blank"><i class="fab fa-facebook-square"></i></a></div>
                <div class="single-social"><a href="<?php echo InfoVar::show('instagram'); ?>" target="_blank"><i class="fab fa-instagram"></i></a></div>
                <div class="single-social"><a href="<?php echo InfoVar::show('linkedin'); ?>" target="_blank"><i class="fab fa-linkedin"></i></a></div>
                <div class="single-social"><a href="<?php echo InfoVar::show('behance'); ?>" target="_blank"><i class="fab fa-behance"></i></a></div>
                
            </div>
        </footer>
    </body>
    <script src="<?php bloginfo('template_url'); ?>/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
    <?php wp_footer(); ?>
</html>