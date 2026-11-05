<?php

declare(strict_types=1);

namespace GN\xyz;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;

final class xyz extends PluginBase{
	protected function onEnable() : void{
		$this->getLogger()->info("XYZ enabled.");
	}

	protected function onLoad() : void{
		$this->getLogger()->info("XYZ loading.");
	}

	protected function onDisable() : void{
		$this->getLogger()->info("XYZ disabled.");
	}

	/** @param list<string> $args */
	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
		if(strtolower($command->getName()) !== "xyz"){
			return false;
		}

		if(!$sender instanceof Player){
			$sender->sendMessage("§cThis command can only be used in-game.");
			return true;
		}

		$position = $sender->getPosition();
		$sender->sendMessage(CoordinateMessage::format(
			$position->getX(),
			$position->getY(),
			$position->getZ(),
			$sender->getWorld()->getFolderName()
		));
		return true;
	}
}
