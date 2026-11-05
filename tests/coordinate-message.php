<?php

declare(strict_types=1);

namespace{
	require dirname(__DIR__) . "/src/GN/xyz/CoordinateMessage.php";

	$message = \GN\xyz\CoordinateMessage::format(12.34, 70.96, -8.25, "world_nether");
	$expected = "X: 12.3 | Y: 71 | Z: -8.3 | World: world_nether";
	if($message !== $expected){
		throw new \RuntimeException("Unexpected coordinate message: " . $message);
	}

	echo "XYZ coordinate formatting check passed.\n";
}
