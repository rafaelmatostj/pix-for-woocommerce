<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<div class="error inline">
	<p><strong><?php _e( 'Pix Desabilitado', 'woocommerce-pix' ); ?></strong>: <?php printf( __( 'Moeda <code>%s</code> não suportada. É aceito apenas BRL', 'woocommerce-pix' ), get_woocommerce_currency() ); ?>
	</p>
</div>
