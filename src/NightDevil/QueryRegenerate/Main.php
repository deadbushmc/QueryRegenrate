<?php

declare(strict_types=1);

namespace NightDevil\QueryRegenerate;

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
    
  public function onQueryRegenerate(QueryRegenerateEvent $ev) : void{
    $queryInfo = $ev->getQueryInfo();
    $curPlayerCount = count(Server::getInstance()->getOnlinePlayers())
    $queryInfo->setMaxPlayerCount($curPlayerCount + 1);
   }
}
