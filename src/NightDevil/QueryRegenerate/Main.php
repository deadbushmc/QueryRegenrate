<?php

declare(strict_types=1);

namespace NightDevil\QueryRegenerate;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\Plugin;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\server\QueryRegenerateEvent;

class Main extends PluginBase implements Listener{
    
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    
    public function onQuery(QueryRegenerateEvent $event): void
    {
        $event->setMaxPlayerCount($event->getPlayerCount() + 1);
        $event->setPlayerCount($event->getPlayerCount() + 0);
    }
}
