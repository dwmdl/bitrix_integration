<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];


/*   header('Location: /index.php');
   exit;*/
   echo json_encode(['success' => true, 'message' => 'Заявка отправлена!']);
} else {
    http_response_code(405);
    echo 'Method Not Allowed';
}