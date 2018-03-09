<?php

namespace SkyCore\Commands;

use SkyCore\Loader\Main;

class CommanderManager{
    
 private $plugin;
    
    public function __construct(Main $plugin)  {
        $this-plugin = $plugin;
        $this->init();
       
    }
    
    public function init() : void {
        $cmds = [
            new Fly($this->plugin) ];
        $this->plugin->getServer()->getCommandMap()->registerAll("SkyCore", $cmds);
            
        
    }
    
    
}
