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

	<div id="diferenciais" class="features">
		<div class="container">
			<h3>Compondo as melhores propostas, do projeto a escolha dos produtos, da logística de transporte, e entrega e montagem, culminando com um pós venda cuidadoso e presente.</h3>

			<div class="columns">
				<div class="column">
					<img src="<?php echo LANDING_PAGES_PATH; ?>public/assets/images/icon-attendance.png" alt="Atendimento personalizado">
					<h3>Atendimento<br>personalizado</h3>
					<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</span>
				</div>
				<div class="column">
					<img src="<?php echo LANDING_PAGES_PATH; ?>public/assets/images/icon-price.png" alt="Preço">
					<h3>Preço</h3>
					<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</span>
				</div>
				<div class="column">
					<img src="<?php echo LANDING_PAGES_PATH; ?>public/assets/images/icon-delivery.png" alt="Logística">
					<h3>Logística</h3>
					<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</span>
				</div>
			</div>
		</div>
	</div>

	<div id="escola" class="school">
		<div class="container">
			<h2>Móveis para escola</h2>
		</div>
		<div class="wrap-slider">
			<div class="container">
				<h3>Conheça nossa linha completa de móveis para ambiente escolar. Solicite nosso catálogo e conheça todos nossos produtos</h3>
				<div class="glide">
					<div class="glide__track" data-glide-el="track">
						<ul class="glide__slides">
							<li class="glide__slide"><img src="<?php echo LANDING_PAGES_PATH; ?>public/assets/images/escola-1.jpg" alt="Móveis para escola"></li>
							<li class="glide__slide"><img src="<?php echo LANDING_PAGES_PATH; ?>public/assets/images/escola-2.jpg" alt="Móveis para escola"> </li>
							<li class="glide__slide"><img src="<?php echo LANDING_PAGES_PATH; ?>public/assets/images/escola-3.jpg" alt="Móveis para escola"> </li>
							<li class="glide__slide"><img src="<?php echo LANDING_PAGES_PATH; ?>public/assets/images/escola-4.jpg" alt="Móveis para escola"> </li>
							<li class="glide__slide"><img src="<?php echo LANDING_PAGES_PATH; ?>public/assets/images/escola-5.jpg" alt="Móveis para escola"> </li>
							<li class="glide__slide"><img src="<?php echo LANDING_PAGES_PATH; ?>public/assets/images/escola-6.jpg" alt="Móveis para escola"> </li>
							<li class="glide__slide"><img src="<?php echo LANDING_PAGES_PATH; ?>public/assets/images/escola-7.jpg" alt="Móveis para escola"> </li>
							<li class="glide__slide"><img src="<?php echo LANDING_PAGES_PATH; ?>public/assets/images/escola-8.jpg" alt="Móveis para escola"> </li>
							<li class="glide__slide"><img src="<?php echo LANDING_PAGES_PATH; ?>public/assets/images/escola-9.jpg" alt="Móveis para escola"> </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="frete" class="shipping">
		<div class="container">
			<div class="description">
				<img class="icon" src="<?php echo LANDING_PAGES_PATH; ?>public/assets/images/icon-shipping.png" alt="Logística com frota própria">
				<h2>Logística com frota própria</h2>
				<span>Atendemos todo o território nacional com <b>agilidade</b>, <b>eficiência</b> e <b>segurança</b>.</span>
				<a class="button" href="#whatsapp">Consulte nossos prazos</a>
			</div>
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
