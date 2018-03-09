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
    
public function execute(CommandSender $sender, string $commandLabel, array $args) {
        if (!$this->plugin->isEnabled()) {
            return false;
        }
        if (!$this->testPermission($sender)) {
            return false;
        }
        $success = $this->plugin->onCommand($sender, $this, $commandLabel, $args);
        if (!$success and $this->usageMessage !== "") {
            throw new InvalidCommandSyntaxException();
        }
        return $success;
    }
}
