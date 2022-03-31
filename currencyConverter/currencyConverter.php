<?php

namespace Codecourse\utilities;

class currencyConverter implements currencyConverterInterface
{
	protected $currencyUrl='htttp://www.freecurrencyconverterapi.com/api/v2';

	protected $converEndopoint='convert?q=s%&compact=y';
	
	public function convert(array $conversions)
	
	{
		$query='';
		$results=[];
		
		$query= implode (',',array_map(function($c){
		return "$c{[0]}_{$c[1]}";
		},$consersions));
		
		//Bild up URL
		$converEndopoint=sprintf($this->converEndpoint,$query);
		$url="{$this->currencyUrl}{$converEndopoint}";
		
		// get respons
		response= $this
	
		
	}
	Public function getCurrencies()
	{
		
		
	}
	
}



?>