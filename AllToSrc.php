<?php

/**
 * @name AllToSrc
 * @main AllToSrc\AllToSrc
 * @author NeosPE
 * @version 0.1
 * @api 5.0.0
 * @description 어쩌라구 ㅡㅡ;
 */
 
namespace AllToSrc;

use pocketmine\plugin\PluginBase;
use pocketmine\command\ConsoleCommandSender;

use pocketmine\Server;

class AllToSrc extends PluginBase
{

    public function onEnable() : void
    {

		$server = Server::getInstance();
		
		foreach ($server->getPluginManager()->getPlugins() as $plugin) {
			
			$pluginName = explode (' ', $plugin->getDescription()->getFullName())[0];
			$server->dispatchCommand (new ConsoleCommandSender(), 'extractplugin ' . $pluginName);
			
			//echo $pluginName;
			
		}

    }

}
