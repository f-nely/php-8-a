<?php

$texto = 'Etiam tincidunt dolor vel urna venenatis facilisis. 
Duis iaculis sodales ligula, ac faucibus ex pretium eu. Integer 
fermentum est id tellus gravida, vel vestibulum lorem convallis. 
Ut sed mi dapibus, rutrum arcu vel, feugiat purus. Maecenas 
facilisis congue nunc, ac volutpat justo congue tristique. Nulla 
facilisi. Mauris pulvinar enim vitae varius eleifend. Quisque 
congue magna felis, a porttitor ipsum interdum vitae.';

// esta função é equivalente a chamar fopen, fwrite e fclose tudo na mesma função
file_put_contents('texto-completo.txt', $texto);


