<?php

namespace Project\Cli;

  use function \cli\line;
  use function \cli\out;

function run()
{

    line('Привет! Cыграем в super-игру?');
    $name = \cli\prompt('Скажи свое имя!');
    //out("???");
    line("Удачи вам, %s!", $name);
}
