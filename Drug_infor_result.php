<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        DrugProNet
    </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
          crossorigin="anonymous">
</head>

<body>
<div>
    <div id="header">
        <a href="DrugProNet.php" target="_blank">
            <img class="img-fluid" src="images/DrugProNETBanner.jpg">
        </a>
    </div>
</div>

<!-----NavBar Section----->
<!--Navbar with links-->
<div class="navBar" >
    <a id="1" href="http://kinatlas.ca:8080" target="_blank"><img id="kinatlas" width="128" height="40" style="float: left" src="images/navBar_01.png"></a>
    <a id="2" href="http://www.transcriptonet.ca" target="_blank"><img id="transcriptonet" width="141" height="40" style="float: left" src="images/navBar_02.png"></a>
    <a id="3" href="http://www.phosphonet.ca" target="_blank"><img id="phosphonet" width="127" height="40" style="float: left" src="images/navBar_03.png"></a>
    <a id="4" href="http://www.onconet.ca" target="_blank"><img id="onconet" width="107" height="40" style="float: left" src="images/navBar_04.png"></a>
    <a id="5" href="http://www.kinasenet.ca" target="_blank"><img id="kinasenet" width="111" height="40" style="float: left" src="images/navBar_05.png"></a>
    <a id="6" href="http://www.drugkinet.ca" target="_blank"><img id="drugkinet" width="118" height="40" style="float: left" src="images/navBar_06.png"></a>
    <a id="7" href="http://www.kinet-am.ca" target="_blank"><img id="kinetam" width="105" height="40" style="float: left" src="images/navBar_07.png"></a>
    <a id="8" href="http://www.kinexus.ca/kinetica" target="_blank"><img id="kinetica" width="163" height="40" style="float: left" src="images/navBar_08.png"></a>
</div>

<!--Query bar-->
<div class="queryBarContainer">
    <!--Select & dropdown-->
    <div class="queryBarDropDownContainer">
        <!--select-->
        <div class="queryBarText">
            Select type of query desired
        </div>
        <!--dropdown-->
        <div class="dropdown">

            <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">Click to view options</button>
            <div class="dropdown-menu" style="border-radius: 7px; padding: 1px">
                <a class="dropdown-item" style="padding-top: 1px; padding-bottom: 1px; padding-left: 1px; font-size: 14px" href="ProteinDrugQuery.html">Protein-focused Drug Interaction</a>
                <a class="dropdown-item" style="padding-top: 1px; padding-bottom: 1px; padding-left: 1px; font-size: 14px" href="./DrugProteinQuery.html">Drug-focused Protein Interaction</a>
                <a class="dropdown-item" style="padding-top: 1px; padding-bottom: 1px; padding-left: 1px; font-size: 14px" href="./ProteinInfo.html">Protein Information</a>
                <a class="dropdown-item" style="padding-top: 1px; padding-bottom: 1px; padding-left: 1px; font-size: 14px" href="./DrugInfo.html">Drug Information</a>
            </div>

        </div>

    </div>
    <!--links-->
    <div class="queryBarLinks"style="float: left; width: 420px; height: 33px; padding-left: 22px; padding-top: 12px;
		 font-size: 13px;">
        <span style="border-right: #FC0 solid 2px; color: #8F72C5; padding-right: 5px; font-weight: bold">Updated: 2018 May </span>
        <a href="http://www.genexus.ca" style="border-right: #FC0 solid 2px; color: #FC0; padding-left: 5px; padding-right: 5px;">Home</a>
        <a href="http://www.kinexus.ca" style="border-right: #FC0 solid 2px; color: #FC0; padding-left: 5px; padding-right: 5px;" target="_blank">Kinuxus</a>
        <a href="http://www.kinexus.ca/contact/contact.htm" style="border-right: #FC0 solid 2px; color: #FC0; padding-left: 5px; padding-right: 5px;">Contact</a>
        <a href="http://www.drugpronet.ca/credits.html" style="border-right: #FC0 solid 2px; color: #FC0; padding-left: 5px; padding-right: 5px;">Credits</a>
    </div>
</div>
<!-----Query Bar end------>

