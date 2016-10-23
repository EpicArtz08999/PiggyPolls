<?php
namespace PiggyPolls\Commands;

use pocketmine\command\defaults\VanillaCommand;
use pocketmine\command\CommandSender;
use pocketmine\Player;

class PollCommand extends VanillaCommand {
    public function __construct($name, $plugin) {
        parent::__construct($name, "Vote", "/poll <list|vote");
        $this->setPermission("piggypolls.command.poll");
        $this->plugin = $plugin;
    }

    public function execute(CommandSender $sender, $currentAlias, array $args) {
        if(!$this->testPermission($sender)) {
            return true;
        }
        return true;
    }

}
