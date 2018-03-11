<?php

namespace SkyCore\Loader;
  

use pocketmine\plugin\PluginBase;

use SkyCore\Commands\CommandManager;

use pocketmine\command;

class Main extends PluginBase {
  
  
  public function onEnabled(){
    $this->getLogger->info("SkyRealm's Core Plugin has been enabled! ");
    $this->RegisterManager();
  }
  
  public function onDisable(){
    $this->getLogger->info("SkyCore has been disabled " );
    
    
  }
  	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
       $command = strtolower($command->getName());
        $count = count($args);
        switch($cmd){
            case "voteforranks":
            $sender->sendMessage("--->§bSkyRealm Network Ranks§r<---");
            $sender->sendMessage("§bYou are able to vote for numerous ranks in our network :)");
            $sender->sendMessage("§bGuest Rank : §erequires 10votes");
            $sender->sendMessage("§bVoter Rank: §erequires 15votes");
            return true;
            break;
            
             
    
}
