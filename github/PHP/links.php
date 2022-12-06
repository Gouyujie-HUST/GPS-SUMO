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
             the only difference between the two is the stylesheet they use -->
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
            <li><a href="userguide.php" style="width:180px">User Guide</a></li>
            <li class="current"><a href="links.php" style="width:80px">LINKS</a></li>
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
</script>                 <div id="ipcount"> 
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
				<div id="content">
                    <div id="contentkk" class="story"><br />
                        <!--<div id="breadCrumb"> <a href="#">Home</a> / <a href="#">GPS</a> / <a href="#">GPS-SNO 1.0　INTRODUCTION</a> / </div>-->
                       
                        <h2 id="pageName">※Link<font color="209BB7" size="4">: </font></h2>
						
						<div>
                            <p align="justify"><font color="#FF3300" size="5"><strong>Introduction</strong></font>:</p>
                            <p align="justify">Protein <font color="#000099"><strong>sumoylation</strong></font> 
                                is one of the most ubiquitous post-translational modification 
                                (PTM), and plays important roles in most of biological 
                                processes. Besides experimental 
                                approaches, prediction of potential candidates with 
                                computational methods has also attracted great attention 
                                for its convenience and fast-speed. In this review, 
                                we present a comprehensive but brief summarization 
                                of computational resources of protein sumoylation, 
                                including sumoylation databases, prediction of 
                                sumoylation 
                                sites and other tools. 
                            </p>
                            <p align="justify">We apologized 
                                that the computational studies without any web links 
                                of databases or tools will not be included in this 
                                compendium, since it's not easy for experimentalists 
                                to use studies directly. We are grateful for users 
                                feedback. Please inform <strong><a href="mailto:xueyu@mail.hust.edu.cn"><font color="#FF6600">Dr. Yu Xue</font></a></strong>, <strong><a href="mailto:gouyujie@hust.edu.cn"><font color="#FF6600">Yujie Gou</font></a></strong> or <strong><a href="mailto:liudan@hust.edu.cn"><font color="#FF6600">Dan Liu</font></a></strong> to add, remove or update 
                                one or multiple web links below. 
                            </p>
                            <p align="justify"><font color="#FF3300" size="5"><strong>Index</strong></font>:</p>
                            <p align="justify"><a href="links.php#l1" target="_self"><font color="#FF3300" size="4"><font color="#0066FF"><strong><font color="#0066CC" size="3">&lt;1&gt; 
                                                    sumoylation Databases</font></strong></font></font></a>
                            </p>
                            <a href="links.php#l2" target="_self"> 
                                <p align="justify"><font color="#0066CC" size="3"><strong>&lt;2&gt; 
                                            Prediction sumoylation sites</strong></font></p>
                            </a> <a href="links.php#l4" target="_self"> 
                                <p align="justify"><font color="#0066CC" size="3"><strong>&lt;3&gt; 
                                            Miscellaneous tools</strong></font></p>
                            </a> 

                            <p align="justify">================================================================================== 
                            </p>
                            <p align="justify"><font color="#FF3300" size="4"><strong><a name="l1" id="l1"></a>&lt;1&gt; 
                                        Sumoylation Databases</strong></font>:</p>
                            <p align="justify">1. <a href="http://phospho.elm.eu.org/" target="_blank"><strong>Compendium of Protein Lysine Modifications (CPLM)</strong>
							</a>: contains 53,483 experimentally 
                                verified sumoylated sites from different species 
                                (<a href="https://pubmed.ncbi.nlm.nih.gov/24214993/" target="_blank">Liu, 
                                    <em>et al.</em>, 2014</a>; <a href="https://pubmed.ncbi.nlm.nih.gov/28529077/" target="_blank">Xu, 
                                    <em>et al.</em>, 2017</a>; <a href="https://pubmed.ncbi.nlm.nih.gov/34581824/" target="_blank">Zhang, 
                                    <em>et al.</em>, 2022</a>). </p>
									
                            <p align="justify">2. <a href="http://qptm.omicsbio.info/" target="_blank"><strong>qPTM</strong></a>: 
                                a new version of qPhos database, is a web-based database 
                                for 6 types of PTMs including acetylation, glycosylation, methylation, phosphorylation, SUMOylation, ubiquitylation in 4 different organisms including human, mouse, rat and yeast. Also, the matched proteome datasets were integrated if available. 
								In total, 11,482,533 quantification events for 660,030 sites on 40,728 proteins under 2,596 conditions are collected and integrated in the qPTM database.
                                (<a href="https://pubmed.ncbi.nlm.nih.gov/36165955/" target="_blank">Yu, 
                                    <em>et al.</em>, 2022</a>). </p>
									
                            <p align="justify">3. <a href="AWESOME" target="_blank"><strong>AWESOME</strong></a>: 
                                a comprehensive platform to collect and integrate SNPs and multiple PTM information. A total of 1,043,608 germline missense variants from the dbSNP was used and each SNP was matched with its protein sequence.</p>
                            
							
                            <p align="justify">4. <a href="http://www.phosida.com/" target="_blank"><strong>PHOSIDA</strong></a> 
                                : a posttranslational modification database, comprises more than 80,000 phosphorylated, N-glycosylated or acetylated sites 
								from nine different species. All sites are obtained from high-resolution mass spectrometric data 
								using the same stringent quality criteria. PHOSIDA is comprised of three main components: the database environment, 
								the prediction platform and the toolkit section (<a href="http://www.ncbi.nlm.nih.gov/entrez/query.fcgi?cmd=Retrieve&db=PubMed&dopt=Citation&list_uids=18039369" target="_blank">Gnad, 
                                    <em>et al.</em>, 2007</a>; <a href="http://www.ncbi.nlm.nih.gov/entrez/query.fcgi?cmd=Retrieve&db=PubMed&dopt=Citation&list_uids=19795423" target="_blank">Gnad, <em>et al.</em>, 2009</a>; 
									<a href="http://www.ncbi.nlm.nih.gov/pubmed/21081558" target="_blank">Gnad, <em>et al.</em>, 2011</a>). <strong></strong> </p>
            
                            <p align="justify">5. <a href="http://www.uniprot.org" target="_blank"><strong>Uniprot
							</strong></a> : for each protein annotation, 
                                the &quot;Amino acid modifications&quot; in the &quot;Sequence 
                                annotation (Features)&quot; section collected the 
                                post-translational modification information of proteins 
                                (<a href="https://pubmed.ncbi.nlm.nih.gov/33237286/" target="_blank">UniProt Consortium, 
                                    <em>et al.</em>, 2021</a>).</p>
									
                            <p align="justify">6. <a href="https://awi.cuhk.edu.cn/dbPTM/" target="_blank"><strong>dbPTM 
                                        </strong></a>: a comprehensive database by integrating experimentally verified PTMs from several databases and annotating the potential PTMs for all UniProtKB protein entries.
										<a href="https://pubmed.ncbi.nlm.nih.gov/26578568/" target="_blank">Huang,
                                    <em>et al.</em>, 2016</a>;<a href="https://pubmed.ncbi.nlm.nih.gov/30418626/" target="_blank">Huang,
                                    <em>et al.</em>, 2019</a>;<a href="https://pubmed.ncbi.nlm.nih.gov/34788852/" target="_blank">Li,
                                    <em>et al.</em>, 2022</a>
									).</p>
									
                            <p align="justify">7. <a href="http://lifecenter.sgst.cn/SysPTM/" target="_blank"><strong>SysPTM 
                                        2.0</strong></a> (<a href="http://lifecenter.sgst.cn/SysPTM/" target="_blank"><strong>Mirror 
                                        website</strong></a>): provides a systematic and sophisticated 
                                platform for proteomic PTM research, equipped not 
                                only with a knowledge base of manually curated multi-type 
                                modification data, but also with four fully developed, 
                                in-depth data mining tools (<a href="http://www.ncbi.nlm.nih.gov/entrez/query.fcgi?cmd=Retrieve&db=PubMed&dopt=Citation&list_uids=19366988" target="_blank">Li, 
                                    <em>et al.</em>, 2009</a>;<a href="https://pubmed.ncbi.nlm.nih.gov/24705204/" target="_blank">Li, 
                                    <em>et al.</em>, 2014</a>
									).</p>
							<p align="justify">8. A comprehensive compilation of SUMO proteomics</strong></a>: provide proteomic evidence for sumoylation of 3,617 proteins at 7,327 sumoylation sites, and insight into SUMO group modification by
										clustering the sumoylated proteins into functional networks. (<a href="https://pubmed.ncbi.nlm.nih.gov/27435506/" target="_blank">Ivo A Hendriks, 
                                    <em>et al.</em>, 2009</a>
									).</p>
									

                            <p align="justify"><font color="#FF3300" size="4"><strong> 
                                        <a name="l2" id="l2"></a>&lt;2&gt; Prediction of sumoylation sites</strong></font>:</p>
                            <p align="justify">1. <a href="https://github.com/duolinwang/MusiteDeep_web" target="_blank"><strong>MusiteDeep</strong>
							</a>: a deep-learning based webserver for protein post-translational modification site prediction and visualization (<a href="MusiteDeep" target="_blank">Wang, 
                                    <em>et al.</em>, 2020</a>).</p>
                            <p align="justify">2. <a href="http://sumosp.biocuckoo.org" target="_blank"><strong>GPS-SUMO</strong></a>: 
                                a tool for the prediction of sumoylation sites and SUMO-interaction motifs (<a href="https://pubmed.ncbi.nlm.nih.gov/24880689/" target="_blank">Zhao, 
                                    <em>et al.</em>, 2014</a>).</p>
                            <p align="justify">3. <a href="http://www.jassa.fr/" target="_blank"><strong>JASSA</strong></a>: a comprehensive tool for prediction of SUMOylation sites and SIMs
							(<a href="https://pubmed.ncbi.nlm.nih.gov/26142185/" target="_blank">Guillaume Beauclair, 
                                    <em>et al.</em>, 2015</a>). </p>
                            <p align="justify">4. <a href="http://app.aporc.org/iAcet-Sumo/" target="_blank"><strong>iAcet-Sumo</strong>
							</a>: Identification of lysine acetylation and sumoylation sites in proteins by multi-class transformation methods
							(<a href="https://pubmed.ncbi.nlm.nih.gov/30015011/" target="_blank">Yang, 
                                    <em>et al.</em>, 2018)</a>. </p>
                            <p align="justify">5. <strong><a href="https://www.abcepta.com/sumoplot" target="_blank">sumoplot</a>
							</strong>: The presence of this post-translational modification may help explain larger MWs than expected on SDS gels due to attachment of SUMO protein at multiple positions in your protein. 
                                </p>
                            <p align="justify">6. <a href="http://sumosp.biocuckoo.org/download.php" target="_blank"><strong>SUMOsp2.0</strong>
							</a>: Development of a site-specific predictor of SUMOsp 2.0 (<a href="http://www.ncbi.nlm.nih.gov/entrez/query.fcgi?cmd=Retrieve&db=PubMed&dopt=Citation&list_uids=17984086" target="_blank"> Ren, 
                                    <em>et al.</em>, 2009</a>).</p>
                            
							
                            <p align="justify"><font color="#FF3300" size="4"><strong> 
                                        <a name="l4" id="l4"></a>&lt;3&gt; Miscellaneous tools</strong></font>: 
                            </p>
                            <p align="justify">1. <strong><a href="http://gps.biocuckoo.cn/" target="_blank">GPS 
                                        5.0 </a></strong><font color="#0033CC"><strong><img src="images/GPS.png" alt="GPS" width="16" height="16" /></strong></font>: An update on the prediction of kinase-specific phosphorylation sites in proteins 
                                (<a href="https://pubmed.ncbi.nlm.nih.gov/32200042/" target="_blank">Wang, <em>et al.</em>, 2020</a>).</p>
                            
							<p align="justify">2. <strong><a href="http://hemi.biocuckoo.org/" target="_blank">HemI 
                                        2.0 </a></strong><font color="#0033CC"><strong><img src="images/GPS.png" alt="GPS" width="16" height="16" /></strong></font>: an online service for heatmap illustration
                                (<a href="https://pubmed.ncbi.nlm.nih.gov/35670661/" target="_blank">Ning, <em>et al.</em>, 2022</a>).</p>
                            

                        </div>
                    
					</div>
                </div>
            </div>
                          <div id="footer" style="width:97%">
                <div id="siteInfo" > Copyright © 2006-2022.The CUCKOO Workgroup. All Rights Reserved </div>
            </div>
        </div>
    </body>
</html>
