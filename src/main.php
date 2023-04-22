<?php

namespace SOFe\UserOfExampleVirion;

use pocketmine\plugin\PluginBase;
use SOFe\ExampleVirion\HelloWorld;

final class MainClass extends PluginBase {
	protected function onEnable() : void{
		HelloWorld::info($this);
	}
}
