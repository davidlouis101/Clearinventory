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
use pocketmine\network\protocol\LevelEventPacket;
use pocketmine\network\protocol\LevelSoundEventPacket;

class Main extends PluginBase implements Listener{

public function onEnable(){
$this->getLogger()->info(TextFormat::GREEN . "Clearinventory is now Active");
$this->getLogger()->info(TextFormat::BLUE . "Author: Crow Balde");
$this->getServer()->getPluginManager()->registerEvents($this, $this);
}

public function onDisable(){
$this->getLogger()->info(TextFormat::RED. "Clearinventory is now Disabled");
$this->getLogger()->info(TextFormat::BLUE . "Author: Crow Balde");
}

public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool{

switch($cmd->getName()){
		
       case "clear":
		if($sender instanceof Player){
			if($sender->hasPermission("clear.cmd")){
                                $volume = mt_rand();
			        $sender->getLevel()->broadcastLevelEvent($sender, LevelEventPacket::EVENT_SOUND_ORB, (int) $volume);
				$sender->sendMessage("§a§lYou Cleared you Inventory and your Armor!");
                                $sender->getInventory()->clearAll();
				$sender->getArmorInventory()->clearAll();
				$sender->removeAllEffects();
			}
		}
		break;
}
return true;
}
}
				  
