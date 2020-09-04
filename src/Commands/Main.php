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

class Main extends PluginBase implements Listener{

public function onEnable(){
$this->getLogger()->info(TextFormat::GREEN . "Commands plugin is now Enabled!");
}

public function onDisable(){
$this->getLogger()->info(TextFormat::RED. "Commands plugin is now Disabled!");
}

public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool{

switch($cmd->getName()){


case "nickoff":
if($sender instanceof Player){
if($sender->hasPermission("nick.cmd")){
              $name = $args[0];
              $sender->setDisplayName($name);
              $sender->setNameTag($name);
              $sender->sendMessage("§9§lServer§7»»§r§6 Your name has been resetet to §r§7§o " . $name . " §6!");
}
}
break;

case "nick":
if($sender instanceof Player){
if($sender->hasPermission("nick.cmd")){
              $nick = $args[0];
              $sender->setDisplayName($nick);
              $sender->setNameTag($nick);
              $sender->sendMessage("§9§lServer§7»»§r§6 Your new name is now §r§7§o" . $nick . "§6!");
}
}
break;

	case "heal":
		if($sender instanceof Player){
			if($sender->hasPermission("heal.cmd")){
				$sender->sendMessage("§9§lServer§7»»§6 You are now Healed");
				$sender->setHealth(20);
			}
		}
		break;

	case "feed":
		if($sender instanceof Player){
			if($sender->hasPermission("feed.cmd")){
				$sender->sendMessage("§9§lServer§7»»§6 You are have now no Hunger");
				$sender->setFood(20);
			}
		}
		break;
		
  case "clear":
		if($sender instanceof Player){
			if($sender->hasPermission("clear.cmd")){
				$sender->sendMessage("§9§lServer§7»»§6 Your Inventory is now Clear");
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
				  
