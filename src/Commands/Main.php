<?php

namespace Commands;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\event\Listener;
use pocketmine\Server;
use pocketmine\Player;
use muqsit\invmenu\{InvMenu, InvMenuHandler};
use pocketmine\entity\EffectInstance;
use pocketmine\entity\Effect;
use pocketmine\level\sound\EndermanTeleportSound;
use pocketmine\utils\Config;

class Main extends PluginBase implements Listener{

public function onEnable(){
$this->getServer()->getPluginManager()->registerEvents($this, $this);
$this->getLogger()->info(TextFormat::GREEN . "Clearinventory is now Active");
$this->getLogger()->info(TextFormat::BLUE . "Author: Crow Balde");
}

public function onDisable(){
$this->getLogger()->info(TextFormat::GREEN . "Clearinventory is now Offline");
$this->getLogger()->info(TextFormat::BLUE . "Author: Crow Balde");
}
return true;
}
}
