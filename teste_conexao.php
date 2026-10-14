<?php
require __DIR__ . '/config/database.php';

try {
    conectar();
    echo "Conexão com o banco OK!";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}