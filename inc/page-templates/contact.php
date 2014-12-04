    <div class="container main-content">
        <div class="row">
            <div id="content">
                <div class="message">
                    <?php if( !empty( $errors ) ): ?>
                        <span class="error-message"><?php _e( 'Please enter all required fields.' ) ?></span>
                    <?php elseif( $emailSent ):  ?>
                        <span class="success-message"><?php echo $success_send_message ?></span>
                    <?php endif; ?>
                </div>
                <?php if(have_posts()) : ?>
                    <?php the_post() ?>
                    <div id="post-<?php the_ID() ?>" class="post">
                        <div class="entry-content">
                            <?php the_content(); ?>

                            <form action="<?php the_permalink(); ?>" id="contactForm" method="post">
                                <ul>
                                    <li class="fields-set cols_set3">
                                        <div class="field first col_1">
                                            <input type="text" name="contactName" onfocus="formInputCleaner(this, '<?php _e( 'Enter Your Name *...' ) ?>', true)" onblur="formInputCleaner(this, '<?php _e( 'Enter Your Name *...' ) ?>')" id="contactName" value="<?php echo $current_user->display_name ? $current_user->display_name : __( 'Enter Your Name *...' ) ?>" class="required text" />
                                        </div>
                                        <div class="field col_2">
                                            <input type="text" name="email" onfocus="formInputCleaner(this, '<?php _e( 'Enter Your Email *...' ) ?>', true)" onblur="formInputCleaner(this, '<?php _e( 'Enter Your Email *...' ) ?>')" id="email" value="<?php echo $current_user->user_email ? $current_user->user_email : __( 'Enter Your Email *...' ) ?>" class="required text" />
                                        </div>
                                        <div class="field col_3 last">
                                            <input type="text" name="priority" onfocus="formInputCleaner(this, '<?php _e( 'Priority...' ) ?>', true)" onblur="formInputCleaner(this, '<?php _e( 'Priority...' ) ?>')" id="priority" value="<?php _e('Priority...') ?>" class="text" />
                                        </div>
                                    </li>
                                    <li class="fields-set">
                                        <div class="field first">
                                            <input type="text" name="subject" onfocus="formInputCleaner(this, '<?php _e( 'Subject...' ) ?>', true)" onblur="formInputCleaner(this, '<?php _e( 'Subject...' ) ?>')" id="subject" value="<?php _e('Subject...') ?>" class="text" />
                                        </div>
                                    </li>

                                    <li class="fields-set">
                                        <div class="field first">
                                            <textarea name="comments" onfocus="formInputCleaner(this, '<?php _e( 'Message *...' ) ?>', true)" onblur="formInputCleaner(this, '<?php _e( 'Message *...' ) ?>')" id="commentsText" class="required textarea" rows="10" cols="40"><?php _e( 'Message *...' ) ?></textarea>
                                        </div>
                                    </li>
                                </ul>
                                <p class="button-controls">
                                    <button type="submit"  class="button medium">
                                        <span><?php _e( 'Send email' ) ?></span>
                                    </button>
                                </p>
                                <input type="hidden" name="submitted" id="submitted" value="true" />
                            </form>

                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <div id="sidebar" class="">
                <?php get_sidebar(); ?>
            </div>

        </div>
    </div>