<?php

namespace SkyCore\Loader;
  

use pocketmine\plugin\PluginBase;

use SkyCore\Commands\CommandManger;

use pocketmine\command;

class Main extends PluginBase {
  
  
  public function onEnabled(){
    $this->getLogger->info("SkyRealm's Core Plugin has been enabled! ");
    $this->RegisterManager();
  }
  
  public function onDisable(){
    $this->getLogger->info("SkyCore has been disabled " );
    
    
  }
  
  public function RegisterManager() :  CommandManager{
    $coremanager = CommanderManager($this);
    return $coremanager;
  }
  
  
  
}
  
