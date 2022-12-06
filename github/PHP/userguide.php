<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <!-- DW6 -->
    <head>
        <!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>GPS-SUMO: Prediction of SUMOylation Sites & SUMO-interaction Motifs</title>
        <link   rel= "shortcut   icon "   href= "images/GPS.png "/>
        <link rel="stylesheet" href="stylegreen.css" type="text/css" />
        <link rel="stylesheet" href="js/lavalamp/lavalamp_test.css" type="text/css" media="screen"/>
        <script type="text/javascript" src="js/lavalamp/jquery-1.2.3.min.js"></script>
        <script type="text/javascript" src="js/lavalamp/jquery.easing.min.js"></script>
        <script type="text/javascript" src="js/lavalamp/jquery.lavalamp.js"></script>
        <script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
        <script type="text/javascript">
            $(function() {
                $("#gbnav").lavaLamp({
                    fx: "backout",
                    speed: 700,
                    click: function(event, menuItem) {
                        return true;
                    }
                });
            });
        </script>
        <link href="js/accordion-menu/styleacc.css" type="text/css" rel="stylesheet"/>
        <script type="text/javascript">
            /*$(document).ready(function()
                {
                        //slides the element with class "menu_body" when paragraph with class "menu_head" is clicked
                        $("#firstpane p.menu_head").click(function()
                    {
                                $(this).css({backgroundImage:"url(js/accordion-menu/down.png)"}).next("div.menu_body").slideToggle(300).siblings("div.menu_body").slideUp("slow");
                        $(this).siblings("p").css({backgroundImage:"url(js/accordion-menu/left.png)"});
                        });

                });*/

            $(document).ready(function()
            {
                //slides the element with class "menu_body" when paragraph with class "menu_head" is mouseover
                $(".menu_body a").hover(function()
                {
                    $(".navintro").css({display:"none"});
                    $(this).siblings(".navintro").css({display:"block"}).fadeIn("slow");

                });
            });

        </script>
        <script src="js/jquery.treeview/jquery.treeview.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#leftcontent img").click(function() {

                    $(this).next().next().css("display","none");
                });

            })
        </script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#browser").treeview({
                    toggle: function() {
                        console.log("%s was toggled.", $(this).find(">span").text());
                    }
                });

                $("#add").click(function() {
                    var branches = $("<li><span class='folder'>New Sublist</span><ul>" +
                        "<li><span class='file'>Item1</span></li>" +
                        "<li><span class='file'>Item2</span></li></ul></li>").appendTo("#browser");
                    $("#browser").treeview({
                        add: branches
                    });
                });
            });
        </script>
        <script type="text/javascript">
            function wsug(e, str){
                var oThis = arguments.callee;
                if(!str) {
                    oThis.sug.style.visibility = 'hidden';
                    document.onmousemove = null;
                    return;
                }
                if(!oThis.sug){
                    var div = document.createElement('div'), css = 'top:0; left:0; position:absolute; z-index:100; visibility:hidden';
                    div.style.cssText = css;
                    div.setAttribute('style',css);
                    var sug = document.createElement('div'), css= 'font:normal 12px/16px "宋体";font-family:Arial; white-space:nowrap; color:#666; padding:3px; position:absolute; left:0; top:0; z-index:10; background:#f9fdfd; border:1px solid #0aa';
                    sug.style.cssText = css;
                    sug.setAttribute('style',css);
                    var dr = document.createElement('div'), css = 'position:absolute; top:3px; left:3px; background:#333; filter:alpha(opacity=50); opacity:0.5; z-index:9';
                    dr.style.cssText = css;
                    dr.setAttribute('style',css);
                    var ifr = document.createElement('iframe'), css='position:absolute; left:0; top:0; z-index:8; filter:alpha(opacity=0); opacity:0';
                    ifr.style.cssText = css;
                    ifr.setAttribute('style',css);
                    div.appendChild(ifr);
                    div.appendChild(dr);
                    div.appendChild(sug);
                    div.sug = sug;
                    document.body.appendChild(div);
                    oThis.sug = div;
                    oThis.dr = dr;
                    oThis.ifr = ifr;
                    div = dr = ifr = sug = null;
                }
                var e = e || window.event, obj = oThis.sug, dr = oThis.dr, ifr = oThis.ifr;
                obj.sug.innerHTML = str;

                var w = obj.sug.offsetWidth, h = obj.sug.offsetHeight, dw = document.documentElement.clientWidth||document.body.clientWidth; dh = document.documentElement.clientHeight || document.body.clientHeight;
                var st = document.documentElement.scrollTop || document.body.scrollTop, sl = document.documentElement.scrollLeft || document.body.scrollLeft;
                var left = e.clientX +sl +17 + w < dw + sl  &&  e.clientX + sl + 15 || e.clientX +sl-8 - w, top = e.clientY + st + 17;
                obj.style.left = left+ 10 + 'px';
                obj.style.top = top + 10 + 'px';
                dr.style.width = w + 'px';
                dr.style.height = h + 'px';
                ifr.style.width = w + 3 + 'px';
                ifr.style.height = h + 3 + 'px';
                obj.style.visibility = 'visible';
                document.onmousemove = function(e){
                    var e = e || window.event, st = document.documentElement.scrollTop || document.body.scrollTop, sl = document.documentElement.scrollLeft || document.body.scrollLeft;
                    var left = e.clientX +sl +17 + w < dw + sl  &&  e.clientX + sl + 15 || e.clientX +sl-8 - w, top = e.clientY + st +17 + h < dh + st  &&  e.clientY + st + 17 || e.clientY + st - 5 - h;
                    obj.style.left = left + 'px';
                    obj.style.top = top + 'px';
                }
            }
        </script>
        <link rel="stylesheet" href="js/jquery.treeview/jquery.treeview.css" />
        <style type="text/css">
            <!--
            .STYLE1 {font-size: 12px}
            .STYLE2 {color: #000000}


            .lavaLampWithImage  li a:link{text-decoration:none ; color:#ffffff;}
            .lavaLampWithImage  li    a:visited {text-decoration:none ; color:#ffffff;}
            .lavaLampWithImage  li   a:hover {text-decoration:none ; color:#000000 ;}
            .lavaLampWithImage  li    a:active {text-decoration:none ; color:#000000;}
			.STYLE5 {
                color: #666666;
                font-style: italic;
            }
            -->
        </style>
    </head>
    <!-- The structure of this file is exactly the same as 2col_rightNav.html;
             the only difference between the two is the stylesheet they use --><html>
<head>
<style type="text/css">
td{
text-align: center;
}
</style>
</head>

    <body style="overflow-x: hidden">
        <div id="container">
            <div id="masthead">
         <img src="images/headbg_blue0.jpg" border="0" style="text-align:right"  width="100%" height="211" />
        <div>
        <img src="images/headbg_blue2.jpg" style="position:absolute;left:0%;top:0px; margin: 0 auto;" width="1500" height="210" border="0"  height="97" />
            </div>
            <div class="logo">
             <a href="#"><img src="images/logo.png" width="157" height="147" border="0" /></a>
             </div>

        <div class="banner">
          <img src="images/SUMOsp title.jpg" style="position:relative;left:0px;top:-85px;margin: 0 auto;"height="90" border="0"/>
        </div>
        <div class="banner">
          <img src="images/index_3.gif" style="position:relative;left:660px;top:-15px;margin: 0 auto;"height="90" border="0"/>
        </div>

                   <div id="globalNav">
          <ul class="lavaLampWithImage" id="gbnav">
            <li><a href="index.php" style="width:110px">HOME</a></li>
            <li><a href="online.php" style="width:130px">Web Server</a></li>
			<li ><a href="download.php" style="width:130px">Download</a></li>
            <li><a href="citation.php" style="width:110px">Citation</a></li>
            <li class="current"><a href="userguide.php" style="width:180px">User Guide</a></li>
            <li><a href="links.php" style="width:80px">LINKS</a></li>
            <li><a href="contact.php" style="width:110px">CONTACT</a></li>
          </ul>



                    </div>
                </div>
            </div>
            <div id="mainContent">
                  <div id="sidebar" >
                    <div id="sidebar"> <img src="images/ProductTitle.jpg" />
                        <script type="text/javascript">
                            $(document).ready(function()
                            {
                                //slides the element with class "menu_body" when paragraph with class "menu_head" is mouseover
                                $(".menu_body a").hover(function()
                                {
                                    $(".navintro").css({display:"none"});
                                    $(this).siblings(".navintro").css({display:"block"}).fadeIn("slow");
       
                                });
	
                                $(".filetree .greybg").hover(function()
                                {
                                    $(this).addClass('greenbg'); 
                                },function(){
                                    //鼠标离开时移除file_on样式
                                    $(this).removeClass('greenbg'); 
	
                                });
	
                            });

                        </script>
                        <div  id="firstpane" class="menu_list">
                            <ul id="browser" class="filetree treeview-famfamfam ">
<li id="predictor1"><span class="folder" style="color: #FFFFFF;font-weight: bold">PTMs Predictor</span>
	<ul>
		<li class="greybg"><span class="file"><a href="http://gps.biocuckoo.cn"  class="greenlink"  onmouseover="wsug(event, 'Kinase-specific Phosphorylation Site Prediction ')" onmouseout="wsug(event, 0)" target="_blank"><strong>GPS</strong> ( <span class="STYLE4 STYLE2">Phosphorylation </span>)</a></span></li>
		<li class="greybg"><span class="file"><a href="http://igps.biocuckoo.org"  class="greenlink"  onmouseover="wsug(event, 'GPS algorithm with PPI filter ')" onmouseout="wsug(event, 0)" target="_blank"><strong>iGPS</strong> ( <span class="STYLE4 STYLE2">Phosphorylation</span> )</a></span></li>
		<li class="greybg"><span class="file"><a href="http://pbs.biocuckoo.cn/" class="greenlink"  onmouseover="wsug(event, 'Prediction of PPBD-specific Binding p-sites')" onmouseout="wsug(event, 0)" target="_blank"><strong>GPS-PBS </strong>(<span class="STYLE4 STYLE2"> PPBD-binding </span>)</a></span></li>
		<li class="greybg"><span class="file"><a href="http://hybridsucc.biocuckoo.org/" class="greenlink"  onmouseover="wsug(event, 'Succinylation Site Prediction')" onmouseout="wsug(event, 0)" target="_blank"><strong>HybridSucc </strong>(<span class="STYLE4 STYLE2"> Succinylation </span>)</a></span></li>
		
		
		<li class="greybg"><span class="file"><a href="http://msp.biocuckoo.org" class="greenlink"  onmouseover="wsug(event, 'Calpain Cleavage Site Prediction ')" onmouseout="wsug(event, 0)" target="_blank"><strong>GPS-MSP </strong>(<span class="STYLE4 STYLE2"> Protein Methylation </span>)</a></span></li>
		<li class="greybg"><span class="file"><a href="http://gpspalm.biocuckoo.cn/" class="greenlink" onmouseover="wsug(event, 'Palmitoylation Site Prediction ')" onmouseout="wsug(event, 0)" target="_blank"><strong>GPS-Palm</strong> ( <span class="STYLE4 STYLE2">Palmitoylation </span>)</a></span></li>
		<!--<li class="greybg"><span class="file"><a href="http://csspalm.biocuckoo.org" class="greenlink" onmouseover="wsug(event, 'Palmitoylation Site Prediction ')" onmouseout="wsug(event, 0)" target="_blank"><strong>CSS-Palm</strong> ( <span class="STYLE4 STYLE2">Palmitoylation </span>)</a></span></li>-->
		<li class="greybg"><span class="file"><a href="http://sumosp.biocuckoo.org" class="greenlink"  onmouseover="wsug(event, 'Prediction of SUMO Modification')" onmouseout="wsug(event, 0)" target="_blank"><strong>GPS-SUMO</strong> ( <span class="STYLE4 STYLE2">Sumoylation </span>)</a></span></li>
		<li class="greybg"><span class="file"><a href="http://sno.biocuckoo.org" class="greenlink" onmouseover="wsug(event, 'S-nitrosylation Site Prediction ')" onmouseout="wsug(event, 0)" target="_blank"><strong>GPS-SNO </strong>(<span class="STYLE4 STYLE2"> <em>S</em>-nitrosylation </span>)</a></span></li>
		<li class="greybg"><span class="file"><a href="http://yno2.biocuckoo.org" class="greenlink"  onmouseover="wsug(event, 'Tyrosine Nitration Site Prediction ')" onmouseout="wsug(event, 0)" target="_blank"><strong>GPS-YNO2 </strong>(<span class="STYLE4 STYLE2"> Tyrosine Nitration</span> )</a></span></li>
		<li class="greybg"><span class="file"><a href="http://ccd.biocuckoo.org" class="greenlink"  onmouseover="wsug(event, 'Calpain Cleavage Site Prediction ')" onmouseout="wsug(event, 0)" target="_blank"><strong>GPS-CCD </strong>(<span class="STYLE4 STYLE2"> Calpain Cleavage </span>)</a></span></li>
		<li class="greybg"><span class="file"><a href="http://polo.biocuckoo.org" class="greenlink"  onmouseover="wsug(event, 'Prediction for Polo-like Kinases ')" onmouseout="wsug(event, 0)" target="_blank"><strong>GPS-Polo</strong> (<span class="STYLE4 STYLE2"> Polo-like Kinases </span>)</a></span></li>
		<li class="greybg"><span class="file"><a href="http://pup.biocuckoo.org" class="greenlink"  onmouseover="wsug(event, 'Pupylation Sites Prediction ')" onmouseout="wsug(event, 0)" target="_blank"><strong>GPS-PUP</strong> (<span class="STYLE4 STYLE2"> Pupylation </span>)</a></span></li>
		<li class="greybg"><span class="file"><a href="http://mba.biocuckoo.org" class="greenlink"  onmouseover="wsug(event, 'MHC-binding Site Prediction ')" onmouseout="wsug(event, 0)" target="_blank"><strong>GPS-MBA</strong> (<span class="STYLE4 STYLE2"> MHC-binding </span>)</a></span></li>
		<li class="greybg"><span class="file"><a href="http://arm.biocuckoo.org/" class="greenlink"  onmouseover="wsug(event, 'APC/C Recognition Motif Prediction ')" onmouseout="wsug(event, 0)" target="_blank"><strong>GPS-ARM</strong> (<span class="STYLE4 STYLE2"> APC/C </span>)</a></span></li>
		<li class="greybg"><span class="file"><a href="http://tsp.biocuckoo.org/" class="greenlink"  onmouseover="wsug(event, 'Prediction of Tyrosine Sulfation Sites ')" onmouseout="wsug(event, 0)" target="_blank"><strong>GPS-TSP</strong> (<span class="STYLE4 STYLE2"> Tyrosine sulfation </span>)</a></span></li>
		<li class="greybg"><span class="file"><a href="http://pail.biocuckoo.org" class="greenlink"  onmouseover="wsug(event, 'Calpain Cleavage Site Prediction ')" onmouseout="wsug(event, 0)" target="_blank"><strong>GPS-PAIL </strong>(<span class="STYLE4 STYLE2"> Lysine acetylation </span>)</a></span></li>
		<li class="greybg"><span class="file"><a href="http://gpsuber.biocuckoo.cn" class="greenlink"  onmouseover="wsug(event, 'E3-specific lysine ubiquitination sites prediction ')" onmouseout="wsug(event, 0)" target="_blank"><strong>GPS-Uber </strong>(<span class="STYLE4 STYLE2"> Ubiquitination </span>)</a></span></li>
		<!--   <li class="greybg"><span class="file"><a href="http://pps.biocuckoo.org" class="greenlink"  onmouseover="wsug(event, 'PTMs Peptide Scanner ')" onmouseout="wsug(event, 0)" target="_blank"><strong>DeepNitro</strong> (<span class="STYLE4 STYLE2"> PTMs Peptide Scanner</span> )</a></span></li> -->
                                        <!--<li class="closed"><span class="file"><a href="solution.asp?pg_id=120">典型案例</a></span></li>
                                        -->
                                    </ul>
                                </li>

                                <li id="tools1"><span class="folder"  style="color: #FFFFFF;font-weight: bold">Tools</span>
                                    <ul>
									<li class="greybg" ><span class="file"><a href="http://ibs.biocuckoo.org/" class="greenlink"  onmouseover="wsug(event, 'Illustrator for Biological Sequences ')" onmouseout="wsug(event, 0)" target="_blank"><strong>IBS</strong> (<span class="STYLE4 STYLE2"> Illustrator for BioSequence</span> )</a></span></li>
                                        <li class="greybg" ><span class="file"><a href="http://dog.biocuckoo.org/" class="greenlink"  onmouseover="wsug(event, 'Protein Domain Structure Visualization ')" onmouseout="wsug(event, 0)" target="_blank"><strong>DOG</strong> (<span class="STYLE4 STYLE2"> Domain Illustrator</span> )</a></span></li>
										<li class="greybg" ><span class="file"><a href="http://hemi.biocuckoo.org/" class="greenlink"  onmouseover="wsug(event, 'Heatmap Illustrator ')" onmouseout="wsug(event, 0)" target="_blank"><strong>HemI</strong> (<span class="STYLE4 STYLE2"> Heatmap Illustrator</span> )</a></span></li>
                                        <li class="greybg" ><span class="file"><a href="http://wocea.biocuckoo.org/" class="greenlink"  onmouseover="wsug(event, 'Enrichment Analysis ')" onmouseout="wsug(event, 0)" target="_blank"><strong>WocEA</strong> (<span class="STYLE4 STYLE2"> Enrichment Analysis</span> )</a></span></li>
										<li class="greybg" ><span class="file"><a href="http://deepphagy.biocuckoo.org/" class="greenlink"  onmouseover="wsug(event, 'Deeplearning for autophagy')" onmouseout="wsug(event, 0)" target="_blank"><strong>DeepPhagy</strong> (<span class="STYLE4 STYLE2"> Autophagy images</span> )</a></span></li>
                                    </ul>
                                </li>


<li id="databases1"><span class="folder"  style="color: #FFFFFF;font-weight: bold">Databases</span>
	<ul>        
		<!-- <li class="greybg"><span class="file"><a href="http://thanatos.biocuckoo.org/"  class="greenlink"  onmouseover="wsug(event, 'Database of Autophagy and Cell Death Related Protein')" onmouseout="wsug(event, 0)" target="_blank"><strong>THANATOS </strong>( <span class="STYLE4 STYLE2">Autophagy</span> )</a></span></li>-->
		<li class="greybg"><span class="file"><a href="http://microkit.biocuckoo.org/"  class="greenlink"  onmouseover="wsug(event, 'An Integrated Database of Midbody, Centrosome, Kinetochore, Telomere and Spindle')" onmouseout="wsug(event, 0)" target="_blank"><strong>MiCroKiTS </strong>(<span class="STYLE4 STYLE2"> Cell Cycle </span> )</a></span></li>
		<li class="greybg"><span class="file"><a href="http://cgdb.biocuckoo.org/"  class="greenlink"  onmouseover="wsug(event, 'An Integrated Database of Midbody, Centrosome, Kinetochore, Telomere and Spindle')" onmouseout="wsug(event, 0)" target="_blank"><strong>CGDB </strong>(<span class="STYLE4 STYLE2"> Circadian </span> )</a></span></li>
		<li class="greybg"><span class="file"><a href="http://llps.biocuckoo.cn/"  class="greenlink"  onmouseover="wsug(event, 'Data resource of liquid-liquid phase separation')" onmouseout="wsug(event, 0)" target="_blank"><strong>DrLLPS </strong>(<span class="STYLE4 STYLE2"> Phase Separation </span> )</a></span></li>
		
		<li class="greybg"><span class="file"><a href="http://iekpd.biocuckoo.org/"  class="greenlink"  onmouseover="wsug(event, 'Eukaryotic Kinase, Phosphatase and PPBD Containing Protein Database')" onmouseout="wsug(event, 0)" target="_blank"><strong>iEKPD </strong>(<span class="STYLE4 STYLE2"> PK, PP &amp; PPBD</span> )</a></span></li>
		<li class="greybg"><span class="file"><a href="http://iuucd.biocuckoo.org/"  class="greenlink"  onmouseover="wsug(event, 'Compendium of Enzymes for Ubiquitin and Ubiquitin-like Conjugation')" onmouseout="wsug(event, 0)" target="_blank"><strong>iUUCD </strong>(<span class="STYLE4 STYLE2"> Ubiquitin Regulators </span> )</a></span></li>
		<li class="greybg"><span class="file"><a href="http://weram.biocuckoo.org/"  class="greenlink"  onmouseover="wsug(event, 'Met.&amp;Ace. Regulators')" onmouseout="wsug(event, 0)" target="_blank"><strong>WERAM </strong>(<span class="STYLE4 STYLE2"> Me. & Ace. Regulator</span> )</a></span></li>
		
		
		<li class="greybg"><span class="file"><a href="http://epsd.biocuckoo.cn/"  class="greenlink"  onmouseover="wsug(event, 'Eukaryotic Phosphorylation Site Database')" onmouseout="wsug(event, 0)" target="_blank"><strong>EPSD </strong>(<span class="STYLE4 STYLE2"> Eukaryotic Phospho </span> )</a></span></li>
		<li class="greybg"><span class="file"><a href="http://dbpsp.biocuckoo.cn/"  class="greenlink"  onmouseover="wsug(event, 'Prokaryotic Phosphorylation Sites Database')" onmouseout="wsug(event, 0)" target="_blank"><strong>dbPSP </strong>(<span class="STYLE4 STYLE2"> Prokaryotic Phospho </span> )</a></span></li>
		<li class="greybg"><span class="file"><a href="http://cplm.biocuckoo.cn"  class="greenlink"  onmouseover="wsug(event, 'Compendium of Protein Lysine Modification ')" onmouseout="wsug(event, 0)" target="_blank"><strong>CPLM </strong>(<span class="STYLE4 STYLE2"> Lysine Modification </span> )</a></span></li>
		<li class="greybg"><span class="file"><a href="http://ptmd.biocuckoo.org/"  class="greenlink"  onmouseover="wsug(event, 'PTM &amp; Disease')" onmouseout="wsug(event, 0)" target="_blank"><strong>PTMD </strong>(<span class="STYLE4 STYLE2"> PTM & Disease</span> )</a></span></li>
		<li class="greybg"><span class="file"><a href="http://phossnp.biocuckoo.org/"  class="greenlink"  onmouseover="wsug(event, 'Influence of protein phosphorylation by nsSNP ')" onmouseout="wsug(event, 0)" target="_blank"><strong>PhosSNP </strong>(<span class="STYLE4 STYLE2"> PTM &amp; Variation </span> )</a></span></li>
		
		
		<li class="greybg"><span class="file"><a href="http://dbpaf.biocuckoo.org/"  class="greenlink"  onmouseover="wsug(event, 'Animal Phosphorylation Sites Database')" onmouseout="wsug(event, 0)" target="_blank"><strong>dbPAF </strong>(<span class="STYLE4 STYLE2"> Animal Phospho </span> )</a></span></li>
		<li class="greybg"><span class="file"><a href="http://dbppt.biocuckoo.org/"  class="greenlink"  onmouseover="wsug(event, 'Plant Phosphorylation Sites Database')" onmouseout="wsug(event, 0)" target="_blank"><strong>dbPPT </strong>(<span class="STYLE4 STYLE2"> Plant Phospho </span> )</a></span></li>

										<!-- li class="greybg"><span class="file"><a href="http://ptestis.biocuckoo.org/"  class="greenlink"  onmouseover="wsug(event, 'Database of phosphorylation sites in testis')" onmouseout="wsug(event, 0)" target="_blank"><strong>pTestis </strong>(<span class="STYLE4 STYLE2"> Testis Phospho </span> )</a></span></li-->
										<!--<li class="greybg"><span class="file"><a href="http://lipid.biocuckoo.org/"  class="greenlink"  onmouseover="wsug(event, 'Database of Protein Lipid Modifications')" onmouseout="wsug(event, 0)" target="_blank"><strong>GPS-LipidDB </strong>(<span class="STYLE4 STYLE2"> Lipid Modification</span> )</a></span></li>-->
	</ul>
</li>

                            </ul>
                        </div>
                        <script>
//$("#browser").children().addClass("closed");
$("#databases1").addClass("closed");
$("#predictor1").addClass("closed");
$("#tools1").addClass("closed");
</script>              <div id="ipcount"> 
                            <div align="center">
								
										<div id="map">
											<script id="_wau8fb">var _wau = _wau || []; _wau.push(["map", "2s4dvppyp3", "8fb", "240", "125", "neosat", "default-red"]);</script>
											<script async src="common/map.js"></script>
											
										</div>
							</div>			
									   <br/>
										  <br/>
										  <br/>
										  <br/>
										  <br/>
										  <br/>
										  <br/>
										  <br/>	
										  <br/>
										  <br/>
									<?php require("common/counterWeb.php");?>	
										<br/>
							
                            <span>Last update: Sep. 1st, 2022</span>
							
                    </div>
					</div>
                    </div>
                    
                <div id="content"><div id="contentkk" class="story"><br />
                  <h2 id="pageName">&#8251; Documentation:</h2>                                 
                        <div align="justify"><font face="Arial, Helvetica, sans-serif"><strong><font size="4"><br/>Frequently 
                                        Asked Questions:</font></strong><br>
                            </font>
                        </div>
                        <div style="width: 99%">
                        <p align="justify">1. <font face="Arial, Helvetica, sans-serif"> 

                          <strong>Q:</strong>  How to use GPS-SUMO web server? 

                          </font></p>

                              <p align="justify"> <font face="Arial, Helvetica, sans-serif"><strong>A:</strong> 
                                  Please visit GPS-SUMO at <strong><font color="#FF3300"><a href="http://sumosp.biocuckoo.org/down.php" target="_blank">http://sumosp.biocuckoo.org/down.php</a></font></strong>. Unlike previous version, the web service does not require a JRE runtime environment.
                                   For Windows and Unix/Linux users, please use the keyboard shortcuts "Ctrl+C & Ctrl+V" to copy and paste your FASTA format sequences into TEXT form for prediction.
                                    And for Mac users, please use the keyboard shortcuts "Command+C & Command+V". Then please click on the "Submit" button to run the program. The prediction results will be shown in the Prediction form. 
                                    Again, please click on the ‘Download’ button on the top of the Prediction form to save the results in text or html format.
                                 </font></p>

                         <font face="Arial, Helvetica, sans-serif">2. 

                        <strong>Q:</strong> </font> I can't launch the program properly, what should I do?
                              <p align="justify"><font face="Arial, Helvetica, sans-serif"><strong>A:</strong> 
                              We have tested GPS-SUMO on several operating system, including Windows, Linux and MacOS. For Windows and Linux systems, a latest version of Java Runtime Environment (JRE) package (JAVA 1.6 or later versions) of Sun Microsystems should be pre-installed for using the GPS-SUMO program. 
                              Please download and install the proper JRE package on your computer from <a href="http://java.com"><strong>http://java.com</strong></a>  page or our website. However, for Mac OS, the GPS-SUMO could be used directly without any additional packages. 
                              Finally, if you still can’t launch the program properly, please send us an email and tell me the OS information on your computer. 
                              We will resolve the problem ASAP.                                   
                              </font></p>

                      

                      <p align="justify"><font face="Arial, Helvetica, sans-serif">3</font><font face="Arial, Helvetica, sans-serif">. 

                      <strong>Q:</strong> </font> Is GPS-SUMO much better than SUMOsp?</p>

                      <p align="justify"> <font face="Arial, Helvetica, sans-serif"><strong>A:</strong> 
                        Yes! Firstly, the fourth-generation GPS (Group-based Prediction System) algorithm was applied in GPS-SUMO. The prediction performance was greatly improved against our previous tools. Secondly, a new feature for SUMO-interaction Motif prediction was added, which will benefit further experimental manipulation. Thirdly, the training data set of GPS-SUMO was updated by searching the scientific literature published before September 2013. Thus, the prediction accuracy of GPS-SUMO was significantly improved. Finally, compared with the former arithmetic, the calculation efficiency of GPS-SUMO has risen greatly. It only cost a few minutes to predict sumoylation sites in human proteome using an average desktop computer. </font></p>

                      <p align="justify"><font face="Arial, Helvetica, sans-serif">4. 

                        <strong>Q:</strong> </font> I have 20,000 proteins for 

                        prediction, what should I do? </p>

                       

                      <p align="justify"> <font face="Arial, Helvetica, sans-serif"><strong>A:</strong> 

                        For a large-scale prediction, we recommend two approaches for you. You can use the web service but input the sequences for 20 times, with 1,000 proteins per time. Also, please download a stand-alone software of GPS-SUMO linked as below. In the stand-alone versions, the limitation of sequences number is removed. You can use "Batch Predictor" in the local software for a large-scale prediction.</font></p>

                      <p align="justify"><font face="Arial, Helvetica, sans-serif"> 
5. <strong>Q:</strong> There are three thresholds used in your predictor, what do these parameters mean?</font></p>

                      <p align="justify"> <font face="Arial, Helvetica, sans-serif"><strong>A:</strong> 

                        After GPS-SUMO predictor model was well-trained, we performed an evaluation on this model. From the evaluation, three thresholds with <font color="blue"><strong>high</strong></font>, <font color="blue"><strong>medium</strong></font> and <font color="blue"><strong>low</strong></font> stringencies were chosen for GPS-SUMO. The performance under these three thresholds was presented as follow:

</font></p>
                        
       
                        <table border="1">
                       <caption> The performance of GPS-SUMO in different threshold</caption>
  <col width="72" span="11">
  <tr>
    <td width="72" >&nbsp;</td>
    <td colspan="5" rowspan="2" width="360" ><strong>SUMO Interaction</strong></td>
    <td colspan="5" rowspan="2" width="360"><strong>SUMOylation</strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td></td>
    <td style="font-style:italic">Ac</td>
    <td style="font-style:italic">Sn</td>
    <td style="font-style:italic">Sp</td>
    <td style="font-style:italic">MCC</td>
    <td style="font-style:italic">Pr</td>
    <td style="font-style:italic">Ac</td>
    <td style="font-style:italic">Sn</td>
    <td style="font-style:italic">Sp</td>
    <td style="font-style:italic">MCC</td>
    <td style="font-style:italic">Pr</td>
  </tr>
  <tr>
<td><strong>High</strong></td>
        <td>63.32%</td>
        <td>31.48%</td>
        <td>95.15%</td>
        <td>0.3453</td>
        <td>86.65%</td>
        <td>85.83%</td>
        <td>67.50%</td>
        <td>95.00%</td>
        <td>0.6731 </td>
        <td>87.10%</td>
  </tr>
  <tr>
    <td><strong>Medium</strong></td>
        <td>69.64%</td>
        <td>49.21%</td>
        <td>90.07%</td>
        <td>0.4304 </td>
        <td>83.21%</td>
        <td>92.50%</td>
        <td>97.50%</td>
        <td>90.00%</td>
        <td>0.8450 </td>
        <td>82.98%</td>
  </tr>
  <tr>
<td><strong>Low</strong></td>
        <td>72.64%</td>
        <td>60.12%</td>
        <td>85.16%</td>
        <td>0.4677 </td>
        <td>80.20%</td>
        <td>90.00%</td>
        <td>98.75%</td>
        <td>85.62%</td>
        <td>0.8046 </td>
        <td>77.45%</td>
  </tr>
</table>                 
                        
                        
                        
                        
          <p align="justify"><font face="Arial, Helvetica, sans-serif">               

                        6. <strong>Q:</strong> I have a few questions which are 

                        not listed above, how can I contact the authors of GPS-SUMO? </font></p>

                      
        <p align="justify"> <font face="Arial, Helvetica, sans-serif"><strong>A:</strong> 
          Please contact the two major authors: <a href="mailto:renjian.sysu@gmail.com" >Dr. 
          Jian Ren</a> and <a href="mailto:xueyu@mail.hust.edu.cn" >Dr. Yu Xue</a> 
          for details. </font></p>
   
        <p align="justify"><font face="Arial, Helvetica, sans-serif">7. <strong>Q:</strong> </font> I was trying to install the software in <strong>Mac OS</strong> but my installer says <span style="color:red;font-weight:bold">the file is damaged</span>. How can I properly install the software in Mac OS?</p>
        <p align="justify">                               
            <strong><font face="Arial, Helvetica, sans-serif">A:</font></strong> By default, Mac OS 10.8 or later only allows users to install applications from 'verified sources'. In effect, this means that users are unable to install most applications downloaded from the internet.

            You can follow the directions below to prevent this error message from appearing.
        <p><font face="Arial, Helvetica, sans-serif">(1) Open the <strong> Preferences</strong>. This can be done by either clicking on the <strong>System Preferences</strong> icon in the <strong>Dock</strong> or by going to <strong>Apple Menu > System Preferences</strong>.<br>(2) Open the Security & Privacy pane by clicking <strong>Security & Privacy</strong>.<br>(3) Make sure that the <strong>General</strong> section of the the Security & Privacy pane is selected. Click the icon labeled <strong>Click the lock to prevent further changes</strong>.<br>(4) Enter your username and password into the prompt that appears and click <strong>Unlock</strong>.<br>(5) Under the section labeled <strong>Allow applications downloaded from</strong>, select <strong>Anywhere</strong>. On the prompt that appears, click <strong>Allow From Anywhere</strong>.<br>(6) Exit System Preferences by clicking the red button in the upper left of the window. You should now be able to install applications downloaded from the internet.</font></p>
        <p>&nbsp;</p>
                        
                      
                        
                        </div>
                      <div class="story"></div>
                    </div>
                </div>
            </div>
            </html>
                          <div id="footer" style="width:97%">
                <div id="siteInfo" > Copyright © 2006-2022.The CUCKOO Workgroup. All Rights Reserved </div>
            </div>
        </div>
    </body>
</html>
