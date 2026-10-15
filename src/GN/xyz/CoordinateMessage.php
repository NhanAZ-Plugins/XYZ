<?php

declare(strict_types=1);

namespace GN\xyz;

final class CoordinateMessage{
	public static function format(float $x, float $y, float $z, string $world) : string{
		return "§a❖§cX§eY§dZ§a❖ §cX:§b" . round($x, 1) . " §f| §eY:§b" . round($y, 1) . " §f| §dZ:§b" . round($z, 1) . " §f| §aWorld:§b " . $world;
	}
}
