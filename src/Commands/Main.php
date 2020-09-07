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
              $name = $sender->getName;
              $sender->setDisplayName($name);
              $sender->setNameTag($name);
              $sender->sendMessage("§9§lServer§7»»§r§6 Your name has been resetet Succesfuly to §r§7§o " . $name . " §6!");
}
}
break;

case "nick":
if($sender instanceof Player){
if($sender->hasPermission("nick.cmd")){
              $nick = $args[0];
              $sender->setDisplayName($nick);
              $sender->setNameTag($nick);
              $sender->sendMessage("§9§lServer§7»»§r§6 You Succesfully set your name to §r§7§o" . $nick . "§6!");
}
}
break;

	case "heal":
		if($sender instanceof Player){
			if($sender->hasPermission("heal.cmd")){
				$sender->sendMessage("§9§lServer§7»»§6 You Succesfully healed yourself!");
				$sender->setHealth(20);
			}
		}
		break;

	case "feed":
		if($sender instanceof Player){
			if($sender->hasPermission("feed.cmd")){
				$sender->sendMessage("§9§lServer§7»»§6 You have Succesfully Feed yourself!");
				$sender->setFood(20);
			}
		}
		break;
		
       case "clear":
		if($sender instanceof Player){
			if($sender->hasPermission("clear.cmd")){
				$sender->sendMessage("§9§lServer§7»»§7 You Succesfully Cleared your Inventory.");
                                $sender->getInventory()->clearAll();
				$sender->getArmorInventory()->clearAll();
				$sender->removeAllEffects();
			}
		}
		break;
        
        case "day":
		if($sender instanceof Player){
			if($sender->hasPermission("day.cmd")){
				$sender->sendMessage("§9§lServer§7»»§7 You set Succesfully the Time to §e6000");
                                $sender->getLevel()->setTime(6000);
			}
		}
		break;

       case "night":
		if($sender instanceof Player){
			if($sender->hasPermission("night.cmd")){
				$sender->sendMessage("§9§lServer§7»»§6 Time Set to §e16000");
                                $sender->getLevel()->setTime(16000);
			}
		}
		break;

}
return true;
}
}
				  
