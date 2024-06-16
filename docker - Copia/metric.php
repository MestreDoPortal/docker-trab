<?php
header('Content-Type: text/plain');

// Métricas simuladas de exemplo
$requests = 1000; // Número de solicitações (substitua por lógica real)
$errors = 10; // Número de erros (substitua por lógica real)

// Exportar métricas no formato Prometheus
echo "# HELP wordpress_requests_total Total de solicitações para o WordPress.\n";
echo "# TYPE wordpress_requests_total counter\n";
echo "wordpress_requests_total {$requests}\n";

echo "# HELP wordpress_errors_total Total de erros no WordPress.\n";
echo "# TYPE wordpress_errors_total counter\n";
echo "wordpress_errors_total {$errors}\n";
?>
