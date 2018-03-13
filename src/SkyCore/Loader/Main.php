<?php
namespace SkyCore\Loader;

use pocketmine\plugin\PluginBase as PBASE;

use pocketmine\command\CommandSender;

use pocketmine\command\Command;

use pocketmine\Player;

class Main extends PBASE{
  
	public function onEnable(){
		$this->getLogger()->info("SkyRealm's Core plugin has been enabled :D");
	}
	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
		switch($command->getName()){
			case "skyfly":
        if($sender instanceof Player){
          if($sender->hasPermission("skycore.command.fly")){
            #Fly code goes here
				$sender->sendMessage("§b§lSkyFly §8>§r§b Fly has been enabled");
				return true;
		  }
			
				
		
       
     } else {
          $sender->sendMessage("§b§lSkyFly§8 >§r§c You do not have permission to use §b/skyfly §c. Please donate for a premium rank at §dskyrealmpe.buycraft.net §c or become topvoter at §dbit.do/skyrealmpe");
          return false;
	}
   }
    case "skyfeed":
    if($sender instanceof Player){
      if($sender->hasPermission("skycore.command.feed")){
        #feed code goes here
        $sender->sendMessage("§b§lSky§cFeed§8 >§r§b You have been fed");
        return true;
        
        }else{
        $sender->sendMessage("§b§lSky§cFeed§8 >§r§c You do not have permission to use the command §a/skyfeed§c. Please donate for a rank at §dskyrealmpe.buycraft.net");
        return false;
        }
    
      }
    
	}
	public function onDisable(){
		$this->getLogger()->info("SkyRealmPE Core Plugin has been disabled");
	}
}
