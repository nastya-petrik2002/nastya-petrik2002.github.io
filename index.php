<?php
// Перевіряємо, чи не було вже відправлено заголовків
if (!headers_sent()) {
    // Відправляємо заголовок для перенаправлення
    header('Location: src/pages/main/index.php');
    // Припиняємо виконання скрипта
    exit;
} else {
    // Якщо заголовки вже були відправлені, можна використати HTML мета-тег для перенаправлення
    echo '<script type="text/javascript">';
    echo 'window.location.href="src/pages/main/index.php";';
    echo '</script>';
    echo '<noscript>';
    echo '<meta http-equiv="refresh" content="0;url=src/pages/main/index.php" />';
    echo '</noscript>';
    exit;
}
?>
