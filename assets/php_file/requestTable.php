<?php
require_once 'dbConnection.php';

try {
    // Create PDO connection

    // Example query (adjust table/columns)
    $stmt = $conn->prepare("SELECT
    U.firstName, 
    M.requestID,
    M.requestDate,
    M.documentType,
    M.purposeOfRequest,
    M.requestStatus,
    P.paymentRef
     FROM dbo.RequestCertificateNamesTable U, dbo.RequestCertificatesTable M, dbo.RecordsOfPaymentTable P
     WHERE U.requestID = M.requestID AND P.serviceID = M.requestID");
    $stmt->execute();

    // Fetch all rows as associative array
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Set header for JSON
    header('Content-Type: application/json');

    // Output JSON
    echo json_encode($data);

} catch (PDOException $e) {
    // If connection/query fails
    echo json_encode(["error" => $e->getMessage()]);
}