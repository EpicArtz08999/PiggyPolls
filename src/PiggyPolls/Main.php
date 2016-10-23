<?php
namespace PiggyPolls;

use pocketmine\plugin\PluginBase;
class Main extends PluginBase {
    public function onEnable() {
        $this->getLogger()->info("§aEnabled.");
    }
}
