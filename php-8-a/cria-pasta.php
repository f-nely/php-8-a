<?php

/*
The mkdir - creates a new directory with the specified pathname. The path and 
mode are sent as parameters to the mkdir() function and it returns TRUE on 
success or FALSE on failure.
Syntax:
mkdir(path, mode, recursive, context)
Parameters Used:
The mkdir() function in PHP accepts four parameters.

    1.path : It is a mandatory parameter which specifies the path.
    2.mode : It is an optional parameter which specifies permission.
    The mode parameter consists of four numbers:
       - The first number is always zero.
       - The second number specifies permissions for the owner.
       - The third number specifies permissions for the owner’s user group.
       - The fourth number specifies permissions for everybody else.
    The set of possible values are :

     - 1 = execute permissions
     - 2 = write permissions
     - 4 = read permissions

Multiple permissions can be set by adding up the following numbers.
    3.recursive: It is an optional parameter which can be used to set recursive mode.
    4.context : It is an optional parameter which specifies the behavior of the stream.
*/

// cria pasta
// mkdir('folder1');

// cria pasta dentro da outra
// mkdir('folder1/folder2', 0777, true);

// remove pasta
rmdir('folder1');