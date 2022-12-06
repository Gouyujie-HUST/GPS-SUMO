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
				</tr>
			</thead>
</div>
</div>
</div>
</div>      

<?php	

//exec("E:/phpstudy_pro/WWW/sumosp/share_tools/iupred/iupred  E:/phpstudy_pro/WWW/temp/20221021-005500-883.fas long ", $iupred_result);


$sessionid=$_SESSION['seqfile'];

for ($k=1; $k<=$_SESSION['len']; $k++) {
$bas = $_SESSION['so'][$k];
$arrybas=explode("\t",$bas);
$predsite[$arrybas[0]]='';
}
for ($k=1; $k<=$_SESSION['len']; $k++) {	
$bas = $_SESSION['so'][$k];
$arrybas=explode("\t",$bas);
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
for ($k=1; $k<=($eachpage)&&($start+$k)<=$num; $k++) {	
	$string = $_SESSION['so'][$k+$start];
	$arry=explode("\t",$string);
		for($i=0;$i<6;$i++) 
		{
		if($i==2)
		{    
		$f=trim($arry[$i]);
		$a=substr($f,0,7);
		$b=substr($f,7,strlen($f)-14);
		$c=substr($f,strlen($f)-7,7);
		echo "<td align=center>" . "<font face=Courier New >".trim($a)."<font color=red>".trim($b)."</font>".$c."</font>" . "</td>";
		}
		else { echo "<td align=center>" . "<font face=Courier New >".$arry[$i]."</font>". "</td>" ;}
		}
	echo "</tr>";
} 
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

?>


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
 