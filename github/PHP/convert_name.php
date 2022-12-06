<?php

@session_start();
set_time_limit(300);
include("datast.php");
//die($_SERVER['DOCUMENT_ROOT'].'/'."temp"."/".session_id().".fasta");
//$filename=  makefile($_SERVER['DOCUMENT_ROOT'].'/'."temp")."/".session_id().".fasta";
$filename=$_SERVER['DOCUMENT_ROOT'].'/'."temp"."/".session_id().".fasta";  
$output= $_SERVER['DOCUMENT_ROOT'].'/'."temp"."/".session_id();
$result= $output.".txt";
$sumylation=trim($_POST['sum']);
$SUMO=trim($_POST['bin']);
$boo=trim($_POST['bool']);
$console = null;
$file=$_FILES['upfile'];
$text=trim($_POST['text']);//ZNF451 Q9Y4E5 E3 SUMO-protein ligase ZNF451
//echo $sumylation.'\t'.$SUMO.'\t'.$boo.'\t'.$console.'\t'.$file.'\t'.$filename.'\t'.$output;
//die($sumylation.'\t'.$SUMO.'\t'.$boo.'\t'.$console.'\t'.$file.'\t'.$filename.'\t'.$output);
$file2='webcomp/'.$_POST['Species'].".txt";
//$myfile = fopen($file2, "r") or die("Unable to open file!");
$seqs="";
//$hit=0;
$text=str_replace(",","~",$text);
$words = explode("\r\n",$text);
//echo(escapeshellarg(json_encode($words)));
/*while(!feof($myfile)) {
	// echo fgets($myfile). "A<br>";
	$lines = explode("\t", fgets($myfile));
	 if(sizeof($lines)>1){
	  for($i=0;$i<sizeof($words);$i++){
	   if(strtoupper($words[$i])==strtoupper($lines[0])){
		echo "Yes! ".$lines[0]."\t".$words[$i]."<br/>";
	   }else if(strtoupper($words[$i])==strtoupper($lines[1])){
		echo "Yes! ".$lines[1]."\t".$words[$i]."<br/>";
	   }else if(strtoupper($words[$i])==strtoupper($lines[2])){
		echo "Yes! ".$lines[2]."\t".$words[$i]."<br/>";
	   }else{
		continue;
	   }

	   $hit=$hit+1;
	   $seqs=$seqs.">".$words[$i]."\r\n".$lines[3]."\r\n";
	  }
	 }
}*/
//$cmd=$_SERVER['DOCUMENT_ROOT']."/python3/bin/python3.8 ".$_SERVER['DOCUMENT_ROOT']."/predict/search_name.py ".$file2.' '.$words." 2>&1";
//$seqs=shell_exec($cmd, $error);
$cmd=$_SERVER['DOCUMENT_ROOT']."/python3/bin/python3.8 ".$_SERVER['DOCUMENT_ROOT']."/predict/search_name.py ".$file2.' '.json_encode($words).' '.$output;
$seqs=shell_exec($cmd);
//print_r($words);
//die($seqs);
if($seqs."123"=="123"){
//if($seqs==NULL){	
//if(empty($seqs)){
		print "<script type='text/javascript'>
					window.alert('No protein sequence was matched!');
					window.location.href='online_name.php';
		   </script> ";
	error_Handle("No protein sequence was matched!", "online_name.php");
	//window.location.href='online_name.php';
}else{
	if ($sumylation=="None") {
     if ($SUMO == "None") {
         header("Location:onine_name.php");
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
 $_SESSION['Species']=$_POST['Species'];
  try
  {
      set_time_limit(240);

     $sumo=new SUMO($sumylation,$SUMO,$boo,$console,$file,$filename,$output,$_POST['Species']);
	
      if(is_uploaded_file($_FILES["upfile"]["tmp_name"]))
	  {
       	  $sumo->momeory0();
          $_SESSION['fast_to_session']= file_get_contents($filename);
	  }

      else
	  {	
          $sumo->momeory1($seqs);
		  
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
          $sumo->convert();
          if(!file_exists($result))
          {
               print "<script type='text/javascript'>
					window.alert('No site was predicted!');
					window.location.href='online_name.php';
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
			$ids=str_replace(' ','_',$ids);
			$ids=explode(';',$ids);
			$ids=array_filter(array_unique($ids, SORT_REGULAR));
			
			foreach($ids as $key => $value){
				$search = new Search();
				$search->testSimple($_SESSION['seqfile'],$value);
				
				//testSimple($_SESSION['seqfile'],$value);
				//die($_SESSION['SEQ']['PML']);
				//unlink('./temp/'.$_SESSION['seqfile'].$value.'.fas');
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

}
 function makefile($a)
 {
	 if(!is_dir($a))
	  mkdir($a);
	  return $a;

 }
?>