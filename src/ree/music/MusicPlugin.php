<?php
namespace ree\music;

use pocketmine\plugin\PluginBase;
use ree\music\listener\EventListener;

class MusicPlugin extends PluginBase
{
    private const NOTICE = "§a>> ";
    
    public function onEnable()
    {
    	$this->getServer()->getPluginManager()->registerEvents(new EventListener(), $this);
        $this->getLogger()->info(self::NOTICE.'読み込みました');
        parent::onEnable();
    }
    
    public function onDisable()
    {
        parent::onDisable();
    }
}
