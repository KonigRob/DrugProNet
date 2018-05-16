<?php
/**
 * Created by PhpStorm.
 * User: rob
 * Date: 10/05/18
 * Time: 11:35 AM
 */
?>
<<<<<<< HEAD

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>DrugProNET</title>
    <link href="css/styleReset.css" rel="stylesheet" type="text/css" />
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/png" href="images/icon.png">
    <script src="Scripts/jquery-1.8.3.js" type="text/javascript"></script>
    <script src="Scripts/jquery-ui.js" type="text/javascript"></script>
    <script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
    <script type='text/javascript' src='pv/bio-pv.min.js'></script>
    <script type="text/javascript"> <!-- scripts to change nav bar images on mouse-over -->
    function MM_swapImgRestore() { //v3.0
        var i, x, a = document.MM_sr; for (i = 0; a && i < a.length && (x = a[i]) && x.oSrc; i++) x.src = x.oSrc;
    }

    function MM_preloadImages() { //v3.0
        var d = document; if (d.images) {
            if (!d.MM_p) d.MM_p = new Array();
            var i, j = d.MM_p.length, a = MM_preloadImages.arguments; for (i = 0; i < a.length; i++)
                if (a[i].indexOf("#") != 0) { d.MM_p[j] = new Image; d.MM_p[j++].src = a[i]; }
        }
    }

    function MM_findObj(n, d) { //v4.01
        var p, i, x; if (!d) d = document; if ((p = n.indexOf("?")) > 0 && parent.frames.length) {
            d = parent.frames[n.substring(p + 1)].document; n = n.substring(0, p);
        }
        if (!(x = d[n]) && d.all) x = d.all[n]; for (i = 0; !x && i < d.forms.length; i++) x = d.forms[i][n];
        for (i = 0; !x && d.layers && i < d.layers.length; i++) x = MM_findObj(n, d.layers[i].document);
        if (!x && d.getElementById) x = d.getElementById(n); return x;
    }

    function MM_swapImage() { //v3.0
        var i, j = 0, x, a = MM_swapImage.arguments; document.MM_sr = new Array; for (i = 0; i < (a.length - 2) ; i += 3)
            if ((x = MM_findObj(a[i])) != null) { document.MM_sr[j++] = x; if (!x.oSrc) x.oSrc = x.src; x.src = a[i + 2]; }
    }

    function LoadList() {
        var ds = null;
        ds =
            $("#atxtbox").autocomplete({
                        source: ds
                    });
            }
    </script>
</head>

<body onload="MM_preloadImages('images/navBarHover_01.png','images/navBarHover_03.png','images/navBarHover_04.png','images/navBarHover_05.png','images/navBarHover_06.png','images/navBarHover_07.png','images/navBarHover_08.png');">
    <div class="wrapper">
        <!-- wrapped used for pushing the footer to the bottom of the page -->
        <div id="header">
            <div id="headerSlice1">
                <a href="Default.aspx">
                    <img src="images/DrugProNETBanner_01.png" alt="siteBanner-1"/></a>
            </div>
            <div id="headerSlice2">
                <a href="Default.aspx">
                    <img src="images/DrugProNETBanner_02.png" alt="siteBanner-2" /></a>
            </div>
            <div id="headerSlice3">
                <a href="http://www.kinexus.ca" target="_blank">
                    <img src="images/DrugProNETBanner_03.png" alt="siteBanner-3"/></a>
            </div>
        </div>
        <!-- end of header section -->


<!-- BELOW IS THE SITE NAVIGATION BAR. Please consult the user manual BEFORE making any changes,
    or you might break the website. To clarify, you want to change
<a href="UnderConstruction.aspx"
        to
        <a href="http://www.(thewebsiteaddress).(com/ca/org etc.)"
        Do not change anything else in the <a> tag, and do not forget
        to enclose the new address in quotation marks!
