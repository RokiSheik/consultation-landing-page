<?php
// Collect form data dynamically
$form_data = [];
foreach ($_POST as $key => $value) {
    // Skip hidden fields temporarily
    if (in_array($key, ['landing_title', 'offer_price', 'landing_slug'])) {
        $$key = $value; // e.g., $landing_title
        continue;
    }
    // Handle checkboxes (arrays)
    if (is_array($value)) {
        $form_data[$key] = array_map(fn($v) => htmlspecialchars($v, ENT_QUOTES, 'UTF-8'), $value);
    } else {
        $form_data[$key] = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
}

// Ensure hidden fields exist
$landing_title = $landing_title ?? '';
$offer_price = isset($offer_price) ? (float)$offer_price : 0;

// Merge hidden fields with dynamic fields
$data = array_merge($form_data, [
    'landing_title' => $landing_title,
    'offer_price' => $offer_price,
]);

// Send to Laravel API
$ch = curl_init("https://api.passionateworlduniversity.com/api/submit-landing-form");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
$error = curl_error($ch);
curl_close($ch);

if ($error) {
    echo "<script>alert('cURL Error: ".addslashes($error)."'); window.history.back();</script>";
    exit();
}

$result = json_decode($response, true);

if (!empty($result['success']) && !empty($result['payment_url'])) {
    echo "<script>
            if (typeof dataLayer !== 'undefined') {
                dataLayer.push({'event': 'form_submit_success'});
            }
            window.location.href = '" . $result['payment_url'] . "';
          </script>";
    exit();
} else {
    $errorMessage = $result['message'] ?? 'Payment initiation failed';
    echo "<script>alert('" . addslashes($errorMessage) . "'); window.history.back();</script>";
}

?>
