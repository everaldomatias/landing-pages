<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header class="main-header">
		<div class="container">
			<img src="<?php echo LANDING_PAGES_PATH; ?>public/assets/images/logo.png" alt="<?php bloginfo( 'name' ); ?>">
		</div>
	</header>

	<div id="hero" class="hero">
		<div class="container">
			<h1>Seu escritório completo em um só lugar.</h1>
			<span>Tam sit amet tellus in eros faucibus tempor quis sed ante. Nam id iaculis leo. Aliquam erat volutpat. Integer fringilla dui vel quam sodales suscipit. Proin aliquam pharetra pretium. Phasellus tincidunt elit ut</span>
			<a class="button" href="#contato">Quero saber mais >></a>
		</div>
	</div>

	<div id="contato" class="contact">
		<div class="container">
			<h2>Fale com nossa equipe</h2>
			<span>Com apenas um clique entre em contato com nossos atendentes para dúvidas ou orçamentos.</span>
			<a class="button" href="#whatsapp">WhatsApp</a>
		</div>
	</div>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">

                <?php while ( have_posts() ) :
                    the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
