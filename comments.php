<?php
 
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>
 
<div id="comments" class="comments-area">
 
    <?php if ( have_comments() ) : ?>
        <div>
            <h2 class="comments-title"><?php echo 'コメント'; ?></h2>
            <div class="comments-number">
                <?php echo get_comments_number(); ?>
            </div>
        </div>
        <ol class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'       => 'ol',
                    'type'        => 'comment',
                    'callback' => 'better_comments',
                    'avatar_size' => 64,
                ) );
            ?>
        </ol><!-- .comment-list -->
 
        <?php
            // Are there comments to navigate through?
            if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        ?>
        <nav class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'twentythirteen' ); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentythirteen' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentythirteen' ) ); ?></div>
        </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation ?>
 
        <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php echo 'コメントは閉じられています。'; ?></p>
        <?php endif; ?>
 
    <?php endif; // have_comments() ?>
 
    <?php comment_form( 
        [
            'fields' => [
                'author' => '
                <div class="comment-form-author">
                    <div class="wrap-label">
                        <label for="author">名前 *</label>
                    </div>
                    <input id="author" name="author" type="text" placeholder="名前" maxlength="245" />
                </div>',
                'email' => '
                <div class="comment-form-email">
                    <div class="wrap-label">
                        <label for="email">メールアドレス *</label>
                        <p style="font-size: .8em; margin-top: .5em;">メールアドレスが公開されることはありません。</p>
                    </div>
                    <input id="email" name="email" type="text"  maxlength="100" placeholder="メールアドレス" aria-describedby="email-notes" />
                </div>',

                'cookies' => '
                <div class="comment-form-cookies-consent">
                    <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" />
                    <label for="wp-comment-cookies-consent">入力内容を記憶する</label>
                </div>'
            ],
            'comment_field' => '
            <div class="comment-form-comment">
                <div class="wrap-label">
                    <label for="comment">コメント *</label>
                </div>
                <textarea id="comment" name="comment" maxlength="65525"></textarea>
            </div>',
            'logged_in_as' => '
            <div class="logged-in-as">
                <span>'. $user_identity. 'としてログイン中です。</span>
                <a class="comment-is-logged-in" href="'. wp_logout_url(). ' ">ログアウト</a>
            </div>
            ',
            'comment_notes_before' => '<p style="font-size: .8em; margin-top: .5em; margin-bottom: 2rem;">* が付いている欄は必須項目です。</p>',
            'cancel_reply_before' => '',
            'cancel_reply_after' => '',
            'cancel_reply_link' => '取り消し',
            'title_reply_before' => '<div id="reply-title" class="comment-reply-title">',
            'title_reply_after' => '</div>',
            'title_reply' => 'コメントする',
            'label_submit' => 'コメントを送信',
        ] ); ?>
 
</div><!-- #comments -->