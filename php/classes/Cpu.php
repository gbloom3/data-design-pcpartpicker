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
	 * manufacturer for this cpu
	 * @var string $cpuManufacturer
	 **/
	private $cpuManufacturer;
	/**
	 * model name for this cpu
	 * @var string $cpuModelName
	 **/
	private $cpuModelName;
	/**
	 * model number for this cpu
	 * @var string $cpuModelNumber
	 **/
	private $cpuModelNumber;
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

	//Constructor goes here

	/**
	 * accessor method for cpuId
	 * @return int|null value of cpuId
	 **/
	public function getCpuId() {
		return $this->cpuId;
	}
	/**
	 * accessor method for cpuManufacturer
	 * @return string value of cpuManufacturer
	 **/
	public function getCpuManufacturer() {
		return $this->cpuManufacturer;
	}
	/**
	 * accessor method for cpuModelName
	 * @return string value of cpuModelName
	 **/
	public function getCpuModelName() {
		return $this->cpuModelName;
	}
	/**
	 * accessor method for cpuModelNumber
	 * @return string value of cpuModelNumber
	 **/
	public function getCpuModelNumber() {
		return $this->cpuModelNumber;
	}
	/**
	 * accessor method for cpuDataWidth
	 * @return int|null value of cpuDataWidth
	 **/
	public function getCpuDataWidth() {
		return $this->cpuDataWidth;
	}
	/**
	 * accessor method for cpuSocket
	 * @return string value of cpuSocket
	 **/
	public function getCpuSocket() {
		return $this->cpuSocket;
	}
	/**
	 * accessor method for cpuOperatingFrequency
	 * @return float value of cpuOperatingFrequency
	 **/
	public function getCpuOperatingFrequency() {
		return $this->cpuOperatingFrequency;
	}
	/**
	 * accessor method for cpuTurboFrequency
	 * @return float value of cpuTurboFrequency
	 **/
	public function getCpuTurboFrequency() {
		return $this->cpuTurboFrequency;
	}
	/**
	 * accessor method for cpuCores
	 * @return int|null value of cpuCores
	 **/
	public function getCpuCores() {
		return $this->cpuCores;
	}
	/**
	 * accessor method for cpuCache
	 * @return string value of cpuCache
	 **/
	public function getCpuCache() {
		return $this->cpuCache;
	}
	/**
	 * accessor method for cpuIsCoolerIncluded
	 * @return bool value of cpuIsCoolerIncluded
	 **/
	public function getCpuIsCoolerIncluded() {
		return $this->cpuIsCoolerIncluded;
	}
	/**
	 * accessor method for cpuIsHyperThreading
	 * @return bool value of cpuIsHyperThreading
	 **/
	public function getCpuIsHyperThreading() {
		return $this->cpuIsHyperThreading;
	}
	/**
	 * accessor method for cpuIsOnboardGraphics
	 * @return bool value of cpuIsOnboardGraphics
	 **/
	public function getCpuIsOnboardGraphics() {
		return $this->cpuIsOnboardGraphics;
	}
	/**
	 * mutator method for cpuId
	 *
	 * @param int|null $newCpuId new value of cpu id
	 * @throws \RangeException if $newCpuId is negative
	 * @throws \TypeError if $newCpuId is not an integer
	 **/
	public function setCpuId(int $newCpuId = null) {
		// base case: if the cpu id is null, this is a new cpu without an id from mySQL
		if($newCpuId === null) {
			$this->cpuId = null;
			return;
		}
		//verify the cpu id is positive
		if($newCpuId <= 0){
			throw (new \RangeException("cpu id is not positive"));
		}
		// converts and stores the cpu id
		$this->cpuId = $newCpuId;
	}
}