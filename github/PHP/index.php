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
         <script src="js/3Dmol.js"></script>
        	  <script type="text/javascript">
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
$(function(){
	$id="CPLM065372";
	$sitelis="77;93;96";
	$("#PTMPDB").show();
	$("#View1").css({height:350});//让view1占一定高度来和下一块分开
	$mark="<p><font size='3' face='Arial, Helvetica, sans-serif'>PDB: <a href='https://www.rcsb.org/structure/5D2M target='_blank'>5D2M</a>[A,C]&nbsp;&nbsp;&nbsp;&nbsp;<select id='pdbsite'><option value='All'>All Sites</option></select>&nbsp;&nbsp;&nbsp;&nbsp;<button id='Refresh'>Refresh</button></p>";
	$("#Structure").html($mark);
	$.ptmPDB(6264,"G","77;93;96;106;139;144;153;167;178;191;265;270;283;288;301;316;349;381;409;428;454;470;585;605;632;647;706;796;843;924;971;1034");}
)
</script>


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
             the only difference between the two is the stylesheet they use -->    <style type="text/css">
    bb {
	font-style: italic;
}

	/* div{border:1px solid black;}*/
	
	#overview{width:98%; height:auto;}
	#section{height:40px; font-size: 20px; line-height:60px; color:#EE7942; font-weight:bold; }
	
	#OverText{min-width:710px; width:60%; float:left; }
	#HomeFig{margin-left:10px; margin-top:160px;height:auto; }
	#HomeFig font{color:#e85858; font-weight:bold; font-size:18px; line-height:25px; }
	#Title{margin-left:10px; height:auto; }
	#Title font{color:#e85858; font-weight:bold; font-size:18px; line-height:25px; }
	#SVGMB{width:360px; height:285px; margin-top:70px;margin-left:10px;float:left; }
	#SVGSTY{width:350px; height:280px; margin-top:70px;margin-left:10px;float:left;}
	#SVGSTP{width:350px; height:280px; margin-top:70px;margin-left:10px;float:left;}
	#datav font{color:#1a6b9f; font-weight:bold; font-size:20px; line-height:25px; }
	#PTMPDB{display:auto;width:350px;height:350px;position: relative;left:780px;top:30px; text-align:center;vertical-align:middle;}
    #Structure{float:left; width:400px;margin-right:30px;text-align:center; position: relative;top:380px;left:0px;}

	/* SVG */
	@keyframes strokeanim{to { stroke-dashoffset: 10; }}


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
            <li class="current"><a href="index.php" style="width:110px">HOME</a></li>
            <li><a href="online.php" style="width:130px">Web Server</a></li>
			<li ><a href="download.php" style="width:130px">Download</a></li>
            <li><a href="citation.php" style="width:110px">Citation</a></li>
            <li><a href="userguide.php" style="width:180px">User Guide</a></li>
            <li><a href="links.php" style="width:80px">LINKS</a></li>
            <li><a href="contact.php" style="width:110px">CONTACT</a></li>
          </ul>
                    </div>
                </div>
            </div>
         <div id="mainContent" style="height: 1000px;">
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
                    <div id="contentkk" class="storyy"><br />
                        <h2 id="pageName">※ GPS-SUMO 2.0 INTRODUCTION:&nbsp;<a href="userguide.php#Substrate" target="_blank"><img src="images/lock1.gif" width="15" height="18" border="0"></a></h2>
                        <div style="width:1200px;height:1500px">
      <div style="width: 1200px;height:500px;background-color:#fafafa59;">

					<div id="OverText" class="storyy" style="margin:10px 10px 20px 30px;width:700px;" >
						<p>By covalently modifying specific lysine residues in
          protein substrates, or by non-covalently interacting with proteins,
          <a href="http://en.wikipedia.org/wiki/Small_ubiquitin-related_modifier_1 " target='_blank'>small
          ubiquitin-like modifiers (SUMOs)</a> play an essential role in the regulation
          of a variety of biological processes, including gene expression, DNA
          repair, chromosome assembly, and cellular signaling (<a href="http://www.ncbi.nlm.nih.gov/pubmed/18000527?dopt=Citation" target='_blank'>Geiss-Friedlander
          and Melchior, 2007</a> ;<a href="http://www.ncbi.nlm.nih.gov/pubmed/15808504?dopt=Citation" target='_blank'>Hay,
          2005</a> ;<a href="http://www.ncbi.nlm.nih.gov/pubmed/11265250?dopt=Citation" target='_blank'>Muller,<i>et
          al.</i>, 2001</a> ;<a href="http://www.ncbi.nlm.nih.gov/pubmed/14506472?dopt=Citation" target='_blank'>Seeler
          and Dejean, 2003</a>). Along with the accumulating research on its biological
          functions, there are abundant evidences that the aberrance of SUMO regulation
          is highly associated with various diseases, such as neurodegenerative
          diseases (<a href="http://www.ncbi.nlm.nih.gov/pubmed/23979993" target='_blank'>Lee,<i>et
          al.</i>,2013</a>; <a href="http://www.ncbi.nlm.nih.gov/pubmed/23979994" target='_blank'>Eckermann,
          2013</a>), congenital heart defects (<a href="http://www.ncbi.nlm.nih.gov/pubmed/21563299" target='_blank'>Wang,
          <i>et al.</i>, 2011</a>), diabetes (<a href="http://www.ncbi.nlm.nih.gov/pubmed/17763827" target='_blank'>Zhao,
          2007</a>) and cancers (<a href="http://www.ncbi.nlm.nih.gov/pubmed/17217038" target='_blank'>Seeler,
          <i>et al.</i>, 2007</a>). Therefore, the identification of <font color="#0000FF"><strong>SUMOylation
          Sites</strong></font> and <strong><font color="#0000FF">SUMO-interaction
          Motifs (SIMs)</font></strong> in proteins is fundamental for understanding
          the biological functions and regulatory mechanisms of SUMOs, and provides
          potential targets for further diagnostic and therapeutic consideration.
        </p>

        <p>Here, we developed GPS-SUMO2.0, a  small ubiquitination
        modification prediction tool updated from SUMOsp, SUMOsp2.0 and GPS-SUMO.
        From the scientific literature and database,
        we manually collected <strong><font color="#FF0000">58503</font></strong>
          sumoylation sites in <strong><font color="#FF0000">11705</font></strong>
          proteins and <strong><font color="#FF0000">176</font></strong> known
          SIMs in <strong><font color="#FF0000">104</font></strong> proteins across
           <strong><font color="#FF0000">14</font></strong> species (apart from virus) as
          the non-redundant data sets, respectively. We collected <strong><font color="#FF0000">11</font></strong> features, and transformer was
          then adopted for the sumoylation sites and SIM prediction.
        </p>
        <p align="justify">The website can be found in the <a href="online.php" target='_blank'>WEB SERVER</a> page. And <a href="download.php" target='_blank'>the local tools</a> of all versions are also available. </p>
        <p align="justify"> </p>
					</div>
            <div id="Title">
						<font>&nbsp;&nbsp;&#9660; Example</font>
						</div>
                <div id='Structure'></div>
               <div id='PTMPDB' ></div>
               <div id="HomeFig">
						<font>&nbsp;&nbsp;&#9660; Statistics</font>
						</div>
               <div id="datai">
                <img src="images/datav1.png" style="position:relative;left:40px;top:30px; margin: 0 auto;" width="1050" height="210" border="0" />
                </div>
                <div id="datav">
						<font style="position:relative;left:60px;top:-180px;" >11705 proteins</font>
						<font style="position:relative;left:380px;top:-180px;" >176 SIMs</font>
						<font style="position:relative;left:710px;top:-180px;" >14 species</font>
						<font style="position:relative;left:-115px;top:0px;" >58503 sumoylation sites</font>
						<font style="position:relative;left:115px;top:0px;" >10 features and transfomer</font>
						</div>

						<div id="SVGMB"></div>
						<div id="SVGSTY"></div>
						<div id="SVGSTP"></div>

					<script>
						//
						var $svg="<svg width='100%' height='100%' version='1.1' xmlns='http://www.w3.org/2000/svg'><g>";
						$svg=$svg+"<text x=10 y=20 font-size='18' >Data size(MB)</text>"
						var colors =['#b6082d', '#75D4F2', '#52BDF2', '#00416D', '#39A0ED', '#52BDF2', '#75D4F2', '#00416D', '#2D7DBC', '#39A0ED', '#2D7DBC', '#00416D', '#75D4F2', '#2D7DBC', '#52BDF2', '#39A0ED'];
						var data="Total: 7,250 :4.1;sumosites:5.27:1.5;sim:0.02:0.6;AAindex:798:2.9; ACF:854:3; ASA: 314:2.4; binary:1388:3.6; BTA:1,323:3.5; CKSAAPs:707:2.7; gps:738:2.8; PseAAC: 96.9:2; SS: 1,006:3.2; pssm:1,698:3.7;transformer:60.1:1.9;PPI:1.11:0.8;3D Structure:20.0:1.7";
						var one=data.split(";");
						var max=4;
						var x=30;
						var y=35;
						var one_x=115;
						// Total
						var num=one[0].split(":");
						var wid=(num[2]/max)*190;
						var one_y=y;
						$svg=$svg+"<line class='Num' x1="+one_x+" y1="+one_y+" x2="+(one_x+wid)+" y2="+one_y+" stroke-width=8 stroke='"+colors[0]+"'/>";
						//$svg=$svg+"<text x=5 y="+(one_y+5)+" font-size='14'>"+num[0]+"</text>";
						$svg=$svg+"<text x="+(one_x-5)+" y="+(one_y+5)+" font-size='16' text-anchor='end' font-weight='bold'>"+num[0]+"</text>";
						$svg=$svg+"<text x="+(one_x+wid+5)+" y="+(one_y+5)+" font-size='14' font-weight='bold'>"+num[1]+"</text>";
						//
						for(i=1;i<one.length;i++){
							var num=one[i].split(":");
							var wid=(num[2]/max)*190;
							var one_y=y+16*i;
							$svg=$svg+"<line class='Num' x1="+one_x+" y1="+one_y+" x2="+(one_x+wid)+" y2="+one_y+" stroke-width=8 stroke='"+colors[i]+"'/>";
							//$svg=$svg+"<text x=5 y="+(one_y+5)+" font-size='14'>"+num[0]+"</text>";
							$svg=$svg+"<text x="+(one_x-5)+" y="+(one_y+5)+" font-size='14' text-anchor='end'>"+num[0]+"</text>";
							$svg=$svg+"<text x="+(one_x+wid+5)+" y="+(one_y+5)+" font-size='14'>"+num[1]+"</text>";
						}
						$svg=$svg + "</g>";
						$svg=$svg + "<defs><style>.Num{stroke-dasharray:300; stroke-dashoffset:300; animation: strokeanim 10s infinite linear;}</style></defs>";
						$svg=$svg + "</svg>";
						$("#SVGMB").html($svg);
						//
						var r=100;
						var cx=175
						var cy=150;
						$svg="<svg width='100%' height='100%' version='1.1' xmlns='http://www.w3.org/2000/svg'><g>";
						$svg=$svg+"<text x="+cx+" y="+cy+" font-size='22' text-anchor='middle'>sumosites</text>"
						$svg=$svg+"<path class='Annulus' d='M 225 63.4 A 100,100 0 1,0 271.6 175.9' stroke-width=50 stroke='#3bacb6' fill='none' />";

						$svg=$svg+"<path class='Annulus' d='M 271.6 175.9 A 100,100 0 0,0 261.6 100' stroke-width=50 stroke='#ffe4b6' fill='none' />";
						$svg=$svg+"<text x=285 y=140 font-size='16' text-anchor='middle'>mouse: 8%</text>";
						$svg=$svg+"<text x=75 y=180 font-size='16' text-anchor='middle'>human: 91% </text>";
						$svg=$svg+"<path class='Annulus' d='M 261.6 100 A 100,100 0 0,0 251.6 85.7' stroke-width=50 stroke='#f6979c' fill='none' />";
						$svg=$svg+"<path class='Annulus' d='M 251.6 85.7 A 100,100 0 0,0 225 63.4' stroke-width=50 stroke='#a1c3cc' fill='none' />";
						$svg=$svg+"<text x=245 y=70 font-size='16' text-anchor='middle'>others: 0.8%</text>";
						$svg=$svg+"<text x=275 y=100 font-size='16' text-anchor='middle'>yeast: 0.2%</text>";
						$svg=$svg + "<defs><style>.Annulus{stroke-dasharray:300; stroke-dashoffset:300; animation: strokeanim 20s infinite linear;}</style></defs>";
						$svg=$svg + "</g>";
						$svg=$svg + "</svg>";
						$("#SVGSTY").html($svg);

						//
						var r=100;
						var cx=175
						var cy=150;
						$svg="<svg width='100%' height='100%' version='1.1' xmlns='http://www.w3.org/2000/svg'><g>";
						$svg=$svg+"<text x="+cx+" y="+cy+" font-size='22' text-anchor='middle'>SIM</text>"
						$svg=$svg+"<path class='Annulus' d='M 275 150 A 100,100 0 0,0 261.6 100' stroke-width=50 stroke='#a1c3cc' fill='none' />";
						$svg=$svg+"<path class='Annulus' d='M 261.6 100 A 100,100 0 0,0 81 184' stroke-width=50 stroke='#3bacb6' fill='none' />";
						$svg=$svg+"<path class='Annulus' d='M 81 184 A 100,100 0 0,0 239.3 226.6' stroke-width=50 stroke='#ffe4b6' fill='none' />";
						$svg=$svg+"<path class='Annulus' d='M 239.3 226.6 A 100,100 0 0,0 275 150' stroke-width=50 stroke='#f6979c' fill='none' />";
						$svg=$svg+"<text x=125 y=230 font-size='16' text-anchor='middle'>virus: 31.6%</text>";
						$svg=$svg+"<text x=125 y=45 font-size='16' text-anchor='middle'>human: 46.9%</text>";
						$svg=$svg+"<text x=275 y=215 font-size='16' text-anchor='middle'>yeast: 13.6%</text>";
						$svg=$svg+"<text x=285 y=120 font-size='16' text-anchor='middle'>others: 7.9%</text>";
						$svg=$svg + "<defs><style>.Annulus{stroke-dasharray:500; stroke-dashoffset:500; animation: strokeanim 7s infinite linear;}</style></defs>";
						$svg=$svg + "</g>";
						$svg=$svg + "</svg>";
						$("#SVGSTP").html($svg);

					</script>

       </div>




<br class="clearfloat" />
<div id="Title" style="margin-top:60px">
		<font>&nbsp;&nbsp;&#9660; Citation</font>
		</div>
        <table width="520" border="0" cellpadding="0" cellspacing="0" align="left" style="margin-left:20px;margin-top:10px" class="story">
          <tr>
            <td width="520"><img src="images/boxtop.png" width="519" height="37" /></td>
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
                <img src="images/cover.gif" width="94" height="126" border="1" style="border-color:#000000; margin-right:8px" align="left" />
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
                            </p>
                            <h3> </h3>
                        </div>
                        <br class="clearfloat" />
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
