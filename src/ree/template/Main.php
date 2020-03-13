<?php
namespace ree\template;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{
    private const NOTICE = "§a>> ";
    
    public function onEnable()
    {
        $this->getLogger()->info(self::NOTICE.'読み込みました');
        parent::onEnable();
    }
    
    public function onDisable()
    {
        parent::onDisable();
    }
}
