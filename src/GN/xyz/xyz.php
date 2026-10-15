<?php

declare(strict_types=1);

namespace GN\xyz;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;

final class xyz extends PluginBase{
	protected function onEnable() : void{
		$this->getLogger()->info("§a❖§cX§eY§dZ§a❖ XYZ Đã Bật");
	}

	protected function onLoad() : void{
		$this->getLogger()->info("§a❖§cX§eY§dZ§a❖ XYZ Đang Load");
	}

	protected function onDisable() : void{
		$this->getLogger()->info("§a❖§cX§eY§dZ§a❖ XYZ Đã Tắt");
	}

	/** @param list<string> $args */
	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
		if(strtolower($command->getName()) !== "xyz"){
			return false;
		}

		if(!$sender instanceof Player){
			$sender->sendMessage("§a❖§cX§eY§dZ§a❖§b Vui Lòng Sử Dụng Lệnh Trong Game");
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
