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
             the only difference between the two is the stylesheet they use --><style type="text/css">
    <!--
    .STYLE1 {color: #ff1010;font-size: 18px;}
    -->
</style>
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
            <li class="current"><a href="citation.php" style="width:110px">Citation</a></li>
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
</script>            <div id="ipcount"> 
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
                  
                  
                  
                  
                    
             <h2 id="pageName">※Citation</h2>
                          
                          
        <table width="520" border="0" cellpadding="0" cellspacing="0" align="center" style="margin-left:10px" >
          <tr> 
            <td width="520"><img src="images/boxtop1.png" width="519" height="12" /></td>
          </tr>
          <tr> 
            <td width="520" background="images/padding.jpg" style="padding:5px"><p><em><strong> 
                For publication of results please cite the following articles:</strong></em></p>
              <p><img src="images/cover2.gif" width="94" height="126" border="1" align="left" style="border-color:#CCCCCC; margin-right:8px" /> 
                <font face="Arial, Helvetica, sans-serif"><strong>GPS-SUMO: a 
                tool for the prediction of sumoylation sites and SUMO-interaction 
                motifs</strong>.<br />
                Qi Zhao, Yubin Xie, Yueyuan Zheng, Shuai Jiang, Wenzhong Liu, 
                Weiping Mu, Yong Zhao, <a href="mailto:xueyu@mail.hust.edu.cn">Yu 
                Xue</a> and<a href="mailto:renjian.sysu@gmail.com"> Jian Ren</a>.<br />
                <strong><em>Nucleic Acids Research</em>. 2014;</strong> 42(W1):W325-W330.</font></p>
                <p> <a href="http://nar.oxfordjournals.org/content/42/W1/W325.abstract" target="_blank">[Abstract]</a> 
                <a href="http://nar.oxfordjournals.org/content/42/W1/W325.long" target="_blank">[Full 
                Text]</a> </p>
            </td>
          </tr>
          <tr>
            <td background="images/padding.jpg" style="padding:5px"><p><br />
                <img src="images/cover.gif" width="94" height="126" border="1" style="border-color:#CCCCCC; margin-right:8px" align="left" /> 
                <font face="Arial, Helvetica, sans-serif"><strong>Systematic study 
                of protein sumoylation: Development of a site-specific predictor 
                of SUMOsp 2.0</strong>.<br />
                <a href="mailto:renjian.sysu@gmail.com">Jian Ren</a>, Xinjiao 
                Gao, Changjiang Jin, Mei Zhu, Xiwei Wang, Andrew Shaw, Longping 
                Wen, Xuebiao Yao and <a href="mailto:xueyu@mail.hust.edu.cn">Yu 
                Xue</a>. </font><font face="Arial, Helvetica, sans-serif"><strong><em>Proteomics</em>. 
                2009; </strong>9:3409-3412</font></p>
              <p> <a href="http://dx.doi.org/10.1002%2Fpmic.200800646" target="_blank">[Abstract]</a> 
                <a href="http://www3.interscience.wiley.com/cgi-bin/fulltext/122440468/PDFSTART" target="_blank">[Full 
                Text]</a> </p></td>
          </tr>
          <tr>
            <td background="images/padding.jpg" style="padding:5px"><p><br />
                <img src="images/cover2.gif" width="94" height="126" border="1" align="left" style="border-color:#CCCCCC; margin-right:8px" />
                <font face="Arial, Helvetica, sans-serif"><strong>SUMOsp: a web server for sumoylation site prediction</strong>.<br />
                <a href="mailto:xueyu@mail.hust.edu.cn">Yu
                Xue</a> , Fengfeng Zhou, Chuanhai Fu, Ying Xu, Xuebiao Yao.<br />
                <strong><em>Nucleic Acids Research</em>. 2006;</strong> 34:W254–W257.</font></p>
                <p> <a href="https://academic.oup.com/nar/article/34/suppl_2/W254/2505596?login=true" target="_blank">[Abstract]</a>
                <a href="https://academic.oup.com/nar/article/34/suppl_2/W254/2505596?login=true" target="_blank">[Full
                Text]</a> </p>
            </td>
          </tr>
          <tr> 
            <td><img src="images/boxfoot.png" width="520" height="32" /></td>
          </tr>
        </table>
                    
                    
                    
               <br />
             
                    <hr width="550" align="left"/>
                    
                    <br />      
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    

                    <h2 id="pageName">※ GPS-SUMO/SUMOsp cited by <span class="STYLE1">>500</span> publications :</h2>
                    <div style="width: 99%">
                   <p align='justify'>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Amatullah H, et al.<em><strong>Cell</strong></em>.2022;185(17):3232.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/35952671 target='_blank'>PMID: 35952671</a>]</p>