-->
        <div id="mainNav">

            <!-- This link goes to the KinATLAS Website. Replace <a href="UnderConstruction.aspx"
             with the correct web address -->
            <div class="mainNavLink">
                <a href="http://www.kinatlas.ca:8080/KinAtlas" target="_blank" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','images/navBarHover_01.png',1)">
                    <img alt="" src="images/navBar_01.png" width="128" height="40" id="Image2" />
                </a>
            </div>

            <!-- This link goes to the transcriptonet website -->
            <div class="mainNavLink">
                <a href="http://www.transcriptonet.ca" target="_blank" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','images/navBarHover_02.png',0)">
                    <img alt="" src="images/navBar_02.png" width="141" height="40" id="Image3" />
                </a>
            </div>

            <!-- This link goes to the phosphonet website -->
            <div class="mainNavLink">
                <a href="http://www.phosphonet.ca" target="_blank" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/navBarHover_03.png',1)">
                    <img alt="" src="images/navBar_03.png" width="127" height="40" id="Image4" />
                </a>
            </div>

            <!-- This link goes to the OncoNET Website. Replace <a href="UnderConstruction.aspx"
             with the correct web address -->
            <div class="mainNavLink">
                <a href="http://www.onconet.ca" target="_blank" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','images/navBarHover_04.png',1)">
                    <img alt="" src="images/navBar_04.png" width="107" height="40" id="Image5" />
                </a>
            </div>

            <!-- This link goes to the KinaseNET Website. Replace <a href="UnderConstruction.aspx"
             with the correct web address -->
            <div class="mainNavLink">
                <a href="http://www.kinasenet.ca" target="_blank" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image6','','images/navBarHover_05.png',1)">
                    <img alt="" src="images/navBar_05.png" width="111" height="40" id="Image6" />
                </a>
            </div>

            <!-- This link goes to the DrugKiNET -->
            <div class="mainNavLink">
                <a href="http://www.drugkinet.ca" target="_blank" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image7','','images/navBarHover_06.png',1)">
                    <img alt="" src="images/navBar_06.png" width="118" height="40" id="Image7" />
                </a>
            </div>

            <!-- This link goes to the Kinet-am website -->
            <div class="mainNavLink">
                <a href="http://www.kinet-am.ca/" target="_blank" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image8','','images/navBarHover_07.png',1)">
                    <img alt="" src="images/navBar_07.png" width="105" height="40" id="Image8" />
                </a>
            </div>

            <!-- This link goes to the KineticaOnline Website. Replace <a href="UnderConstruction.aspx"
             with the correct web address -->
            <div class="mainNavLink">
                <a href="http://www.kinexus.ca/kinetica/" target="_blank" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image9','','images/navBarHover_08.png',1)">
                    <img alt="" src="images/navBar_08.png" width="163" height="40" id="Image9" />
                </a>
            </div>
        </div>
        <!-- end of main navigation bar section -->


        <div id="dpNavContainer">
            <!-- dropdown menu navigation -->
            <div id="dpLabel">Select type of query desired</div>
            <div id="dpWrapper">
                <ul id="MenuBar1" class="MenuBarHorizontal">
                    <li><a class="MenuBarItemSubmenu" href="#">Hover over to view options</a>
                        <ul>
                            <li><a class="MenuBarItemSubmenu" href="#"></a></li>
                            <li><a class="MenuBarItemSubmenu" href="#"></a></li>
                            <li><a class="MenuBarItemSubmenu" href="#"></a></li>
                            <li><a class="MenuBarItemSubmenu" href="#"></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end of the dorpdown menu navigation section -->

        <div id="subNavContainer">
            <!-- sub navigation bar placed beside the dropdown navigation -->
            <ul id="subNav" class="">
                <li id="sNav1" style="color:#8F72C5; font-weight:bold; font-size:13px">Updated: 2018 May</li>
                <li id="sNav2"><a href="Default.aspx">Home</a></li>
                <li id="sNav2"><a href="http://www.kinexus.ca">Kinexus</a></li>
                <li id="sNav4"><a href="http://www.kinexus.ca/contact/contact.html">Contact</a></li>
                <li id="sNav2"><a href="Credits.aspx">Credits</a></li>
            </ul>
        </div>
        <!-- end of the sub navigation bar -->

        <form method="post" action="./KinaseDrugInteraction.aspx" onsubmit="javascript:return WebForm_OnSubmit();" id="Form1">
            <div class="aspNetHidden">
            <input type="hidden" name="ScriptManager2_HiddenField" id="ScriptManager2_HiddenField" value="" />
            <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
            <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
            <input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="" />
            <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMTUyMjQ5MDc4MQ9kFgJmD2QWAmYPZBYCAgMPZBYCAgMPZBYCZg9kFgICAQ8PFgIeC18hRGF0YUJvdW5kZ2RkGAEFHl9fQ29udHJvbHNSZXF1aXJlUG9zdEJhY2tLZXlfXxYJBTZjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJERpc3BsYXlQYXJhbWV0ZXJzQ2hlY2tsaXN0JDAFNmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkRGlzcGxheVBhcmFtZXRlcnNDaGVja2xpc3QkMQU2Y3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSREaXNwbGF5UGFyYW1ldGVyc0NoZWNrbGlzdCQyBTZjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJERpc3BsYXlQYXJhbWV0ZXJzQ2hlY2tsaXN0JDMFNmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkRGlzcGxheVBhcmFtZXRlcnNDaGVja2xpc3QkNAU2Y3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSREaXNwbGF5UGFyYW1ldGVyc0NoZWNrbGlzdCQ1BTZjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJERpc3BsYXlQYXJhbWV0ZXJzQ2hlY2tsaXN0JDYFNmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkRGlzcGxheVBhcmFtZXRlcnNDaGVja2xpc3QkNwU2Y3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSREaXNwbGF5UGFyYW1ldGVyc0NoZWNrbGlzdCQ3C/6FATgkX736BHTTsLK+SXFruzUuijFHfgxFiGpkK38=" />
            </div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['Form1'];
