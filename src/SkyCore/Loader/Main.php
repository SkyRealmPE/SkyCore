<?php

namespace SkyCore\Loader;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\PluginBase as Base;
use pocketmine\Player;


class Main extends Base {
       public function onEnable(){
	       $this->getLogger->info("SkyRealm's Core has been enabled");
						  
       }
       public function onDisable(){
	       $this->getLogger->info("SkyRealm's Core has been disabled");
			    
       }
	
	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool {
	    switch($command->getName()){
			    
		    case "skyfly":
			    if($sender instanceof Player{
			    if($sender->hasPermission("skycore.command.fly")){
				    #fly code goes here
				    $sender->sendMessage("SkyFly > you have successfull entered flight mode!");
				    return true;
			      }
			    }else{
				    $sender->sendMessage("SkyFly > you do not have permission");
				    $sender->sendMessage("SkyFly > you need to buy a rank at skyrealmpe.buycraft.net or \n vote at bit.do/skyrealmpe");
			            return false;
			    }
			       

			    break;
			   
			    
	    }#this line ends the cases(commands)
	
	      
	}#this line the onCommand Function
}#this line ends the plugin
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
	
	