<p align='justify'>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ninova M, et al.<em><strong>Molecular Cell</strong></em>.2020;77(3):556.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/31901446 target='_blank'>PMID: 31901446</a>]</p>
<p align='justify'>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wei Y, et al.<em><strong>Molecular Cell</strong></em>.2017;66(5):581.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28552615 target='_blank'>PMID: 28552615</a>]</p>
<p align='justify'>4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Raman N, et al.<em><strong>Molecular Cell</strong></em>.2016;64(3):607-615.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/27814492 target='_blank'>PMID: 27814492</a>]</p>
<p align='justify'>5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Khateb A, et al.<em><strong>Nature Communications</strong></em>.2021;12(1).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/34518534 target='_blank'>PMID: 34518534</a>]</p>
<p align='justify'>6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Riboldi GM, et al.<em><strong>Nature Communications</strong></em>.2021;12(1).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/34413305 target='_blank'>PMID: 34413305</a>]</p>
<p align='justify'>7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xun SG, et al.<em><strong>Nature Communications</strong></em>.2021;12(1).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/33753739 target='_blank'>PMID: 33753739</a>]</p>
<p align='justify'>8.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Qi HJ, et al.<em><strong>Nature Communications</strong></em>.2021;12(1).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/33479230 target='_blank'>PMID: 33479230</a>]</p>
<p align='justify'>9.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wan J, et al.<em><strong>Nature Communications</strong></em>.2019;10.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/30948704 target='_blank'>PMID: 30948704</a>]</p>
<p align='justify'>10.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Barry R, et al.<em><strong>Nature Communications</strong></em>.2018;9.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/30069026 target='_blank'>PMID: 30069026</a>]</p>
<p align='justify'>11.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Eifler K, et al.<em><strong>Nature Communications</strong></em>.2018;9.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/29549242 target='_blank'>PMID: 29549242</a>]</p>
<p align='justify'>12.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Despras E, et al.<em><strong>Nature Communications</strong></em>.2016;7.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/27811911 target='_blank'>PMID: 27811911</a>]</p>
<p align='justify'>13.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chen C, et al.<em><strong>Nature Communications</strong></em>.2015;6.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/26582366 target='_blank'>PMID: 26582366</a>]</p>
<p align='justify'>14.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xia PY, et al.<em><strong>Nature Communications</strong></em>.2015;6.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/26348439 target='_blank'>PMID: 26348439</a>]</p>
<p align='justify'>15.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;van Cuijk L, et al.<em><strong>Nature Communications</strong></em>.2015;6.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/26151477 target='_blank'>PMID: 26151477</a>]</p>
<p align='justify'>16.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ng CH, et al.<em><strong>Nature Communications</strong></em>.2015;6.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/25766875 target='_blank'>PMID: 25766875</a>]</p>
<p align='justify'>17.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Khan M, et al.<em><strong>Nature Communications</strong></em>.2014;5.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/25134617 target='_blank'>PMID: 25134617</a>]</p>
<p align='justify'>18.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Witze ES, et al.<em><strong>Nature Methods</strong></em>.2007;4(10):798-806.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/17901869 target='_blank'>PMID: 17901869</a>]</p>
<p align='justify'>19.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Zhou FF, et al.<em><strong>Nature Protocols</strong></em>.2006;1(3):1318-1321.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/17406417 target='_blank'>PMID: 17406417</a>]</p>
<p align='justify'>20.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Robinson NJ, et al.<em><strong>Science Signaling</strong></em>.2021;14(689).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/34187905 target='_blank'>PMID: 34187905</a>]</p>
<p align='justify'>21.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Flick K, et al.<em><strong>Science Signaling</strong></em>.2009;2(81).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/19638612 target='_blank'>PMID: 19638612</a>]</p>
<p align='justify'>22.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Golebiowski F, et al.<em><strong>Science Signaling</strong></em>.2009;2(72).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/19471022 target='_blank'>PMID: 19471022</a>]</p>
<p align='justify'>23.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Andreev VI, et al.<em><strong>Nature Structural & Molecular Biology</strong></em>.2022;29(2):130.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/35173350 target='_blank'>PMID: 35173350</a>]</p>
<p align='justify'>24.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cabello-Lobato MJ, et al.<em><strong>Nucleic Acids Research</strong></em>.2022;50(8):4732-4754.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/35420136 target='_blank'>PMID: 35420136</a>]</p>
<p align='justify'>25.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yu F, et al.<em><strong>Nucleic Acids Research</strong></em>.2021;49(10):5779-5797.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/34048572 target='_blank'>PMID: 34048572</a>]</p>
<p align='justify'>26.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ryu HY, et al.<em><strong>Nucleic Acids Research</strong></em>.2020;48(21):12151-12168.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/33231641 target='_blank'>PMID: 33231641</a>]</p>
<p align='justify'>27.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wang DL, et al.<em><strong>Nucleic Acids Research</strong></em>.2020;48(W1):W140-W146.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/32324217 target='_blank'>PMID: 32324217</a>]</p>
<p align='justify'>28.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang Y, et al.<em><strong>Nucleic Acids Research</strong></em>.2019;47(D1):D874-D880.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/30215764 target='_blank'>PMID: 30215764</a>]</p>
<p align='justify'>29.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hannan A, et al.<em><strong>Nucleic Acids Research</strong></em>.2015;43(21):10213-10226.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/26319015 target='_blank'>PMID: 26319015</a>]</p>
<p align='justify'>30.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Zhao Q, et al.<em><strong>Nucleic Acids Research</strong></em>.2014;42(W1):W325-W330.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/24880689 target='_blank'>PMID: 24880689</a>]</p>
<p align='justify'>31.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reo E, et al.<em><strong>Nucleic Acids Research</strong></em>.2010;38(13):4254-4262.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/20299342 target='_blank'>PMID: 20299342</a>]</p>
<p align='justify'>32.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chymkowitch P, et al.<em><strong>Genome Research</strong></em>.2015;25(6):897-906.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/25800674 target='_blank'>PMID: 25800674</a>]</p>
<p align='justify'>33.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stabell M, et al.<em><strong>Biochemical and Biophysical Research Communications</strong></em>.2021;552:91-97.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/33744765 target='_blank'>PMID: 33744765</a>]</p>
<p align='justify'>34.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Garee JP, et al.<em><strong>Biochemical and Biophysical Research Communications</strong></em>.2011;408(4):516-522.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/21527249 target='_blank'>PMID: 21527249</a>]</p>
<p align='justify'>35.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Liu BH, et al.<em><strong>Biochemical and Biophysical Research Communications</strong></em>.2007;358(1):136-139.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/17470363 target='_blank'>PMID: 17470363</a>]</p>
<p align='justify'>36.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mojsin M, et al.<em><strong>Biochemical Genetics</strong></em>.2010;48(7-8):612-623.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/20495863 target='_blank'>PMID: 20495863</a>]</p>
<p align='justify'>37.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Becker S, et al.<em><strong>Biochemical Journal</strong></em>.2021;478(1):217-234.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/33241844 target='_blank'>PMID: 33241844</a>]</p>
<p align='justify'>38.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sanyal S, et al.<em><strong>Biochemical Journal</strong></em>.2020;477(19):3803-3818.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/32926159 target='_blank'>PMID: 32926159</a>]</p>
<p align='justify'>39.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shen QT, et al.<em><strong>Biochemical Journal</strong></em>.2017;474:3455-3469.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28899943 target='_blank'>PMID: 28899943</a>]</p>
<p align='justify'>40.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Satpathy S, et al.<em><strong>Biochemical Journal</strong></em>.2013;450:433-442.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/23445221 target='_blank'>PMID: 23445221</a>]</p>
<p align='justify'>41.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dutting E, et al.<em><strong>Biochemical Journal</strong></em>.2011;435:365-371.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/21288202 target='_blank'>PMID: 21288202</a>]</p>
<p align='justify'>42.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lee B, et al.<em><strong>Biochemical Journal</strong></em>.2009;421:449-461.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/19450230 target='_blank'>PMID: 19450230</a>]</p>
<p align='justify'>43.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ghasabi F, et al.<em><strong>Biochemistry and Biophysics Reports</strong></em>.2022;30.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/35368742 target='_blank'>PMID: 35368742</a>]</p>
<p align='justify'>44.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hsieh FS, et al.<em><strong>Biochimica Et Biophysica Acta-Gene Regulatory Mechanisms</strong></em>.2014;1839(7):579-591.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/24852358 target='_blank'>PMID: 24852358</a>]</p>
<p align='justify'>45.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ni HJ, et al.<em><strong>Biochimica Et Biophysica Acta-General Subjects</strong></em>.2012;1820(12):1893-1900.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/22906975 target='_blank'>PMID: 22906975</a>]</p>
<p align='justify'>46.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Almadanim MC, et al.<em><strong>Biochimica Et Biophysica Acta-Molecular Cell Research</strong></em>.2018;1865(2):231-246.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/29100789 target='_blank'>PMID: 29100789</a>]</p>
<p align='justify'>47.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vranych CV, et al.<em><strong>Biochimica Et Biophysica Acta-Molecular Cell Research</strong></em>.2014;1843(9):1805-1817.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/24751693 target='_blank'>PMID: 24751693</a>]</p>
<p align='justify'>48.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Palczewska M, et al.<em><strong>Biochimica Et Biophysica Acta-Molecular Cell Research</strong></em>.2011;1813(5):1050-1058.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/21070824 target='_blank'>PMID: 21070824</a>]</p>
<p align='justify'>49.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cahill MA, et al.<em><strong>Biochimica Et Biophysica Acta-Reviews on Cancer</strong></em>.2016;1866(2):339-349.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/27452206 target='_blank'>PMID: 27452206</a>]</p>
<p align='justify'>50.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Umbaugh CS, et al.<em><strong>Biochimie</strong></em>.2019;156:92-99.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/30315854 target='_blank'>PMID: 30315854</a>]</p>
<p align='justify'>51.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pokotylo I, et al.<em><strong>Biochimie</strong></em>.2014;96:144-157.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/23856562 target='_blank'>PMID: 23856562</a>]</p>
<p align='justify'>52.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Smits VAJ, et al.<em><strong>Bioessays</strong></em>.2016;38(9):863-868.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/27374980 target='_blank'>PMID: 27374980</a>]</p>
<p align='justify'>53.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wang DL, et al.<em><strong>Bioinformatics</strong></em>.2017;33(24):3909-3916.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/29036382 target='_blank'>PMID: 29036382</a>]</p>
<p align='justify'>54.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wang LN, et al.<em><strong>Bioinformatics</strong></em>.2017;33(10):1457-1463.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28025199 target='_blank'>PMID: 28025199</a>]</p>
<p align='justify'>55.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jia JH, et al.<em><strong>Bioinformatics</strong></em>.2016;32(20):3133-3141.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/27354696 target='_blank'>PMID: 27354696</a>]</p>
<p align='justify'>56.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Beauclair G, et al.<em><strong>Bioinformatics</strong></em>.2015;31(21):3483-3491.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/26142185 target='_blank'>PMID: 26142185</a>]</p>
<p align='justify'>57.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nagata K, et al.<em><strong>Bioinformatics</strong></em>.2014;30(12):1681-1689.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/24574112 target='_blank'>PMID: 24574112</a>]</p>
<p align='justify'>58.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wang TB, et al.<em><strong>Bioinformatics</strong></em>.2012;28(12):1562-1570.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/22531218 target='_blank'>PMID: 22531218</a>]</p>
<p align='justify'>59.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ritz A, et al.<em><strong>Bioinformatics</strong></em>.2009;25(1):14-21.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/18996944 target='_blank'>PMID: 18996944</a>]</p>
<p align='justify'>60.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DiGiacomo V, et al.<em><strong>Biological Reviews</strong></em>.2016;91(2):288-310.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/25630983 target='_blank'>PMID: 25630983</a>]</p>
<p align='justify'>61.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peluso JJ, et al.<em><strong>Biology of Reproduction</strong></em>.2013;88(1).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/23242527 target='_blank'>PMID: 23242527</a>]</p>
<p align='justify'>62.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kurt F, et al.<em><strong>Biometals</strong></em>.2022;35(5):875-887.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/35764832 target='_blank'>PMID: 35764832</a>]</p>
<p align='justify'>63.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reinders J, et al.<em><strong>Biomolecular Engineering</strong></em>.2007;24(2):169-177.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/17419095 target='_blank'>PMID: 17419095</a>]</p>
<p align='justify'>64.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Karpiyevich M, et al.<em><strong>Biomolecules</strong></em>.2020;10(10).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/33022940 target='_blank'>PMID: 33022940</a>]</p>
<p align='justify'>65.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wang QS, et al.<em><strong>Biomolecules</strong></em>.2019;9(4).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/30999631 target='_blank'>PMID: 30999631</a>]</p>
<p align='justify'>66.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lee CC, et al.<em><strong>Bio-Protocol</strong></em>.2018;8(19).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/30505883 target='_blank'>PMID: 30505883</a>]</p>
<p align='justify'>67.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Zhang YL, et al.<em><strong>Bioscience Biotechnology and Biochemistry</strong></em>.2020;84(5):943-953.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/31916512 target='_blank'>PMID: 31916512</a>]</p>
<p align='justify'>68.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cahill MA, et al.<em><strong>Bioscience Trends</strong></em>.2017;11(2):179-192.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28250339 target='_blank'>PMID: 28250339</a>]</p>
<p align='justify'>69.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Baytek G, et al.<em><strong>Biotechniques</strong></em>.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/35698829 target='_blank'>PMID: 35698829</a>]</p>
<p align='justify'>70.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sarkar K, et al.<em><strong>Blood</strong></em>.2015;126(14):1670-1682.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/26261240 target='_blank'>PMID: 26261240</a>]</p>
<p align='justify'>71.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Patel KP, et al.<em><strong>Blood</strong></em>.2015;126(6):790-797.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/26124496 target='_blank'>PMID: 26124496</a>]</p>
<p align='justify'>72.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Grant MM, et al.<em><strong>Bmb Reports</strong></em>.2010;43(11):720-725.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/21110914 target='_blank'>PMID: 21110914</a>]</p>
<p align='justify'>73.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;He F, et al.<em><strong>Bmc Bioinformatics</strong></em>.2021;22(1).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/34689734 target='_blank'>PMID: 34689734</a>]</p>
<p align='justify'>74.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang YX, et al.<em><strong>Bmc Bioinformatics</strong></em>.2021;22(1).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/33789579 target='_blank'>PMID: 33789579</a>]</p>
<p align='justify'>75.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reddy HM, et al.<em><strong>Bmc Bioinformatics</strong></em>.2019;19.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/30717650 target='_blank'>PMID: 30717650</a>]</p>
<p align='justify'>76.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Saethang T, et al.<em><strong>Bmc Bioinformatics</strong></em>.2016;17.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/27534850 target='_blank'>PMID: 27534850</a>]</p>
<p align='justify'>77.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yavuz AS, et al.<em><strong>Bmc Bioinformatics</strong></em>.2015;16.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/26679222 target='_blank'>PMID: 26679222</a>]</p>
<p align='justify'>78.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xu JL, et al.<em><strong>Bmc Bioinformatics</strong></em>.2008;9.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/18179724 target='_blank'>PMID: 18179724</a>]</p>
<p align='justify'>79.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nair A, et al.<em><strong>Bmc Biology</strong></em>.2020;18(1).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/32867776 target='_blank'>PMID: 32867776</a>]</p>
<p align='justify'>80.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Szymura SJ, et al.<em><strong>Bmc Biology</strong></em>.2020;18(1).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/32209106 target='_blank'>PMID: 32209106</a>]</p>
<p align='justify'>81.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Watanabe T, et al.<em><strong>Bmc Evolutionary Biology</strong></em>.2010;10.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/20152013 target='_blank'>PMID: 20152013</a>]</p>
<p align='justify'>82.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bertke MM, et al.<em><strong>Bmc Genomics</strong></em>.2019;20.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/31101013 target='_blank'>PMID: 31101013</a>]</p>
<p align='justify'>83.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yavuz AS, et al.<em><strong>Bmc Genomics</strong></em>.2014;15.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/25521314 target='_blank'>PMID: 25521314</a>]</p>
<p align='justify'>84.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Barth AS, et al.<em><strong>Bmc Genomics</strong></em>.2010;11.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/20334672 target='_blank'>PMID: 20334672</a>]</p>
<p align='justify'>85.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thakur S, et al.<em><strong>Bmc Genomics</strong></em>.2009;10.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/19604367 target='_blank'>PMID: 19604367</a>]</p>
<p align='justify'>86.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Terova G, et al.<em><strong>Bmc Immunology</strong></em>.2011;12.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/22204309 target='_blank'>PMID: 22204309</a>]</p>
<p align='justify'>87.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lin FK, et al.<em><strong>Bmc Microbiology</strong></em>.2009;9.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/19674441 target='_blank'>PMID: 19674441</a>]</p>
<p align='justify'>88.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang J, et al.<em><strong>Bmc Molecular Biology</strong></em>.2017;18.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28882106 target='_blank'>PMID: 28882106</a>]</p>
<p align='justify'>89.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Liu YY, et al.<em><strong>Bmc Plant Biology</strong></em>.2019;19(1).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/31884953 target='_blank'>PMID: 31884953</a>]</p>
<p align='justify'>90.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tomastikova E, et al.<em><strong>Bmc Plant Biology</strong></em>.2012;12.
<p align='justify'>91.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xu HD, et al.<em><strong>Briefings in Bioinformatics</strong></em>.2021;22(3).
<p align='justify'>92.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chen Z, et al.<em><strong>Briefings in Bioinformatics</strong></em>.2019;20(6):2267-2290.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/30285084 target='_blank'>PMID: 30285084</a>]</p>
<p align='justify'>93.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;He WY, et al.<em><strong>Briefings in Functional Genomics</strong></em>.2019;18(4):220-229.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/30576418 target='_blank'>PMID: 30576418</a>]</p>
<p align='justify'>94.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cui HY, et al.<em><strong>Cancer Communications</strong></em>.2022;42(8):750-767.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/35716012 target='_blank'>PMID: 35716012</a>]</p>
<p align='justify'>95.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lee JW, et al.<em><strong>Cancer Letters</strong></em>.2007;257(2):252-262.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/17881119 target='_blank'>PMID: 17881119</a>]</p>
<p align='justify'>96.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shim HS, et al.<em><strong>Cancer Research</strong></em>.2015;75(6):1056-1067.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/25614517 target='_blank'>PMID: 25614517</a>]</p>
<p align='justify'>97.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chelouah S, et al.<em><strong>Cancers</strong></em>.2018;10(1).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/29303964 target='_blank'>PMID: 29303964</a>]</p>
<p align='justify'>98.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Singh A, et al.<em><strong>Cell Calcium</strong></em>.2015;58(2):139-146.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/25933832 target='_blank'>PMID: 25933832</a>]</p>
<p align='justify'>99.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Liang ZH, et al.<em><strong>Cell Chemical Biology</strong></em>.2021;28(2):180.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/33444530 target='_blank'>PMID: 33444530</a>]</p>
<p align='justify'>100.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang NY, et al.<em><strong>Cell Communication and Signaling</strong></em>.2019;17(1).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/31752909 target='_blank'>PMID: 31752909</a>]</p>
<p align='justify'>101.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lee HJ, et al.<em><strong>Cell Communication and Signaling</strong></em>.2010;8.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/20509869 target='_blank'>PMID: 20509869</a>]</p>
<p align='justify'>102.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subramonian D, et al.<em><strong>Cell Cycle</strong></em>.2021;20(9):855-873.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/33910471 target='_blank'>PMID: 33910471</a>]</p>
<p align='justify'>103.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Meng FX, et al.<em><strong>Cell Cycle</strong></em>.2016;15(13):1724-1732.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/27163259 target='_blank'>PMID: 27163259</a>]</p>
<p align='justify'>104.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sridharan V, et al.<em><strong>Cell Cycle</strong></em>.2016;15(16):2135-2144.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/27230136 target='_blank'>PMID: 27230136</a>]</p>
<p align='justify'>105.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ryu H, et al.<em><strong>Cell Cycle</strong></em>.2015;14(17):2777-2784.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/26131587 target='_blank'>PMID: 26131587</a>]</p>
<p align='justify'>106.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Correa-Vazquez JF, et al.<em><strong>Cell Death & Disease</strong></em>.2021;12(4).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/33753728 target='_blank'>PMID: 33753728</a>]</p>
<p align='justify'>107.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chhunchha B, et al.<em><strong>Cell Death & Disease</strong></em>.2017;8.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28055018 target='_blank'>PMID: 28055018</a>]</p>
<p align='justify'>108.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shrivastava MB, et al.<em><strong>Cell Death and Differentiation</strong></em>.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/35449213 target='_blank'>PMID: 35449213</a>]</p>
<p align='justify'>109.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Liu HQ, et al.<em><strong>Cell Death and Differentiation</strong></em>.2020;27(11):3146-3161.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/32483381 target='_blank'>PMID: 32483381</a>]</p>
<p align='justify'>110.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wang XD, et al.<em><strong>Cell Death and Differentiation</strong></em>.2011;18(2):304-314.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/20798689 target='_blank'>PMID: 20798689</a>]</p>
<p align='justify'>111.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jiang RW, et al.<em><strong>Cell Death Discovery</strong></em>.2017;3.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/29018572 target='_blank'>PMID: 29018572</a>]</p>
<p align='justify'>112.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kim JG, et al.<em><strong>Cell Host & Microbe</strong></em>.2013;13(2):143-154.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/23414755 target='_blank'>PMID: 23414755</a>]</p>
<p align='justify'>113.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Franz A, et al.<em><strong>Cell Reports</strong></em>.2021;37(2).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/34644576 target='_blank'>PMID: 34644576</a>]</p>
<p align='justify'>114.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gonzalez-Prieto R, et al.<em><strong>Cell Reports</strong></em>.2021;34(4).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/33503430 target='_blank'>PMID: 33503430</a>]</p>
<p align='justify'>115.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Suhail A, et al.<em><strong>Cell Reports</strong></em>.2019;29(11):3522.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/31825833 target='_blank'>PMID: 31825833</a>]</p>
<p align='justify'>116.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wagner K, et al.<em><strong>Cell Reports</strong></em>.2019;29(2):480.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/31597105 target='_blank'>PMID: 31597105</a>]</p>
<p align='justify'>117.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ritho J, et al.<em><strong>Cell Reports</strong></em>.2015;12(5):734-742.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/26212320 target='_blank'>PMID: 26212320</a>]</p>
<p align='justify'>118.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fu H, et al.<em><strong>Cell Research</strong></em>.2019;29(3):254-257.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/30631152 target='_blank'>PMID: 30631152</a>]</p>
<p align='justify'>119.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gao SJ, et al.<em><strong>Cells</strong></em>.2021;10(11).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/34831226 target='_blank'>PMID: 34831226</a>]</p>
<p align='justify'>120.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yau TY, et al.<em><strong>Cells</strong></em>.2021;10(11).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/34831049 target='_blank'>PMID: 34831049</a>]</p>
<p align='justify'>121.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ahmad A, et al.<em><strong>Cells</strong></em>.2020;9(11).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/33202879 target='_blank'>PMID: 33202879</a>]</p>
<p align='justify'>122.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Digiacomo V, et al.<em><strong>Cellular & Molecular Biology Letters</strong></em>.2015;20(4):571-585.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/26146125 target='_blank'>PMID: 26146125</a>]</p>
<p align='justify'>123.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wetzel F, et al.<em><strong>Cellular and Molecular Life Sciences</strong></em>.2017;74(2):373-392.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/27604867 target='_blank'>PMID: 27604867</a>]</p>
<p align='justify'>124.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Luan ZD, et al.<em><strong>Cellular and Molecular Life Sciences</strong></em>.2013;70(10):1793-1806.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/23247248 target='_blank'>PMID: 23247248</a>]</p>
<p align='justify'>125.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Williams MJ, et al.<em><strong>Cellular and Molecular Life Sciences</strong></em>.2012;69(22):3819-3834.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/22618246 target='_blank'>PMID: 22618246</a>]</p>
<p align='justify'>126.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mabb AM, et al.<em><strong>Cellular and Molecular Life Sciences</strong></em>.2007;64(15):1979-1996.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/17530464 target='_blank'>PMID: 17530464</a>]</p>
<p align='justify'>127.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Beyer AR, et al.<em><strong>Cellular Microbiology</strong></em>.2015;17(4):504-519.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/25308709 target='_blank'>PMID: 25308709</a>]</p>
<p align='justify'>128.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Luo HR, et al.<em><strong>Cellular Physiology and Biochemistry</strong></em>.2018;46(5):1861-1867.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/29705808 target='_blank'>PMID: 29705808</a>]</p>
<p align='justify'>129.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lv XX, et al.<em><strong>Cellular Signalling</strong></em>.2022;92.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/35108640 target='_blank'>PMID: 35108640</a>]</p>
<p align='justify'>130.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kuo FT, et al.<em><strong>Cellular Signalling</strong></em>.2009;21(12):1935-1944.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/19744555 target='_blank'>PMID: 19744555</a>]</p>
<p align='justify'>131.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dustrude ET, et al.<em><strong>Channels</strong></em>.2017;11(4):316-328.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28277940 target='_blank'>PMID: 28277940</a>]</p>
<p align='justify'>132.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dardashti RN, et al.<em><strong>Chemistry-A European Journal</strong></em>.2020;26(22):4952-4957.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/31960982 target='_blank'>PMID: 31960982</a>]</p>
<p align='justify'>133.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Takahashi Y, et al.<em><strong>Chromosoma</strong></em>.2008;117(2):189-198.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/18046568 target='_blank'>PMID: 18046568</a>]</p>
<p align='justify'>134.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Zhu XL, et al.<em><strong>Circulation Research</strong></em>.2017;121(6):636.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28760777 target='_blank'>PMID: 28760777</a>]</p>
<p align='justify'>135.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prokop JW, et al.<em><strong>Comprehensive Physiology</strong></em>.2022;12(2):3303-3336.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/35578967 target='_blank'>PMID: 35578967</a>]</p>
<p align='justify'>136.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Audagnotto M, et al.<em><strong>Computational and Structural Biotechnology Journal</strong></em>.2017;15:307-319.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28458782 target='_blank'>PMID: 28458782</a>]</p>
<p align='justify'>137.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lopez Y, et al.<em><strong>Computational Biology and Chemistry</strong></em>.2020;87.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/32604027 target='_blank'>PMID: 32604027</a>]</p>
<p align='justify'>138.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Herath V, et al.<em><strong>Computational Biology and Chemistry</strong></em>.2016;65:128-139.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/27816829 target='_blank'>PMID: 27816829</a>]</p>
<p align='justify'>139.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang YX, et al.<em><strong>Computers in Biology and Medicine</strong></em>.2018;100:144-151.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/30015011 target='_blank'>PMID: 30015011</a>]</p>
<p align='justify'>140.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Huang GH, et al.<em><strong>Current Bioinformatics</strong></em>.2018;13(4):387-395.
<p align='justify'>141.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chen JY, et al.<em><strong>Current Biology</strong></em>.2018;28(10):1548.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/29731305 target='_blank'>PMID: 29731305</a>]</p>
<p align='justify'>142.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stokdyk K, et al.<em><strong>Current Genetics</strong></em>.2021;67(2):283-294.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/33386486 target='_blank'>PMID: 33386486</a>]</p>
<p align='justify'>143.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Carmona-Mora P, et al.<em><strong>Current Genomics</strong></em>.2010;11(8):607-617.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/21629438 target='_blank'>PMID: 21629438</a>]</p>
<p align='justify'>144.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Zhao YW, et al.<em><strong>Current Medicinal Chemistry</strong></em>.2022;29(5):894-907.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/34525906 target='_blank'>PMID: 34525906</a>]</p>
<p align='justify'>145.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blicher T, et al.<em><strong>Current Opinion in Structural Biology</strong></em>.2010;20(3):335-341.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/20403684 target='_blank'>PMID: 20403684</a>]</p>
<p align='justify'>146.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Draga S, et al.<em><strong>Current Proteomics</strong></em>.2021;18(3):415-423.
<p align='justify'>147.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xu Y, et al.<em><strong>Current Proteomics</strong></em>.2019;16(3):166-174.
<p align='justify'>148.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Maurer MH, et al.<em><strong>Current Proteomics</strong></em>.2012;9(1):18-25.
<p align='justify'>149.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agrawal P, et al.<em><strong>Current Topics in Medicinal Chemistry</strong></em>.2018;18(13):1146-1167.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/30117394 target='_blank'>PMID: 30117394</a>]</p>
<p align='justify'>150.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mohabatkar H, et al.<em><strong>Current Topics in Medicinal Chemistry</strong></em>.2017;17(21):2381-2392.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28356000 target='_blank'>PMID: 28356000</a>]</p>
<p align='justify'>151.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pai PP, et al.<em><strong>Current Topics in Medicinal Chemistry</strong></em>.2017;17(21):2401-2421.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28359251 target='_blank'>PMID: 28359251</a>]</p>
<p align='justify'>152.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xu Y, et al.<em><strong>Current Topics in Medicinal Chemistry</strong></em>.2016;16(6):591-603.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/26286211 target='_blank'>PMID: 26286211</a>]</p>
<p align='justify'>153.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Singla D, et al.<em><strong>Current Topics in Medicinal Chemistry</strong></em>.2013;13(10):1172-1191.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/23647540 target='_blank'>PMID: 23647540</a>]</p>
<p align='justify'>154.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Greenlee M, et al.<em><strong>Cytoskeleton</strong></em>.2018;75(7):290-306.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/29729126 target='_blank'>PMID: 29729126</a>]</p>
<p align='justify'>155.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Li J, et al.<em><strong>Database-The Journal of Biological Databases and Curation</strong></em>.2014.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/24705204 target='_blank'>PMID: 24705204</a>]</p>
<p align='justify'>156.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rodriguez A, et al.<em><strong>Development</strong></em>.2019;146(23).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/31704792 target='_blank'>PMID: 31704792</a>]</p>
<p align='justify'>157.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mannix KM, et al.<em><strong>Development</strong></em>.2019;146(14).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/31208963 target='_blank'>PMID: 31208963</a>]</p>
<p align='justify'>158.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ntini E, et al.<em><strong>Developmental Biology</strong></em>.2011;360(2):403-414.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/22005665 target='_blank'>PMID: 22005665</a>]</p>
<p align='justify'>159.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Krentz NAJ, et al.<em><strong>Developmental Cell</strong></em>.2017;41(2):129.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28441528 target='_blank'>PMID: 28441528</a>]</p>
<p align='justify'>160.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kaminsky R, et al.<em><strong>Developmental Cell</strong></em>.2009;17(5):724-735.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/19922876 target='_blank'>PMID: 19922876</a>]</p>
<p align='justify'>161.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dai XQ, et al.<em><strong>Diabetes</strong></em>.2011;60(3):838-847.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/21266332 target='_blank'>PMID: 21266332</a>]</p>
<p align='justify'>162.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ding XF, et al.<em><strong>Dna and Cell Biology</strong></em>.2008;27(5):257-265.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/18358072 target='_blank'>PMID: 18358072</a>]</p>
<p align='justify'>163.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kramarz K, et al.<em><strong>Dna Repair</strong></em>.2022;116.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/35716431 target='_blank'>PMID: 35716431</a>]</p>
<p align='justify'>164.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Swartzlander DB, et al.<em><strong>Dna Repair</strong></em>.2016;48:51-62.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/27839712 target='_blank'>PMID: 27839712</a>]</p>
<p align='justify'>165.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;McIntyre J, et al.<em><strong>Dna Repair</strong></em>.2015;29:166-179.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/25743599 target='_blank'>PMID: 25743599</a>]</p>
<p align='justify'>166.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Olsen MT, et al.<em><strong>Ecology and Evolution</strong></em>.2014;4(10):1787-1803.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/24963377 target='_blank'>PMID: 24963377</a>]</p>
<p align='justify'>167.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rousova D, et al.<em><strong>Elife</strong></em>.2021;10.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/34951404 target='_blank'>PMID: 34951404</a>]</p>
<p align='justify'>168.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Watson SJ, et al.<em><strong>Elife</strong></em>.2021;10.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/34473053 target='_blank'>PMID: 34473053</a>]</p>
<p align='justify'>169.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kim H, et al.<em><strong>Elife</strong></em>.2021;10.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/34003109 target='_blank'>PMID: 34003109</a>]</p>
<p align='justify'>170.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bhagwat NR, et al.<em><strong>Elife</strong></em>.2021;10.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/33502312 target='_blank'>PMID: 33502312</a>]</p>
<p align='justify'>171.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Accossato S, et al.<em><strong>Elife</strong></em>.2020;9.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/33350382 target='_blank'>PMID: 33350382</a>]</p>
<p align='justify'>172.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gao KY, et al.<em><strong>Elife</strong></em>.2019;8.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/30642431 target='_blank'>PMID: 30642431</a>]</p>
<p align='justify'>173.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Moll L, et al.<em><strong>Elife</strong></em>.2018;7.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/30403374 target='_blank'>PMID: 30403374</a>]</p>
<p align='justify'>174.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Plant LD, et al.<em><strong>Elife</strong></em>.2016;5.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28029095 target='_blank'>PMID: 28029095</a>]</p>
<p align='justify'>175.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Liu ZC, et al.<em><strong>Embo Journal</strong></em>.2020;39(13).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/32395866 target='_blank'>PMID: 32395866</a>]</p>
<p align='justify'>176.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hellmuth S, et al.<em><strong>Embo Journal</strong></em>.2018;37(22).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/30305303 target='_blank'>PMID: 30305303</a>]</p>
<p align='justify'>177.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Waters E, et al.<em><strong>Embo Reports</strong></em>.2022;23(2).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/34994490 target='_blank'>PMID: 34994490</a>]</p>
<p align='justify'>178.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Osumi K, et al.<em><strong>Embo Reports</strong></em>.2019;20(12).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/31576653 target='_blank'>PMID: 31576653</a>]</p>
<p align='justify'>179.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sahoo MR, et al.<em><strong>Embo Reports</strong></em>.2017;18(2):241-263.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28039207 target='_blank'>PMID: 28039207</a>]</p>
<p align='justify'>180.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Garg M, et al.<em><strong>Embo Reports</strong></em>.2014;15(8):871-877.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/24925530 target='_blank'>PMID: 24925530</a>]</p>
<p align='justify'>181.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ying HY, et al.<em><strong>Embo Reports</strong></em>.2012;13(7):631-637.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/22555612 target='_blank'>PMID: 22555612</a>]</p>
<p align='justify'>182.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jimenez-Canino R, et al.<em><strong>Endocrinology</strong></em>.2017;158(11):4047-4063.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28938454 target='_blank'>PMID: 28938454</a>]</p>
<p align='justify'>183.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peluso JJ, et al.<em><strong>Endocrinology</strong></em>.2012;153(8):3929-3939.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/22719051 target='_blank'>PMID: 22719051</a>]</p>
<p align='justify'>184.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jiang JJ, et al.<em><strong>Endocrinology</strong></em>.2010;151(8):3697-3705.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/20555024 target='_blank'>PMID: 20555024</a>]</p>
<p align='justify'>185.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sahid S, et al.<em><strong>Environmental and Experimental Botany</strong></em>.2021;183.
<p align='justify'>186.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Colignon B, et al.<em><strong>Environmental and Experimental Botany</strong></em>.2019;162:192-200.
<p align='justify'>187.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bueno MTD, et al.<em><strong>Epigenetics</strong></em>.2013;8(11):1162-1175.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/23970103 target='_blank'>PMID: 23970103</a>]</p>
<p align='justify'>188.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sotomska M, et al.<em><strong>Epigenetics & Chromatin</strong></em>.2021;14(1).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/34332624 target='_blank'>PMID: 34332624</a>]</p>
<p align='justify'>189.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jox T, et al.<em><strong>Epigenetics & Chromatin</strong></em>.2017;10.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28680483 target='_blank'>PMID: 28680483</a>]</p>
<p align='justify'>190.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jeffers V, et al.<em><strong>Eukaryotic Cell</strong></em>.2012;11(6):735-742.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/22544907 target='_blank'>PMID: 22544907</a>]</p>
<p align='justify'>191.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Leach MD, et al.<em><strong>Eukaryotic Cell</strong></em>.2012;11(2):98-108.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/22158711 target='_blank'>PMID: 22158711</a>]</p>
<p align='justify'>192.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Haywood AFM, et al.<em><strong>European Heart Journal</strong></em>.2013;34(13):1002-1011.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/23161701 target='_blank'>PMID: 23161701</a>]</p>
<p align='justify'>193.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Venter G, et al.<em><strong>European Journal of Cell Biology</strong></em>.2015;94(2):114-127.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/25538032 target='_blank'>PMID: 25538032</a>]</p>
<p align='justify'>194.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Siitonen A, et al.<em><strong>European Journal of Neurology</strong></em>.2013;20(4):e59-e59.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/23490116 target='_blank'>PMID: 23490116</a>]</p>
<p align='justify'>195.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Weitzel JM, et al.<em><strong>European Thyroid Journal</strong></em>.2016;5(3):152-163.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/27843805 target='_blank'>PMID: 27843805</a>]</p>
<p align='justify'>196.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Moriuchi T, et al.<em><strong>Experimental Cell Research</strong></em>.2016;342(1):83-94.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/26921507 target='_blank'>PMID: 26921507</a>]</p>
<p align='justify'>197.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Brantis-de-Carvalho CE, et al.<em><strong>Experimental Cell Research</strong></em>.2015;330(1):151-163.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/25447205 target='_blank'>PMID: 25447205</a>]</p>
<p align='justify'>198.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Racz P, et al.<em><strong>Experimental Dermatology</strong></em>.2009;18(3):261-263.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/19054061 target='_blank'>PMID: 19054061</a>]</p>
<p align='justify'>199.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xu JR, et al.<em><strong>Faseb Journal</strong></em>.2019;33(3):3237-3251.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/30407877 target='_blank'>PMID: 30407877</a>]</p>
<p align='justify'>200.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xiao N, et al.<em><strong>Faseb Journal</strong></em>.2019;33(1):163-174.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/29969578 target='_blank'>PMID: 29969578</a>]</p>
<p align='justify'>201.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tomasi ML, et al.<em><strong>Faseb Journal</strong></em>.2018;32(6):3278-3288.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/29401608 target='_blank'>PMID: 29401608</a>]</p>
<p align='justify'>202.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Eifler K, et al.<em><strong>Febs Journal</strong></em>.2015;282(19):3669-3680.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/26185901 target='_blank'>PMID: 26185901</a>]</p>
<p align='justify'>203.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bigarella CL, et al.<em><strong>Febs Letters</strong></em>.2012;586(19):3522-3528.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/22922005 target='_blank'>PMID: 22922005</a>]</p>
<p align='justify'>204.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gowran A, et al.<em><strong>Febs Letters</strong></em>.2009;583(21):3412-3418.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/19819240 target='_blank'>PMID: 19819240</a>]</p>
<p align='justify'>205.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kwasek K, et al.<em><strong>Fish Physiology and Biochemistry</strong></em>.2017;43(3):849-862.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28097495 target='_blank'>PMID: 28097495</a>]</p>
<p align='justify'>206.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fan WF, et al.<em><strong>Folia Microbiologica</strong></em>.2015;60(6):473-481.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/25832009 target='_blank'>PMID: 25832009</a>]</p>
<p align='justify'>207.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Savyon M, et al.<em><strong>Frontiers in Aging Neuroscience</strong></em>.2020;12.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/32670048 target='_blank'>PMID: 32670048</a>]</p>
<p align='justify'>208.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Herrera-Marcos LV, et al.<em><strong>Frontiers in Bioscience-Landmark</strong></em>.2018;23:1020-1037.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28930587 target='_blank'>PMID: 28930587</a>]</p>
<p align='justify'>209.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Burroughs AM, et al.<em><strong>Frontiers in Bioscience-Landmark</strong></em>.2012;17:1433-1460.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/22201813 target='_blank'>PMID: 22201813</a>]</p>
<p align='justify'>210.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Senis E, et al.<em><strong>Frontiers in Cell and Developmental Biology</strong></em>.2021;9.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/35036403 target='_blank'>PMID: 35036403</a>]</p>
<p align='justify'>211.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kasera M, et al.<em><strong>Frontiers in Cell and Developmental Biology</strong></em>.2021;9.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/34660568 target='_blank'>PMID: 34660568</a>]</p>
<p align='justify'>212.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Giordano I, et al.<em><strong>Frontiers in Cell and Developmental Biology</strong></em>.2021;9.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/34621739 target='_blank'>PMID: 34621739</a>]</p>
<p align='justify'>213.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Roychowdhury T, et al.<em><strong>Frontiers in Cell and Developmental Biology</strong></em>.2020;8.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/33409278 target='_blank'>PMID: 33409278</a>]</p>
<p align='justify'>214.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Oki AT, et al.<em><strong>Frontiers in Cellular and Infection Microbiology</strong></em>.2016;6.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/27713867 target='_blank'>PMID: 27713867</a>]</p>
<p align='justify'>215.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Saik NO, et al.<em><strong>Frontiers in Genetics</strong></em>.2020;11.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/32211027 target='_blank'>PMID: 32211027</a>]</p>
<p align='justify'>216.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Requena D, et al.<em><strong>Frontiers in Immunology</strong></em>.2020;11.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/33013857 target='_blank'>PMID: 33013857</a>]</p>
<p align='justify'>217.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chen J, et al.<em><strong>Frontiers in Microbiology</strong></em>.2021;12.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/33967989 target='_blank'>PMID: 33967989</a>]</p>
<p align='justify'>218.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thakur R, et al.<em><strong>Frontiers in Microbiology</strong></em>.2016;7.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/26941719 target='_blank'>PMID: 26941719</a>]</p>
<p align='justify'>219.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tokmakov AA, et al.<em><strong>Frontiers in Microbiology</strong></em>.2014;5.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/24999341 target='_blank'>PMID: 24999341</a>]</p>
<p align='justify'>220.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wang N, et al.<em><strong>Frontiers in Molecular Neuroscience</strong></em>.2020;13.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/33192289 target='_blank'>PMID: 33192289</a>]</p>
<p align='justify'>221.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welch MA, et al.<em><strong>Frontiers in Molecular Neuroscience</strong></em>.2019;12.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/31213982 target='_blank'>PMID: 31213982</a>]</p>
<p align='justify'>222.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lorusso G, et al.<em><strong>Frontiers in Oncology</strong></em>.2020;10.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/32793493 target='_blank'>PMID: 32793493</a>]</p>
<p align='justify'>223.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xiao Q, et al.<em><strong>Frontiers in Pharmacology</strong></em>.2020;11.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/33041800 target='_blank'>PMID: 33041800</a>]</p>
<p align='justify'>224.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Song Y, et al.<em><strong>Frontiers in Pharmacology</strong></em>.2019;10.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/30873037 target='_blank'>PMID: 30873037</a>]</p>
<p align='justify'>225.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chen CF, et al.<em><strong>Frontiers in Physiology</strong></em>.2019;10.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/31555141 target='_blank'>PMID: 31555141</a>]</p>
<p align='justify'>226.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Brohi RD, et al.<em><strong>Frontiers in Physiology</strong></em>.2017;8.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28659810 target='_blank'>PMID: 28659810</a>]</p>
<p align='justify'>227.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Zhang Y, et al.<em><strong>Frontiers in Plant Science</strong></em>.2019;10.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/31787994 target='_blank'>PMID: 31787994</a>]</p>
<p align='justify'>228.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mazur MJ, et al.<em><strong>Frontiers in Plant Science</strong></em>.2017;8.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/29250092 target='_blank'>PMID: 29250092</a>]</p>
<p align='justify'>229.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vazquez-Hernandez M, et al.<em><strong>Frontiers in Plant Science</strong></em>.2017;8.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28970842 target='_blank'>PMID: 28970842</a>]</p>
<p align='justify'>230.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Li YJ, et al.<em><strong>Frontiers in Plant Science</strong></em>.2017;8.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28878795 target='_blank'>PMID: 28878795</a>]</p>
<p align='justify'>231.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Carranco R, et al.<em><strong>Frontiers in Plant Science</strong></em>.2017;8.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28659940 target='_blank'>PMID: 28659940</a>]</p>
<p align='justify'>232.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Handu M, et al.<em><strong>G3-Genes Genomes Genetics</strong></em>.2015;5(10):2137-2154.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/26290570 target='_blank'>PMID: 26290570</a>]</p>
<p align='justify'>233.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Qian Y, et al.<em><strong>Gene</strong></em>.2020;741.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/32160959 target='_blank'>PMID: 32160959</a>]</p>
<p align='justify'>234.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Podder S, et al.<em><strong>Gene</strong></em>.2019;711.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/31228540 target='_blank'>PMID: 31228540</a>]</p>
<p align='justify'>235.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xu Y, et al.<em><strong>Gene</strong></em>.2016;576(1):99-104.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/26432000 target='_blank'>PMID: 26432000</a>]</p>
<p align='justify'>236.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin-Gomez L, et al.<em><strong>Gene</strong></em>.2014;533(1):208-217.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/24095775 target='_blank'>PMID: 24095775</a>]</p>
<p align='justify'>237.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Casati B, et al.<em><strong>Gene</strong></em>.2012;511(2):326-337.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/23041082 target='_blank'>PMID: 23041082</a>]</p>
<p align='justify'>238.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wu CS, et al.<em><strong>Genes & Development</strong></em>.2014;28(13):1472-1484.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/24990965 target='_blank'>PMID: 24990965</a>]</p>
<p align='justify'>239.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hegde S, et al.<em><strong>Genetics</strong></em>.2022;221(3).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/35567478 target='_blank'>PMID: 35567478</a>]</p>
<p align='justify'>240.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;England SJ, et al.<em><strong>Genetics</strong></em>.2020;216(4):1153-1185.
<p align='justify'>241.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ohkuni K, et al.<em><strong>Genetics</strong></em>.2020;214(4):839-854.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/32111629 target='_blank'>PMID: 32111629</a>]</p>
<p align='justify'>242.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kim HM, et al.<em><strong>Genetics</strong></em>.2015;200(2):495.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/25819793 target='_blank'>PMID: 25819793</a>]</p>
<p align='justify'>243.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hajiebrahimi A, et al.<em><strong>Genome</strong></em>.2017;60(10):797-814.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28732175 target='_blank'>PMID: 28732175</a>]</p>
<p align='justify'>244.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Venancio TM, et al.<em><strong>Genome Biology</strong></em>.2009;10(3).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/19331687 target='_blank'>PMID: 19331687</a>]</p>
<p align='justify'>245.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wang CW, et al.<em><strong>Genomics Proteomics & Bioinformatics</strong></em>.2020;18(1):72-80.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/32200042 target='_blank'>PMID: 32200042</a>]</p>
<p align='justify'>246.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Leng YY, et al.<em><strong>Human Gene Therapy</strong></em>.2019;30(12):1494-1504.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/31668086 target='_blank'>PMID: 31668086</a>]</p>
<p align='justify'>247.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Maurya S, et al.<em><strong>Human Gene Therapy</strong></em>.2019;30(12):1461-1476.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/31642343 target='_blank'>PMID: 31642343</a>]</p>
<p align='justify'>248.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Brault ME, et al.<em><strong>Human Molecular Genetics</strong></em>.2013;22(17):3498-3507.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/23660516 target='_blank'>PMID: 23660516</a>]</p>
<p align='justify'>249.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xu Y, et al.<em><strong>Ieee Transactions on Nanobioscience</strong></em>.2018;17(4):394-401.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/29994125 target='_blank'>PMID: 29994125</a>]</p>
<p align='justify'>250.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hu MM, et al.<em><strong>Immunity</strong></em>.2016;45(3):555-569.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/27637147 target='_blank'>PMID: 27637147</a>]</p>
<p align='justify'>251.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Janani DM, et al.<em><strong>Indian Journal of Biochemistry & Biophysics</strong></em>.2019;56(6):492-499.
<p align='justify'>252.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Batra K, et al.<em><strong>Indian Journal of Biotechnology</strong></em>.2019;18(2):97-107.
<p align='justify'>253.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dunphy PS, et al.<em><strong>Infection and Immunity</strong></em>.2014;82(10):4154-4168.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/25047847 target='_blank'>PMID: 25047847</a>]</p>
<p align='justify'>254.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Song XJ, et al.<em><strong>Infection Genetics and Evolution</strong></em>.2018;62:73-79.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/29673984 target='_blank'>PMID: 29673984</a>]</p>
<p align='justify'>255.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Miles S, et al.<em><strong>Infection Genetics and Evolution</strong></em>.2017;54:338-346.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28728879 target='_blank'>PMID: 28728879</a>]</p>
<p align='justify'>256.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin-Gomez L, et al.<em><strong>Infection Genetics and Evolution</strong></em>.2014;23:138-149.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/24560728 target='_blank'>PMID: 24560728</a>]</p>
<p align='justify'>257.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Zhao MM, et al.<em><strong>Interdisciplinary Sciences-Computational Life Sciences</strong></em>.2015;7(2):194-199.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/25863965 target='_blank'>PMID: 25863965</a>]</p>
<p align='justify'>258.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cribb P, et al.<em><strong>International Journal For Parasitology</strong></em>.2011;41(11):1149-1156.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/21854779 target='_blank'>PMID: 21854779</a>]</p>
<p align='justify'>259.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rider SD, et al.<em><strong>International Journal For Parasitology</strong></em>.2009;39(7):747-754.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/19136004 target='_blank'>PMID: 19136004</a>]</p>
<p align='justify'>260.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Braun L, et al.<em><strong>International Journal For Parasitology</strong></em>.2009;39(1):81-90.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/18761012 target='_blank'>PMID: 18761012</a>]</p>
<p align='justify'>261.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jaiswal N, et al.<em><strong>International Journal of Biological Macromolecules</strong></em>.2019;123:446-456.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/30439429 target='_blank'>PMID: 30439429</a>]</p>
<p align='justify'>262.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Liu Y, et al.<em><strong>International Journal of Biological Sciences</strong></em>.2018;14(8):946-956.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/29989096 target='_blank'>PMID: 29989096</a>]</p>
<p align='justify'>263.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ambady S, et al.<em><strong>International Journal of Developmental Biology</strong></em>.2010;54(11-12):1743-1754.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/21136380 target='_blank'>PMID: 21136380</a>]</p>
<p align='justify'>264.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ghimire S, et al.<em><strong>International Journal of Genomics</strong></em>.2020;2020.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/32802829 target='_blank'>PMID: 32802829</a>]</p>
<p align='justify'>265.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;de Oliveira GS, et al.<em><strong>International Journal of Mass Spectrometry</strong></em>.2017;418:51-66.
<p align='justify'>266.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Diaz-Hernandez M, et al.<em><strong>International Journal of Molecular Sciences</strong></em>.2021;22(11).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/34071922 target='_blank'>PMID: 34071922</a>]</p>
<p align='justify'>267.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chang YC, et al.<em><strong>International Journal of Molecular Sciences</strong></em>.2021;22(10).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/34065507 target='_blank'>PMID: 34065507</a>]</p>
<p align='justify'>268.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Seok HY, et al.<em><strong>International Journal of Molecular Sciences</strong></em>.2021;22(9).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/33947021 target='_blank'>PMID: 33947021</a>]</p>
<p align='justify'>269.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Antoniou-Kourounioti M, et al.<em><strong>International Journal of Molecular Sciences</strong></em>.2019;20(5).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/30871006 target='_blank'>PMID: 30871006</a>]</p>
<p align='justify'>270.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Awan FM, et al.<em><strong>International Journal of Molecular Sciences</strong></em>.2017;18(1).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28085066 target='_blank'>PMID: 28085066</a>]</p>
<p align='justify'>271.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horna-Terron E, et al.<em><strong>International Journal of Molecular Sciences</strong></em>.2014;15(12):23501-23518.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/25526565 target='_blank'>PMID: 25526565</a>]</p>
<p align='justify'>272.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tang XD, et al.<em><strong>International Journal of Molecular Sciences</strong></em>.2014;15(12):22011-22027.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/25470021 target='_blank'>PMID: 25470021</a>]</p>
<p align='justify'>273.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gomez-Molina C, et al.<em><strong>International Journal of Neuropsychopharmacology</strong></em>.2019;22(3):232-246.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/30535257 target='_blank'>PMID: 30535257</a>]</p>
<p align='justify'>274.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dangoumau A, et al.<em><strong>International Journal of Neuroscience</strong></em>.2013;123(6):366-374.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/23289752 target='_blank'>PMID: 23289752</a>]</p>
<p align='justify'>275.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vigodner M, et al.<em><strong>International Review of Cell and Molecular Biology, Vol 288</strong></em>.2011;288:227-259.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/21482414 target='_blank'>PMID: 21482414</a>]</p>
<p align='justify'>276.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hsu RYC, et al.<em><strong>Iscience</strong></em>.2020;23(5).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/32344376 target='_blank'>PMID: 32344376</a>]</p>
<p align='justify'>277.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wang CC, et al.<em><strong>Jci Insight</strong></em>.2020;5(18).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/32938830 target='_blank'>PMID: 32938830</a>]</p>
<p align='justify'>278.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Abe J, et al.<em><strong>Jci Insight</strong></em>.2019;4(7).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/30944250 target='_blank'>PMID: 30944250</a>]</p>
<p align='justify'>279.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Schwamborn K, et al.<em><strong>Journal of Biochemistry</strong></em>.2008;144(1):39-49.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/18344540 target='_blank'>PMID: 18344540</a>]</p>
<p align='justify'>280.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Li SJ, et al.<em><strong>Journal of Biological Chemistry</strong></em>.2022;298(9).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/35868557 target='_blank'>PMID: 35868557</a>]</p>
<p align='justify'>281.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kaur K, et al.<em><strong>Journal of Biological Chemistry</strong></em>.2017;292(24):10230-10238.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28455449 target='_blank'>PMID: 28455449</a>]</p>
<p align='justify'>282.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wakabayashi S, et al.<em><strong>Journal of Biological Chemistry</strong></em>.2016;291(48):25120-25132.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/27702999 target='_blank'>PMID: 27702999</a>]</p>
<p align='justify'>283.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yamashita D, et al.<em><strong>Journal of Biological Chemistry</strong></em>.2016;291(22):11619-11634.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/27068747 target='_blank'>PMID: 27068747</a>]</p>
<p align='justify'>284.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Zhang DY, et al.<em><strong>Journal of Biological Chemistry</strong></em>.2015;290(8):4784-4800.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/25561743 target='_blank'>PMID: 25561743</a>]</p>
<p align='justify'>285.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Powell C, et al.<em><strong>Journal of Biological Chemistry</strong></em>.2014;289(42):28924-28941.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/25190811 target='_blank'>PMID: 25190811</a>]</p>
<p align='justify'>286.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wu J, et al.<em><strong>Journal of Biological Chemistry</strong></em>.2014;289(29):20000-20011.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/24872413 target='_blank'>PMID: 24872413</a>]</p>
<p align='justify'>287.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Singh R, et al.<em><strong>Journal of Biological Chemistry</strong></em>.2014;289(28):19383-19394.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/24838245 target='_blank'>PMID: 24838245</a>]</p>
<p align='justify'>288.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Giancaspero TA, et al.<em><strong>Journal of Biological Chemistry</strong></em>.2013;288(40):29069-29080.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/23946482 target='_blank'>PMID: 23946482</a>]</p>
<p align='justify'>289.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pelisch F, et al.<em><strong>Journal of Biological Chemistry</strong></em>.2012;287(36):30789-30799.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/22825850 target='_blank'>PMID: 22825850</a>]</p>
<p align='justify'>290.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tokmakov AA, et al.<em><strong>Journal of Biological Chemistry</strong></em>.2012;287(32):27106-27116.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/22674579 target='_blank'>PMID: 22674579</a>]</p>
<p align='justify'>291.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lutz D, et al.<em><strong>Journal of Biological Chemistry</strong></em>.2012;287(21):17161-17175.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/22431726 target='_blank'>PMID: 22431726</a>]</p>
<p align='justify'>292.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yao Q, et al.<em><strong>Journal of Biological Chemistry</strong></em>.2011;286(31):27342-27349.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/21685386 target='_blank'>PMID: 21685386</a>]</p>
<p align='justify'>293.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Zamborlini A, et al.<em><strong>Journal of Biological Chemistry</strong></em>.2011;286(23):21013-21022.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/21454548 target='_blank'>PMID: 21454548</a>]</p>
<p align='justify'>294.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peterson AW, et al.<em><strong>Journal of Biological Chemistry</strong></em>.2011;286(16):13914-13924.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/21372131 target='_blank'>PMID: 21372131</a>]</p>
<p align='justify'>295.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Smith M, et al.<em><strong>Journal of Biological Chemistry</strong></em>.2011;286(13):11391-11400.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/21278366 target='_blank'>PMID: 21278366</a>]</p>
<p align='justify'>296.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Snow JW, et al.<em><strong>Journal of Biological Chemistry</strong></em>.2010;285(36):28064-28075.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/20587419 target='_blank'>PMID: 20587419</a>]</p>
<p align='justify'>297.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lokeshwar VB, et al.<em><strong>Journal of Biological Chemistry</strong></em>.2008;283(43):29215-29227.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/18718911 target='_blank'>PMID: 18718911</a>]</p>
<p align='justify'>298.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hasan MM, et al.<em><strong>Journal of Biomolecular Structure & Dynamics</strong></em>.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/36166622 target='_blank'>PMID: 36166622</a>]</p>
<p align='justify'>299.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Biswas P, et al.<em><strong>Journal of Biomolecular Structure & Dynamics</strong></em>.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/34809531 target='_blank'>PMID: 34809531</a>]</p>
<p align='justify'>300.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Way G, et al.<em><strong>Journal of Biotechnology</strong></em>.2020;323:121-127.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/32822681 target='_blank'>PMID: 32822681</a>]</p>
<p align='justify'>301.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cheng AX, et al.<em><strong>Journal of Bone and Mineral Research</strong></em>.2010;25(12):2404-2413.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/20593410 target='_blank'>PMID: 20593410</a>]</p>
<p align='justify'>302.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hegde M, et al.<em><strong>Journal of Cancer Research and Clinical Oncology</strong></em>.2021;147(4):937-971.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/33604794 target='_blank'>PMID: 33604794</a>]</p>
<p align='justify'>303.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ptak C, et al.<em><strong>Journal of Cell Biology</strong></em>.2021;220(12).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/34787675 target='_blank'>PMID: 34787675</a>]</p>
<p align='justify'>304.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yoshida MM, et al.<em><strong>Journal of Cell Biology</strong></em>.2016;213(6):665-678.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/27325792 target='_blank'>PMID: 27325792</a>]</p>
<p align='justify'>305.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ryu H, et al.<em><strong>Journal of Cell Biology</strong></em>.2010;191(4):783-794.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/21079245 target='_blank'>PMID: 21079245</a>]</p>
<p align='justify'>306.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;McIntyre JC, et al.<em><strong>Journal of Cell Science</strong></em>.2015;128(10):1934-1945.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/25908845 target='_blank'>PMID: 25908845</a>]</p>
<p align='justify'>307.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ranjan P, et al.<em><strong>Journal of Cellular Biochemistry</strong></em>.2022;123(2):431-449.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/34817077 target='_blank'>PMID: 34817077</a>]</p>
<p align='justify'>308.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rajagopalan K, et al.<em><strong>Journal of Cellular Biochemistry</strong></em>.2011;112(11):3256-3267.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/21748782 target='_blank'>PMID: 21748782</a>]</p>
<p align='justify'>309.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Saribas AS, et al.<em><strong>Journal of Cellular Physiology</strong></em>.2016;231(10):2115-2127.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/26831433 target='_blank'>PMID: 26831433</a>]</p>
<p align='justify'>310.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Zhu F, et al.<em><strong>Journal of Chemical Information and Modeling</strong></em>.2022;62(14):3331-3345.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/35816597 target='_blank'>PMID: 35816597</a>]</p>
<p align='justify'>311.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wang LN, et al.<em><strong>Journal of Chemical Information and Modeling</strong></em>.2017;57(11):2896-2904.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/29059524 target='_blank'>PMID: 29059524</a>]</p>
<p align='justify'>312.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Luo YM, et al.<em><strong>Journal of Clinical Investigation</strong></em>.2022;132(14).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/35579947 target='_blank'>PMID: 35579947</a>]</p>
<p align='justify'>313.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chen CH, et al.<em><strong>Journal of Clinical Investigation</strong></em>.2021;131(8).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/33661764 target='_blank'>PMID: 33661764</a>]</p>
<p align='justify'>314.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ai HX, et al.<em><strong>Journal of Computational Biology</strong></em>.2017;24(10):1050-1059.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28682641 target='_blank'>PMID: 28682641</a>]</p>
<p align='justify'>315.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rakesh JL, et al.<em><strong>Journal of Crop Improvement</strong></em>.
<p align='justify'>316.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Petrovska B, et al.<em><strong>Journal of Experimental Botany</strong></em>.2013;64(14):4575-4587.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/24006426 target='_blank'>PMID: 24006426</a>]</p>
<p align='justify'>317.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Strzalka W, et al.<em><strong>Journal of Experimental Botany</strong></em>.2012;63(8):2971-2983.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/22330895 target='_blank'>PMID: 22330895</a>]</p>
<p align='justify'>318.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hu MM, et al.<em><strong>Journal of Experimental Medicine</strong></em>.2017;214(4):973-989.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28250012 target='_blank'>PMID: 28250012</a>]</p>
<p align='justify'>319.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shi PD, et al.<em><strong>Journal of Immunology</strong></em>.2020;205(1):168-180.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/32393512 target='_blank'>PMID: 32393512</a>]</p>
<p align='justify'>320.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Liang QM, et al.<em><strong>Journal of Immunology</strong></em>.2011;187(9):4754-4763.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/21940674 target='_blank'>PMID: 21940674</a>]</p>
<p align='justify'>321.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xu JM, et al.<em><strong>Journal of Integrative Plant Biology</strong></em>.2021;63(6):1147-1160.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/33710720 target='_blank'>PMID: 33710720</a>]</p>
<p align='justify'>322.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bueno MTD, et al.<em><strong>Journal of Molecular Biology</strong></em>.2010;399(2):221-239.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/20382164 target='_blank'>PMID: 20382164</a>]</p>
<p align='justify'>323.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Feng WF, et al.<em><strong>Journal of Molecular Cell Biology</strong></em>.2021;13(2):91-103.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/33394042 target='_blank'>PMID: 33394042</a>]</p>
<p align='justify'>324.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang Q, et al.<em><strong>Journal of Molecular Cell Biology</strong></em>.2020;12(12):933-945.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/32770227 target='_blank'>PMID: 32770227</a>]</p>
<p align='justify'>325.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lovisa S, et al.<em><strong>Journal of Molecular Cell Biology</strong></em>.2016;8(1):17-30.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/26450989 target='_blank'>PMID: 26450989</a>]</p>
<p align='justify'>326.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prokop JW, et al.<em><strong>Journal of Molecular Modeling</strong></em>.2017;23(3).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28204942 target='_blank'>PMID: 28204942</a>]</p>
<p align='justify'>327.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Velez G, et al.<em><strong>Journal of Molecular Modeling</strong></em>.2016;22(1).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/26680990 target='_blank'>PMID: 26680990</a>]</p>
<p align='justify'>328.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Urrutia R, et al.<em><strong>Journal of Molecular Modeling</strong></em>.2014;20(8).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/25056123 target='_blank'>PMID: 25056123</a>]</p>
<p align='justify'>329.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Owji H, et al.<em><strong>Journal of Molecular Neuroscience</strong></em>.2020;70(10):1649-1667.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/32519210 target='_blank'>PMID: 32519210</a>]</p>
<p align='justify'>330.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shi Y, et al.<em><strong>Journal of Muscle Research and Cell Motility</strong></em>.2021;42(2):399-417.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/34255253 target='_blank'>PMID: 34255253</a>]</p>
<p align='justify'>331.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chase PB, et al.<em><strong>Journal of Muscle Research and Cell Motility</strong></em>.2013;34(3-4):275-284.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/23907338 target='_blank'>PMID: 23907338</a>]</p>
<p align='justify'>332.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Akbudak MA, et al.<em><strong>Journal of Plant Physiology</strong></em>.2022;272.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/35349936 target='_blank'>PMID: 35349936</a>]</p>
<p align='justify'>333.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tu J, et al.<em><strong>Journal of Proteome Research</strong></em>.2015;14(6):2385-2397.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/25869096 target='_blank'>PMID: 25869096</a>]</p>
<p align='justify'>334.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ali SA, et al.<em><strong>Journal of Proteomics</strong></em>.2017;168:37-52.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28755912 target='_blank'>PMID: 28755912</a>]</p>
<p align='justify'>335.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bertrand C, et al.<em><strong>Journal of Proteomics</strong></em>.2017;150:268-280.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/27671789 target='_blank'>PMID: 27671789</a>]</p>
<p align='justify'>336.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gianazza E, et al.<em><strong>Journal of Proteomics</strong></em>.2016;134:65-75.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/26436211 target='_blank'>PMID: 26436211</a>]</p>
<p align='justify'>337.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Schwammle V, et al.<em><strong>Journal of Proteomics</strong></em>.2015;129:3-15.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/26216596 target='_blank'>PMID: 26216596</a>]</p>
<p align='justify'>338.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kamath KS, et al.<em><strong>Journal of Proteomics</strong></em>.2011;75(1):127-144.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/21983556 target='_blank'>PMID: 21983556</a>]</p>
<p align='justify'>339.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Seliga J, et al.<em><strong>Journal of Steroid Biochemistry and Molecular Biology</strong></em>.2013;138:162-173.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/23727127 target='_blank'>PMID: 23727127</a>]</p>
<p align='justify'>340.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aftabi Y, et al.<em><strong>Journal of Theoretical Biology</strong></em>.2016;393:1-15.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/26776670 target='_blank'>PMID: 26776670</a>]</p>
<p align='justify'>341.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Saurabh S, et al.<em><strong>Journal of Veterinary Science</strong></em>.2018;19(1):35-43.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28057906 target='_blank'>PMID: 28057906</a>]</p>
<p align='justify'>342.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lee HS, et al.<em><strong>Journal of Viral Hepatitis</strong></em>.2014;21(10):E108-E117.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/24602294 target='_blank'>PMID: 24602294</a>]</p>
<p align='justify'>343.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wu XJ, et al.<em><strong>Journal of Virology</strong></em>.2022;96(17).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/36005757 target='_blank'>PMID: 36005757</a>]</p>
<p align='justify'>344.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chen SW, et al.<em><strong>Journal of Virology</strong></em>.2022;96(6).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/35107381 target='_blank'>PMID: 35107381</a>]</p>
<p align='justify'>345.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kolbe V, et al.<em><strong>Journal of Virology</strong></em>.2022;96(3).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/34787461 target='_blank'>PMID: 34787461</a>]</p>
<p align='justify'>346.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wei SC, et al.<em><strong>Journal of Virology</strong></em>.2019;93(8).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/30728268 target='_blank'>PMID: 30728268</a>]</p>
<p align='justify'>347.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Arroyo-Mateos M, et al.<em><strong>Journal of Virology</strong></em>.2018;92(18).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/29950424 target='_blank'>PMID: 29950424</a>]</p>
<p align='justify'>348.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Liu Y, et al.<em><strong>Journal of Virology</strong></em>.2016;90(23):10472-10485.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/27630238 target='_blank'>PMID: 27630238</a>]</p>
<p align='justify'>349.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Su CI, et al.<em><strong>Journal of Virology</strong></em>.2016;90(9):4308-4319.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/26889037 target='_blank'>PMID: 26889037</a>]</p>
<p align='justify'>350.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gagnon D, et al.<em><strong>Journal of Virology</strong></em>.2015;89(12):6227-6239.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/25833051 target='_blank'>PMID: 25833051</a>]</p>
<p align='justify'>351.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Santos A, et al.<em><strong>Journal of Virology</strong></em>.2013;87(10):5602-5620.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/23468495 target='_blank'>PMID: 23468495</a>]</p>
<p align='justify'>352.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chen AJ, et al.<em><strong>Journal of Virology</strong></em>.2013;87(1):636-647.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/23097446 target='_blank'>PMID: 23097446</a>]</p>
<p align='justify'>353.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sun DY, et al.<em><strong>Journal of Virology</strong></em>.2011;85(19):10261-10268.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/21795356 target='_blank'>PMID: 21795356</a>]</p>
<p align='justify'>354.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tseng CH, et al.<em><strong>Journal of Virology</strong></em>.2010;84(2):918-927.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/19889771 target='_blank'>PMID: 19889771</a>]</p>
<p align='justify'>355.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Feng X, et al.<em><strong>Jove-Journal of Visualized Experiments</strong></em>.2018;(140).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/30371672 target='_blank'>PMID: 30371672</a>]</p>
<p align='justify'>356.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lei GC, et al.<em><strong>Letters in Organic Chemistry</strong></em>.2017;14(9):665-672.
<p align='justify'>357.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lan W, et al.<em><strong>Life Science Alliance</strong></em>.2022;5(12).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/35926874 target='_blank'>PMID: 35926874</a>]</p>
<p align='justify'>358.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Schwartz D, et al.<em><strong>Lysine-Based Post-Translational Modification of Proteins</strong></em>.2012;52:165-177.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/22708570 target='_blank'>PMID: 22708570</a>]</p>
<p align='justify'>359.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stubbe M, et al.<em><strong>Mbio</strong></em>.2020;11(2).
<p align='justify'>360.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hand JM, et al.<em><strong>Mechanisms of Development</strong></em>.2017;144:103-112.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28263788 target='_blank'>PMID: 28263788</a>]</p>
<p align='justify'>361.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Swartzlander DB, et al.<em><strong>Mechanisms of Dna Repair</strong></em>.2012;110:93-121.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/22749144 target='_blank'>PMID: 22749144</a>]</p>
<p align='justify'>362.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Singh HB, et al.<em><strong>Meta Gene</strong></em>.2018;17:136-140.
<p align='justify'>363.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Joshi BB, et al.<em><strong>Meta Gene</strong></em>.2017;11:98-103.
<p align='justify'>364.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Huang GH, et al.<em><strong>Mini-Reviews in Organic Chemistry</strong></em>.2015;12(6):468-480.
<p align='justify'>365.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Uzoma I, et al.<em><strong>Molecular & Cellular Proteomics</strong></em>.2018;17(5):871-888.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/29438996 target='_blank'>PMID: 29438996</a>]</p>
<p align='justify'>366.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Namuduri AV, et al.<em><strong>Molecular & Cellular Proteomics</strong></em>.2017;16(6):1081-1097.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28373296 target='_blank'>PMID: 28373296</a>]</p>
<p align='justify'>367.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cox E, et al.<em><strong>Molecular & Cellular Proteomics</strong></em>.2017;16(5):812-823.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28254775 target='_blank'>PMID: 28254775</a>]</p>
<p align='justify'>368.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Miller MJ, et al.<em><strong>Molecular & Cellular Proteomics</strong></em>.2013;12(2):449-463.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/23197790 target='_blank'>PMID: 23197790</a>]</p>
<p align='justify'>369.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bayona JC, et al.<em><strong>Molecular & Cellular Proteomics</strong></em>.2011;10(12).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/21832256 target='_blank'>PMID: 21832256</a>]</p>
<p align='justify'>370.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Li H, et al.<em><strong>Molecular & Cellular Proteomics</strong></em>.2009;8(8):1839-1849.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/19366988 target='_blank'>PMID: 19366988</a>]</p>
<p align='justify'>371.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Choi SG, et al.<em><strong>Molecular and Cellular Biology</strong></em>.2017;37(2).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/27799292 target='_blank'>PMID: 27799292</a>]</p>
<p align='justify'>372.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Andrade D, et al.<em><strong>Molecular and Cellular Biology</strong></em>.2016;36(10):1438-1450.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/26951200 target='_blank'>PMID: 26951200</a>]</p>
<p align='justify'>373.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tossidou I, et al.<em><strong>Molecular and Cellular Biology</strong></em>.2012;32(6):1068-1079.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/22203040 target='_blank'>PMID: 22203040</a>]</p>
<p align='justify'>374.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Griffiths LM, et al.<em><strong>Molecular and Cellular Biology</strong></em>.2009;29(3):794-807.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/19029246 target='_blank'>PMID: 19029246</a>]</p>
<p align='justify'>375.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Basharat Z, et al.<em><strong>Molecular and Cellular Probes</strong></em>.2017;31:76-84.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/27618775 target='_blank'>PMID: 27618775</a>]</p>
<p align='justify'>376.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rubio T, et al.<em><strong>Molecular Biology of The Cell</strong></em>.2013;24(11):1801-1811.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/23552691 target='_blank'>PMID: 23552691</a>]</p>
<p align='justify'>377.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Leach MD, et al.<em><strong>Molecular Biology of The Cell</strong></em>.2011;22(5):687-702.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/21209325 target='_blank'>PMID: 21209325</a>]</p>
<p align='justify'>378.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chen QY, et al.<em><strong>Molecular Biosystems</strong></em>.2017;13(5):874-882.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28396891 target='_blank'>PMID: 28396891</a>]</p>
<p align='justify'>379.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dos Santos MT, et al.<em><strong>Molecular Biosystems</strong></em>.2011;7(1):180-193.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/21042649 target='_blank'>PMID: 21042649</a>]</p>
<p align='justify'>380.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reaves DK, et al.<em><strong>Molecular Cancer Research</strong></em>.2017;15(2):165-178.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/27856957 target='_blank'>PMID: 27856957</a>]</p>
<p align='justify'>381.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lu L, et al.<em><strong>Molecular Diversity</strong></em>.2010;14(1):81-86.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/19472067 target='_blank'>PMID: 19472067</a>]</p>
<p align='justify'>382.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Huerta M, et al.<em><strong>Molecular Microbiology</strong></em>.2020;114(6):1019-1037.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/32808689 target='_blank'>PMID: 32808689</a>]</p>
<p align='justify'>383.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Maraschi A, et al.<em><strong>Molecular Neurobiology</strong></em>.2021;58(11):5682-5702.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/34390468 target='_blank'>PMID: 34390468</a>]</p>
<p align='justify'>384.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cortes-Montero E, et al.<em><strong>Molecular Neurobiology</strong></em>.2021;58(4):1834-1845.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/33404983 target='_blank'>PMID: 33404983</a>]</p>
<p align='justify'>385.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Li GXH, et al.<em><strong>Molecular Omics</strong></em>.2018;14(3):197-209.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/29876573 target='_blank'>PMID: 29876573</a>]</p>
<p align='justify'>386.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Qu GP, et al.<em><strong>Molecular Plant</strong></em>.2020;13(6):879-893.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/32298785 target='_blank'>PMID: 32298785</a>]</p>
<p align='justify'>387.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Niu D, et al.<em><strong>Molecular Plant</strong></em>.2019;12(2):215-228.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/30543996 target='_blank'>PMID: 30543996</a>]</p>
<p align='justify'>388.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lim YJ, et al.<em><strong>Molecular Plant Pathology</strong></em>.2018;19(9):2134-2148.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/29633464 target='_blank'>PMID: 29633464</a>]</p>
<p align='justify'>389.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gou MY, et al.<em><strong>Molecular Plant-Microbe Interactions</strong></em>.2017;30(4):334-342.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28409535 target='_blank'>PMID: 28409535</a>]</p>
<p align='justify'>390.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nissan G, et al.<em><strong>Molecular Plant-Microbe Interactions</strong></em>.2012;25(2):231-240.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/21995766 target='_blank'>PMID: 21995766</a>]</p>
<p align='justify'>391.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Liu YC, et al.<em><strong>Molecular Therapy</strong></em>.2021;29(1):376-395.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/32950104 target='_blank'>PMID: 32950104</a>]</p>
<p align='justify'>392.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dehzangi A, et al.<em><strong>Molecules</strong></em>.2018;23(12).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/30544729 target='_blank'>PMID: 30544729</a>]</p>
<p align='justify'>393.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lu WM, et al.<em><strong>Neoplasia</strong></em>.2021;23(1):129-139.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/33316537 target='_blank'>PMID: 33316537</a>]</p>
<p align='justify'>394.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hansen M, et al.<em><strong>Neurochemical Research</strong></em>.2013;38(6):1236-1251.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/23417431 target='_blank'>PMID: 23417431</a>]</p>
<p align='justify'>395.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bauer DC, et al.<em><strong>Neurocomputing</strong></em>.2010;73(13-15):2300-2307.
<p align='justify'>396.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Filosa G, et al.<em><strong>Neuromolecular Medicine</strong></em>.2013;15(4):661-676.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/23979992 target='_blank'>PMID: 23979992</a>]</p>
<p align='justify'>397.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agarwal N, et al.<em><strong>Neuron</strong></em>.2020;107(6):1141.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/32735781 target='_blank'>PMID: 32735781</a>]</p>
<p align='justify'>398.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vihma H, et al.<em><strong>Neuroscience Letters</strong></em>.2017;653:302-307.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28595951 target='_blank'>PMID: 28595951</a>]</p>
<p align='justify'>399.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Su Y, et al.<em><strong>Neurosignals</strong></em>.2009;17(1):71-81.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/19212141 target='_blank'>PMID: 19212141</a>]</p>
<p align='justify'>400.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Liu S, et al.<em><strong>New Phytologist</strong></em>.2022;235(4):1599-1614.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/35491752 target='_blank'>PMID: 35491752</a>]</p>
<p align='justify'>401.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Zheng XT, et al.<em><strong>New Phytologist</strong></em>.2022;235(1):173-187.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/35347735 target='_blank'>PMID: 35347735</a>]</p>
<p align='justify'>402.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peter C, et al.<em><strong>New Phytologist</strong></em>.2021;232(3):1201-1211.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/34289130 target='_blank'>PMID: 34289130</a>]</p>
<p align='justify'>403.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jiang J, et al.<em><strong>New Phytologist</strong></em>.2021;231(1):382-398.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/33774829 target='_blank'>PMID: 33774829</a>]</p>
<p align='justify'>404.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bernula P, et al.<em><strong>New Phytologist</strong></em>.2021;229(4):2050-2061.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/33078389 target='_blank'>PMID: 33078389</a>]</p>
<p align='justify'>405.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Liu CY, et al.<em><strong>New Phytologist</strong></em>.2018;219(3):1031-1047.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/29663402 target='_blank'>PMID: 29663402</a>]</p>
<p align='justify'>406.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Petrovska B, et al.<em><strong>New Phytologist</strong></em>.2012;193(3):590-604.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/22150830 target='_blank'>PMID: 22150830</a>]</p>
<p align='justify'>407.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Zahedi T, et al.<em><strong>Nucleosides Nucleotides & Nucleic Acids</strong></em>.2021;40(12):1125-1143.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/34632961 target='_blank'>PMID: 34632961</a>]</p>
<p align='justify'>408.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Souquere S, et al.<em><strong>Nucleus</strong></em>.2015;6(4):326-338.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/26275159 target='_blank'>PMID: 26275159</a>]</p>
<p align='justify'>409.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jang D, et al.<em><strong>Oncogene</strong></em>.2019;38(17):3248-3260.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/30631151 target='_blank'>PMID: 30631151</a>]</p>
<p align='justify'>410.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Myatt SS, et al.<em><strong>Oncogene</strong></em>.2014;33(34):4316-4329.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/24362530 target='_blank'>PMID: 24362530</a>]</p>
<p align='justify'>411.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;de Moraes GN, et al.<em><strong>Oncogenesis</strong></em>.2018;7.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/29540677 target='_blank'>PMID: 29540677</a>]</p>
<p align='justify'>412.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang LS, et al.<em><strong>Oncotarget</strong></em>.2016;7(50):83488-83501.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/27829226 target='_blank'>PMID: 27829226</a>]</p>
<p align='justify'>413.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;An SX, et al.<em><strong>Oncotargets and Therapy</strong></em>.2018;11:2097-2109.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/29713182 target='_blank'>PMID: 29713182</a>]</p>
<p align='justify'>414.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang YF, et al.<em><strong>Open Biology</strong></em>.2017;7(10).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/29021212 target='_blank'>PMID: 29021212</a>]</p>
<p align='justify'>415.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mustfa SA, et al.<em><strong>Open Biology</strong></em>.2017;7(6).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28659381 target='_blank'>PMID: 28659381</a>]</p>
<p align='justify'>416.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chand V, et al.<em><strong>Open Biology</strong></em>.2016;6(9).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/27605378 target='_blank'>PMID: 27605378</a>]</p>
<p align='justify'>417.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sharma P, et al.<em><strong>Open Biology</strong></em>.2014;4(2).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/24522884 target='_blank'>PMID: 24522884</a>]</p>
<p align='justify'>418.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bauer DC, et al.<em><strong>Pattern Recognition in Bioinformatics, Proceedings</strong></em>.2008;5265:28-40.
<p align='justify'>419.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Khan YD, et al.<em><strong>Peerj</strong></em>.2021;9.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/34430072 target='_blank'>PMID: 34430072</a>]</p>
<p align='justify'>420.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horn H, et al.<em><strong>Peerj</strong></em>.2014;2.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/24711967 target='_blank'>PMID: 24711967</a>]</p>
<p align='justify'>421.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nguyen HC, et al.<em><strong>Physiologia Plantarum</strong></em>.2017;159(4):445-467.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/27861954 target='_blank'>PMID: 27861954</a>]</p>
<p align='justify'>422.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Labuz J, et al.<em><strong>Plant and Cell Physiology</strong></em>.2021;62(4):693-707.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/33594440 target='_blank'>PMID: 33594440</a>]</p>
<p align='justify'>423.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peng PH, et al.<em><strong>Plant and Cell Physiology</strong></em>.2014;55(9):1623-1635.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/24974386 target='_blank'>PMID: 24974386</a>]</p>
<p align='justify'>424.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Okada S, et al.<em><strong>Plant and Cell Physiology</strong></em>.2009;50(6):1049-1061.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/19376783 target='_blank'>PMID: 19376783</a>]</p>
<p align='justify'>425.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Negrao S, et al.<em><strong>Plant Biotechnology Journal</strong></em>.2013;11(1):87-100.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/23116435 target='_blank'>PMID: 23116435</a>]</p>
<p align='justify'>426.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fichtner F, et al.<em><strong>Plant Cell</strong></em>.2020;32(6):1949-1972.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/32276986 target='_blank'>PMID: 32276986</a>]</p>
<p align='justify'>427.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rytz TC, et al.<em><strong>Plant Cell</strong></em>.2018;30(5):1077-1099.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/29588388 target='_blank'>PMID: 29588388</a>]</p>
<p align='justify'>428.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Liu YY, et al.<em><strong>Plant Cell</strong></em>.2016;28(9):2225-2237.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/27492969 target='_blank'>PMID: 27492969</a>]</p>
<p align='justify'>429.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Raorane ML, et al.<em><strong>Plant Cell Reports</strong></em>.2013;32(7):1053-1065.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/23666184 target='_blank'>PMID: 23666184</a>]</p>
<p align='justify'>430.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nukarinen E, et al.<em><strong>Plant Journal</strong></em>.2017;91(3):505-517.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28419593 target='_blank'>PMID: 28419593</a>]</p>
<p align='justify'>431.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cohen-Peer R, et al.<em><strong>Plant Molecular Biology</strong></em>.2010;74(1-2):33-45.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/20521085 target='_blank'>PMID: 20521085</a>]</p>
<p align='justify'>432.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wang FG, et al.<em><strong>Plant Physiology</strong></em>.2020;183(1):41-50.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/32205452 target='_blank'>PMID: 32205452</a>]</p>
<p align='justify'>433.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Augustine RC, et al.<em><strong>Plant Physiology</strong></em>.2016;171(3):2191-2210.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/27208252 target='_blank'>PMID: 27208252</a>]</p>
<p align='justify'>434.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yu H, et al.<em><strong>Plant Science</strong></em>.2022;325.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/36183810 target='_blank'>PMID: 36183810</a>]</p>
<p align='justify'>435.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lavania D, et al.<em><strong>Planta</strong></em>.2018;247(6):1267-1276.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/29453664 target='_blank'>PMID: 29453664</a>]</p>
<p align='justify'>436.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reed JM, et al.<em><strong>Planta</strong></em>.2010;232(1):51-59.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/20361336 target='_blank'>PMID: 20361336</a>]</p>
<p align='justify'>437.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Seear PJ, et al.<em><strong>Plos Genetics</strong></em>.2020;16(7).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/32667955 target='_blank'>PMID: 32667955</a>]</p>
<p align='justify'>438.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Theivakadadcham VSS, et al.<em><strong>Plos Genetics</strong></em>.2019;15(2).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/30763307 target='_blank'>PMID: 30763307</a>]</p>
<p align='justify'>439.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Williams MJ, et al.<em><strong>Plos Genetics</strong></em>.2016;12(6).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/27280443 target='_blank'>PMID: 27280443</a>]</p>
<p align='justify'>440.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Oeser ML, et al.<em><strong>Plos Genetics</strong></em>.2016;12(1).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/26800527 target='_blank'>PMID: 26800527</a>]</p>
<p align='justify'>441.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ward JD, et al.<em><strong>Plos Genetics</strong></em>.2013;9(12).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/24348269 target='_blank'>PMID: 24348269</a>]</p>
<p align='justify'>442.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Iribarren PA, et al.<em><strong>Plos One</strong></em>.2018;13(2).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/29474435 target='_blank'>PMID: 29474435</a>]</p>
<p align='justify'>443.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peek J, et al.<em><strong>Plos One</strong></em>.2018;13(1).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/29351565 target='_blank'>PMID: 29351565</a>]</p>
<p align='justify'>444.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wang C, et al.<em><strong>Plos One</strong></em>.2017;12(12).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/29236778 target='_blank'>PMID: 29236778</a>]</p>
<p align='justify'>445.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xu Y, et al.<em><strong>Plos One</strong></em>.2016;11(4).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/27104833 target='_blank'>PMID: 27104833</a>]</p>
<p align='justify'>446.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chaki M, et al.<em><strong>Plos One</strong></em>.2014;9(10).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/25333472 target='_blank'>PMID: 25333472</a>]</p>
<p align='justify'>447.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kim ET, et al.<em><strong>Plos One</strong></em>.2014;9(7).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/25050850 target='_blank'>PMID: 25050850</a>]</p>
<p align='justify'>448.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kelly JN, et al.<em><strong>Plos One</strong></em>.2014;9(7).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/24983760 target='_blank'>PMID: 24983760</a>]</p>
<p align='justify'>449.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Schou J, et al.<em><strong>Plos One</strong></em>.2014;9(6).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/24971888 target='_blank'>PMID: 24971888</a>]</p>
<p align='justify'>450.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Monribot-Villanueva J, et al.<em><strong>Plos One</strong></em>.2013;8(4).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/23620817 target='_blank'>PMID: 23620817</a>]</p>
<p align='justify'>451.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Boudreau E, et al.<em><strong>Plos One</strong></em>.2012;7(9).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/23029315 target='_blank'>PMID: 23029315</a>]</p>
<p align='justify'>452.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wu YY, et al.<em><strong>Plos One</strong></em>.2012;7(6).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/22745796 target='_blank'>PMID: 22745796</a>]</p>
<p align='justify'>453.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chen YZ, et al.<em><strong>Plos One</strong></em>.2012;7(6).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/22720073 target='_blank'>PMID: 22720073</a>]</p>
<p align='justify'>454.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Doss CGP, et al.<em><strong>Plos One</strong></em>.2012;7(4).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/22529920 target='_blank'>PMID: 22529920</a>]</p>
<p align='justify'>455.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Costa MW, et al.<em><strong>Plos One</strong></em>.2011;6(9).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/21931855 target='_blank'>PMID: 21931855</a>]</p>
<p align='justify'>456.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Spektor TM, et al.<em><strong>Plos One</strong></em>.2011;6(7).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/21829513 target='_blank'>PMID: 21829513</a>]</p>
<p align='justify'>457.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Harscoet E, et al.<em><strong>Plos One</strong></em>.2010;5(9).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/20877469 target='_blank'>PMID: 20877469</a>]</p>
<p align='justify'>458.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xue Y, et al.<em><strong>Plos One</strong></em>.2010;5(6).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/20585580 target='_blank'>PMID: 20585580</a>]</p>
<p align='justify'>459.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nie MH, et al.<em><strong>Plos One</strong></em>.2009;4(6).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/19529778 target='_blank'>PMID: 19529778</a>]</p>
<p align='justify'>460.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vicente-Crespo M, et al.<em><strong>Plos One</strong></em>.2008;3(2).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/18286170 target='_blank'>PMID: 18286170</a>]</p>
<p align='justify'>461.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Li JP, et al.<em><strong>Plos Pathogens</strong></em>.2021;17(2).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/33571308 target='_blank'>PMID: 33571308</a>]</p>
<p align='justify'>462.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Holscher C, et al.<em><strong>Plos Pathogens</strong></em>.2015;11(12).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/26625259 target='_blank'>PMID: 26625259</a>]</p>
<p align='justify'>463.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chang TH, et al.<em><strong>Plos Pathogens</strong></em>.2009;5(6).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/19557165 target='_blank'>PMID: 19557165</a>]</p>
<p align='justify'>464.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gu XY, et al.<em><strong>Proceedings of The National Academy of Sciences of The United States of America</strong></em>.2020;117(36):22128-22134.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/32848053 target='_blank'>PMID: 32848053</a>]</p>
<p align='justify'>465.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hasan R, et al.<em><strong>Proceedings of The National Academy of Sciences of The United States of America</strong></em>.2019;116(52):27095-27104.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/31822608 target='_blank'>PMID: 31822608</a>]</p>
<p align='justify'>466.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xu XY, et al.<em><strong>Proceedings of The National Academy of Sciences of The United States of America</strong></em>.2019;116(22):10889-10898.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/31072933 target='_blank'>PMID: 31072933</a>]</p>
<p align='justify'>467.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xiong DZ, et al.<em><strong>Proceedings of The National Academy of Sciences of The United States of America</strong></em>.2017;114(32):E6686-E6694.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28743749 target='_blank'>PMID: 28743749</a>]</p>
<p align='justify'>468.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chymkowitch P, et al.<em><strong>Proceedings of The National Academy of Sciences of The United States of America</strong></em>.2017;114(5):1039-1044.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28096404 target='_blank'>PMID: 28096404</a>]</p>
<p align='justify'>469.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sohn SY, et al.<em><strong>Proceedings of The National Academy of Sciences of The United States of America</strong></em>.2016;113(24):6725-6730.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/27247387 target='_blank'>PMID: 27247387</a>]</p>
<p align='justify'>470.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aguilar-Martinez E, et al.<em><strong>Proceedings of The National Academy of Sciences of The United States of America</strong></em>.2015;112(35):E4854-E4863.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/26283374 target='_blank'>PMID: 26283374</a>]</p>
<p align='justify'>471.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sadanandom A, et al.<em><strong>Proceedings of The National Academy of Sciences of The United States of America</strong></em>.2015;112(35):11108-11113.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/26283376 target='_blank'>PMID: 26283376</a>]</p>
<p align='justify'>472.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sapir A, et al.<em><strong>Proceedings of The National Academy of Sciences of The United States of America</strong></em>.2014;111(37):E3880-E3889.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/25187565 target='_blank'>PMID: 25187565</a>]</p>
<p align='justify'>473.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ceballos-Chavez M, et al.<em><strong>Proceedings of The National Academy of Sciences of The United States of America</strong></em>.2012;109(21):8085-8090.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/22570500 target='_blank'>PMID: 22570500</a>]</p>
<p align='justify'>474.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Elrouby N, et al.<em><strong>Proceedings of The National Academy of Sciences of The United States of America</strong></em>.2010;107(40):17415-17420.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/20855607 target='_blank'>PMID: 20855607</a>]</p>
<p align='justify'>475.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Miller MJ, et al.<em><strong>Proceedings of The National Academy of Sciences of The United States of America</strong></em>.2010;107(38):16512-16517.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/20813957 target='_blank'>PMID: 20813957</a>]</p>
<p align='justify'>476.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ronceret A, et al.<em><strong>Proceedings of The National Academy of Sciences of The United States of America</strong></em>.2009;106(47):20121-20126.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/19918061 target='_blank'>PMID: 19918061</a>]</p>
<p align='justify'>477.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Li SL, et al.<em><strong>Protein and Peptide Letters</strong></em>.2009;16(8):977-983.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/19689425 target='_blank'>PMID: 19689425</a>]</p>
<p align='justify'>478.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ozturk MT, et al.<em><strong>Proteins-Structure Function and Bioinformatics</strong></em>.2022;90(1):218-228.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/34369007 target='_blank'>PMID: 34369007</a>]</p>
<p align='justify'>479.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Maiti S, et al.<em><strong>Proteins-Structure Function and Bioinformatics</strong></em>.2020;88(2):284-291.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/31412138 target='_blank'>PMID: 31412138</a>]</p>
<p align='justify'>480.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kumar R, et al.<em><strong>Proteomics</strong></em>.2019;19(21-22).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/31566917 target='_blank'>PMID: 31566917</a>]</p>
<p align='justify'>481.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gan J, et al.<em><strong>Proteomics</strong></em>.2015;15(12):2023-2037.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/25894481 target='_blank'>PMID: 25894481</a>]</p>
<p align='justify'>482.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stastna M, et al.<em><strong>Proteomics</strong></em>.2015;15(5-6):1164-1180.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/25430483 target='_blank'>PMID: 25430483</a>]</p>
<p align='justify'>483.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ren J, et al.<em><strong>Proteomics</strong></em>.2009;9(12):3409-3412.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/29658196 target='_blank'>PMID: 29658196</a>]</p>
<p align='justify'>484.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jeram SM, et al.<em><strong>Proteomics</strong></em>.2009;9(4):922-934.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/19180541 target='_blank'>PMID: 19180541</a>]</p>
<p align='justify'>485.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xiao YX, et al.<em><strong>Reproduction</strong></em>.2016;151(2):149-166.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/26701181 target='_blank'>PMID: 26701181</a>]</p>
<p align='justify'>486.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ruggieri A, et al.<em><strong>Retrovirology</strong></em>.2009;6.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/19220907 target='_blank'>PMID: 19220907</a>]</p>
<p align='justify'>487.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Knight JRP, et al.<em><strong>Rna</strong></em>.2016;22(4):623-635.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/26857222 target='_blank'>PMID: 26857222</a>]</p>
<p align='justify'>488.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chen LC, et al.<em><strong>Scientific Reports</strong></em>.2021;11(1).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/34257372 target='_blank'>PMID: 34257372</a>]</p>
<p align='justify'>489.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Brena D, et al.<em><strong>Scientific Reports</strong></em>.2020;10(1).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/32999373 target='_blank'>PMID: 32999373</a>]</p>
<p align='justify'>490.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hossain MS, et al.<em><strong>Scientific Reports</strong></em>.2020;10(1).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/32884013 target='_blank'>PMID: 32884013</a>]</p>
<p align='justify'>491.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chang CC, et al.<em><strong>Scientific Reports</strong></em>.2018;8.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/30341374 target='_blank'>PMID: 30341374</a>]</p>
<p align='justify'>492.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Drabikowski K, et al.<em><strong>Scientific Reports</strong></em>.2018;8.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/29348603 target='_blank'>PMID: 29348603</a>]</p>
<p align='justify'>493.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Komiya M, et al.<em><strong>Scientific Reports</strong></em>.2017;7.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/29234079 target='_blank'>PMID: 29234079</a>]</p>
<p align='justify'>494.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rocca DL, et al.<em><strong>Scientific Reports</strong></em>.2017;7.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28408745 target='_blank'>PMID: 28408745</a>]</p>
<p align='justify'>495.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Guo RK, et al.<em><strong>Scientific Reports</strong></em>.2017;7.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28272518 target='_blank'>PMID: 28272518</a>]</p>
<p align='justify'>496.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Deng WK, et al.<em><strong>Scientific Reports</strong></em>.2016;6.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28004786 target='_blank'>PMID: 28004786</a>]</p>
<p align='justify'>497.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xie YB, et al.<em><strong>Scientific Reports</strong></em>.2016;6.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/27306108 target='_blank'>PMID: 27306108</a>]</p>
<p align='justify'>498.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chen X, et al.<em><strong>Scientific Reports</strong></em>.2016;6.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/27174170 target='_blank'>PMID: 27174170</a>]</p>
<p align='justify'>499.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Estruch SB, et al.<em><strong>Scientific Reports</strong></em>.2016;6.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/26867680 target='_blank'>PMID: 26867680</a>]</p>
<p align='justify'>500.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Craig TJ, et al.<em><strong>Scientific Reports</strong></em>.2015;5.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/26635000 target='_blank'>PMID: 26635000</a>]</p>
<p align='justify'>501.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xu HD, et al.<em><strong>Scientific Reports</strong></em>.2015;5.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/26154679 target='_blank'>PMID: 26154679</a>]</p>
<p align='justify'>502.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xu Y, et al.<em><strong>Scientific Reports</strong></em>.2015;5.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/26084794 target='_blank'>PMID: 26084794</a>]</p>
<p align='justify'>503.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Datta M, et al.<em><strong>Seminars in Cell & Developmental Biology</strong></em>.2018;74:123-132.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28903074 target='_blank'>PMID: 28903074</a>]</p>
<p align='justify'>504.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Terova G, et al.<em><strong>Springerplus</strong></em>.2013;2.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/23449729 target='_blank'>PMID: 23449729</a>]</p>
<p align='justify'>505.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shi N, et al.<em><strong>Transboundary and Emerging Diseases</strong></em>.2022;69(4):E1037-E1050.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/34812572 target='_blank'>PMID: 34812572</a>]</p>
<p align='justify'>506.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ferdaoussi M, et al.<em><strong>Trends in Cell Biology</strong></em>.2017;27(3):163-171.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/27932063 target='_blank'>PMID: 27932063</a>]</p>
<p align='justify'>507.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shenoy SK, et al.<em><strong>Trends in Pharmacological Sciences</strong></em>.2011;32(9):521-533.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/21680031 target='_blank'>PMID: 21680031</a>]</p>
<p align='justify'>508.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reed AM, et al.<em><strong>Virology</strong></em>.2017;500:82-90.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/27771562 target='_blank'>PMID: 27771562</a>]</p>
<p align='justify'>509.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gerits N, et al.<em><strong>Virology</strong></em>.2012;432(2):316-326.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/22726243 target='_blank'>PMID: 22726243</a>]</p>
<p align='justify'>510.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Masa SR, et al.<em><strong>Virology</strong></em>.2008;371(1):14-31.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/17963810 target='_blank'>PMID: 17963810</a>]</p>
<p align='justify'>511.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lai SY, et al.<em><strong>Virulence</strong></em>.2021;12(1):2883-2901.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/34747321 target='_blank'>PMID: 34747321</a>]</p>
<p align='justify'>512.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Guo J, et al.<em><strong>Viruses-Basel</strong></em>.2017;9(10).[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28973998 target='_blank'>PMID: 28973998</a>]</p>
<p align='justify'>513.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Zhang C, et al.<em><strong>Apoptosis</strong></em>.2017;22(5):608-625.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/28205128 target='_blank'>PMID: 28205128</a>]</p>
<p align='justify'>514.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bruninghoff K, et al.<em><strong>Acs Chemical Biology</strong></em>.2020;15(9):2406-2414.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/32786267 target='_blank'>PMID: 32786267</a>]</p>
<p align='justify'>515.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sadhukhan S, et al.<em><strong>Acs Omega</strong></em>.2021;6(40):26372-26380.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/34667917 target='_blank'>PMID: 34667917</a>]</p>
<p align='justify'>516.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Friedline CJ, et al.<em><strong>Advanced Intelligent Computing Theories and Applications, Proceedings: with Aspects of Artificial Intelligence</strong></em>.2008;5227:1004.
<p align='justify'>517.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nguyen VN, et al.<em><strong>Advances in Engineering Research and Application</strong></em>.2019;63:324-332.
<p align='justify'>518.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wang B, et al.<em><strong>American Journal of Cancer Research</strong></em>.2020;10(4):1207-1217.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/32368396 target='_blank'>PMID: 32368396</a>]</p>
<p align='justify'>519.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wang S, et al.<em><strong>American Journal of Pathology</strong></em>.2020;190(12):2464-2477.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/33222991 target='_blank'>PMID: 33222991</a>]</p>
<p align='justify'>520.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;McClure ML, et al.<em><strong>American Journal of Physiology-Lung Cellular and Molecular Physiology</strong></em>.2016;311(4):L719-L733.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/27474090 target='_blank'>PMID: 27474090</a>]</p>
<p align='justify'>521.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Teng SL, et al.<em><strong>Amino Acids</strong></em>.2012;43(1):447-455.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/21986959 target='_blank'>PMID: 21986959</a>]</p>
<p align='justify'>522.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Droppelmann CA, et al.<em><strong>Amyotrophic Lateral Sclerosis and Frontotemporal Degeneration</strong></em>.2014;15(5-6):321-336.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/24555412 target='_blank'>PMID: 24555412</a>]</p>
<p align='justify'>523.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang Y, et al.<em><strong>Analytical Chemistry</strong></em>.2012;84(3):1229-1234.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/22242541 target='_blank'>PMID: 22242541</a>]</p>
<p align='justify'>524.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang Y, et al.<em><strong>Angewandte Chemie-International Edition</strong></em>.2013;52(2):691-694.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/23169684 target='_blank'>PMID: 23169684</a>]</p>
<p align='justify'>525.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hwang SP, et al.<em><strong>Animal Cells and Systems</strong></em>.2017;21(3):169-176.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/30460066 target='_blank'>PMID: 30460066</a>]</p>
<p align='justify'>526.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Du CP, et al.<em><strong>Antioxidants & Redox Signaling</strong></em>.2020;32(1):18-34.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/31642335 target='_blank'>PMID: 31642335</a>]</p>
<p align='justify'>527.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cortes-Montero E, et al.<em><strong>Antioxidants & Redox Signaling</strong></em>.2019;31(7):503-520.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/31088288 target='_blank'>PMID: 31088288</a>]</p>
<p align='justify'>528.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tell G, et al.<em><strong>Antioxidants & Redox Signaling</strong></em>.2009;11(3):601-619.[<a href=http://www.ncbi.nlm.nih.gov/pubmed/18976116 target='_blank'>PMID: 18976116</a>]</p>
<p align='justify'>529.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;He F, et al.<em><strong>2019 Ieee International Conference on Bioinformatics and Biomedicine (BIBM)</strong></em>.2019;117-123.
<p align='justify'>530.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hernandez DAJ, et al.<em><strong>2021 Mexican International Conference on Computer Science (ENC 2021)</strong></em>.2021.

                    </div>
                </div>
            </div>
        </div>
        <br class="clearfloat" />
                   <div id="footer" style="width:97%">
                <div id="siteInfo" > Copyright © 2006-2022.The CUCKOO Workgroup. All Rights Reserved </div>
            </div>
        </div>
    </body>
</html>
    </div>
</body>
</html>