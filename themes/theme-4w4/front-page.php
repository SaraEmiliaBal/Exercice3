<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-4W4
 */

get_header();
?>

<section class="carrouselDeux">
	<div><img src="https://s2.svgbox.net/illlustrations.svg?ic=wacom-tablet&color=000000" width="32" height="32"></div>
	<div><img src="https://s2.svgbox.net/illlustrations.svg?ic=macbook&color=000000" width="32" height="32"></div>
	<div><img src="https://s2.svgbox.net/illlustrations.svg?ic=installing&color=000000" width="32" height="32"></div>
	<div><img src="https://s2.svgbox.net/illlustrations.svg?ic=gaming-mouse&color=000000" width="32" height="32"></div>
	<div><img src="https://s2.svgbox.net/illlustrations.svg?ic=coding&color=000000" width="32" height="32"></div> 
</section>
<section class="choixCarrouselDeux">
	<!-- CHANGEMENT DES BUTTON EN BUTTON RADIO -->
	<a> <input type="radio" id="un" name="case" value="1"> </a>
	<a> <input type="radio" id="deux" name="case" value="2"> </a>
	<a> <input type="radio" id="trois" name="case" value="3"> </a>
	<a> <input type="radio" id="quatre" name="case" value="4"> </a>
    <a> <input type="radio" id="cinq" name="case" value="5"> </a>
</section>

//////////////////////////////////////////////// 
	FRONT-PAGE.PJP
///////////////////////////////////////////////

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

            <section class="liste-cours">

                <?php
                /* Start the Loop */
                $precedent = "XXXXXXX";
                while ( have_posts() ) :
                    the_post();
                    convertir_en_tableau($tPropriété);
                    if($precedent != $tPropriété['$typeCours']): ?>
                        <?php if($precedent != "XXXXXXX"): ?>
                            </section>
                        <?php endif ?> 
                            <section>
                    <?php endif ?>
                    
                <?php 
                    $precedent = $tPropriété['$typeCours'];
                endwhile; ?>
            </section>
        <?php endif; ?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

function convertir_en_tableau(&$tPropriété){
    $titre_grand = get_the_title();
    $tPropriété['session']   = substr($titre_grand, 4,1);
    $tPropriété['nbHeure']   = substr($titre_grand, -4,3);
    $tPropriété['titre']     = substr($titre_grand, 8,-6);
    $tPropriété['sigle']     = substr($titre_grand, 0,7);
    $tPropriété['typeCours'] = get_field('type_de_cours'); 
}