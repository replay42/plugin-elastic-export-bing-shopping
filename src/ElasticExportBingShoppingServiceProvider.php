<?php

namespace ElasticExportBingShopping;

use Plenty\Modules\DataExchange\Services\ExportPresetContainer;
use Plenty\Plugin\DataExchangeServiceProvider;

class ElasticExportBingShoppingServiceProvider extends DataExchangeServiceProvider
{
	public function register()
	{
	}

	public function exports(ExportPresetContainer $container)
	{
		$container->add(
			'BingShopping-Plugin',
			'ElasticExportBingShopping\ResultField\BingShopping',
			'ElasticExportBingShopping\Generator\BingShopping',
      '',
			true,
      true
		);
	}
}
