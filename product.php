<?php
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'http://localhost/fashion',
    'ck_8891ffefd9783f501fc32368c290016520f0a7ad',
    'cs_fd241dc93b45d755bee1ffe693efcec0a16b7311',
    [
        'wp_api' => true,
        'version' => 'wc/v3',
        'query_string_auth' => true // Force Basic Authentication as query string true and using under HTTPS
    ]
);
?>

<?php echo json_encode($woocommerce->get('orders')); ?>