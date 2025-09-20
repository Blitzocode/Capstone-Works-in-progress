<?php
// fetch_records.php
header('Content-Type: application/json; charset=utf-8');

require_once 'dbConnection.php'; // this should create $conn as a PDO object

try {
    $stmt = $conn->query("SELECT * FROM SavedRecordsTable");
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($records, JSON_UNESCAPED_UNICODE);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode([
        "error" => "Query failed",
        "message" => $e->getMessage()
    ]);
}

