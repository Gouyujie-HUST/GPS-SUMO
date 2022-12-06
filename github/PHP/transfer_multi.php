<?php

 @session_start();
 include("datast.php");
 $filename=  makefile($_SERVER['DOCUMENT_ROOT'].'/'."temp")."/".session_id().".fasta";
 $output= $_SERVER['DOCUMENT_ROOT'].'/'."temp"."/".session_id();
 $result= $output.".txt";
 $sumylation=trim($_POST['sum']);
 $SUMO=trim($_POST['bin']);
 $boo=trim($_POST['bool']);
 $console = null;
 $file=$_FILES['upfile'];
 $text=trim($_POST['text']);

if(isset($_POST['Species'])){
	$species=$_POST['Species'];
}
else{
	$species='all';
}
//die($sumylation.'\t'.$SUMO.'\t'.$boo.'\t'.$console.'\t'.$file.'\t'.$filename.'\t'.$species);
 if ($sumylation=="None") {
     if ($SUMO == "None") {
         header("Location:onine.php");
     } else {
         
         $console="SUMO-interaction";
     }
     
 } else {
     if ($SUMO == "None") {
         $console="Sumoylation";
     } else {
         $console="Both";
     }
 }
 
 $_SESSION['slth']=$sumylation;
 $_SESSION['sbth']=$SUMO;
 $_SESSION['type']=$console;
 $_SESSION['seqfile']=session_id();
 
  try
  {
      set_time_limit(240);

     $sumo=new SUMO($sumylation,$SUMO,$boo,$console,$file,$filename,$output,$species);
      if(is_uploaded_file($_FILES["upfile"]["tmp_name"]))
	  {
       	  $sumo->momeory0();
          $_SESSION['fast_to_session']= file_get_contents($filename);
	  }

      else
	  {	
          $sumo->momeory1($text);
		  
          $_SESSION['fast_to_session']= file_get_contents($filename);

	  }

		/*if(!$sumo->check())
				   {
			print "<script type='text/javascript'>

					 window.alert('Enter sequence(s) in FASTA format!');
							  window.location.href='online.php';
				   </script> ";

					 window.alert('No site was predicted!');
							  window.location.href='online.php';
				   }
*/
          $sumo->convert_multi();
          if(!file_exists($result))
          {
               print "<script type='text/javascript'>
					window.alert('No site was predicted!');
					window.location.href='online.php';
		   </script> ";
          }
			$sumo->ToSession();
			
			 $ids="";
			 $start=0;
			 $num =  $_SESSION['len']; 
			for ($k=1; $k<=$num; $k++) {		
				$string = $_SESSION['so'][$k+$start];
				$arry=explode("\t",$string);
				$ids.=$arry[0].';';
				}
			
			$ids=explode(';',$ids);
			$ids=array_filter(array_unique($ids, SORT_REGULAR));
			
			foreach($ids as $key => $value){
				$search = new Search();
				$search->testSimple($_SESSION['seqfile'],$value);
				
				//testSimple($_SESSION['seqfile'],$value);
				//die($_SESSION['SEQ']['PML']);
				unlink('temp/'.$_SESSION['seqfile'].$value.'.fas');
				//$_SEQ=testSimple($_SESSION['seqfile'],$value);
				
				}
				
		    print "<script type='text/javascript'>
		     window.location.href='showResult.php';
		   </script> ";
		   

  }
  catch(Exception $e)
   {
 	    print $e->getMessage();
  }



 function makefile($a)
 {
	 if(!is_dir($a))
	  mkdir($a);
	  return $a;

 }

/* $sessionid=session_id();
 $ids="";
 $start=0;
 $num =  $_SESSION['len']; 
for ($k=1; $k<=$num; $k++) {		
	$string = $_SESSION['so'][$k+$start];
	$arry=explode("\t",$string);
	$ids.=$arry[0].';';
	}
$ids=explode(';',$ids);
$ids=array_filter(array_unique($ids, SORT_REGULAR));
die($ids);
foreach($ids as $key => $value){
	echo $value;
	$search = new Search();
	$search->testSimple($sessionid,$value);}

$search = new Search();
$search->testSimple('12','34');*/	
?>