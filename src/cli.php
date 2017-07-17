<?php

namespace Project\Cli;

  use function \cli\line;
  use function \cli\out;

function run()
{

  line('Привет,! Давай-ка сыграем в игру?');
  $name = \cli\prompt('Имя говори!');
  out("???");
  line("Ты не %s, ты - ****!", $name);

}
