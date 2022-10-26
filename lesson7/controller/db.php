<?php
// db.php

return new PDO('mysql:host=localhost;dbname=todo_base', 'tofo_admin', 'P@ssw0rd', [
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

?>
