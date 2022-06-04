<?php
/*
Plugin Name: WP Symbol Wallet
Description: A simple symbol wallet with SSS Extension.
Author: curupo
Version: 0.1
*/

// Description
function admin_description()
{
  echo '<h1>WP Symbol Wallet</h1>';

  echo '<h2 class="h-margin">Usage</h2>';
  echo '<blockquote>';
  echo '<li><a href="https://www.google.com/chrome/">Google Chrome</a> and <a href="https://chrome.google.com/webstore/detail/sss-extension/llildiojemakefgnhhkmiiffonembcan">SSS extention</a> must be installed.</li>';
  echo '<li>Register your wallet address.</li>';
  echo "<li>Allow your site's domain. On the SSS Extention options screen.</li>";
  echo '</blockquote>';
  echo '<h2 class="h-margin">My Wallet</h2>';
  echo '<div class="wrapper">';
  echo '  <div class="account-card">';
  echo '    <h2>Account Info</h2>';
  echo '    <div class="container">';
  echo '      <div>Address :</div>';
  echo '      <div id="wallet-addr"></div>';
  echo '    </div>';
  echo '    <div class="container">';
  echo '      <div id="wallet-xym"></div>';
  echo '    </div>';
  echo '   </div>';
  echo '   <div class="sender-card">';
  echo '    <h2>Send</h2>';
  echo '    <div class="textfiled-wrapper">';
  echo '      <div class="label">To : </div>';
  echo '      <input type="text" id="form-addr" value="" />';
  echo '    </div>';
  echo '    <div class="textfiled-wrapper">';
  echo '      <div class="label">Amount : <b></b></div>';
  echo '      <input type="range" min="0" step="0.1" id="form-amount" />';
  echo '    </div>';
  echo '    <div class="textfiled-wrapper">';
  echo '      <div class="label">Message : </div>';
  echo '      <input type="text" id="form-message" />';
  echo '    </div>';
  echo '    <div class="textfiled-wrapper">';
  echo '      <div class="label">';
  echo '        <input type="button" onclick="handleSSS();" value="Sign with SSS"/>';
  echo '      </div>';
  echo '    </div>';
  echo '  </div>';
  echo '</div>';
  echo '<div class="wrapper">';
  echo '  <div class="tx-card">';
  echo '    <h2>Transactions</h2>';
  echo '    <div id="wallet-transactions"></div>';
  echo '  </div>';
  echo '</div>';
  echo '<script type="text/javascript" src="https://xembook.github.io/nem2-browserify/symbol-sdk-pack-1.0.3.js"></script>';
  echo '<script type="text/javascript" src="' . get_site_url() . '/wp-content/plugins/wp-symbol-wallet/script.js"></script>';
  echo '<link rel="stylesheet" href="' . get_site_url() . '/wp-content/plugins/wp-symbol-wallet/style.css" type="text/css">';
  echo '<h3 class="h-margin">Donate</h3>';
  echo '<p>Donations are welcome.</p>';
  echo '<blockquote>';
  echo '<li>Developer: <a href="https://github.com/curupo">curupo</a></li>';
  echo '<li>Wallet Address XYM to: NDAREPDYNBXQECIIOW7QDMESDDMA6NARURCR6KA</li>';
  echo '</blockquote>';
}

// Wordpress Admin Menu
function wp_symbol_wallet_setup_menu()
{
  add_menu_page(
    __('WP Symbol Wallet Plugin', 'textdomain'), // Page title
    'Symbol Wallet', // Menu title
    'manage_options',
    'wp-symbol-wallet', // Menu slug
    'admin_description', // Execute eunction
    'dashicons-shield-alt', // Menu icon
    30 // Menu display position
  );
}
add_action('admin_menu', 'wp_symbol_wallet_setup_menu');