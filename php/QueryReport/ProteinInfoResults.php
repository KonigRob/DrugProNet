<?php
/**
 * Created by PhpStorm.
 * User: rob
 * Date: 19/05/18
 * Time: 3:52 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		DrugProNet
	</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
	      integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
	      crossorigin="anonymous">
	<link rel="stylesheet" type="text/css"  href="../../upperBar.css">
	<link rel="stylesheet" type="text/css"  href="../../lowerHalf.css">
</head>
<body id="top">
<div>
	<div>
		<div id="header">
			<a href="../../index.html" target="_blank">
				<img class="img-fluid" src="../../images/DrugProNETBanner.jpg">
			</a>
		</div>
	</div>
	<!--Navbar with links-->
	<div id="navbarWithLinks">
		<a id="1" href="http://kinatlas.ca:8080" target="_blank"><img id="kinatlas" width="128" height="40" src="../../images/navBar_01.png"></a>
		<a id="2" href="http://www.transcriptonet.ca" target="_blank"><img id="transcriptonet" width="141" height="40" src="../../images/navBar_02.png"></a>
		<a id="3" href="http://www.phosphonet.ca" target="_blank"><img id="phosphonet" width="127" height="40" src="../../images/navBar_03.png"></a>
		<a id="4" href="http://www.onconet.ca" target="_blank"><img id="onconet" width="107" height="40" src="../../images/navBar_04.png"></a>
		<a id="5" href="http://www.kinasenet.ca" target="_blank"><img id="kinasenet" width="111" height="40" src="../../images/navBar_05.png"></a>
		<a id="6" href="http://www.drugkinet.ca" target="_blank"><img id="drugkinet" width="118" height="40" src="../../images/navBar_06.png"></a>
		<a id="7" href="http://www.kinet-am.ca" target="_blank"><img id="kinetam" width="105" height="40" src="../../images/navBar_07.png"></a>
		<a id="8" href="http://www.kinexus.ca/kinetica" target="_blank"><img id="kinetica" width="163" height="40" src="../../images/navBar_08.png"></a>
	</div>
	<!--Query bar-->
	<div id="queryBar">
		<!--Select & dropdown-->
		<div id="selectAndDrop">
			<!--select-->
			<div id="select">
				Select type of query desired
			</div>
			<!--dropdown-->
			<div class="dropdown" id="dropDown">
				<button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">Click to view options</button>
				<div class="dropdown-menu" id="dropDownmEnu">
					<a class="dropdown-item" href="http://www.drugpronet.ca/ProteinDrugQuery.html">Protein-focused Drug Interaction</a>
					<a class="dropdown-item" href="http://www.drugpronet.ca/DrugProteinQuery.html">Drug-focused Protein Interaction</a>
					<a class="dropdown-item" href="http://www.drugpronet.ca/ProteinInfo.html">Protein Information</a>
					<a class="dropdown-item" href="http://www.drugpronet.ca/DrugInfo.html">Drug Information</a>
				</div>
			</div>
		</div>
		<!--links-->
		<div id="links">
			<span id="updatePurple">Updated: 2018 May </span>
			<a href="http://www.genexus.ca">Home</a>
			<a href="http://www.kinexus.ca" target="_blank">Kinuxus</a>
			<a href="http://www.kinexus.ca/contact/contact.htm">Contact</a>
			<a href="http://www.drugpronet.ca/credits.html">Credits</a>
		</div>
	</div>
	<!--Information for the site-->
	<div id="infoDiv">
		<!--label 1-->
		<div class="labelHeading">
			<p>
				General Info
			</p>
		</div>
		<!--home info 1-->
		<div class="infoBox" style="width: 450px">
			<p class="infoBoxGoldHeading">
				Protein Description
			</p>
			<p style="color: #738569">
				This report provides detailed information on one of over 485
				proteins that have been experimentally identified as targets for
				inhibitory drugs and co-crystallized with these compounds. The
				data has been annotated from multiple sources, including the US
				National Center for Biotechnology Information, UniProt, and
				Phosphosite Plus, and url links are provided to these and other
				SigNET KnowledgeBases.
			</p>
		</div>
		<!--ad-->
		<div id="ad">
			<a id="AdRotatorLink" href="http://www.kinexus.ca/ourServices/substrate_profiling/index.html" target="_blank">
				<img id="AdRotatorImg" src="../../images/10MY25WebsiteBannerAds-1v0.1.jpg" alt="Need cells cultured and treated to your specifications? Try our Custom Cell Preparation Services">
			</a>
		</div>
		<?php
			/*
			 * This is to connect to the database.  If you can, change this to PDO.  People will like you more, haha
			 *
			 */
			$servername = "localhost";
			$username = "root";
			$password = "yellow";
			$dbname = "dyidb";

			$db = mysqli_connect($servername, $username, $password) or
			die(mysqli_connect_error());

			if(!$db){
				die("connection failed: ". mysqli_connect_error());
			}

			mysqli_select_db($db, $dbname) or die(mysqli_error($db));
			$obj = $_POST['threeLetters'];
			$result = mysqli_query($db, "SELECT * FROM new_countries WHERE new_countries.name LIKE '$obj'");
			$row = mysqli_fetch_assoc($result);

			$Nomenclature = ["Protein short name:", "Protein full name:", "Alias:", "Protein type:", "Kinase group:",
							"Kinase family:", "Kinase subfamily:"];

			$columnsForNom = ["B", "C", "D", "G", "H", "I5", "J"];

			$GeneOntology = ["Cell component:", "Molecular function:", "Biological process:"];

			$columnsForCell = ["L", "M", "O"];
			$linksForCell = ["I", "K", "M"];
			$columnsForMol = ["Q", "S", "U"];
			$linksForMol = ["P", "R", "T"];
			$columnsForBio = ["W", "Y", "AA"];
			$linksForBio = ["V", "X", "Z"];

			$specificInfoLabels = ["Mass (Da):", "Number AA:", "UniProt ID:", "Entry ID", "NCBI RefSeq ID:", "Int. Protein ID",
							"PhosphoNET ID:", "PhosphoSItePlus:", "KinaseNET ID:", "OncoNET ID:", "PDB Entries:"];

			$columnsForSpeInfo = ["E", "F", "AC", "AE", "AF", "AH", "AI", "AK", "AC", "AC", "AQ"];
			$linksForSpecInfo = ["", "", "AD", "AD", "AG", "", "AJ", "AL", "AM", "AN", "AQ"];
			//https://www.rcsb.org/structure/ with AQ

			$entries = ["name", "name", "name", "name", "name", "name", "name", "name", "name", "name", "name", "name", "name",
						"name", "name", "name", "name", "name", "name", "name", "name"];

			/*
			 * This is for the Nomenclature
			 *
			 */
			//if the name isn't empty
			$isNomBox = false;
			$nomBox = '';
			/*You might need to change the checking of an empty cell*/
			for($i = 0; $i < 7; ++$i){
//				$index = $row[$columnsForNom[$i];
				$index = $row[$entries[$i]];
				if($index !== ''){
					$isNomBox = true;
					$nomBox = $nomBox . "<div class='dataLabels'><p>$Nomenclature[$i]</p></div>
									<div class='dataBox'><p style='color: #c0c0c0'>".$index."</p></div>";
				}
			}
			if($isNomBox === true){
				echo "<div class='labelHeading'>
				<p>
					&nbsp;
				</p>
			</div><div class='infoBox'>
				<p class='infoBoxGoldHeading'>
					Nomenclature
				</p>
			</div>".$nomBox;
			}
			/*
			 * This is for Cell component
			 */
			$isCell = false;
			$cell = "";
			for($i = 0; $i < 3; ++$i){
//				$index = $row[$columnsForCell[$i]];
				$index = $row[$entries[$i]];
//				$links = $row[$linksForCell[$i]];
				$links = $row[$entries[$i]];
				if($index !== ''){
					$cell = $cell . "<a href=".$links." style='color: #c0c0c0 ; text-decoration: none; padding: 0 30px 0 0'  >".$index."</a>";
					$isCell = true;
				}
			}
			if($isCell === true){
				$cell = "<div class='dataLabels'><p>$GeneOntology[0]</p></div>
						<div class='dataBox'>$cell</div>";
			}
			/*
			 * This is for Molecular
			 */
			$isMole = false;
			$mol = "";
			for($i = 0; $i < 3; ++$i){
//				$index = $row[$columnsForMol[$i]];
				$index = $row[$entries[$i]];
//				$links = $row[$linksForMol[$i]];
				$links = $row[$entries[$i]];
				if($index !== ''){
					$mol = $mol . "<a href=".$links." style='color: #c0c0c0 ; text-decoration: none; padding: 0 30px 0 0'  >".$index."</a>";
					$isMole = true;
				}
			}
			if($isMole === true){
				$mol = "<div class='dataLabels'><p>$GeneOntology[1]</p></div>
						<div class='dataBox'>$mol</div>";
			}
			/*
			 * This is for Biological
			 */
			$isBio = false;
			$bilo = "";
			for($i = 0; $i < 3; ++$i){
//				$index = $row[$columnsForBio[$i]];
				$index = $row[$entries[$i]];
//				$links = $row[$linksForBio[$i]];
				$links = $row[$entries[$i]];
				if($index !== ''){
					$bilo = $bilo . "<a href=".$links." style='color: #c0c0c0 ; text-decoration: none; padding: 0 30px 0 0'  >".$index."</a>";
					$isBio = true;
				}
			}
			if($isBio === true){
				$bilo = "<div class='dataLabels'><p>$GeneOntology[2]</p></div>
						<div class='dataBox'>$bilo</div>";
			}
			/*
			 * This is for the Gene Ontology Terms
			 *
			 */
			if($isCell === true or $isBio === true or $isMole === true){
				echo "<div class='labelHeading'>
				<p>
					&nbsp;
				</p>
			</div><div class='infoBox'>
				<p class='infoBoxGoldHeading'>
					Gene Ontology Terms
				</p>
			</div>".$cell.$mol.$bilo;
			}
			/*
			 * This is for specific Info
			 */
			$isSpecificInfo = false;
			$specificInfo = "";
			for($i = 0; $i < 11; ++$i){
//				$index = $row[$columnsForSpeInfo[$i];
				$index = $row[$entries[$i]];
//				$links = $row[$linksForSpecInfo[$i]];
				$links = $row[$entries[$i]];
				if($i !== 0 and $i !== 1 and $i !== 5){
					if($index !== ''){
						$specificInfo = $specificInfo . "<div class=\"dataLabels\"><p>$specificInfoLabels[$i]</p></div>
											<div class=\"dataBox\"><a href=".$links." style=\"color: #c0c0c0 ; text-decoration: none;\"  >".$index."</a></div>";
						$isSpecificInfo = true;
					}
				} else {
					if($index !== ''){
						$specificInfo = $specificInfo . "<div class='dataLabels'><p>$specificInfoLabels[$i]</p></div>
									<div class='dataBox'><p style='color: #c0c0c0'>".$index."</p></div>";
						$isSpecificInfo = true;
					}
				}
			}
			if($isSpecificInfo === true){
				echo "<div class=\"labelHeading\">
				<p>
					&nbsp;
				</p>
				</div><div class=\"infoBox\">
				<p class=\"infoBoxGoldHeading\">
					Specific Info
				</p>
			</div>".$specificInfo;
			}
		?>
		<!--label for footer-->
		<div class="labelHeading">
			<p>
				&nbsp;
			</p>
		</div>
		<!--footer-->
		<div id="footerBox">
			<p>
				Copyright © 2018 Kinexus Bioinformatics Corporation.  All rights reserved.
			</p>
		</div>
	</div>
