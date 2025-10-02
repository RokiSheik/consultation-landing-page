<?php
// Get form data & sanitize
$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
$whatsapp = htmlspecialchars($_POST['whatsapp'], ENT_QUOTES, 'UTF-8');
$profession = htmlspecialchars($_POST['profession'], ENT_QUOTES, 'UTF-8');
$business_type = htmlspecialchars($_POST['business_type'], ENT_QUOTES, 'UTF-8');
$current_revenue = htmlspecialchars($_POST['current_revenue'], ENT_QUOTES, 'UTF-8');
$future_revenue = htmlspecialchars($_POST['future_revenue'], ENT_QUOTES, 'UTF-8');
$total_team = filter_var($_POST['total_team'], FILTER_VALIDATE_INT);
$landing_title = htmlspecialchars($_POST['landing_title'], ENT_QUOTES, 'UTF-8');
$offer_price = filter_var($_POST['offer_price'], FILTER_VALIDATE_FLOAT);

// Prepare data to send to Laravel API
$data = [
    "name" => $name,
    "whatsapp" => $whatsapp,
    "profession" => $profession,
    "business_type" => $business_type,
    "current_revenue" => $current_revenue,
    "future_revenue" => $future_revenue,
    "total_team" => $total_team,
    "landing_title" => $landing_title,
    "offer_price" => $offer_price
];

// Initialize cURL
$ch = curl_init("https://api.passionateworlduniversity.com/api/submit-landing-form");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute request
$response = curl_exec($ch);
curl_close($ch);

// Decode response
$result = json_decode($response, true);

if (!empty($result['success']) && !empty($result['payment_url'])) {
    // Push to dataLayer for analytics
    echo "<script>
            if (typeof dataLayer !== 'undefined') {
                dataLayer.push({'event': 'form_submit_success'});
            }
            window.location.href = '" . $result['payment_url'] . "';
          </script>";
    exit();
} else {
    // Handle error
    $errorMessage = $result['message'] ?? 'Payment initiation failed';
    echo "<script>alert('" . addslashes($errorMessage) . "'); window.history.back();</script>";
}
?>
