<?php
/** 
 * Template Name: Contacts
 */

get_header();
?>

    <section class="contact-page__contacts contacts">
        <div class="contacts__container">
            <div class="contacts__info info-contacts">
                <div class="info-contacts__head head-contacts">
                    <h2 class="head-contacts__title title title_m">
                        <?php esc_html( the_field( 'contacts_title' ) ) ?>
                    </h2>
                    <?php if ( get_field( 'contacts_descr' ) ) : ?>
                    <p>
                        <?php esc_html( the_field( 'contacts_descr' ) ) ?>
                    </p>
                    <?php endif; ?>
                </div>
                <div class="info-contacts__body">
                    <div class="info-contacts__item">
                        <h3 class="info-contacts__title title title_s">
                            <?php esc_html( the_field( 'contacts-office_title' ) ) ?>
                        </h3>
                        <p>
                            <?php esc_html( the_field( 'contacts-office_address' ) ) ?>
                        </p>
                        <p>
                            <?php esc_html( the_field( 'contacts-office_phone-1' ) ) ?>
                        </p>
                        
                            <p>
                                <?php esc_html( the_field( 'contacts-office_phone-2' ) ) ?>
                            </p>
                        
                        <p>
                            <a target="_blank" href="mailto:<?php esc_html( the_field( 'contacts-office_email' ) ) ?>"><?php esc_html( the_field( 'contacts-office_email' ) ) ?></a>
                        </p>
                    </div>
                    <div class="info-contacts__item">
                        <h3 class="info-contacts__title title title_s">
                            <?php esc_html( the_field( 'contacts-management_title' ) ) ?>
                        </h3>
                        <p>
                            <?php esc_html( the_field( 'contacts-management_address' ) ) ?>
                        </p>
                        <p>
                            <?php esc_html( the_field( 'contacts-management_phone-1' ) ) ?>
                        </p>
                        <p>
                            <?php esc_html( the_field( 'contacts-management_phone-2' ) ) ?>
                        </p>
                        <p>
                            <a target="_blank" href="mailto:<?php esc_html( the_field( 'contacts-management_email' ) ) ?>"><?php esc_html( the_field( 'contacts-management_email' ) ) ?></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="contacts__feedback">
                <div class="contacts__head head-contacts">
                    <h2 class="head-contacts__title title title_m">
                        <?php esc_html( the_field( 'feedback_title' ) ) ?>
                    </h2>
                    <p>
                        <?php esc_html( the_field( 'feedback_descr' ) ) ?>
                    </p>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="c9c176e" title="Feedback form"]'); ?>                
            </div>
        </div>
    </section>
    <section class="contact-page__shops shops">
        <div class="shops__container">
            <div class="shops__img">
                <?php echo wp_get_attachment_image( get_field( 'shops_image' ), 'full'); ?>
            </div>
            <div class="shops__info info-contacts">
                <div class="info-contacts__head head-contacts">
                    <h2 class="head-contacts__title title title_m">
                        <?php esc_html( the_field( 'shops_title' ) ); ?>
                    </h2>
                    <p>
                        <?php esc_html( the_field( 'shops_descr' ) ); ?>
                    </p>
                </div>
                <div class="info-contacts__body">
                    <?php 
                    $i = 1;
                    while ( ($store = get_field( "store-{$i}" )) !== null && $store !== '' ) :
                        ?>
                            <div class="info-contacts__item">
                                <h3 class="info-contacts__title title title_s">
                                    <?php echo esc_html( $store['title'] ) ?>
                                </h3>
                                <p>
                                <?php echo esc_html( $store['address'] ) ?>
                                </p>
                                <p>
                                    <a href="tel:<?php echo esc_attr( $store['phone-1'] ) ?>"><?php echo esc_html( $store['phone-1'] ) ?></a>
                                </p>
                                <p>
                                    <a href="tel:<?php echo esc_attr( $store['phone-2'] ) ?>"><?php echo esc_html( $store['phone-2'] ) ?></a>
                                </p>
                                <p>
                                    <a target="_blank" href="mailto:<?php echo esc_attr( $store['email'] ) ?>"><?php echo esc_html( $store['email'] ) ?></a>
                                </p>
                            </div>
                        <?php
                        ++$i;
                    endwhile;
                    ?>                    
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();