<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="promptのlpサイト">
  <?php wp_head(); ?>
</head>

<body>
  <?php /*wp_body_open(); */?>
  <header class="l-header c-flex--justBetween p-header u-width--100vw">
    <a  class="c-logo__parent" href="<?php echo esc_url(home_url('/')); ?>">
      <article class="c-logo">
        <h1 class="c-flex--dirColumn-alignCenter name">
          <img src="<?php echo esc_url(
                      get_template_directory_uri()
                    ); ?>/img/icon_wakaba_sp--header.png?<?php echo filemtime(
                                                            get_template_directory() . '/img/icon_wakaba_sp--header.png'
                                                          ); ?>" alt="プロンプ" class="img is-mp">
        </h1>
      </article>
    </a>
    <article class="p-nav">
      

    </article>

  </header>