<?php

namespace SkyCore\Commands;

use pocketmine\command\{Command, CommandSender, PluginIdentifiableCommand};

use SkyCore\Loader\Main;

class BaseCommand extends Command implements PluginIdentifiableCommand {

    private $plugin;
    
    public function __construct(Main $plugin, $name, $description, $usageMessage, $aliases) {
        $this->plugin = $plugin;
        parent::__construct($name, $description, $usageMessage, $aliases);
    }
    
    public function getPlugin() : Plugin { 
     return $this->plugin;   
    }
}
