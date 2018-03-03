<?php

namespace SkyCore\Loader;
  
use pocketmine\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\utils\TextFormat as color;

use SkyCore\Commands\Fly;

use pocketmine\command;

class Main extends PluginBase {
  
  
  public function onEnabled(){
    $this->getLogger->info("SkyRealm's Core Plugin has been enabled! ");
    $this->loadCoreCommands();
  }
  
  public function onDisable(){
    $this->getLogger->info("SkyCore has been disabled :'( " );
    
    
  }
  
  public function loadCoreCommands(){
    $this->getServer()->getCommandMap()->register("skyfly", new fly("skyfly", $this));
    
  }
  
  
  
}
  
