<?php

define('ROOT', dirname(__DIR__, 1));


function view(string $path): void
{
    require ROOT .'/views'. $path;
}
