<?php
// SDK de Mercado Pago
require __DIR__ .  '/libs/vendor/autoload.php';
// Credenciales
$AccessToken = 'APP_USR-1159009372558727-072921-8d0b9980c7494985a5abd19fbe921a3d-617633181';
MercadoPago\SDK::setAccessToken($AccessToken);

// Lectura de la respuesta
$body = @file_get_contents('php://input');
$data = json_decode($body);

// Guardamos la respuesta .json
file_put_contents('notifications/'.$data->id.".json", $body);

// Enviamos respuesta 201
switch($data->type) {
case "payment":
$payment = MercadoPago\Payment::find_by_id($data->data->id);
http_response_code(201);
break;
case "test":
echo "ok";
break;
case "plan":
$plan = MercadoPago\Plan::find_by_id($_POST["id"]);
break;
case "subscription":
$plan = MercadoPago\Subscription::find_by_id($_POST["id"]);
break;
case "invoice":
$plan = MercadoPago\Invoice::find_by_id($_POST["id"]);
break;
}
?>