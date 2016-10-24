<?php
/**
 * User Profile Class
 *
 * This Profile will contain the users information that can be viewed on their profile page. This can be extended to include favorite profile's
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
	 * constructor for this Profile
	 *
	 * @param int $newProfileId new value of profile id
	 * @param string $newProfileImage new value of profile manufacturer
	 * @param string $newProfileName new value of profile model name
	 * @param DateTime $newProfileDateCreated new value of profile model number
	 * @param string $newProfileEmail new value of profile data width
	 * @param string $newProfileAbout new value of profile socket
	 *
	 * @throws UnexpectedValueException if any of the parameters are invalid
	 **/
	public function _construct($newProfileId,$newProfileImage,$newProfileName,$newProfileDateCreated,$newProfileEmail,$newProfileAbout){
		try{
			$this->setProfileId($newProfileId);
			$this->setProfileImage($newProfileImage);
			$this->setProfileName($newProfileName);
			$this->setProfileDateCreated($newProfileDateCreated);
			$this->setProfileEmail($newProfileEmail);
			$this->setProfileAbout($newProfileAbout);
		}catch(UnexpectedValueException $exception) {
			throw (new UnexpectedValueException("Unable to construct Profile",0,$exception));
		}
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
	/**
	 * inserts this Profile into mySQL
	 *
	 * @param \PDO $pdo PDO connection object
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError if $pdo is not a PDO connection object
	 **/
	public function insert(\PDO $pdo){
		if($this->profileId !== null) {
			throw(new \PDOException("not a new profile"));
		}

		$query = "INSERT INTO profile(profileImage, profileName, profileDateCreated, profileEmail, profileAbout) VALUES(:profileImage,:profileName, :profileDateCreated, :profileEmail, :profileAbout)";
		$statement = $pdo->prepare($query);

		$formattedDate = $this->profileDateCreated->format("Y-m-d H:i:s");
		$parameters = ["profileImage" => $this->profileImage, "profileName" => $this->profileName, "profileDateCreated" => $formattedDate, "profileEmail" => $this->profileEmail, "profileAbout" => $this->profileAbout];
		$statement->execute($parameters);

		$this->profileId = intval($pdo->lastInsertId());
	}
	/**
	 * deletes this Profile from mySQL
	 *
	 * @param \PDO $pdo PDO connection object
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError if $pdo is not a PDO connection object
	 **/
	public function delete(\PDO $pdo) {
		if($this->profileId === null) {
			throw(new \PDOException("unable to delete a profile that does not exist"));
		}

		$query = "DELETE FROM profile WHERE profileId = :profileId";
		$statement = $pdo->prepare($query);

		$parameters = ["profileId" => $this->profileId];
		$statement->execute($parameters);
	}

	/**
	 * updates this Profile in mySQL
	 *
	 * @param \PDO $pdo PDO connection object
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError if $pdo is not a PDO connection object
	 **/
	public function update(\PDO $pdo) {

		if($this->profileId === null) {
			throw(new \PDOException("unable to update a profile that does not exist"));
		}

		$query = "UPDATE profile SET profileImage = :profileImage, profileName = :profileName, profileDateCreated = :profileDateCreated,profileEmail = :profileEmail, profileAbout = :profileAbout WHERE profileId = :profileId";
		$statement = $pdo->prepare($query);

		$formattedDate = $this->profileDateCreated->format("Y-m-d H:i:s");
		$parameters = ["profileImage" => $this->profileImage, "profileName" => $this->profileName, "profileDateCreated" => $formattedDate, "profileEmail" => $this->profileEmail,"profileAbout" => $this->profileAbout, "profileId" => $this->profileId];
		$statement->execute($parameters);
	}
}
