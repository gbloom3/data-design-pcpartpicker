<?php
/**
 * User Profile Class
 *
 * This Profile will contain the users information for use on their profile page. This can be extended to include favorite cpu's and other
 * information.
 *
 * @author Greg Bloom <gbloomdev@gmail.com>
 * @version 0.0.1
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
}
?>