<!--Information for the site-->
<div class="content">

    <div id="pageContent">
        <!--General Info-->
        <div class="page_info_label">
            <p>General Info</p>
        </div>

        <!--Protein Description-->
        <div class="page_info">
            <p class="parHead">Compound Information</p>
            <p class="parText">
                This report provides detailed information on one selected compound from over 800 compounds that have been
                experimentally identified as protein kinase inhibitors.
            </p>
        </div>

        <!--Rotate ad on the upper-right of the page-->
        <div id="ad_container" class="ad_temp">
            <a href= "#" target="_blank"><img id="ads" src="images/10MY25WebsiteBannerAds-1v0.1.jpg" alt="Need to rapidly characterize a new protein or phospho-site for regulation? Try our Standard Reverse Lysate Microarray Services" /></a>
        </div>

        <!-------------All datas--------------->
        <table class="float-clear">
            <tr >
                <td class="columnName">Compound Name</td>
                <td>
                    <span class="resultLabel">ABL1</span></td>
            </tr>
            <tr>
                <td class="columnName">Compound Ailias</td>
                <td>
                    <span class="resultLabel">Abelson murine leukemia viral oncogene homologue 1.Abelson murine leukemia viral oncogene homologue 1
                    Abelson murine leukemia viral oncogene homologue 1 Abelson murine leukemia viral oncogene homologue 1 </span></td>
            </tr>
            <tr>
                <td class="columnName">Drug Formula</td>
                <td>
                    <span class="resultLabel"></span></td>
            </tr>
            <tr>
                <td class="columnName">Molecular Mass</td>
                <td>
                    <span class="resultLabel">Q16832</span></td>
            </tr>
            <tr>
                <td class="columnName">Compound CAS ID</td>
                <td>
                    <span class="resultLabel"></span></td>
            </tr>
            <tr>
                <td class="columnName">PubChem CID</td>
                <td>
                    <span class="resultLabel">Protein-tyrosine kinase</span></td>
            </tr>
            <tr>
                <td class="columnName">ChEMBL ID</td>
                <td>
                    <span class="resultLabel">TK</span></td>
            </tr>
            <tr>
                <td class="columnName">Kinase SARfari</td>
                <td >
                    <span class="resultLabel">DDR</span></td>
            </tr>
            <tr>
                <td class="columnName">PubChem SID</td>
                <td>
                    <span class="resultLabel"></span></td>
            </tr>
            <tr>
                <td class="columnName">ChemSpider ID</td>
                <td>
                    <span class="resultLabel">855</span></td>
            </tr>
            <tr>
                <td class="columnName">ChEBI  ID</td>
                <td>
                    <span class="resultLabel">96736</span></td>
            </tr>
        </table>
        <!-----------Compound result End------------->

        <!-------------Revise Query--------------->
        <div class="page_info_label">
            <p>Revise Query</p>
        </div>

        <div class="query_info">
            <p class="parHead">Compound Information</p>
            <p class="parText">
                This query provides detailed information on over 800 compounds that have been experimentally identified as inhibitors
                of one or more human protein kinases. Follow the instructions below to select a compound of interest.
            </p>
        </div>

        <!--Filters-->
        <div class="page_info_label">
            <p>Filters</p>
        </div>

        <form action="#" method="post">
            <div class="filter_info">
                <p class="parHead">Step1 - Compound Specification</p>
                <p class="parText">
                    Enter the first few characters for a compound name, CAS ID, PubChem ID or ChEMBL ID and then
                    select the desired search term from the Drop Down List.
                </p>
                <input type="text" class="input">

                <select id="drugInforDropDown">
                   <?php
                    //The number of options depends on the input from user.
                    for($i = 0; $i < 3; $i++) {
                        echo "<option value=\"\">Placeholder</option>";
                    }
                   ?>
                </select>
            </div>

            <div class="page_info_label"><!--To hold the space.---></div>

            <div class="filter_info">
                <p class="parHead">Step2 - Compound Specification</p>
                <p class="parText">
                   Click on the buttons below to retrieve information on the compound of interest or to reset the
                    parameters for a new query.
                </p>
                <input type="submit" value="Retrieve Information" class="button">
                <input type="reset" value="Reset" class="button">
            </div>
        </form>
        <!--Filters End--->


        <div class="footer">
            <!-- site footer containing links to top of page and home and copyright info -->
            <div id="bottomSpacer">&nbsp;</div>
            <!-- spacer for aligning -->

            <div id="bottomNavContainer">
                <ul id="bottomNavBar" class="">
                    <li id="bNav1"><a href="#">Home</a></li>
                    <li id="bNav2"><a href="#header">Top</a></li>
                </ul>
            </div>
            <!-- end of the bottom nav bar -->

            <div id="CPinfo">
                <p>Copyright &copy; 2018 Kinexus Bioinformatics Corporation. All rights reserved.</p>
            </div>
        </div>
        <!-- footer End-->

    </div>

</div><!--End of contents-->

<!--script to deal with navbar hover over-->
<script>
    function changeNavbar(number, weblink){
        $('#' + number).hover(function () {
            $('#' + weblink).attr("src", "images/navBarHover_0"+number+".png");
        }, function () {
            $('#' + weblink).attr("src", "images/navBar_0"+number+".png");
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

<!--Script to deal with rotate ad-->
<script>
    imgLength = 17;
    imgChangeSpeed = 3000;
    //between 1 to 17
    randomInt = Math.round((Math.random() * 17) + 1);

    $(function(){
        //To call loadImg()
        setInterval(loadImg(), imgChangeSpeed);
        function loadImg(){
            $("#ads").attr("src", "images/10MY25WebsiteBannerAds-" + randomInt + "v0.1.jpg");
            $("#url").attr("href", )
            if(randomInt < imgLength){
                randomInt = parseInt(randomInt) + 1;
            }
            else{
                randomInt = 1;
            }
        }
    });
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>
</body>
</html>