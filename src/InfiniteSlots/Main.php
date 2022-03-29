<?php

declare(strict_types=1);

namespace InfiniteSlots;

use pocketmine\Server;
use pocketmine\player\Player;
use pocketmine\plugin\Plugin;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\server\QueryRegenerateEvent;

class Main extends PluginBase implements Listener{
    
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    
  public function onQueryRegenerate(QueryRegenerateEvent $event) : void{
    $query = $event->getQueryInfo();
    $playerCount = count($this->getServer()->getOnlinePlayers());
    $query->setMaxPlayerCount($playerCount + 1);
   }
}
