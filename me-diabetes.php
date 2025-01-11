<?php
/**
 * Plugin Name: Me Diabetes
 * Description: 간단한 혈당 측정치 기록
 * Version:     0.1.0
 */

use JetBrains\PhpStorm\NoReturn;

if ( ! function_exists( 'me_diabetes_init' ) ) {
	function me_diabetes_init(): void {
		if ( ! post_type_exists( 'me_diabetes' ) ) {
			register_post_type( 'me_diabetes', array(
				'label'        => 'BSTs',
				'public'       => true,
				'show_in_rest' => false,
			) );
		}

		register_meta( 'post', '_bst_timestamp', array(
			'default'           => 0,
			'object_subtype'    => 'me_diabetes',
			'sanitize_callback' => 'absint',
			'show_in_rest'      => false,
			'single'            => true,
			'type'              => 'integer',
		) );

		register_meta( 'post', '_bst_value', array(
			'default'           => 0,
			'object_subtype'    => 'me_diabetes',
			'sanitize_callback' => 'absint',
			'show_in_rest'      => false,
			'single'            => true,
			'type'              => 'integer',
		) );
	}
}

add_action( 'init', 'me_diabetes_init' );

if ( ! function_exists( 'me_diabetes_do_shortcode' ) ) {
	function me_diabetes_do_shortcode(): string {
		ob_start();
		include __DIR__ . '/inc/form.php';

		return ob_get_clean();
	}
}

add_shortcode( 'me-diabetes', 'me_diabetes_do_shortcode' );

if ( ! function_exists( 'me_diabetes_bst_store' ) ) {
	#[NoReturn] function me_diabetes_bst_store(): void {
		check_admin_referer( 'bst_store', '_bst_nonce' );

		if ( ! isset( $_POST['_bst_submit'] ) ) {
			return;
		}

		$comment  = sanitize_text_field( $_POST['_bst_comment'] ?? '' );
		$datetime = sanitize_text_field( $_POST['_bst_datetime'] ?? '' );
		$value    = absint( $_POST['_bst_value'] ?? '0' );

		// Convert datetime to timestamp
		$datetime = date_create_immutable( $datetime, wp_timezone() );
		if ( ! $datetime ) {
			wp_die( '올바른 날짜를 입력행요.' );
		}

		// Value check
		if ( $value < 0 ) {
			wp_die( '혈당치 입력이 잘못되었어요.' );
		}

		$post_id = wp_insert_post( array(
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'post_content'   => $comment,
			'post_name'      => 'bst-' . $datetime->getTimestamp(),
			'post_status'    => 'publish',
			'post_title'     => 'BST' . ' ' . wp_date( 'Y년 m월 d일 a h:i', $datetime->getTimestamp() ),
			'post_type'      => 'me_diabetes',
		) );

		if ( is_wp_error( $post_id ) ) {
			wp_die( $post_id );
		}

		add_post_meta( $post_id, '_bst_timestamp', $datetime->getTimestamp() );
		add_post_meta( $post_id, '_bst_value', $value );

		$message = wp_date( 'Y년 m월 d일 a h:i', $datetime->getTimestamp() ) . ' / ' . $value . ' 입력 완료.';
		$referer = wp_get_referer();

		echo '<script>alert("' . esc_js( $message ) . '");location.href="' . esc_js( $referer ) . '";</script>';
		exit;
	}
}

add_action( 'admin_post_me_diabetes_bst_store', 'me_diabetes_bst_store' );