<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: csatlakozz.html');
    exit;
}

$name    = htmlspecialchars(trim($_POST['nev'] ?? ''));
$email   = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
$role    = htmlspecialchars(trim($_POST['szerepkor'] ?? ''));
$message = htmlspecialchars(trim($_POST['uzenet'] ?? ''));
$consent = isset($_POST['adatvedelem']);

if (!$name || !$email || !$consent) {
    header('Location: csatlakozz.html?error=1');
    exit;
}

$to = 'info@kozkod.hu';

$subject = '=?UTF-8?B?' . base64_encode("KözKód jelentkezés — $name") . '?=';

$body  = "Új KözKód jelentkezés\n";
$body .= str_repeat('-', 40) . "\n";
$body .= "Név:       $name\n";
$body .= "E-mail:    $email\n";
$body .= "Szerepkör: $role\n";
$body .= str_repeat('-', 40) . "\n\n";
$body .= $message ?: '(Nem adott meg üzenetet)';

$headers = implode("\r\n", [
    'From: info@kozkod.hu',
    "Reply-To: $email",
    'MIME-Version: 1.0',
    'Content-Type: text/plain; charset=UTF-8',
    'Content-Transfer-Encoding: 8bit',
    'X-Mailer: PHP/' . phpversion(),
]);

$sent = mail($to, $subject, $body, $headers);

header($sent ? 'Location: csatlakozz.html?sent=1' : 'Location: csatlakozz.html?error=1');
exit;
