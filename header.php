<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="promptのlpサイト">
  <?php wp_head(); ?>
</head>

<body class="c-bk_main">
  <?php /*wp_body_open(); */?>
  <header class="l-header c-flex--justBetween p-header u-width--100vw u-disp_noneblock">
    
    <h1 class="c-bk_spheader u-txt_color1 u-txt_size10b u-m_ml16 l-header_logo u-m_my10">
      <p class="u-m_mb7">あなたの街のLINEコーディネーター</p>
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/source/logo.webp" alt="プロンプロゴ" class="l-header_logoimg">
    </h1>
        
  </header>