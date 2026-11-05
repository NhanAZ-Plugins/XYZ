<?php

declare(strict_types=1);

namespace GN\xyz;

final class CoordinateMessage{
	public static function format(float $x, float $y, float $z, string $world) : string{
		return "X: " . round($x, 1) . " | Y: " . round($y, 1) . " | Z: " . round($z, 1) . " | World: " . $world;
	}
}
