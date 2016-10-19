<?php
/**
 * Cpu Information Class
 *
 * This Cpu will access and store data. This can be extended to include further attributes that may be needed.
 *
 * @author Greg Bloom <gbloomdev@gmail.com>
 * @version 0.1.0
 **/

class Cpu{
	/**
	 * id for this cpu; this is the primary key
	 * @var int $cpuId
	 **/
	private $cpuId;
	/**
	 * model name for this cpu
	 * @var string $cpuModelName
	 **/
	private $cpuModelName;
	/**
	 * manufacturer for this cpu
	 * @var string $cpuManufacturer
	 **/
	private $cpuManufacturer;
	/**
	 * data width for this cpu; ie 32-bit, 64-bit
	 * @var int $cpuDataWidth
	 **/
	private $cpuDataWidth;
	/**
	 * socket for this cpu
	 * @var string $cpuSocket
	 **/
	private $cpuSocket;
	/**
	 * operating frequency for this cpu
	 * @var float $cpuOperatingFrequency
	 **/
	private $cpuOperatingFrequency;
	/**
	 * max operating frequency for this cpu; only available with intel, otherwise will contain a null
	 * @var float $cpuTurboFrequency
	 **/
	private $cpuTurboFrequency;
	/**
	 * number of cores for this cpu
	 * @var int $cpuCores
	 **/
	private $cpuCores;
	/**
	 * information for the cache for this cpu
	 * @var string $cpuCache
	 **/
	private $cpuCache;
	/**
	 * boolean for whether or not a cooler comes with this cpu
	 * @var bool cpuIsCoolerIncluded
	 **/
	private $cpuIsCoolerIncluded;
	/**
	 * boolean for whether or not hyperthreading is available this cpu
	 * @var bool $cpuIsHyperThreading
	 **/
	private $cpuIsHyperThreading;
	/**
	 *boolean for whether or not this cpu has integrated graphics
	 * @var bool $cpuIsOnboardGraphics
	 **/
	private $cpuIsOnboardGraphics;
}
?>