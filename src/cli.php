<?php

namespace Project\Cli;

  use function \cli\line;
  use function \cli\out;

function run()
{

  line('Привет! Давай сыграем в игру?');
  $name = \cli\prompt('Скажите ваше имя!');
  //out("???");
  line("Удачи вам, %s!", $name);

}