if (!theForm) {
    theForm = document.Form1;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>

<script src="/WebResource.axd?d=hjW1WZb5b458pGIvDec5T4rFP91DnhiLJ4ZleYCpD70yR0H_dGCEBAiSgTRPjqcMiKlzWTWK3vr0lAWslwKtnKDtTqcnrGNuUKMZjH59Nqg1&amp;t=635803002500000000" type="text/javascript"></script>
<script src="/ScriptResource.axd?d=7JOONovWollxkwFlqoLkulX9y3Z9epJ-d4xec8LMkYz2FyGoRK4S1Z99r1AQ0ihR9BPe-ltA5Lz9WiOaYYGYRtmlYUZoNTlKax_g9Zj8w5A9g4Z97tpMIgl-uFUKZKBc-pcYflGQCxALULMmkmNYbwylCCjxrIN6wV7RPT89KC01&amp;t=ffffffffd1fec354" type="text/javascript"></script>
<script src="/ScriptResource.axd?d=5_-fnFgS4iUZi3YboL9JkJsZRH7OgRWc-eck6d7nsVwP4MLZCVlNYlcqP7LCj3aIu3p3nV-pdyR9i-DDCN_nsFXNLa9jMbHcvMHgB_66HAOClrgIh8UquxEHlk96U0p_0&amp;t=470de87b" type="text/javascript"></script>
<script src="/ScriptResource.axd?d=akdhkV46dQYefVmvJ2lbvsOL-iXg2Iz1SfpjwBC2LH7gDvjG-BFphr8mM-HKJfqG7kIaL2XM6lMnIWfqtL-JIp_oI9wgXNkaKcymrRsXkZk9mNgHE1xOtoOE8rSAkh7bC1HsurQrkX5C51W3-KSk2g2&amp;t=470de87b" type="text/javascript"></script>
<script src="/ScriptResource.axd?d=bK6OwjPFy0UqKkXmAq68EwJiAoY8KKEdfJpmr3HPWL6CK0p4BdH90n0SoZE-2wg0uZ2MOl98bHzUUecQl5EEoBjvhbCnZpQD0zDOBzKiIcURIoceftZ04yF7A8Jdtc7oAsAqdrzbygLIE5K0HWOsTA2&amp;t=470de87b" type="text/javascript"></script>
<script src="/KinaseDrugInteraction.aspx?_TSM_HiddenField_=ScriptManager2_HiddenField&amp;_TSM_CombinedScripts_=%3b%3bAjaxControlToolkit%2c+Version%3d3.5.50508.0%2c+Culture%3dneutral%2c+PublicKeyToken%3d28f01b0e84b6d53e%3aen-US%3a3656afa9-406a-4247-9088-5766fe2d8372%3ade1feab2%3af2c8e708%3a720a52bf%3af9cec9bc%3a589eaa30%3a698129cf%3a7a92f56c" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
function WebForm_OnSubmit() {
    if (typeof(ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;
    return true;
}
//]]>
</script>

 <div class="content">
    <div id="pageContent">
        <div class="page_info_label">
            <p>Query Type</p>
        </div>

        <div id="p1" class="page_info">
            <p class="parHead">Drug Information</p>
            <p class="parText">
                This Query provides detailed information on over 2000 compounds that have been experimentally identified as
                inhibitors of one or more human proteins. Follow the instructions below to retrieve information on a specific
                drug of interest.
            </p>
        </div>

        <div id="ad" class="ad_temp">
            <span id="ContentPlaceHolder1_Timer1" style="visibility:hidden;display:none;"></span>
            <div id="ContentPlaceHolder1_up1">
                    <a id="ContentPlaceHolder1_AdRotator1" href="http://www.kinexus.ca/ourServices/immunoblotting/custom_profiling/custom_profiling.html" target="_blank"><img src="/images/10MY25WebsiteBannerAds-17v0.1.jpg" alt="Need to inexpensively and rapidly validate gene or protein microarray data? Try our Custom Kinetworks Multi-immunoblotting Services" /></a>
            </div>
        </div>

        <div class="labelDivThick">
            <p>Filters</p>
        </div>

        <div id="p2" class="infoDiv">
            <p class="parHead">Step 1 - Drug Specification</p>
            <p class="parText">
                Please provide the short/full name or UniProt ID for the human kinase of interest as a search term.
            </p>
            <p class="parText">
                <input name="ctl00$ContentPlaceHolder1$KinaseSpecTextbox" type="text" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ContentPlaceHolder1$KinaseSpecTextbox\&#39;,\&#39;\&#39;)&#39;, 0)" onkeypress="if (WebForm_TextBoxKeyHandler(event) == false) return false;" id="ContentPlaceHolder1_KinaseSpecTextbox" class="input" />

                &nbsp;
                <span id="ContentPlaceHolder1_CompoundTextboxValidator" class="emptyBoxMessage" style="visibility:hidden;">**You must key an item into this text box.</span>
            </p>
        </div>

        <div class="labelDiv">
            <p class="parText">&nbsp;</p>
        </div>
        <div id="p3" class="infoDiv">
            <p class="parHead">Step 2 - Retrieve Compound Information</p>
            <p class="parText">Click on the buttons below to retrieve information on the compound of interest or to reset the parameters for the new query.</p>
            <p class="parText">
            <div id="ContentPlaceHolder1_UpdateDrugList">
            </div>
            </p>
        </div>

        <div class="labelDiv">
            <p class="parText">&nbsp;</p>
        </div>
            <input type="submit" name="ctl00$ContentPlaceHolder1$GenerateTableButton" value="Retrieve Information" onclick="WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$GenerateTableButton&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="ContentPlaceHolder1_GenerateTableButton" class="button" />
            &nbsp;&nbsp;&nbsp;
            <input type="reset" value="Reset" class="button" />
        </div>
    </div>

            </div>
            <!-- end of page contents -->

<script type="text/javascript">
//<![CDATA[
var Page_Validators =  new Array(document.getElementById("ContentPlaceHolder1_CompoundTextboxValidator"));
//]]>
</script>

<script type="text/javascript">
//<![CDATA[
var ContentPlaceHolder1_CompoundTextboxValidator = document.all ? document.all["ContentPlaceHolder1_CompoundTextboxValidator"] : document.getElementById("ContentPlaceHolder1_CompoundTextboxValidator");
ContentPlaceHolder1_CompoundTextboxValidator.controltovalidate = "ContentPlaceHolder1_KinaseSpecTextbox";
ContentPlaceHolder1_CompoundTextboxValidator.focusOnError = "t";
ContentPlaceHolder1_CompoundTextboxValidator.errormessage = "**You must key an item into this text box.";
ContentPlaceHolder1_CompoundTextboxValidator.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ContentPlaceHolder1_CompoundTextboxValidator.initialvalue = "";
//]]>
</script>


<script type="text/javascript">
//<![CDATA[
(function() {var fn = function() {$get("ScriptManager2_HiddenField").value = '';Sys.Application.remove_init(fn);};Sys.Application.add_init(fn);})();
var Page_ValidationActive = false;
if (typeof(ValidatorOnLoad) == "function") {
    ValidatorOnLoad();
}

function ValidatorOnSubmit() {
    if (Page_ValidationActive) {
        return ValidatorCommonOnSubmit();
    }
    else {
        return true;
    }
}
        Sys.Application.add_init(function() {
    $create(Sys.UI._Timer, {"enabled":true,"interval":30000,"uniqueID":"ctl00$ContentPlaceHolder1$Timer1"}, null, null, $get("ContentPlaceHolder1_Timer1"));
});
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.AutoCompleteBehavior, {"completionInterval":500,"completionListCssClass":"autocomplete_completionListElement","completionListItemCssClass":"autocomplete_listItem","completionSetCount":20,"contextKey":"kinase","delimiterCharacters":"","highlightedItemCssClass":"autocomplete_highlightedListItem","id":"CompoundSpecTextbox_AutoCompleteExtender","minimumPrefixLength":2,"serviceMethod":"GetCompletionList","servicePath":"AutoComplete.asmx","useContextKey":true}, null, null, $get("ContentPlaceHolder1_KinaseSpecTextbox"));
});

