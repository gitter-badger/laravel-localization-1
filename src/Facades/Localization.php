<?php

namespace ImmortalVision\Localization\Facades;

use Illuminate\Support\Facades\Facade;

class Localization extends Facade {
	protected static function getFacadeAccessor()
	{
		return 'Localization';
	}
}