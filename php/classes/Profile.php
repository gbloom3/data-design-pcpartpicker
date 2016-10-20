<?php
/**
 * User Profile Class
 *
 * This Profile will contain the users information that can be viewed on their profile page. This can be extended to include favorite cpu's
 * and other information.
 *
 * @author Greg Bloom <gbloomdev@gmail.com>
 * @version 0.1.0
 **/

class Profile{
	/**
	 * id for this profile; this is the primary key
	 * @var int $profileId
	 */
	private $profileId;
	/**
	 * image for use as a profile avatar
	 * @var string $profileImage
	 */
	private $profileImage;
	/**
	 * username of the profile
	 * @var string $profileName
	 */
	private $profileName;
	/**
	 * date on which the profile was created
 	 * @var DateTime $profileDateCreated
	 */
	private $profileDateCreated;
	/**
	 * email address of the profile
	 * @var string $profileEmail
	 */
	private $profileEmail;
	/**
	 * extra text used for personalizing the profile
	 * @var string $profileAbout
	 */
	private $profileAbout;

	// constructor goes here

	/**
	 * accessor method for profileId
	 * @return int|null value of profileId
	 **/
	public function getProfileId() {
		return $this->profileId;
	}
	/**
	 * accessor method for profileImage
	 * @return string of profileImage
	 **/
	public function getProfileImage() {
		return $this->profileImage;
	}
	/**
	 * accessor method for profileName
	 * @return string of profileName
	 **/
	public function getProfileName() {
		return $this->profileName;
	}
	/**
	 * accessor method of profileDateCreated
	 * @return DateTime of profileDateCreated
	 **/
	public function  getProfileDateCreated() {
		return $this->profileDateCreated;
	}
	/**
	 * accessor method of profileEmail
	 * @return string of profileEmail
	 **/
	public function  getProfileEmail() {
		return $this->profileEmail;
	}
	/**
	 * accessor method of profileAbout
	 * @return string of profileAbout
	 **/
	public function  getProfileAbout() {
		return $this->profileAbout;
	}
	/**
	 * mutator method for profileId
	 *
	 * @param int|null $newProfileId new value of profile id
	 * @throws \RangeException if $newProfileId is negative
	 * @throws \TypeError if $newProfileId is not an integer
	 **/
	public function setProfileId(int $newProfileId = null) {
		// base case: if the profile id is null, this is a new profile without an id from mySQL
		if($newProfileId === null) {
			$this->profileId = null;
			return;
		}
		//verify the profile id is positive
		if($newProfileId <= 0){
			throw (new \RangeException("profile id is not positive"));
		}
		// converts and stores the profile id
		$this->profileId = $newProfileId;
	}
	/**
	 * mutator method for profileImage
	 *
	 * @param string $newProfileImage new value of profile image
	 * @throws UnexpectedValueException if $newProfileImage is not valid
	 **/
	public function setProfileImage(string $newProfileImage) {
		$newProfileImage = filter_var($newProfileImage,FILTER_SANITIZE_STRING);
		if($newProfileImage === false){
			throw (new \UnexpectedValueException("image is not a valid string"));
		}
		$this->profileImage = $newProfileImage;
	}

	/**
	 * mutator method for profileName
	 *
	 * @param string $newProfileName new value of profile name
	 * @throws UnexpectedValueException if $newProfileName is not valid
	 */
	public function setProfileName(string $newProfileName) {
		$newProfileName= filter_var($newProfileName,FILTER_SANITIZE_STRING);
		if($newProfileName === false){
			throw (new \UnexpectedValueException("name is not a valid string"));
		}
		$this->profileName = $newProfileName;
	}

	/**
	 * mutator method for profileDateCreated
	 *
	 * @param DateTime $newProfileDateCreated new value of profile creation date
	 *
	 * need to implement a DateTime sanitation method
	 */
	public function setProfileDateCreated(DateTime $newProfileDateCreated) {
		$this->profileDateCreated = $newProfileDateCreated;
	}
	/**
	 * mutator method for profileEmail
	 *
	 * @param string $newProfileEmail new value of profile email
	 * @throws UnexpectedValueException if $newProfileEmail is not valid
	 */
	public function setProfileEmail(string $newProfileEmail) {
		$newProfileEmail = filter_var($newProfileEmail,FILTER_SANITIZE_EMAIL);
		if($newProfileEmail === false){
			throw (new \UnexpectedValueException("email is not a valid string"));
		}
		$this->profileEmail = $newProfileEmail;
	}

	/**
	 * mutator method for profileAbout
	 *
	 * @param string $newProfileAbout new value of profile about
	 * @throws UnexpectedValueException if $newProfileAbout is not valid
	 */
	public function setProfileAbout(string $newProfileAbout) {
		$newProfileAbout = filter_var($newProfileAbout,FILTER_SANITIZE_STRING);
		if($newProfileAbout === false){
			throw (new \UnexpectedValueException("about is not a valid string"));
		}
		$this->profileAbout = $newProfileAbout;
	}
}