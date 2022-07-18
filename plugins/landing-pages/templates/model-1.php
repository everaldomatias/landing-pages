<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
// Get values and data

$seller_id        = get_the_ID();
$email            = get_post_meta( $seller_id, 'email_lp', true );
$whatsapp         = get_post_meta( $seller_id, 'whatsapp_lp', true );
$whatsapp_message = get_post_meta( $seller_id, 'whatsapp_message_lp', true );

$whatsapp_link = '';

if ( ! empty( $whatsapp ) ) {
	if ( lp_what_the_browser( 'Firefox' ) ) {
		$whatsapp_link = 'https://web.whatsapp.com/send?phone=';
	} else {
		$whatsapp_link = 'https://wa.me/';
	}
	
	$whatsapp_link .= esc_attr( $whatsapp );
	
	if ( ! empty( $whatsapp_message ) ) {
		$whatsapp_message = urlencode( $whatsapp_message );
		$whatsapp_message = str_replace( '+', '%20', $whatsapp_message );
		$whatsapp_link .= '?text=' . esc_attr( $whatsapp_message );
	}
}

?>

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
			<a class="button" href="#formulario">Quero saber mais >></a>
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

	<div id="produtos" class="products">
		<div class="container">
			<h2>Produtos</h2>
			<span>Tam sit amet tellus in eros faucibus tempor quis sed ante. Nam id iaculis leo. Aliquam erat volutpat. Integer fringilla dui vel quam sodales suscipit.s</span>
		</div>

		<div class="grid grid-gallery">
			<?php
			$gallery_array = range( 0, 22 );
			shuffle( $gallery_array );
			$gallery_array = array_slice( $gallery_array, 0, 8 );

			foreach ( $gallery_array as $item ) : ?>
				<div class="item" style="background-image: url(<?php echo LANDING_PAGES_PATH . 'public/assets/images/produtos/' . $item . '.jpg' ; ?>)"></div>
			<?php endforeach; ?>
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
				<?php if ( $whatsapp_link ) : ?>
					<a class="button" target="_blank" href="<?php echo esc_url( $whatsapp_link ); ?>">Consulte nossos prazos</a>
				<?php else : ?>
					<a class="button" href="#formulario">Consulte nossos prazos</a>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<div id="clientes" class="customers">
		<div class="container">
			<h2>Clientes</h2>
			<ul class="gallery">
				<li><img src="<?php echo LANDING_PAGES_PATH; ?>public/assets/images/logo-gol.png" alt="GOL Linhas Aéreas Inteligentes"></li>
				<li><img src="<?php echo LANDING_PAGES_PATH; ?>public/assets/images/logo-oab.png" alt="OAB | Ordem dos Advogados do Brasil"></li>
				<li><img src="<?php echo LANDING_PAGES_PATH; ?>public/assets/images/logo-kroton.jpg" alt="Kroton Educacional"></li>
				<li><img src="<?php echo LANDING_PAGES_PATH; ?>public/assets/images/logo-estacio.png" alt="Faculdade Estácio - Graduação Estácio"></li>
				<li><img src="<?php echo LANDING_PAGES_PATH; ?>public/assets/images/logo-anhanguera.png" alt="Anhanguera Educacional"></li>
				<li><img src="<?php echo LANDING_PAGES_PATH; ?>public/assets/images/logo-uniasselvi.png" alt="UNIASSELVI - Graduação e pós-graduação presencial e EAD"></li>
				<li><img src="<?php echo LANDING_PAGES_PATH; ?>public/assets/images/logo-trasmontano.png" alt="Trasmontano Saúde"></li>
				<li><img src="<?php echo LANDING_PAGES_PATH; ?>public/assets/images/logo-shark.jpg" alt="Grupo SHARK"></li>
				<li><img src="<?php echo LANDING_PAGES_PATH; ?>public/assets/images/logo-spdm.jpg" alt="SPDM - Associação Paulista para o Desenvolvimento da Medicina"></li>
				<li><img src="<?php echo LANDING_PAGES_PATH; ?>public/assets/images/logo-pitagoras.jpg" alt="Faculdade Pitágoras"></li>
			</ul>
		</div>
	</div>

	<div id="contato" class="contact">
		<div class="container">
			<h2>Fale com nossa equipe</h2>
			<span>Com apenas um clique entre em contato com nossos atendentes para dúvidas ou orçamentos.</span>
			<?php if ( $whatsapp_link ) : ?>
				<a class="button" target="_blank" href="<?php echo esc_url( $whatsapp_link ); ?>">WhatsApp</a>
			<?php else : ?>
				<a class="button" href="#formulario">Consulte nossos prazos</a>
			<?php endif; ?>
		</div>
	</div>

	<div id="formulario" class="form">
		<div class="container">
			<h2>Nos envie uma mensagem</h2>
			<span>Nossa equipe responderá o mais breve possível, esclarecendo suas dúvidas ou atendendo sua solicitação.</span>
			<form action="<?php the_permalink(); ?>" method="post" class="ajax" enctype="multipart/form-data">
				<input type="text" id="nome" name="nome" placeholder="Nome*" required>
				<input type="email" id="email" name="email" placeholder="E-mail*" required>
				<input type="text" id="whatsapp" name="whatsapp" placeholder="WhatsApp (com DDD)*" required>
				<textarea name="mensagem" id="message" placeholder="Mensagem*" required></textarea>
				<input type="hidden" id="seller" name="seller" value="<?php the_title(); ?>">
				<input type="submit" class="button submit-contact" id="submit-contact" value="Enviar mensagem">
			</form>
			<div class="response-form"></div>
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

	<?php if ( $whatsapp_link ) : ?>
		<div class="whatsapp-button">
            <a target="_blank" href="<?php echo $whatsapp_link; ?>">
                <img src="<?php echo LANDING_PAGES_PATH; ?>public/assets/images/whatsapp.svg" />
            </a>
        </div>
	<?php endif; ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
