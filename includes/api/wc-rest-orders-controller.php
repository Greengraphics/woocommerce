<?php
/**
 * REST API Orders controller
 *
 * Handles requests to the /orders endpoint.
 *
 * @author   WooThemes
 * @category API
 * @package  WooCommerce/API
 * @since    2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * REST API Orders controller class.
 *
 * @package WooCommerce/API
 * @extends WC_REST_Posts_Controller
 */
class WC_REST_Orders_Controller extends WC_REST_Posts_Controller {

	/**
	 * Route base.
	 *
	 * @var string
	 */
	protected $rest_base = 'orders';

	/**
	 * Post type.
	 *
	 * @var string
	 */
	protected $post_type = 'shop_order';

	/**
	 * Register the routes for coupons.
	 */
	public function register_routes() {

	}
}