<?php


namespace ree\music\listener;


use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use ree\music\sound\NoteBlockSound;

class EventListener implements Listener
{
	private $count = 0;

	public function onTap(PlayerInteractEvent $ev) {
		$p = $ev->getPlayer();
		$p->sendTip($this->count);
		$p->getLevel()->addSound(new NoteBlockSound($p->asVector3(), NoteBlockSound::INSTRUMENT_PIANO, $this->count), [$p]);
		$this->count = ($this->count + 1) % 25;;
	}
}