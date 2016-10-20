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
	 * constructor for this Cpu
	 *
	 * @param int $newCpuId new value of cpu id
	 * @param string $newCpuManufacturer new value of cpu manufacturer
	 * @param string $newCpuModelName new value of cpu model name
	 * @param string $newCpuModelNumber new value of cpu model number
	 * @param int $newCpuDataWidth new value of cpu data width
	 * @param string $newCpuSocket new value of cpu socket
	 * @param float $newCpuOperatingFrequency new value of cpu operating frequency
	 * @param float $newCpuTurboFrequency new value of cpu turbo frequency
	 * @param int $newCpuCores new value of cpu cores
	 * @param string $newCpuCache new value of cpu cache
	 * @param bool $newCpuIsCoolerIncluded new value of boolean cooler included
	 * @param bool $newCpuIsHyperThreading new value of boolean hyperthreading
	 * @param bool $newCpuIsOnboardGraphics new value of boolean onboard graphics
	 * @throws UnexpectedValueException if any of the parameters are invalid
	 **/
	public function _construct($newCpuId,$newCpuManufacturer,$newCpuModelName,$newCpuModelNumber,$newCpuDataWidth,$newCpuSocket,$newCpuOperatingFrequency,$newCpuTurboFrequency,$newCpuCores,$newCpuCache,$newCpuIsCoolerIncluded,$newCpuIsHyperThreading, $newCpuIsOnboardGraphics){
		try{
			$this->setCpuId($newCpuId);
			$this->setCpuManufacturer($newCpuManufacturer);
			$this->setCpuModelName($newCpuModelName);
			$this->setCpuModelNumber($newCpuModelNumber);
			$this->setCpuDataWidth($newCpuDataWidth);
			$this->setCpuSocket($newCpuSocket);
			$this->setCpuOperatingFrequency($newCpuOperatingFrequency);
			$this->setCpuTurboFrequency($newCpuTurboFrequency);
			$this->setCpuCores($newCpuCores);
			$this->setCpuCache($newCpuCache);
			$this->setCpuIsCoolerIncluded($newCpuIsCoolerIncluded);
			$this->setCpuIsHyperThreading($newCpuIsHyperThreading);
			$this->setCpuIsOnboardGraphics($newCpuIsOnboardGraphics);
		}catch(UnexpectedValueException $exception) {
			throw (new UnexpectedValueException("Unable to construct Cpu",0,$exception));
		}
	}
	/**
	 * mutator method for cpuId
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

	/**
	 * mutator method for cpuManufacturer
	 * @param string $newCpuManufacturer new value of cpu manufacturer
	 * @throws \UnexpectedValueException if $newCpuManufacturer is not a valid string
	 **/
	public function setCpuManufacturer(string $newCpuManufacturer) {
		$newCpuManufacturer = filter_var($newCpuManufacturer,FILTER_SANITIZE_EMAIL);
		if($newCpuManufacturer === false){
			throw (new \UnexpectedValueException("manufacturer is not a valid string"));
		}
		$this->cpuManufacturer = $newCpuManufacturer;
	}

	/**
	 * mutator method for cpuModelName
	 * @param string $newCpuModelName new value of cpu model name
	 * @throws \UnexpectedValueException if $newCpuModelName is not a valid string
	 **/
	public function setCpuModelName(string $newCpuModelName) {
		$newCpuModelName = filter_var($newCpuModelName,FILTER_SANITIZE_EMAIL);
		if($newCpuModelName === false){
			throw (new \UnexpectedValueException("model name is not a valid string"));
		}
		$this->cpuModelName = $newCpuModelName;
	}

	/**
	 * mutator method for cpuModelNumber
	 * @param string $newCpuModelNumber new value of cpu model number
	 * @throws \UnexpectedValueException if $newCpuModelNumber is not a valid string
	 **/
	public function setCpuModelNumber(string $newCpuModelNumber) {
		$newCpuModelNumber = filter_var($newCpuModelNumber,FILTER_SANITIZE_EMAIL);
		if($newCpuModelNumber === false){
			throw (new \UnexpectedValueException("model number is not a valid string"));
		}
		$this->cpuModelNumber = $newCpuModelNumber;
	}

	/**
	 * mutator method for cpuDataWidth
	 * @param int $newCpuDataWidth new value of cpu data width
	 * @throws \RangeException if $newCpuDataWidth is negative
	 * @throws \TypeError if $newCpuDataWidth is not an integer
	 **/
	public function setCpuDataWidth(int $newCpuDataWidth) {
		$newCpuDataWidth = filter_var($newCpuDataWidth,FILTER_VALIDATE_INT);
		if($newCpuDataWidth === false){
			throw (new \TypeError("data width is not an integer"));
		}
		if($newCpuDataWidth <= 0)
		{
			throw (new \RangeException("data width is not positive"));
		}
		$this->cpuDataWidth = $newCpuDataWidth;
	}

	/**
	 * mutator method for cpuSocket
	 * @param string $newCpuSocket new value of cpu socket
	 * @throws \UnexpectedValueException if $newCpuModelNumber is not a valid string
	 **/
	public function setCpuSocket(string $newCpuSocket) {
		$newCpuSocket = filter_var($newCpuSocket,FILTER_SANITIZE_EMAIL);
		if($newCpuSocket === false){
			throw (new \UnexpectedValueException("socket is not a valid string"));
		}
		$this->cpuSocket = $newCpuSocket;
	}

	/**
	 * mutator method for cpuOperatingFrequency
	 * @param float $newCpuOperatingFrequency new value of cpu operating frequency
	 * @throws \RangeException if $newCpuOperatingFrequency is negative
	 * @throws \TypeError if $newCpuOperatingFrequency is not an integer
	 **/
	public function setCpuOperatingFrequency(float $newCpuOperatingFrequency) {
		$newCpuOperatingFrequency = filter_var($newCpuOperatingFrequency,FILTER_VALIDATE_FLOAT);
		if($newCpuOperatingFrequency === false){
			throw (new \TypeError("operating frequency is not a float"));
		}
		if($newCpuOperatingFrequency <= 0) {
			throw (new \RangeException("operating frequency is not positive"));
		}
		$this->cpuOperatingFrequency = $newCpuOperatingFrequency;
	}

	/**
	 * mutator method for cpuTurboFrequency
	 * @param float $newCpuTurboFrequency new value of cpu turbo frequency; may have a null value
	 * @throws \RangeException if $newCpuTurboFrequency is negative
	 * @throws \TypeError if $newCpuTurboFrequency is not an integer
	 **/
	public function setCpuTurboFrequency(float $newCpuTurboFrequency) {
		if($newCpuTurboFrequency === null) {
			$this->cpuTurboFrequency = $newCpuTurboFrequency;
			return;
		}
		$newCpuTurboFrequency = filter_var($newCpuTurboFrequency,FILTER_VALIDATE_FLOAT);
		if($newCpuTurboFrequency === false){
			throw (new \TypeError("turbo frequency is not a float"));
		}
		if($newCpuTurboFrequency < 0){
			throw (new \RangeException("turbo frequency is not positive"));
		}
		$this->cpuTurboFrequency = $newCpuTurboFrequency;
	}

	/**
	 * mutator method for cpuCores
	 * @param int $newCpuCores new value of cpu cores
	 * @throws \RangeException if $newCpuCores is negative
	 * @throws \TypeError if $newCpuCores is not an integer
	 **/
	public function setCpuCores(int $newCpuCores) {
		$newCpuCores = filter_var($newCpuCores,FILTER_VALIDATE_INT);
		if($newCpuCores === false){
			throw (new \TypeError("cores is not an integer"));
		}
		if($newCpuCores <= 0){
			throw (new \RangeException("cores is not positive"));
		}
		$this->cpuCores = $newCpuCores;
	}

	/**
	 * mutator method for the cpuCache
	 * @param string $newCpuCache new value of cpu cache
	 * @throws \UnexpectedValueException if $newCpuCache is not a string
	 **/
	public function setCpuCache(string $newCpuCache) {
		$newCpuCache = filter_var($newCpuCache,FILTER_SANITIZE_EMAIL);
		if($newCpuCache === false){
			throw (new \UnexpectedValueException("cache is not a valid string"));
		}
		$this->cpuCache = $newCpuCache;
	}

	/**
	 * mutator method for the cpuIsCoolerIncluded
	 * @param boolean $newCpuIsCoolerIncluded new value of cooler boolean
	 **/
	public function setCpuIsCoolerIncluded(bool $newCpuIsCoolerIncluded) {
		$this->cpuIsCoolerIncluded = $newCpuIsCoolerIncluded;
	}

	/**
	 * mutator method for the cpuIsHyperThreading
	 * @param boolean $newCpuIsHyperThreading new value of hyperthreading boolean
	 **/
	public function setCpuIsHyperThreading(bool $newCpuIsHyperThreading) {
		$this->cpuIsHyperThreading = $newCpuIsHyperThreading;
	}

	/**
	 * mutator method for the cpuIsOnboardGraphics
	 * @param boolean $newCpuIsOnboardGraphics new value of onboard graphics boolean
	 **/
	public function setCpuIsOnboardGraphics(bool $newCpuIsOnboardGraphics) {
		$this->cpuIsOnboardGraphics = $newCpuIsOnboardGraphics;
	}
}