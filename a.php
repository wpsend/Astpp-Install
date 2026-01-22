<?php
require_once "vendor/autoload.php";  // আপনার পাথ যেটা কাজ করছে সেটা রাখুন
use magnusbilling\api\magnusBilling;

header('Content-Type: application/json');

try {
    $username = $_GET['username'] ?? '';
    $amount   = (float) ($_GET['amount'] ?? 0);

    if (empty($username) || $amount <= 0) {
        throw new Exception('username এবং amount দিন!');
    }

    $magnusBilling = new magnusBilling('11111111111111111111', '1111111111111111111');
    $magnusBilling->public_url = "http://ip.wpsend.org/mbilling";  // আপনার আসল URL

    $id_user = $magnusBilling->getId('user', 'username', $username);

    if (!$id_user) {
        throw new Exception("User '$username' পাওয়া যায়নি!");
    }

    $result = $magnusBilling->create('refill', [
        'id_user'     => $id_user,
        'credit'      => $amount,
        'payment'     => 1,
        'description' => 'Recharge from URL - ' . date('Y-m-d H:i:s')
    ]);

    echo json_encode([
        'success' => true,
        'message' => 'Recharge সফল!',
        'username' => $username,
        'amount'   => $amount,
        'details'  => $result
    ]);

} catch (Exception $e) {
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
