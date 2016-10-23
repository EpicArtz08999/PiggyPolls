<?php
namespace PiggyPolls\Commands;

use pocketmine\command\defaults\VanillaCommand;
use pocketmine\command\CommandSender;
use pocketmine\Player;

class PollsCommand extends VanillaCommand {
    public function __construct($name, $plugin) {
        parent::__construct($name, "Manage polls", "/polls <create|delete|list>");
        $this->setPermission("piggypolls.command.polls");
        $this->plugin = $plugin;
    }

    public function execute(CommandSender $sender, $currentAlias, array $args) {
        if(!$this->testPermission($sender)) {
            return true;
        }
        return true;
    }

}
