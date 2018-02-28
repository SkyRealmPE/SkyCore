<?php

namespace SkyCore\Loader
  
use pocketmine\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\utils\TextFormat as color;

use SkyCore\Commands\Fly;

class Main extends PluginBase {
  
  
  public function onEnabled(){
    $this-getLogger->info("SkyRealm's Core Plugin has been enabled!"):
    $this-loadCore();
  }
  
  public function onDisable(){
    
    
  }
  
  public function loadCore(){
    $this->getServer()->getCommandMap()->register("skyfly", new Fly("skyfly", $this));
    
  }
  
  
  
}
  
