<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Data Design: PC Part Picker</title>
	</head>
	<body>
		<header>
			<h1>Data Design: PC Part Picker</h1>
		</header>
	</body>
	<main>

		<!-- Begin Persona Section -->
		<section>
			<h2>Persona</h2>
			<hr/>
			<p>Name: David Wilson</p>
			<p>Age: 27</p>
			<p>Profession: Musician, Starbucks Barista</p>
			<p>Technology: 15" HP laptop, running Windows 10</p>
			<p>
				Attitudes and Behaviors: Impulsive-Shopper. David will only spend an hour at most researching before making his purchase. David has heard of PCPartPicker and has begun using it for his prospective build. He still has yet to choose a processor.
			</p>

			<p>
				Frustrations and Needs: David needs a CPU that will be compatible with his build. David is also looking for a CPU that will work well for gaming and music production. Because David is unsure what specifications he is looking for, he has a large amount of CPUs to search through.<br/>
				In the next few days, he hopes to put the whole build together, so that he can show it off at a LAN party. But, he has put off purchasing his CPU and to get reasonable shipping he needs to order in the next 30 minutes.
			</p>
			<p>
				Goals: David only has one concern: Is this the best CPU for the price? Will he be able to find a compatible CPU in only 30 minutes?
			</p>
		</section>

		<!-- Begin Use Case Section -->
		<section>
		<h2>Use Case</h2>
		<hr/>
		<p>
			David has purchased all of his computer parts piecemeal for the build. The only part he is still missing is a CPU. Based on a quick search in Google, he found many builders of gaming pc's use quad-core Core i5s and i7s. However, that doesn't narrow his search down much. Since he is just now deciding on his CPU, it needs to be able to fit into his motherboard's socket which is a "LGA1151". He goes on to PCPartPicker.com, clicks on "Browse by Individual Parts" and then "CPU". He then filters the list by socket type "LGA1151". To narrow the list down to the most popular CPUs, he can also filter the list to any CPU rated 4 stars and up. At this point, its just a matter of personal preference.
		</p>
		</section>

		<!-- Begin Entities Section -->
		<section>
			<h2>Entities</h2>
			<hr/>
			<h3>CPU</h3>
			<ul>
				<li>cpuId (Primary key)</li>
				<li>cpuModelName</li>
				<li>cpuManufacturer</li>
				<li>cpuDataWidth</li>
				<li>cpuSocket</li>
				<li>cpuOperatingFrequency</li>
				<li>cpuTurboFrequency</li>
				<li>cpuCores</li>
				<li>cpuCache</li>
				<li>cpuCoolerIncluded</li>
				<li>cpuHyperThreading</li>
				<li>cpuOnboardGraphics</li>
			</ul>

			<h3>Review</h3>
			<ul>
				<li>reviewId (Primary key)</li>
				<li>reviewProfileId (Foreign key from Profile)</li>
				<li>reviewCpuId (Foreign key from CPU)</li>
				<li>reviewTimeDate</li>
				<li>reviewText</li>
				<li>reviewRating</li>
			</ul>

			<h3>Profile</h3>
			<ul>
				<li>profileId (Primary key)</li>
				<li>profileImage</li>
				<li>profileName</li>
				<li>profileDateCreated</li>
				<li>profileEmail</li>
				<li>profileAbout</li>
			</ul>

		</section>
		<section>
			<img src="img/diagram.png" alt="ERD Diagram"/>
		</section>
		<hr/>
	</main>
</html>