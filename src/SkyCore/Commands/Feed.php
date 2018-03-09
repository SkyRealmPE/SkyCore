<?php



namespace SkyCore\Commands;

use SkyCore\Loader\Main;

use pocketmine\command\CommanderSender;

use pocketmine\Player;

class Feed extends BaseCommand {


    private $plugin;
    
    public function __construct(Main $plugin) {
    
    $this->plugin = $plugin;
    parent::__construct($plugin, "feed", "Access SkyRealm's /feed command", "/feed <user>", ["feed", "food"]);
    
    }
    
    public function execute(CommanderSender $sender, string $commandLabel, array $args) {
    
    if (!sender->hasPermission("skycore.command.feed"))  {
        
        $sender->sendMessage("Seriously? You know you cant use this command without having a donor rank: donate at skyrealmpe.buycraft.net");
        return true;
    
    }
    
    if ((!isset($args[0]) && !sender instanceof Player) || count($args) > 1) {
    
      $sender->sendMessage("You have to do /feed {player}. Please try again");
      return true;
    
    }
    
    $player = $sender;
    
    if(isset($args[0]) && !($player = $this->getPlugin()->getServer()->getPlayer($args[0]))) {
      
      $sender->sendMessage("You didnt include a player when you use /feed");
      
      return true;
    
    
    
    }
    
  if ($player->getName() !== $sender->getName() && !sender->hasPermission("skycore.command.feed.other"){
  $sender->sendMessage("You have no permission to feed another"):
    
    $player->setFood(20);
    $player->sendMessage("Successfully Fed");
    
    return true;
    
    }
    
    
    if ($player !== $sender) {
        $player->setFood(20);
        $player->sendMessage("Fed :D");
      
      $sender->sendMessage("Successfully Fed");
    
    }
     return true;
    
    }
    


}
