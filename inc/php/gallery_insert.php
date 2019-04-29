<div id="tab-container">
	<button class="btn active" onclick="filterSelection('all')">See All</button>
<?php 

	/* get URI and check if file exists */
	$uri = $_SERVER['SCRIPT_NAME'];
	$fName = basename($uri, '.php');
	echo "<script>//console.log('".$fName."');</script>";


		if($fName == 'gallery' ) {
			$arrList = array('landscape', 'street', 'art', 'travel', 'people');
			getArr($arrList);
		} elseif ($fName == 'event') {
			$arrList = array('wedding', 'engagement', 'baptism', 'bar-nitsva', 'bat-nitsva', 'brit-millah');;
			getArr($arrList);
		}
		
		function getArr($arrList) {
			for ($i = 0; $i < count($arrList); $i++) { ?>
				<button class='btn <?php echo $arrList[$i]; ?>' onclick='filterSelection("<?php echo $arrList[$i]; ?>")'> <?php echo $arrList[$i]; ?></button>

<?php
		}
	}
?>
</div>
<div id="galleryModal" class="gallery-modal">
	<span class="close-gallery-modal" onclick="closeColgModal()">&times;</span>
	<img class="gallery-img-holder" id="modalImage">
</div>

<div class="gallery-row">
	<div class="column street wedding">
		<img src="./web-images/images/angel-3740392_640.jpg" onclick="imgModal(this)" />
	</div>
	<div class="column street wedding">
		<img src="./web-images/images/camera-2.jpg" onclick="imgModal(this)" />
	</div>
	<div class="column street wedding">
		<img src="./web-images/images/camera-24.jpg" onclick="imgModal(this)" />
	</div>
	<div class="column street baptism">
		<img src="./web-images/images/street-1.jpg" onclick="imgModal(this)" />
	</div>
	<div class="column travel baptism">
		<img src="./web-images/images/travel-30.jpg" onclick="imgModal(this)" />
	</div>
	<div class="column travel baptism">
		<img src="./web-images/images/street-24.jpg" onclick="imgModal(this)" />
	</div>
	<div class="column travel bat-nitsva baptism">
		<img src="./web-images/images/street-16.jpg" onclick="imgModal(this)" />
	</div>
	<div class="column travel bat-nitsva">
		<img src="./web-images/images/sailing-boat-1593613_640.jpg" onclick="imgModal(this)" />
	</div>
	<div class="column art bat-nitsva bar-nitsva">
		<img src="./web-images/images/art-13.jpg" onclick="imgModal(this)" />
	</div>
	<div class="column art bat-nistva">
		<img src="./web-images/images/art-12.jpg" onclick="imgModal(this)" />
	</div>
	<div class="column art brit-millah">
		<img src="./web-images/images/wild-flowers-571940_640.jpg" onclick="imgModal(this)" />
	</div>
	<div class="column art brit-millah bar-nitsva">
		<img src="./web-images/images/girl-524141_640.jpg" onclick="imgModal(this)" />
	</div>	
	<div class="column people brit-millah bat-nitsva">
		<img src="./web-images/images/children-5.jpg" onclick="imgModal(this)" />
	</div>
	<div class="column people bar-nitsva brit-millah">
		<img src="./web-images/images/angel-3740392_640.jpg" onclick="imgModal(this)" />
	</div>
	<div class="column people bar-nitsva">
		<img src="./web-images/images/wedding-12.jpg" onclick="imgModal(this)" />
	</div>
	<div class="column people engagement">
		<img src="./web-images/images/bee-eaters-3749679_1920.jpg" onclick="imgModal(this)" />
	</div>
	<div class="column landscape engagement">
		<img src="./web-images/images/art-photography-33.jpg" onclick="imgModal(this)" />
	</div>
	<div class="column landscape engagement">
		<img src="./web-images/images/tree-3097419_640.jpg" onclick="imgModal(this)" />
	</div>
	<div class="column landscape engagement">
		<img src="./web-images/images/travel-34.jpg" onclick="imgModal(this)" />
	</div>
	<div class="column landscape wedding">
		<img src="./web-images/images/street-16.jpg" onclick="imgModal(this)" />
	</div>
</div>