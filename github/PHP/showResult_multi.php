<?php
session_start();
?>
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
		<link href="js/ui/jquery-ui.css" rel="stylesheet">
		 <script type="text/javascript" src="js/lavalamp/jquery-1.3.2.min.js"></script>
        <script type="text/javascript" src="js/lavalamp/jquery.easing.min.js"></script>
        <script type="text/javascript" src="js/lavalamp/jquery.lavalamp.js"></script>
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
             the only difference between the two is the stylesheet they use -->    <body style="overflow-x: hidden">
        <div id="container">
        <div id="header">
        <div id="masthead">
        <img src="images/headbg_blue0.jpg" border="0" style="text-align:right"  width="100%" height="200" />
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
                            <li class="current"><a href="online.php" style="width:130px">Web Server</a></li>
							<li ><a href="download.php" style="width:130px">Download</a></li>
                            <li><a href="citation.php" style="width:110px">Citation</a></li>
                            <li><a href="userguide.php" style="width:180px">User Guide</a></li>
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
</script>           
<div id="ipcount"> 
	<br class="clearfloat" />
		<div align="center">
		<script id="_wau8fb">var _wau = _wau || []; _wau.push(["map", "2s4dvppyp3", "8fb", "240", "150", "neosat", "default-red"]);</script>
		<script async src="common/map.js"></script>
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
	  <br/>	
	  <br/>
	  <br/>
	  <?php require("common/counterWeb.php");?>	
	  <br/>
	  <span>Last update: Nov. 1st, 2022</span>
</div>

    </div>
	</div>                

                    
	<style>
		/* Global */
		#ViewMain{min-height:500px; height:auto !important; margin-top:20px;width:100%;}
		#maincontent{ left:20%;width:80%;margin-left:20%; float:left;top:-300px;}
		#fat{left:30%;width:80%; float:left;top:400%;}
		#first{left:30%;width:80%; float:left;top:400%;overflow-x:auto;}
		#inc_bot{width:80%;overflow-x:auto; position: relative;left:-200px;top:0px;margin-left:200px; }
		#fat2 { position: relative;left:0%;width:100%;top:0%;float:left;}
		/* Slider */
		.sliderbutton{float:left;width:40px;margin-bottom:5px;box-shadow:3px;}
		#slider{float:left; width:250px; margin-left:20px; margin-right:20px; margin-top:3px;}

		/* SVG */
		@keyframes strokeanim {to{stroke-dashoffset:0;}}
		/*position: absolute;top:950px;left:270px;*/
		
		#PTMPDB{display:auto;width:350px;height:350px; position: relative;top:20%; text-align:center; vertical-align:middle;}
		#Structure{float:left; width:400px; margin-right:30px;text-align:center; position: relative;top:350px;left:-20px;}
		#SVGView{width:1090px; overflow-x:auto; position: relative;}
		
		#export2 {position: relative;left:10%;top:0%;}
		#PTMSel{width:1200px; overflow-x:auto; position:relative;}
	
		#SVGRef{overflow-x:auto; position: relative;}

		#export {position: relative;left:-75%;top:0px;}
		#pie {position: relative;left:400px;width:700px;}
		#pie1 {float: left; position: relative;}
		#pie2 {float: left; position: relative;}
		#titl {float: left; position: relative;top:30px;left:-120px;overflow-x:display;}

		#echart1 {float: left; position: relative;overflow-x:auto;width:100%;margin:0 auto;}
		#echart {float: left; position: relative;top:50px;overflow-x:auto;}
		#box {background-color:#FFFFFF; overflow-x:display;left:-50px;top:-130px;}
		
		#export3 {position: relative;left:75%;top:-400px;}
		
		#PTMBox{ margin-top:15px; margin-left:0px; z-index:11; position:relative; background:#F0FFFF; width:500px;}
		#PTMBox ul { display: none; list-style: none; margin: 0; padding: 0;}
		#PTMBox li{float:left; width:100px;}
		.sliderbutton.active{
			transform:scale(0.98);
			box-shadow:10px 10px 10px 10px rgba(0,0,0,0.24);
		}
	  label{ padding: 2px 10px; white-space: nowrap; }
	  
	  #Sites{display:none;}
	  #Function p{line-height:1.5;}
	.btn::before{
		transform:scale(0.98);
		box-shadow:3px 2px 2px 3px rgba(0,0,0,0.24);
	}
	.btn::after{
		transform:scale(0.98);
		box-shadow:3px 2px 2px 3px rgba(0,0,0,0.24);
	}
	.btn:active{
		transform:scale(0.98);
		box-shadow:1px 1px 1px 1px rgba(0,0,0,0.24);
	}

	  
		</style>
		<link href="js/ui/jquery-ui.css" rel="stylesheet">
                <div id="content">
                    <div id="contentkk" class="story">
                        <br/>
                        <h2 id="pageName">※ GPS-SUMO2.0 Online Service </h2>
                    <div>
                        <div id="result" style="width:100%;border:0px solid blue">
                        <form enctype="multipart/form-data" action="coreExecute/download.php" method="post" >
                        <div style="float:left;display:_inline">
                            <select name="type" style='font-family:Arial, Helvetica; font-weight: bold; width: 100px; height:30PX;'>
                                <option value=".xls">xls</option>
                                <option value=".txt">txt</option>
								<option value=".zip">zip</option>
                            </select>
                            </div>
				
                          <div style="float:left;display:_inline;margin-left: 5px">
                            <input type="submit" value="Download" style='font-family:Arial, Helvetica; font-weight: bold; width: 100px; height: 30px;'/>
                            </div>
                            </form>
                         <div style="float:left;display:_inline;margin-left: 5px">
                         <input type="button" value="Return" onclick="window.location.href='online.php'" style='font-family:Arial, Helvetica; font-weight: bold; width: 100px; height: 30px;'/></td>		 
		                      </div>
		          </div>          
                  </div>	  
                   <br/> <br/> 
		<!--<div style="clear: both;overflow: hidden;width: 0;height: 0"></div> -->
     
<?php
echo '<strong>Result has</strong> <span style="font-size: 18px">' . ($_SESSION['len'] - 1) . '</span> <strong>items! </strong>';

if ($_SESSION['len'] > 500) {
    echo '<b>The result is so big that we will only display 500 items!</b>';
}

