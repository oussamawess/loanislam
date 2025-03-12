<?php
require_once 'db.php'; // Database connection
require_once 'auth-user.php'; // Authentication

// Set the client ID (Make sure this comes from session or request)
$client_id = $_SESSION['client_id'] ?? 0; // Adjust based on your authentication method

// Fetch payment details
$query = "SELECT id, fees FROM payment WHERE id_client = ? LIMIT 1";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $client_id);
$stmt->execute();
$result = $stmt->get_result();
$payment = $result->fetch_assoc();
$stmt->close();

require 'stripe-php/init.php'; // Ensure this path is correct

\Stripe\Stripe::setApiKey('sk_test_51R1cUNQrKQxJd0p59Jk8Mj3HPUJj8BcX0cgtzAXVETBozb8cdOw6CEpt6abMZDEWSTR07OQfqRcygIBq4FjKMtYv00BhETshLJ'); // Secret key

// Decode JSON input
$input = json_decode(file_get_contents("php://input"), true);

if (!isset($input['token'])) {
    echo json_encode(['success' => false, 'error' => 'Invalid Token']);
    exit();
}

$token = $input['token'];

if ($payment) {
    $amount = intval($payment['fees'] * 100); // Convert to cents

    try {
        // Charge the customer
        $charge = \Stripe\Charge::create([
            'amount' => $amount,
            'currency' => 'eur',
            'source' => $token,
            'description' => 'Test payment'
        ]);

        // Update payment table
        $updatePaymentQuery = "UPDATE payment SET status = 'paid', has_been_read_admin = 0, updated_at = NOW() WHERE id_client = ?";
        $stmt = $conn->prepare($updatePaymentQuery);
        $stmt->bind_param("i", $client_id);
        $stmt->execute();
        $stmt->close();

        // Update client table
        $updateClientQuery = "UPDATE client SET statut = 'signé' WHERE id = ?";
        $stmt = $conn->prepare($updateClientQuery);
        $stmt->bind_param("i", $client_id);
        $stmt->execute();
        $stmt->close();

        // Return success message with modern styling
        echo json_encode([
            'success' => true,
            'message' => '<div style="padding: 20px; background: #4CAF50; color: white; border-radius: 8px; font-size: 16px; text-align: center;">✅ Paiement réussi!<br>
                                                                                            Merci pour votre paiement.</div>'
        ]);

    } catch (\Stripe\Exception\ApiErrorException $e) {
        echo json_encode(['success' => false, 'error' => $e->getMessage()]);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'No payment record found']);
}
?>
