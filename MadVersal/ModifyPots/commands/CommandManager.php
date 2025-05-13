<?php

declare(strict_types=1);

namespace MadVersal\ModifyPots;

use Madversal\ModifyPots\Loader;

class CommandManager
{

public function __construct()
  {
  Loader::getInstance()->getServer()->getCommandMap()->register("Pots", new PotionsCommand());
  }
}
