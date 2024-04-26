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
                        Any questions?
                    </h2>
                    <p>
                        Use the form below to get in touch with us.
                    </p>
                </div>
                <form action="#" class="contacts__form form-contacts">
                    <div class="form-contacts__wrap">
                        <input autocomplete="off" type="text" name="full_name" placeholder="Your full name *" class="form-contacts__input input" />
                        <input autocomplete="off" type="text" name="email" placeholder="Write your email here *" class="form-contacts__input input" />
                    </div>
                    <input autocomplete="off" type="text" name="phone" placeholder="Phone number" class="form-contacts__input input" />
                    <input autocomplete="off" type="text" name="subject" placeholder="Write your subject here" class="form-contacts__input input" />
                    <input autocomplete="off" type="text" name="message" placeholder="Write your message here *" class="form-contacts__input input" />
                    <button type="submit" class="form-contacts__button button">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </section>
    <section class="contact-page__shops shops">
        <div class="shops__container">
            <div class="shops__img">
                <picture><source srcset="img/contacts/image_1.webp" type="image/webp"><img src="img/contacts/image_1.jpg" alt="Picture" /></picture>
            </div>
            <div class="shops__info info-contacts">
                <div class="info-contacts__head head-contacts">
                    <h2 class="head-contacts__title title title_m">
                        Our stores
                    </h2>
                    <p>
                        You can also directly buy products from our
                        stores.
                    </p>
                </div>
                <div class="info-contacts__body">
                    <div class="info-contacts__item">
                        <h3 class="info-contacts__title title title_s">
                            USA
                        </h3>
                        <p>
                            730 Glenstone Ave 65802, Springfield, US
                        </p>
                        <p>
                            <a href="tel:+12322233344">+123 222 333 44</a>
                        </p>
                        <p>
                            <a href="tel:+12366677788">+123 666 777 88</a>
                        </p>
                        <p>
                            <a target="_blank" href="mailto:ministore@yourinfo.com">ministore@yourinfo.com</a>
                        </p>
                    </div>
                    <div class="info-contacts__item">
                        <h3 class="info-contacts__title title title_s">
                            France
                        </h3>
                        <p>
                            13 Rue Montmartre 75001, Paris, France
                        </p>
                        <p>
                            <a href="tel:+12322233344">+123 222 333 44</a>
                        </p>
                        <p>
                            <a href="tel:+12366677788">+123 666 777 88</a>
                        </p>
                        <p>
                            <a target="_blank" href="mailto:ministore@yourinfo.com">ministore@yourinfo.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();