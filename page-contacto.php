<?php
/**
 * 
 *
 * @package  gggg
 */

get_header();
?>

<main id="primary" class="site-main">

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
        </header><div class="entry-content">
            <?php
            the_content();
            ?>

            <div class="contact-form">
                <h2>Formulario de Contacto</h2>
                <form action="#" method="post">
                    <p>
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" required>
                    </p>
                    <p>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </p>
                    <p>
                        <label for="mensaje">Mensaje:</label>
                        <textarea id="mensaje" name="mensaje" rows="5" required></textarea>
                    </p>
                    <p>
                        <button type="submit">Enviar Mensaje</button>
                    </p>
                </form>
                <p class="form-notice">Este es un formulario de contacto.</p>
            </div></div><?php if ( get_edit_post_link() ) : ?>
            <footer class="entry-footer">
                <?php
                edit_post_link(
                    sprintf(
                        wp_kses(
                            __( 'Edit <span class="screen-reader-text">%s</span>', 'tutema' ),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        wp_kses_post( get_the_title() )
                    ),
                    '<span class="edit-link">',
                    '</span>'
                );
                ?>
            </footer><?php endif; ?>
    </article></main><?php
get_footer();