?>
        
<div>
    <table width='97%' id="table" border='1' cellpadding='0' cellspacing='0' bordercolor='#c9e2e6' bgcolor='#f9f6d3'>
			<thead>
				<tr class="top">
					<th width='10%' bgcolor='#267b9f' scope='col'  style='cursor:pointer'><font color='#ffffff'>ID</font></th>
					<th width='7%' bgcolor='#267b9f' scope='col'  style='cursor:pointer'><font color='#ffffff'>Position</font></th>
					<th width='15%' bgcolor='#267b9f' scope='col'  style='cursor:pointer'><font color='#ffffff'>Peptide</font></th>
					<th width='11%' bgcolor='#267b9f' scope='col'  style='cursor:pointer'><font color='#ffffff'>Score</font></th>
				  <th width='7%' bgcolor='#267b9f' scope='col'  style='cursor:pointer'><font color='#ffffff'>Cut-off</font></th>
					<th width='15%' bgcolor='#267b9f' scope='col'  style='cursor:pointer'><font color='#ffffff'>Type</font></th>
				<th width='12%' bgcolor='#267b9f' scope='col'  style='cursor:pointer'><font color='#ffffff'>Link</font></th>
				<th width='5%' bgcolor='#267b9f' scope='col'  style='cursor:pointer'><font color='#ffffff'>Source</font></th>
				<th width='12%' bgcolor='#267b9f' scope='col'  style='cursor:pointer'><font color='#ffffff'>PPI</font></th>
				</tr>
			</thead>
</div>
</div>
</div>
</div>      

<?php	

//exec("E:/phpstudy_pro/WWW/sumosp/share_tools/iupred/iupred  E:/phpstudy_pro/WWW/temp/20221021-005500-883.fas long ", $iupred_result);

$ids="";
$predsite=[];
$sessionid=$_SESSION['seqfile'];
$id_cplm=[];

for ($k=1; $k<=$_SESSION['len']; $k++) {
$bas = $_SESSION['so'][$k];
$arrybas=explode("\t",$bas);
$predsite[$arrybas[0]]='';
}
for ($k=1; $k<=$_SESSION['len']; $k++) {	
$bas = $_SESSION['so'][$k];
$arrybas=explode("\t",$bas);
$id_cplm[$arrybas[0]]=$arrybas[6];
$_SESSION['SEQ'][$arrybas[0]]=trim($arrybas[8]);
$_SESSION['siteasa'][$arrybas[0]]=trim($arrybas[7]);
if(strpos($arrybas[1],'-')==false)
	{$predsite[$arrybas[0]].=$arrybas[1].';';}
}

 if(isset($_GET['p']))
 $page=$_GET['p'];
 else $page=1;
  if(isset($_GET['p']))
  $k = 0;
  $eachpage=20;//每页显示条目
  $num =  $_SESSION['len']; 
   if($num>500)
   {
    $num=500;
    }
   $cent=ceil($num/$eachpage);

$start=($page-1)*$eachpage;
//for ($k=1; $k<=($eachpage)&&($start+$k)<=$num; $k++) {	
//$string = $_SESSION['so'][$k+$start];
//$arry=explode("\t",$string);
//$predsite[$arry[0]]='';
//}

for ($k=1; $k<=($eachpage)&&($start+$k)<=$num; $k++) {	
	$string = $_SESSION['so'][$k+$start];
	$arry=explode("\t",$string);
		for($i=0;$i<7;$i++) 
		{
		if($i==2)
		{    
		$f=trim($arry[$i]);
		$a=substr($f,0,7);
		$b=substr($f,7,strlen($f)-14);
		$c=substr($f,strlen($f)-7,7);
		echo "<td align=center>" . "<font face=Courier New >".trim($a)."<font color=red>".trim($b)."</font>".$c."</font>" . "</td>";
		}
		if ($i==6) {
		echo "<td align=center>" . "<font face=Courier New >"."<a href =http://cplm.biocuckoo.cn/View.php?id=".$arry[6]." target='_blank'>".$arry[6]."</a></font>". "</td>";}
		if ($i!=2&&$i!=6) { echo "<td align=center>" . "<font face=Courier New >".$arry[$i]."</font>". "</td>" ;}
		}
		echo "<td><a href='webcomp/weblogo/".$_SESSION['Species'].".png' target='blank'><img src='webcomp/weblogo/".$_SESSION['Species'].".png' width='160'></img></a></td>";
	echo "</tr>";
} 
//print_r($_SESSION['SEQ']);
//print_r($_SESSION['siteasa']);
?> 
</table>   

<?php
$read="Total "."<b>$cent</b>" ." Pages GO ";
if($cent>1)
{
for($i=1;$i<=$cent;$i++)
if($page==$i)
{$read.="<a href='?p=$i'><b >$i&nbsp;</b></a>";}
else
{$read.="<a href='?p=$i'>$i&nbsp;</a>";}
}
echo $read;
$ids=explode(';',$ids);
$ids=array_filter(array_unique($ids, SORT_REGULAR));
$predsite=array_filter(array_unique($predsite, SORT_REGULAR));
foreach($id_cplm as $key => $value){
	 if (!$value) 
		unset($id_cplm[$key]);}
foreach($predsite as $key => $value){
	 if ($value==';') 
		unset($predsite[$key]);}
$predsite_json=json_encode($predsite);
$id_cplm_json=json_encode($id_cplm);
$_SEQ_json=json_encode($_SESSION['SEQ']);
$_ASA_json=json_encode($_SESSION['siteasa']);

/*$str=$id_cplm['PML'].";;PML;;".$predsite['PML'].';;'.$_SESSION['SEQ']['PML'].';;'.$_SESSION['siteasa']['PML'];
$out = fopen("PML.txt","w");
print("123");
fwrite($out,$str);
fclose($out);*/
?>

<div id="result" style="width:100%">
	<select name="CPLMid"  id='CPLM' style='font-family:Arial, Helvetica;font-weight: bold;  width: 150px; height:30PX;'>
	<?php
		 foreach($predsite as $key => $value){
			echo "<option value='".$key."'>".$key."</option>";}
		//<div><button class='sliderbutton' id='1'>Min</button></div>
		//<div><button class='sliderbutton' id='6'>Max</button></div>
		 
		?>
	 </select>
