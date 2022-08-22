<?php

echo '<pre>';
print_r($_FILES);

// mover ficheiro para o destino final
move_uploaded_file($_FILES['file']['tmp_name'], '/var/www/html/php-8-a/' . $_FILES['file']['name']);