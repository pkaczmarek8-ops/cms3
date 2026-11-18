<?php
    /**
     * Title: Hero z wezwaniem do działania
     * Slug: budspec/hero-cta
     * Categories: featured, banner
     * Description: Sekcja otwierająca: nagłówek H1, korzyść i przycisk CTA.
     */
    $cta = esc_html__( 'Poproś o wycenę', 'budspec' );
?>
<!-- wp:cover {"url":"https://cautious-giggle-jr9jw4gj45v52qqp5-8080.app.github.dev/wp-content/uploads/2026/11/99131556_1b49215777_o-1024x768.jpg","id":27,"dimRatio":50,"customOverlayColor":"#0b5d71","isUserOverlayColor":true,"sizeSlug":"large","metadata":{"patternName":"core/block/35","name":"Hero CTA BudSpec"},"layout":{"type":"constrained"}} -->
    div class="wp-block-cover"><img class="wp-block-cover__image-background wp-image-27 size-large" alt="" src="https://cautious-giggle-jr9jw4gj45v52qqp5-8080.app.github.dev/wp-content/uploads/2026/11/99131556_1b49215777_o-1024x768.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim" style="background-color:#0b5d71"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1} -->
    <h1 class="wp-block-heading"><?php esc_html_e( 'Kompleksowe remonty, wykończenia i budowa domów', 'budspec' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
    <p><?php esc_html_e( 'Ekspresowa realizacja Twoich zleceń. Sprawdź, co możemy dla Ciebie zrobić.', 'budspec' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button -->
    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" rel="/kontakt/"><code><?php echo $cta; ?></code></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->