</div>

		<script type='text/javascript' src='js/iCTCF/echarts.min.js'></script> 

<div id='change' style="width:100%">
	
<button id='changeCPLM' class="btn"  style='font-family:Arial, Helvetica;font-weight: bold; width: 150px; height:30PX;postition:relative;top:10px;left:20px;'>Refresh</button></div>
<div id="allcontent">
	<!-- 新加一块3D模型 -->		
	<div id="ViewMain">
				
				<div id='first' style='border:3px groove #ebebeb;'>
				<div id='Structure'></div>
				<div id='PTMPDB'>
				<div id="pie" style="height:350px;">
				<div id="pie1" style='position:relatve;top:-20px; height:350px;width:350px;' >
					<div id="pie1_can" style='height:350px;width:350px;' ></div>
				</div>	
				<div id="pie2" style='position:relatve;top:-20px; height:350px;width:350px;' >
					<div id="pie2_can" style='height:350px;width:350px;' ></div>
				</div>
				<button id='export' onclick="cutpie()" class='btn' style="font-family:Arial, Helvetica; font-weight: bold; width: 80px; height: 30px; border-radius:15px;font-size:18px;">Export</button>
				</div>
				</div>
				</div>	
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				
				<div id='fat2'>
				<div id="inc_bot"  style='border:3px groove #ebebeb;'>
				<div>
					<div><button class='sliderbutton' id='1' style="height:20px;width:50px;font-size:15px;border-radius:10px;">Min</button></div>
					<div id='slider' style="height:10px;width:200px;"></div>
					<div><button class='sliderbutton' id='6'style="height:20px;width:50px;font-size:15px;border-radius:10px;">Max</button></div>
				<br/>
				<br/>
				<div id="PTMSel" ></div><select id="box" style="height:30px;font-size:15px;"></select>&nbsp;&nbsp;&nbsp;&nbsp;
				<button id='SVGRef' style="height:30px;width:100px;font-size:15px;border-radius:10px;" class='btn'>Refresh</button>&nbsp;&nbsp;&nbsp;&nbsp;
				<button id='export2' onclick="cutline()" class='btn' style="font-family:Arial, Helvetica; font-weight: bold; width: 80px; height: 30px; border-radius:15px;font-size:18px;">Export</button>
				</div>
				
				<div id='PTMBox'>
				</div>
				<div id='SVGView' style='overflow-x:auto;overflow-y:_inline;'>
				<div class='SVG' style='position:relatve;top:30%;'></div>
				</div>
				</div>
				</div>
			
				<br/>
				<br/>
				<br/>
				<div id='fat' style='border:3px groove #ebebeb;'>
				<div id='echart1' style='overflow-x:auto;height:450px;text-align:center;margin-left:auto;margin-right:auto;'>
				<div id='echart' style='height:350px;margin-left:auto;margin-right:auto;' >
				</div>
				</div>
				<button id='export3' onclick="cutdot()" class='btn' style="font-family:Arial, Helvetica; font-weight: bold; width: 80px; height: 30px; border-radius:15px;font-size:18px;">Export</button>
				
				
				</div>
	</div>	
			<div>
	</div>
	<br/><br/><br/>
