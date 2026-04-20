<?php

return [

    // Permite que essas rotas sejam acessadas de fora
    'paths' => ['api/*', 'sanctum/csrf-cookie', 'login', 'logout', '/user/add'],

    'allowed_methods' => ['*'],

    // AQUI É O PULO DO GATO: Em vez de '*', definimos as origens exatas do Vue
    // Adicionei localhost e 127.0.0.1 nas portas comuns do Vite (5173) e Vue CLI (8080)
    // Bem como o domínio do Traefik local para Docker
    'allowed_origins' => [
        'http://localhost:5173',
        'http://localhost:5174',
        'http://127.0.0.1:5173',
        'http://localhost:8080',
        'https://app.localhost',
        'http://app.localhost',
    ],

    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,

    // Permite envio de cookies/credenciais se necessário
    'supports_credentials' => true,
];