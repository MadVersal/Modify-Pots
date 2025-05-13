<?php

namespace MadVersal\ModifyPots\command;

use MadVersal\ModifyPots\Loader;
use pocketmine\utils\TextFormat;
use pocketmine\player\Player;
use pocketmine\command\CommandSender;

class PotionsCommand extends Command
{
  public function __construct()
{
    parent::construct('potions', 'use command to edit potions health');
    $this->setPermission('potions.command);
}   
               
