DROP TABLE IF EXISTS review;
DROP TABLE IF EXISTS cpu;
DROP TABLE IF EXISTS profile;

CREATE TABLE cpu(
	cpuId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	cpuModelName VARCHAR(30) NOT NULL,
	cpuManufacturer VARCHAR(20) NOT NULL,
	cpuDataWidth CHAR(2) NOT NULL,
	cpuSocket VARCHAR(10),
	cpuOperatingFrequency DEC(2,1) NOT NULL,
	cpuTurbofrequency DEC(2,1),
	cpuCores TINYINT ,
	cpuCache TEXT,
	cpuCoolerIncluded BOOL,
	cpuHyperThreading BOOL,
	cpuOnboardGraphics BOOL,
	UNIQUE(cpuModelName),
	PRIMARY KEY (cpuId));

CREATE TABLE profile(
	profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	profileImage VARCHAR(30) NOT NULL,
	profileName VARCHAR(20) NOT NULL,
	profileDateCreated TIMESTAMP NOT NULL,
	profileEmail VARCHAR(10) NOT NULL,
	profileAbout TEXT,
	UNIQUE(profileName),
	PRIMARY KEY (profileId));

CREATE TABLE review(
	reviewId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	reviewProfileId INT UNSIGNED NOT NULL,
	reviewCpuId INT UNSIGNED NOT NULL,
	reviewTimeDate TIMESTAMP NOT NULL,
	reviewText VARCHAR(140),
	reviewRating TINYINT NOT NULL,
	INDEX (reviewProfileId),
	INDEX (reviewCpuId),
	FOREIGN KEY (reviewProfileId) REFERENCES profile(profileId),
	FOREIGN KEY (reviewCpuId) REFERENCES cpu(cpuId),
	PRIMARY KEY (reviewId));
