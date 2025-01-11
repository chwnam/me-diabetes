<?php
/**
 * 엄청 간단한 혈당 입력 폼이
 */
?>

<form class="" method="post" action="<?php echo admin_url( 'admin-post.php' ); ?>">
    <fieldset class="">
        <legend>혈당 측정</legend>
        <p>
            <label for="_bst_datetime">시간</label>
            <input id="_bst_datetime" name="_bst_datetime" type="datetime-local" value="" />
        </p>
        <p>
            <label for="_bst_value">혈당치</label>
            <input id="_bst_value" name="_bst_value" type="number" value="" />
        </p>
        <p>
            <label for="_bst_comment">변명의 여지는?</label>
            <textarea id="_bst_comment" name="_bst_comment" rows="3" cols="40"></textarea>
        </p>
    </fieldset>
    <p>
        <input id="_bst_submit" name="_bst_submit" class="btn" type="submit" value="제출" />
        <input name="action" type="hidden" value="me_diabetes_bst_store" />
		<?php wp_nonce_field( 'bst_store', '_bst_nonce' ); ?>
    </p>
</form>

<div class="">
    <h3>최근 혈당치</h3>
	<?php $posts = get_posts( array(
		'meta_key'      => '_bst_timestamp',
		'numberofposts' => 20,
		'orderby'       => 'meta_value',
		'order'         => 'DESC',
		'post_type'     => 'me_diabetes',
	) ); ?>
    <table class="">
        <thead>
        <tr>
            <th>기록일자</th>
            <th>수치</th>
            <th>메모</th>
        </tr>
        </thead>
        <tbody>
		<?php if ( ! empty( $posts ) ): ?>
			<?php foreach ( $posts as $post ): ?>
                <tr>
                    <td><?php echo esc_html( wp_date( 'Y-m-d H:i', get_post_meta( $post->ID, '_bst_timestamp', true ) ) ); ?></td>
                    <td><?php echo esc_html( get_post_meta( $post->ID, '_bst_value', true ) ); ?></td>
                    <td><?php echo esc_html( $post->post_content ); ?></td>
                </tr>
			<?php endforeach; ?>
		<?php else: ?>
            <tr>
                <td colspan="3">기록이 없어요.</td>
            </tr>
		<?php endif; ?>
        </tbody>
    </table>
</div>