document.getElementById('ContentPlaceHolder1_CompoundTextboxValidator').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ContentPlaceHolder1_CompoundTextboxValidator'));
}
//]]>
</script>
</form>

        <div class="push"></div>
        <!-- invisible section for "pushing" footer to botom of page -->
    </div>
    <!-- end of wrapper for pushing the footer -->

    <div class="footer">
        <!-- site footer containing links to top of page and home and copyright info -->
        <div id="bottomSpacer">&nbsp;</div>
        <!-- spacer for aligning -->

        <div id="bottomNavContainer">
            <ul id="bottomNavBar" class="">
                <li id="bNav1"><a href="Default.aspx">Home</a></li>
                <li id="bNav2"><a href="#header">Top</a></li>
            </ul>
        </div>
        <!-- end of the bottom nav bar -->

        <div id="CPinfo">
            <p>Copyright &copy; 2018 Kinexus Bioinformatics Corporation. All rights reserved.</p>
        </div>
    </div>
    <!-- end of footer -->

    <script type="text/javascript">
        var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", { imgDown: "SpryAssets/SpryMenuBarDownHover.gif", imgRight: "SpryAssets/SpryMenuBarRightHover.gif" });
    </script>

=======
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>
		DrugProNet
	</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
</head>
<body>
	<div>
		<div id="header">
			<a href="DrugProNet.php" target="_blank">
				<img src="images/DrugProNETBanner.jpg">
			</a>
		</div>
	</div>
>>>>>>> 8d231c67e2237c05306d805df38b9c7d2f8fcd41
</body>
</html>
