<?php declare(strict_types = 1);

namespace Contributte\Mate\Config;

final class StructFieldConfig
{

	public function __construct(
		public string $name,
		public string $type,
		public bool $nullable = false,
	)
	{
	}

}