</div>
<!--floating home and top-->
<div id="homeTopBox">
	<div style="width: 40px; float: left">&nbsp</div>
	<div style="width: 150px; float: left; text-align: center;">
		<a id="homeLink" href="../../index.html">Home</a>
		<a id="topLink" href="#top">Top</a>
	</div>
</div>
<!--script to deal with navbar hover over-->
<script>
	function changeNavbar(number, weblink){
		$('#' + number).hover(function () {
			$('#' + weblink).attr("src", "../../images/navBarHover_0"+number+".png");
		}, function () {
			$('#' + weblink).attr("src", "../../images/navBar_0"+number+".png");
		});
	}
	$(function () {
		changeNavbar("1", "kinatlas");
		changeNavbar("2", "transcriptonet");
		changeNavbar("3", "phosphonet");
		changeNavbar("4", "onconet");
		changeNavbar("5", "kinasenet");
		changeNavbar("6", "drugkinet");
		changeNavbar("7", "kinetam");
		changeNavbar("8", "kinetica");
	})
</script>
<!--script to deal with rotating ads-->
<script>
	$(function(){
		// So that the first ad is random
		returnAd();
		// And all the following ads are "random"
		setInterval(returnAd, 30000);
	});
	function returnAd(){
		let adsAltText = ["Need cells cultured and treated to your specifications? Try our Custom Cell Preparation Services",
			"Want to identify kinase substrates, their phospho-sites and detection antibodies?  Try our unique Custom Kinase-Substrate Profilling Services",
			"Need to inexpensively test the specificity of your kinase inhibitors?  Try our Protein Kinase Microarray Servies for US$1.67 per kinase",
			"What to screen your cell/tissue Iysates against > 800 anitbodies?  Try our Antibody Microarray Services for US$1.10 per antibody",
			"Looking for a cost-effective strategy for biomarker discover and validation?  Try our antibody Microarray and Custom Multi-immunoblotting Services",
			"Want to screen cells/tissues for altered protein expression and phosphorylation?  Our Antibody Microarray Services track over 500 signalling proteins",
			"Need to rapidly characterize a new protein or phospho-site for regulation?  Try our Standard Reverse Lysate Microarray Services",
			"Need to evaluate hundreds of your tissue lysates for biomarker validation?  Try our Custom Reverse Lysate Microarray Services",
			"Need to inexpensively and rapidly validate gene or protein microarray data?  Try our Custom Kinetworks™ Multi-immunoblotting Services",
			"Want to accurately quantify protein phosphorylation in your cell tissue lysates?  Try our Phospho-site Multi-immunoblotting Services for US$20 per target",
			"Want to accurately quantify kinase expression in your cell tissue lysates?  Try our Protein Kinase Multi-immunoblottting Services for US$10 per target",
			"Want to compare your Kinexus proteomics data with thousands of other studies?  Query our KiNET Immunoblotting DataBase online with free access",
			"Want to visualize the locations of proteins and phosphorylation reactions in cells?  Check out of Custom Immunohistochemistry Services",
			"Need mg to gram quantities of recombinant forms of your favorite proteins?  Try our Custom Recombinant Protein Production Services",
			"Need mg quantities of synthetic peptides with special modifications?  Try our Custom Peptide Synthesis Services",
			"Need to identify optimal peptide substrate or perform epitope mapping?  Try our Custom Peptide Array production Services",
			"Need help with presentation of your proteomics data from Kinexus?  Try our Custom Graphics Services for US$89 per figure"
		];
		let adsImgLink = ["",
			"http://www.kinexus.ca/ourServices/substrate_profiling/index.html",
			"http://www.kinexus.ca/ourServices/cellCulture/index.html",
			"http://www.kinexus.ca/ourServices/microarrays/antibody_microarrays/antibody_microarrays.html",
			"http://www.kinexus.ca/ourServices/microarrays/antibody_microarrays/antibody_microarrays.html",
			"http://www.kinexus.ca/ourServices/microarrays/antibody_microarrays/antibody_microarrays.html",
			"http://www.kinexus.ca/ourServices/microarrays/reverse_microarrays/reverse_microarrays.html",
			"http://www.kinexus.ca/ourServices/microarrays/reverse_microarrays/reverse_microarrays.html",
			"http://www.kinexus.ca/ourServices/immunoblotting/custom_profiling/custom_profiling.html",
			"http://www.kinexus.ca/ourServices/immunoblotting/phosphosite_profiling/phosphosite_profiling.html",
			"http://www.kinexus.ca/ourServices/immunoblotting/kinase_profiling/kinase_profiling.html",
			"http://www.kinet.ca",
			"http://www.kinexus.ca/ourServices/immunohistochemistry/immunohistochemistry.html",
			"http://www.kinexus.ca/ourServices/proteinAndPeptide/recombinantproteinsynthesis/index.html",
			"http://www.kinexus.ca/ourServices/proteinAndPeptide/peptidesynthesis/index.html",
			"http://www.kinexus.ca/ourServices/proteinAndPeptide/peptidearraysynthesis/index.html",
			"http://www.kinexus.ca/ourServices/custom_graphics/custom_graphics.html"
		];
		let randomAdNumber = Math.floor(Math.random() * 17);
		let img = $('#AdRotatorImg');
		let link = $('#AdRotatorLink');
		link.attr("href", adsImgLink[randomAdNumber]);
		img.attr("src", "../../images/10MY25WebsiteBannerAds-"+(randomAdNumber+1)+"v0.1.jpg");
		img.attr("alt", adsAltText[randomAdNumber]);
	}
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>

</body>
</html>