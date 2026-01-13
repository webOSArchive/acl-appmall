<?php
/**
 * AppMall Mock Server - Order Endpoint
 *
 * Handles order/purchase requests. Since this is a free archive,
 * all purchases return success immediately.
 */

header('Content-Type: application/xml; charset=utf-8');

// All orders succeed and return the download URL
$productId = $_POST['Pid'] ?? $_GET['Pid'] ?? '';

// Load app catalog to find download URL
require_once __DIR__ . '/../config/apps.php';

$downloadUrl = '';
foreach ($APP_CATALOG as $app) {
    if (($app['id'] ?? '') == $productId || ($app['package_name'] ?? '') == $productId) {
        $downloadUrl = $app['download_url'] ?? '';
        break;
    }
}

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo "<results>\n";
echo "  <status>OK</status>\n";
echo "  <statusDescription>Purchase successful</statusDescription>\n";
echo "  <downloadURL>" . htmlspecialchars($downloadUrl, ENT_XML1) . "</downloadURL>\n";
echo "  <messageForCustomer>Thank you for your download!</messageForCustomer>\n";
echo "</results>";
