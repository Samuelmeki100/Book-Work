<?php

require 'currencyConverterInterface.php';
require 'currencyConverter.php';

$converter=new Codecourse\Utilities\currencyConverterInterface;

$results=$converter->convert([
	['USD', 'GBP',12.00 ],
	['GBP', 'USD',200.00 ],


])
?>