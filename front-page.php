<?php
/**
 *
 *
 * @package TuTema
 */

get_header();
?>

<main id="primary" class="site-main">

    <section class="hero">
        <div class="container">
            <h1>Bienvenido a mi sitio web</h1>
            <p> Página de inicio </p>
            <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="button">Ir al Blog</a>
        </div>
    </section>
 
    </section>
    <section class="featured-content">
        <div class="container">
            <h2>Contenido Destacado</h2>
            <div class="featured-items">
                <div class="item">
                    <h3>Camiseta 1 </h3>
                    <p>Camiseta con estampado variado</p>
                </div>
                <div class="item">
                    <h3>camiseta 2 </h3>
                    <p>Camiseta con estampado variado</p>
                    
                </div>
                <div class="item">
                    <h3>camiseta 3</h3>
                    <p>Camiseta con estampado variado</p>
                    
                </div>
            </div>
        </div>
    </section>

    </main><?php
get_footer();