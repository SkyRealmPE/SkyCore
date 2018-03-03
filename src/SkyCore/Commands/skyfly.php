<?php

namespace SkyCore\Commands;

use pocketmine\Player;
use pocketmine\entity\Entity;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as TF;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\entity\EntityDamageEvent;


class skyfly extends PluginBase{
  
  private $fly = [];
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool{
        if(strtolower($command->getName()) == "skyfly"){
            if($sender->hasPermission("skycore.command.fly") || $sender->isOp()){
                if(isset($this->fly[strtolower($sender->getName())])){
                    unset($this->fly[strtolower($sender->getName())]);
                    $sender->setAllowFlight(false);
                    $sender->setFlying(false);
                    $sender->sendMessage(TF::RED."Fly has been disabled");
                } else {
                    $this->fly[strtolower($sender->getName())] = strtolower($sender->getName());
                    $sender->setAllowFlight(true);
                    $sender->setFlying(true);
                    $sender->sendMessage(TF::GREEN."You can now swore through the sky!");
                }
            } else {
                $sender->sendMessage(TF::RED."Sadly you dont have the permission to use /skyfly " . TF.GREEN . "You can donate at skyrealmpe.ddns.net for access!");
            }
        }
        return true;
    }
    public function onHit(EntityDamageEvent $ev){
        
        if(($p = $ev->getEntity()) instanceof Player){
            
            if($ev->getCause() !== 4 && isset($this->fly[$p->getLowerCaseName()])){
                $p->sendPopup(TF::RED . 'Fly has been disabled');
                $p->setFlying(true);
                $p->setAllowFlight(false);
                unset($this->fly[$p->getLowerCaseName()]);
            }
        }
    }
}
  
  
}