<script type='text/javascript'> jQuery.easing={easein:function(x,t,b,c,d){return c*(t/=d)*t+b},easeinout:function(x,t,b,c,d){if(t<d/2)return 2*c*t*t/(d*d)+b;var a=t-d/2;return-2*c*a*a/(d*d)+2*c*a/d+c/2+b},easeout:function(x,t,b,c,d){return-c*t*t/(d*d)+2*c*t/d+b},expoin:function(x,t,b,c,d){var a=1;if(c<0){a*=-1;c*=-1}return a*(Math.exp(Math.log(c)/d*t))+b},expoout:function(x,t,b,c,d){var a=1;if(c<0){a*=-1;c*=-1}return a*(-Math.exp(-Math.log(c)/d*(t-d))+c+1)+b},expoinout:function(x,t,b,c,d){var a=1;if(c<0){a*=-1;c*=-1}if(t<d/2)return a*(Math.exp(Math.log(c/2)/(d/2)*t))+b;return a*(-Math.exp(-2*Math.log(c/2)/d*(t-d))+c+1)+b},bouncein:function(x,t,b,c,d){return c-jQuery.easing['bounceout'](x,d-t,0,c,d)+b},bounceout:function(x,t,b,c,d){if((t/=d)<(1/2.75)){return c*(7.5625*t*t)+b}else if(t<(2/2.75)){return c*(7.5625*(t-=(1.5/2.75))*t+.75)+b}else if(t<(2.5/2.75)){return c*(7.5625*(t-=(2.25/2.75))*t+.9375)+b}else{return c*(7.5625*(t-=(2.625/2.75))*t+.984375)+b}},bounceinout:function(x,t,b,c,d){if(t<d/2)return jQuery.easing['bouncein'](x,t*2,0,c,d)*.5+b;return jQuery.easing['bounceout'](x,t*2-d,0,c,d)*.5+c*.5+b},elasin:function(x,t,b,c,d){var s=1.70158;var p=0;var a=c;if(t==0)return b;if((t/=d)==1)return b+c;if(!p)p=d*.3;if(a<Math.abs(c)){a=c;var s=p/4}else var s=p/(2*Math.PI)*Math.asin(c/a);return-(a*Math.pow(2,10*(t-=1))*Math.sin((t*d-s)*(2*Math.PI)/p))+b},elasout:function(x,t,b,c,d){var s=1.70158;var p=0;var a=c;if(t==0)return b;if((t/=d)==1)return b+c;if(!p)p=d*.3;if(a<Math.abs(c)){a=c;var s=p/4}else var s=p/(2*Math.PI)*Math.asin(c/a);return a*Math.pow(2,-10*t)*Math.sin((t*d-s)*(2*Math.PI)/p)+c+b},elasinout:function(x,t,b,c,d){var s=1.70158;var p=0;var a=c;if(t==0)return b;if((t/=d/2)==2)return b+c;if(!p)p=d*(.3*1.5);if(a<Math.abs(c)){a=c;var s=p/4}else var s=p/(2*Math.PI)*Math.asin(c/a);if(t<1)return-.5*(a*Math.pow(2,10*(t-=1))*Math.sin((t*d-s)*(2*Math.PI)/p))+b;return a*Math.pow(2,-10*(t-=1))*Math.sin((t*d-s)*(2*Math.PI)/p)*.5+c+b},backin:function(x,t,b,c,d){var s=1.70158;return c*(t/=d)*t*((s+1)*t-s)+b},backout:function(x,t,b,c,d){var s=1.70158;return c*((t=t/d-1)*t*((s+1)*t+s)+1)+b},backinout:function(x,t,b,c,d){var s=1.70158;if((t/=d/2)<1)return c/2*(t*t*(((s*=(1.525))+1)*t-s))+b;return c/2*((t-=2)*t*(((s*=(1.525))+1)*t+s)+2)+b},linear:function(x,t,b,c,d){return c*t/d+b}};
	</script>
		<script type='text/javascript' src='webcomp/js/jquery.min.js'></script>
		<script src="js/3Dmol.js"></script>	
		<script type='text/javascript' src="js/resultsort.js"></script>
		<script type='text/javascript' src="webcomp/js/jcanvas.min.js"></script>
		<script type='text/javascript' src="js/ui/jquery-ui.min.js"></script>
		<script type='text/javascript' src="js/html2canvas.js"></script>
	  <script type="text/javascript">

	function cutpie(){ 		
	new html2canvas(document.getElementById('pie')).then(canvas1 => {
	var cs1 = new CanvasSaver('webcomp/savecanvas.php', canvas1, 'Piechart')	
	});	
	}
	function cutline(){ 		
	new html2canvas(document.getElementById('SVGView')).then(canvas2 => {
	var cs1 = new CanvasSaver('webcomp/savecanvas.php', canvas2, 'SVGView')	
	});	
	}
	function cutdot(){ 		
	new html2canvas(document.getElementById('echart')).then(canvas3 => {
	var cs1 = new CanvasSaver('webcomp/savecanvas.php', canvas3, 'ASA')	
	});	
	}

	  
	function drawdot(siteasa,sites){
		var app_age = {};
		var option_age;
		var data_age=new Array();
		
		var aalist=new Array();
		var asa=new Array();
		var site_asa=siteasa.split('~');
		//.substring(1,siteasa.length)
		var dom_age = document.getElementById("echart");

		var myChart_age = echarts.init(dom_age);
		
		for(var i = 0;i < site_asa.length; i++){
			var aa=site_asa[i].split(';');
			aalist.push(aa[0]);
			data_age[i]=[];
			data_age[i][0]=i;
			data_age[i][1]=parseFloat(aa[1]);
		}
		//alert(aalist);
		option_age = {
		  visualMap: {
			min: 0,
			max: 1,
			dimension: 1,
			orient: 'vertical',
			right: 0,
			top: 'top',
			//text: [i,'0'],
			calculable: true,
			inRange: {
			  color: ['#008B8B','#FF7F50']
			}
		  },
		  tooltip: {
			trigger: 'item',
			axisPointer: {
			  type: 'cross'
			}
		  },
		  xAxis: [
			{
			  //type: 'value',
			  min: 0,
			  name: 'Amino acid',
			  nameLocation: 'end',
			  data:aalist,
			  minInterval: 1,
		      
			  nameTextStyle: {
				color: '#9D3A59',
				fontSize:18,
				fontWeight: "bolder",
			  },
			  axisLabel:{
			  textStyle:{
				  fontSize:'20',
			  }
			  }

			}
		  ],
		  yAxis: [
			{
			  type: 'value',
			  nameLocation: 'end',
			  nameTextStyle: {
				color: '#9D3A59',
				fontSize: 18,
				fontWeight: "bolder",
			  },
			  axisLabel:{
			  textStyle:{
				  fontSize:'20',
			  }
			  }
			}

		  ],

		  title:[{
			 left:'left',
			 text:'Accessible Surface Area',
			 top:0,
			 textStyle:{
				 fontSize:'28',
				 color:'#9D3A59',
				 fontWeight:'bolder',
		
			 }
		  }],
		  series: [
			{
			  name: 'Number',
			  type: 'scatter',
			  symbolSize:20,
			  data: data_age,
			}
		  ],
		    grid: {
                x: 60,
                y: 40,
                x2: 150,
                y2: 40
              },

		};

		myChart_age.resize({width:site_asa.length*27,height:350});
		if (option_age && typeof option_age === 'object') {
			myChart_age.setOption(option_age);
		}

		}
		
	function drawpie(names,dis_site,canvname,tit){
		var app_age = {};
		var option_pie;
		var data_age=new Array();
		var aalist=new Array();
		var asa=new Array();

		var dom_age = document.getElementById(canvname);

		var myChart_age = echarts.init(dom_age);
		for(var i = 0;i < names.length; i++){
			data_age[i]={};
			data_age[i]['value']=dis_site[i];
			data_age[i]['name']=names[i];
		}
		option_age = {
		  title: {
			text: tit,
			left: 'center',
			fontSize:42,
			top:10,
		  },
		  tooltip: {
			trigger: 'item',
			axisPointer: {
			  type: 'cross'
			}
			},
	
		
		  series: [
			{
			  hoverAnimation: true,
			  name: 'Site',
			  type: 'pie',
			  radius:["30%","65%"],
			  center:["50%","55%"],
			  labelLine:{
				  normal:{
				length:5, //调整上下位置
				length2:7,
				  }
			
				}, 
		    label:{
			fontSize:17,
			color:'#5BA5AF',
			//padding:[100,-40,70,-50], //调整左右位置
			overflow:'none',
			}, 
			  data: data_age,
			  itemStyle:{
			  normal:{
			  color:function(colors){
			            var colorList =[
			            '#2D80B5',
			            '#95DCB6'
			            ];
			            return colorList[colors.dataIndex];
			            }
				},
				}
		
			}
		  ],
			grid: {
                x: 0,
                y: 0,
                x2: 0,
                y2: 0,
              },

		};
		
		if (option_age && typeof option_age === 'object') {
			myChart_age.setOption(option_age);
		}
		myChart_age.resize();

		}		
		
		//window.disorderValue=new Array();
		//$(document).ready(function(){
		function drawdisorder($inname,$allk){
			//	var tt = "<?php echo './webcomp/tmp/'.$_SESSION['seqfile'][$_SESSION['currentindex']].'.txt' ?>";
			  var file='webcomp/tmp/'+$inname+'.txt';
			  
			  //var file='E:/phpstudy_pro/WWW/sumosp/webcomp/tmp/20221014-103248-483.txt';
			  htmlobj=$.ajax({url:file,async:false});
			  var content = htmlobj.responseText;
			  
			  //pre define the vars
			  var length = 0;
			  
			  var sites=new Array();
			  
			  var codes=new Array();
		  
			  var disorder=new Array();
				

			  //parse result file
			  var lines = content.split("\n");
			  for(var i = 0;i < lines.length; i++){

				var str = lines[i];
				
				if(str.indexOf("#") == 0){

				}else{
				
					var arrays = str.split("\t");

					codes.push(arrays[0]);
					
					disorder.push(arrays[1]);

					disorderValue.push(arrays[2]);
					
				}
			  }

			var names=Array.of('Pos.','Neg.');
			var dis_site=$allk.split(';')[0].split(',');
			var dis_sim=$allk.split(';')[1].split(',');
			//if(dis_site!=';'){drawPieChart2(names,dis_site,"Sumo Sites",140,0,10,'mycanvas');}
			//if(dis_sim!=';'){drawPieChart2(names,dis_sim,"Sumo-binding motif",140,0,10,'mycanvas2');}

			if(dis_site!=';'){drawpie(names,dis_site,"pie1_can","Sumo Sites");}
			if(dis_sim!=';'){drawpie(names,dis_sim,"pie2_can","Sumo-binding motif");}
			}
			
			function saveAsLocalImageA () {
				var cnvs1 = document.getElementById("mycanvas");
            	var cs1 = new CanvasSaver('webcomp/savecanvas.php', cnvs1, 'FigureA')					
        	}
			function saveAsLocalImageB () {
				var cnvs1 = document.getElementById("mycanvas2");
            	var cs1 = new CanvasSaver('webcomp/savecanvas.php', cnvs1, 'FigureB')						
        	}			
			function CanvasSaver(url,cnvs, fname) {
      
				if(!cnvs || !url) return;
				fname = fname || 'picture';
					 
				var data = cnvs.toDataURL("image/png");
				data = data.substr(data.indexOf(',') + 1).toString();
				 
				var dataInput = document.createElement("input") ;
				dataInput.setAttribute("name", 'imgdata') ;
				dataInput.setAttribute("value", data);
				dataInput.setAttribute("type", "hidden");
				 
				var nameInput = document.createElement("input") ;
				nameInput.setAttribute("name", 'name') ;
				nameInput.setAttribute("value", fname + '.png');
				 
				var myForm = document.createElement("form");
				myForm.method = 'post';
				myForm.action = url;
				myForm.appendChild(dataInput);
				myForm.appendChild(nameInput);
				 
				document.body.appendChild(myForm) ;
				myForm.submit() ;
				document.body.removeChild(myForm) ;
			}		
			

	function dropDownCk(selectId,hiddenId,now,raw) {
		var boxId = "#" + boxId, selectId = "#" + selectId, hiddenId = "#" + hiddenId;
		$(hiddenId).mouseleave(function(){ // 鼠标离开隐藏复选区域
			$(this).hide();
		});
		
		$(selectId).click(function() { // 切换显示与隐藏
			//$(hiddenId).toggle();
			$(hiddenId).show();
		});
		var tagArr = [];
		$(selectId).html("<option checked='true' style='display:none;'>" + "Select SUMO-sites" + "</option>");
		if(now!=""){
			$(selectId).html("<option checked='true' style='display:none;'>"+now+"</option>");
			tagArr=now.split(", ");
			for(i=0;i<tagArr.length;i++){
				$("#"+tagArr[i]).prop("checked", true);
			}
		}
		$(hiddenId + ' label').find('input').click(function() { // 点击向数组添加元素
			var status="F";
			var $now=$(this).attr("id");
			var $label=$(this).parent().text();
			if ($(this).is(':checked')){
				if($label=="All"){
					tagArr=$now.split(", ");
					$(hiddenId +' input:checkbox').prop("checked", true);
					$("#Clear").prop("checked", false);
					$(".Default").prop("checked", false);
					$(selectId).html("<option checked='true' style='display:none;'>" +$now+ "</option>");
				}else if($label=="Clear"){
					tagArr = [];
					$(hiddenId +' input:checkbox').prop("checked", false);
					$(selectId).html("<option checked='true' style='display:none;'>" + "Select SUMO-sites" + "</option>");
				}else if($label=="Default"){
					tagArr=raw.split(", ");
					$(hiddenId +' input:checkbox').prop("checked", false);
					for(i=0;i<tagArr.length;i++){
						$("#"+tagArr[i]).prop("checked", true);
					}
					$(selectId).html("<option checked='true' style='display:none;'>"+tagArr.join(", ")+"</option>");
				}else{
					var need=$(this).parent().text();
					if(RegExp(need).test(tagArr)){}
					else{
					tagArr.push(need);
					$(selectId).html("<option checked='true' style='display:none;'>" + tagArr.join(", ") + "</option>");
					}
				}
			}else{
				if($label=="All"){
				}else{
					$(".All").prop("checked", false);
					tagArr.splice(tagArr.indexOf($(this).parent().text()), 1); // 删除对应元素
				}
				
				if (tagArr.length == 0) {
					$(selectId).html("<option checked='true' style='display:none;'>" + "Select SUMO-sites" + "</option>");
				}else{
					$(selectId).html("<option checked='true' style='display:none;'>" + tagArr.join(", ") + "</option>");
				}
			}
		});
		return tagArr;
	}
	$.ptmSVG=function($width, $data, $select){
		var $svg=$data.split(";;");
		var $out="<svg width='100%' height='100%' version='1.1' xmlns='http://www.w3.org/2000/svg'>";
		$out=$out+"</text><text x='5' y='45' font-size='20' >"+ $svg[1] +"</text>";
		//+"<g><text x='5' y='25' font-size='20' >"+ $svg[0]
		var y=15;
		$out=$out+"<rect x='110' y="+y+" width='"+$width+"' height='20' rx='4' ty='4' stroke='black' fill='#FFEFD5'></rect>";
		$out=$out+"<text x='100' y="+(y+2)+" font-size='20'>"+1+"</text>";	// Scale
		$out=$out + "<text x='"+($width+113)+"' y="+(y+2)+" font-size='20'>"+$svg[2]+"</text>";
		// Sites
		var info={};
		var $one=$width/$svg[2];
		var $forline=$width/$svg[5];
		var $site=$svg[3].split(";");
		var all="";
		var ptmbox="<ul id='Sitelist'>";

		for(i=0;i<$site.length;i++){
			var $two=$site[i].split(",");
			var $x=$one * $two[0] +110;
			var tmp=$two[1]+","+$two[2];
			$out=$out+"<rect class='position' x='"+$x+"' y="+y+" width='"+(0.8*$one)+"' height='20' title='"+$two[1]+"' name='"+$two[0]+"' fill='black' data='"+tmp+"' ></rect>";
			ptmbox=ptmbox+"<li><label><input id='"+'K'+"' type='checkbox'>"+$two[1]+"</label></li>";
			all=all+$two[1]+", ";
			info[$two[0]]=tmp;
		}
		//alert($out);
		all=all.replace(/, $/,"");
		ptmbox=ptmbox+"<li><label><input id='"+all+"' type='checkbox' class='All'>All</label></li>";
		ptmbox=ptmbox+"<li><label><input id='Clear' type='checkbox'>Clear</label></li>";

		// Default
		//$raw="Select SUMO-sites";
		var $raw;
		//if($svg[0]=='CPLM012610'){
		//	$raw="K12,K6, K96";
		//}else{
		if($site.length<4){
				$raw=all;
			}else{
				var tmp=all.split(", ");
				if($site.length%2==0){
					$raw=tmp[0]+", "+tmp[(tmp.length)/2]+", "+tmp[tmp.length-1];
				}else{
					$raw=tmp[0]+", "+tmp[(tmp.length-1)/2]+", "+tmp[tmp.length-1];
				}
			}
		//}
		ptmbox=ptmbox+"<li><label><input id='"+$raw+"' type='checkbox' class='Default'>Default</label></li>";
		$("#PTMBox").html(ptmbox+"</ul>");
		// Select
		var level=0;
		var max=0;
		var $font=20;
		var last;
		if($select==""){
			dropDownCk("box","Sitelist","",$raw);
		}else{
			if($select=="Default"){
				$select=$raw;
			}
			dropDownCk("box","Sitelist",$select,$raw);
			var $now=$select.split(",");
			$now=$now.sort(function(a,b){
				return(b.replace(/\s*/g,"").replace(/[K]/,"")-a.replace(/\s*/g,"").replace(/[K]/,""));
			});
			for(i=0;i<$now.length;i++){
				var pos=$now[i].replace(/\s*/g,"");
				pos=pos.replace(/[K]/,"");//位点数字
				if(i!=0){
					var gap=(last-pos)*$one;
					var need=($font/2+1)*($now[i].length)+15;
					if(gap<need){
						level++;
						if(level>max){
							max=level;
						}
					}else{
						level=0;
					}
				}
				last=pos;
				var xn=$one * pos +111;
				var yn=y+level*($font+2);
				$out=$out+"<line x1="+xn+" y1="+(y+20)+" x2="+xn+" y2="+(yn+35)+" stroke='black' stroke-width=1 />";
				$out=$out+"<line x1="+xn+" y1="+(yn+35)+" x2="+(xn+10)+" y2="+(yn+45)+" stroke='black' stroke-width=1 />";
				$out=$out+"<text class='pSite' x="+(xn+11)+" y= "+(yn+45)+" dominant-baseline=middle font-size="+($font-1)+" data='"+info[pos]+"' >"+$now[i]+"</text>";
			}
			$out=$out + "</g><g>";
		}
		// Disorder propensity
		if($svg[4]==""){
			var $height=max*($font+2)+70;
			$(".SVG").css({height:$height});
		}else{
			var $height=max*($font+2)+205;
			$(".SVG").css({height:$height});
			y=max*($font+2)+70+105;
			$out=$out +"<line x1=110 y1="+y+" x2="+($width+115)+" y2="+y+" style='stroke:rgb(99,99,99);stroke-width:1'/>"; //x
			$out=$out +"<line x1=110 y1="+y+" x2=110 y2="+(y-105)+" style='stroke:rgb(99,99,99);stroke-width:1'/>"; //y
			$out=$out +"<line x1=110 y1="+(y-90)+" x2=115 y2="+(y-90)+" style='stroke:rgb(99,99,99);stroke-width:1'/>";
			$out=$out +"<text x=86 y="+(y-85)+" font-size='16'>1</text>";
			$out=$out +"<text x=79.5 y="+(y-45)+" font-size='16'>0.5</text>";
			$out=$out +"<line x1=110 y1="+(y-50)+" x2="+($width+110)+" y2="+(y-50)+" style='stroke:#87CEFA;stroke-width:2;stroke-dasharray:3;'/>";
			var aa=$svg[4].replace(/[;]/,"").split(",");
			var points="";
			//var cir="";
			for(i=0;i<aa.length;i++){
				points=points+" "+((i+0.5)*$forline+110)+","+(y-10-80*aa[i]);
				//cir=cir +"<circle class='Num' cx="+((i+0.5)*$forline+110)+" cy="+(y-10-80*aa[i])+" r=4 stroke='#FF6600' stroke-width=1.5 fill='white'/>";
			}
			$out=$out +"<polyline id='load' points='"+points+"' style='fill:none;stroke:#5976BA;stroke-width:3;'/>";
			//$out=$out + cir;
			$out=$out +"<line x1=110 y1="+(y+15)+" x2=130 y2="+(y+15)+" style='fill:none;stroke:#5976BA;stroke-width:3;'/><text x=135 y="+(y+20)+" font-size='20'>Disorder propensity</text>";
		}
		$out=$out + "</g>";
		var length=$width*10;
		//$out=$out + "<defs><style>#load{stroke-dasharray:"+length+"; stroke-dashoffset:"+length+"; animation: strokeanim 5s forwards;}</style></defs>";
		$out=$out + "<defs><style>#load{stroke-dasharray:"+length+"; stroke-dashoffset:"+length+"; animation: strokeanim 5s infinite linear;}#label{display:none}</style></defs>";

		$out=$out + "</svg>";
		$(".SVG").html($out);
		//$(".position").tooltip();
		//alert("555");
		// pSite
		
		$(".pSite").click(function(){
			var data=$(this).attr("data");
			var tmp=data.split(",");
			$("#dialog").html("<font id='site'>"+tmp[0]+"</font><br/>Disorder propensity: "+tmp[1]+"<br/>");
			$("#dialog").dialog("open");
		});
		$(".position").click(function(){
			var data=$(this).attr("data");
			var tmp=data.split(",");
			$("#dialog").html("<font id='site'>"+tmp[0]+"</font><br/>Disorder propensity: "+tmp[1]+"<br/>");
			$("#dialog").dialog("open");
		});
		
	}

	$.ptmPDB=function($line,$chain,$sites){
		var colorSS=function(atom){
			if(atom.ss == 'h') return "green";
			else if(atom.ss == 's') return "yellow";
			else return "white";
		};
		var element=$("#PTMPDB");
		//element.css({'border-style':"groove"});
		element.css({'border-style':"dotted"});
		element.css({'border-color':"#C1BCD6"})
		var config={backgroundColor:'#D1E3F1'};
		var viewer=$3Dmol.createViewer(element,config);
		
		var chain=$chain.split(",");
		//$.get("File.php",{file:"PDB/6--PDB-Final.txt",id:$line},function(response){
		//$.get("File.php",{file:"../cplm/PDB/allbase.txt",id:$line},function(response){
		$.get("File.php",{file:"./PDB/allbase.txt",id:$line},function(response){	
			response=response.replace(/[\r\n]/g,'');
			var data=response.split("\t");
			var all=data[2];
			$.get("File.php",{file:data[3],id:data[4]},function(res){
				res=res.replace(/;;/g,'\n');
				viewer.addModel(res,"pdb");
				viewer.setStyle({cartoon:{}});
				for(var k in chain){
					viewer.setStyle({chain:chain[k]},{cartoon: {colorfunc: colorSS}});
				}

				var sitelist_sp=$sites.split(';');
				
				for (loc in sitelist_sp){
					var pat=new RegExp("[A-Z],LYS,K,\\d+,"+sitelist_sp[loc]);
					get=all.match(pat)[0];
					var info=get.split(",");
					$("#pdbsite").append("<option value='"+get+"'>"+info[0]+": "+info[2]+info[4]+"</option>");
					var atoms=viewer.getModel().selectedAtoms({chain:info[0], resn:info[1], resi:info[3], atom:"CB"});
					viewer.setStyle({chain:info[0], resn:info[1], resi:info[3]}, {cartoon: {color:"red"}});
					for(var b in atoms){
						var atom = atoms[b];
						var l=viewer.addLabel(""+info[2]+info[4], {backgroundColor:'#B8B8B8', backgroundOpacity:0.5, fontSize : 12, fontColor:'black', position:{x : atom.x, y : atom.y, z : atom.z}});
						//atom.label = l;
					}
				}
				viewer.zoomTo();
				viewer.render();
			});

			// Rotate
			var stop="F";
			var rotate=setInterval(function(){viewer.rotate(2);},50);
			element.mouseup(function(){clearInterval(rotate); stop="T"; });
			element.mouseout(function(){
				clearInterval(rotate);
				if(stop=="F"){
					rotate=setInterval(function(){viewer.rotate(2);},50);}
				}
			);
			element.mouseover(function(){clearInterval(rotate);});
			
			//Refresh
			$("#Refresh").click(function(){
				stop="F";
				var option=$("#pdbsite option:selected").val();
				if(option=='All'){
					oneout='';
					var stlist=$sites.split(';');
					for(loc_ in stlist){
					var pat_=new RegExp("[A-Z],LYS,K,\\d+,"+stlist[loc_]);
					var get_=all.match(pat_)[0];
					oneout=oneout+get_+';';}
					option=oneout.substring(0,oneout.length-1);
				}
				//alert(option);
				viewer.removeAllLabels();
				var sitelist_sp=option.split(';');
				for(var k in chain){
					viewer.setStyle({chain:chain[k]},{cartoon: {colorfunc: colorSS}});
				}
				for (loc in sitelist_sp){
					var info=sitelist_sp[loc].split(",");
					var atoms=viewer.getModel().selectedAtoms({chain:info[0], resn:info[1], resi:info[3], atom:"CB"});
					viewer.setStyle({chain:info[0], resn:info[1], resi:info[3]}, {cartoon: {color:"red"}});
					for(var b in atoms){
						var atom = atoms[b];
						var l=viewer.addLabel(""+info[2]+info[4], {backgroundColor:'#B8B8B8', backgroundOpacity:0.5, fontSize : 12, fontColor:'black', position:{x : atom.x, y : atom.y, z : atom.z}});
						//atom.label = l;
					}
				}
				viewer.zoomTo();
				viewer.render();
				clearInterval(rotate);
				rotate=setInterval(function(){viewer.rotate(2);},50);
				})
				});
			}

	function getvar(){
		var pred_arr='<?=$predsite_json?>';
		var pred_arr = JSON.parse(pred_arr);  
		var id_cplm_arr='<?=$id_cplm_json?>';
		var id_cplm_arr = JSON.parse(id_cplm_arr); 
		var id_allk='<?=$_SEQ_json?>';
		var id_allk = JSON.parse(id_allk);
		var siteasa='<?=$_ASA_json?>';
		var siteasa = JSON.parse(siteasa);
		var kk=document.getElementById("CPLM").value;	
		$id=id_cplm_arr[kk];
		var session_id="<?php echo $sessionid; ?>";
		return $id+';;'+kk+';;'+pred_arr[kk]+';;'+session_id+';;'+id_allk[kk]+';;'+siteasa[kk];
	}

	//$(function(){
	function finalshow($id,$name,$sitelis){
		if($id.search(/^CPLM/)==-1){
			$("#ViewMain").prepend("<h3 align='center'>Sorry, your input couldn't be found in the database: "+$name+"</h3>");
		}else if($id.substr(4)<1 || $id.substr(4)>209326){
			$("#ViewMain").prepend("<h2 align='center'>Sorry, your input couldn't be found in the database: "+$name+"</h3>");
		}else{
			$id=$id.substr(4)
			var num=Math.floor(($id-1)/10000);
			var line=$id-num*10000;
			$.get("File.php",{file:"Basic/Protein-View-"+num+".txt",id:line},function(response){
				//$("#tmp").html(response);
				//var hash={ID:0, Primary:1, Source:2, Isoform:3, UniProt:4, ProteinName:5, ProteinSynonyms:6, GeneName:7, GeneSynonym:8, Taxonomy:9, function:10, ncbiProteins:11, ncbiGenes:12, GO:13, InterPro:14, Pfam:15, PROSITE:16, keyword:17, organism:18, sequence:19, length:20, PDB:21, chain:22, line:23, length2:24, SVG:25, region:26, Number:27, PTMs:28, mASA:29, ASA:30, Aspect:31, dblist:32, CDS:33, Ensembl:34, GeneID:35, refseqPin:36, refseqMin:37};
				var hash={ID:0, Primary:1, Source:2, Isoform:3, UniProt:4, ProteinName:5, ProteinSynonyms:6, GeneName:7, GeneSynonym:8, Taxonomy:9, function:10, ncbiProteins:11, ncbiGenes:12, GO:13, keyword:14, organism:15, sequence:16, length:17, PDB:18, chain:19, line:20, length2:21, SVG:22, region:23, PTMs:24, Aspect:25, dblist:26, CDS:27, Ensembl:28, GeneID:29, refseqPin:30, refseqMin:31,geneIDs:32};
				response=response.replace(/[\r\n]/g,'');//CPLM内容
				var all=response.split("\t");
				
				if(all.length==1){
					$("#ViewMain").prepend("<h2 align='center'>Sorry, your input couldn't be found in the database: CPLM"+$id+"</h3>");
				}else{
					$("#sideview").show();
					
					var $pdb;
					if(all[hash.line]=="-1"){
						$("#Overview").css({width:1000});
					}else{
						$("#PTMPDB").show();
						$("#View1").css({height:350});//让view1占一定高度来和下一块分开
						//$("#PTMPDB").html("<p>It may take some time, Please wait a moment.</p>");
						//$("#Structure").append("<p>PDB: <a href='https://www.rcsb.org/structure/"+all[hash.PDB]+" target='_blank' >"+all[hash.PDB]+"</a> ["+all[hash.chain]+"]"+"&nbsp;&nbsp;<a href='https://www.rcsb.org/structure/"+all[hash.PDB]+" target='_blank'>Details</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select id='pdbsite'><option value='All'>All Sites</option></select>&nbsp;&nbsp;&nbsp;&nbsp;<button id='Refresh'>Refresh</button></p>");
						$mark="<p>PDB: <a href='https://www.rcsb.org/structure/"+all[hash.PDB]+"' target='_blank' >"+all[hash.PDB]+"</a> ["+all[hash.chain]+"]"+"&nbsp;&nbsp;&nbsp;&nbsp;<select id='pdbsite'><option value='All'>All Sites</option></select>&nbsp;&nbsp;&nbsp;&nbsp;<button id='Refresh'>Refresh</button></p>";
						$("#Structure").html($mark);
						$.ptmPDB(all[hash.line],all[hash.chain],$sitelis);}
				}
					//PTMSVG
					$("#Sites").show();
					var sitelist=$sitelis.split(';');
					disorderValue=String(disorderValue).substring(0,disorderValue.length-1);
					var disorder=disorderValue.split(',');
					var siteneed="";
					for(var i in sitelist){
						var onesite=sitelist[i]+',K'+sitelist[i]+','+disorder[i]+';';
						siteneed=siteneed+onesite;
						}

					//$datasvg="CPLM"+$id+";;"+all[hash.GeneName]+";;"+disorderValue.length+";;"+siteneed+";;"+disorderValue;
					$datasvg="CPLM"+$id+";;"+all[hash.GeneName]+";;"+disorderValue.length+";;"+siteneed+";;"+disorderValue+";;"+disorder.length;
					//$datasvg=all[hash.ID]+";;"+all[hash.GeneName]+";;"+all[hash.length]+";;"+all[hash.SVG]+";;"+all[hash.region];
					$(".SVG").attr({id: all[hash.length]});
					$.ptmSVG(920, $datasvg,"Default");
					$( "#slider" ).slider({
						range:'min', min:1, max:6, value:1,
						slide: function(event, ui){
							var $site=$("#box option:selected").text();
							if($site=="Select SUMO-sites"){
								$site="";
							}
							var $width=ui.value * $(".SVG").attr("id") + 170;
							if(ui.value == 1){
								$width=1080;
							}else if($width<1080){
								$width=1080;
							}
							$(".SVG").width($width);
							$width=$width-170;
							$.ptmSVG($width, $datasvg, $site);
								}
							});
					$(".sliderbutton").click(function(){
						var $site=$("#box option:selected").text();
						if($site=="Select p-sites"){
							$site="";
						}
						var $value=$(this).attr("id");
						$("#slider").slider({value: $value});
						var $width= $value * $(".SVG").attr("id") + 170;
						if($value == 1){
							$width=1152;
						}else if($width<1152){
							$width=1152;
						}
						$(".SVG").width($width);
						$width=$width-170;
						$.ptmSVG($width, $datasvg, $site);
					});
					$("#SVGRef").click(function(){
						 var $site=$("#box option:selected").text();
						 if($site=="Select SUMO-sites"){
						  $site="";
						 }
						 var $width=$(".SVG").width()-170;
						 $.ptmSVG($width, $datasvg, $site);
						}) 
		});
		}
	}
	
	$("#changeCPLM").click(function(){
			begin();
			})
	function begin(){
	window.disorderValue=new Array();
	var idname=getvar();

	idname=idname.split(';;');
	var $id=idname[0];
	var kk=idname[1];
	var sites=idname[2];
	var session_id=idname[3].replace(/[;]/,"");
	var allk=idname[4];
	var inname=session_id+kk;
	var siteasa=idname[5];
	finalshow($id,kk,sites);
	drawdisorder(inname,allk);
	drawdot(siteasa,sites);
	}
	begin();
</script>

<div id="ipcount"> 
	<br class="clearfloat" />
		<div align="center">

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
	  <br/>
</div>

     <div id="footer" style="width:99%"><div id="siteInfo" >
                                                    Copyright © 2010-2013.The CUCKOO Workgroup. All Rights Reserved
                                                </div></div>
 </div>               	
        </body> 
    </html>
 