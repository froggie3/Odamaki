<?php
// サイドバーの判定
// index.php が表示中
if ( is_home() ) {
	if ( is_active_sidebar( 'blog_right_1' ) ) {
		// 最近の投稿を含めない
		dynamic_sidebar( 'blog_right_1' );
	}
}
// index.php でない
if ( !is_home() ) {
	if ( is_front_page() ) {
		if ( is_active_sidebar( 'blog_right_3_front_page' ) ) {
			dynamic_sidebar( 'blog_right_3_front_page' );
		}
	} elseif ( is_page() ) {
		if ( is_active_sidebar( 'blog_right_page' ) ) {
			dynamic_sidebar( 'blog_right_page' );
		}
	} else {
		if ( is_active_sidebar( 'blog_right_2' ) ) {
			// 最近の投稿を含めたサイドバー表示
			dynamic_sidebar( 'blog_right_2' ); 
		}
	}
}