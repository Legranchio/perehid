<?php define('_SAPE_USER', '0f0e695a3bf246c116f97c9d30dc5393');require_once('/var/www/www-root/data/www/norka.tv/.sape/sape.php');$sape = new SAPE_articles(array('charset' => 'windows-1251'));echo $sape->process_request();