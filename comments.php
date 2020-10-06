<?php
if ( have_comments() ) : ?>
	<h3><?php comments_number('', '1 komentarz', '(% komentarze/y)' );?></h3>

	<ul class="commentlist">
		<?php wp_list_comments(); ?>
	</ul>
	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>
<?php else : // this is displayed if there are no comments so far ?>
	<?php if ( comments_open() ) : ?>
		<p class="italic">Skomentuj ten wpis jako pierwszy!</p>
<?php 	else : ?>
		<p class="italic">Komentowanie tego wpisu zostało zamknięte!</p>
        <style>
            .must-log-in {
                display: none !important;
            }
        </style>
<?php	
	endif;
endif; 
if (is_user_logged_in())
{    
             $custom_args = array(
               'label_submit'=>'Dodaj komentarz',
               'title_reply'=>'Dodaj komentarz',
                'title_reply_to'    => __( 'Odpowiedz: %s' ),
                'cancel_reply_link' => "Anuluj",
                
);
    
    comment_form($custom_args);
    
}
else
{
    echo '<p class="must-log-in">' .  sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>';
    
    ?>
     <style>
            .reply {
                display: none !important;
            }
    </style>
    <?php
}

?>