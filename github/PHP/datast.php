<?php

class SUMO
{

private  $sumylation;
private $SUMO;
private $boo;
private $console;
private $file;
private $input;
private $output;

public function SUMO($a,$b,$c,$d,$e,$f,$g,$h)
{
$this->sumylation=$a;
$this->SUMO=$b;
$this->boo=$c;
$this->console=$d;
$this->file=$e;
$this->input=$f;
$this->output=$g;
$this->species=$h;
}



public function momeory0()
{
if($this->file['size']>1024*1024*2)
{
 print "<script type='text/javascript'>

		     window.alert('The file size should be less than 2M!');
                      window.location.href='online.php';
		   </script> ";
}
else
{

move_uploaded_file($this->file["tmp_name"],$this->input) ;

}

}


public function momeory1($text)
{
if($f=fopen($this->input,'w'))
{
fwrite($f,$text);
fclose($f);
}
}

public function check()
{
	$re=fopen($this->input,'r');
	 $str=trim(fgets($re));
	 if($str[0]==">")
	 {
		 return true;
	 }
	 else
	 return false;
}


public function convert()
{
//$cmd="E:/anaconda/python.exe ./predict/predict.py ".$this->sumylation." ".$this->SUMO." ".$this->console." ". $this->input." ".$this->output;
$cmd=$_SERVER['DOCUMENT_ROOT']."/python3/bin/python3.8 ".$_SERVER['DOCUMENT_ROOT']."/predict/predict.py ".$this->sumylation." ".$this->SUMO." ".$this->console." ". $this->input." ".$this->output." ".$this->species." 2>&1";
/*exec($cmd, $error);
print_r($error);
die($error);*/
exec($cmd, $error);
exec("mv $this->output.tab $this->output.txt");
exec("rm $this->output.'fr'");

}
public function convert_multi()
{
//$cmd="E:/anaconda/python.exe ./predict/predict.py ".$this->sumylation." ".$this->SUMO." ".$this->console." ". $this->input." ".$this->output;
$cmd=$_SERVER['DOCUMENT_ROOT']."/python3/bin/python3.8 ".$_SERVER['DOCUMENT_ROOT']."/predict/predict_total.py ".$this->sumylation." ".$this->SUMO." ".$this->console." ". $this->input." ".$this->output." ".$this->species." 2>&1";
//$cmd="/usr/local/lib/python3.8 ".$_SERVER['DOCUMENT_ROOT']."/predict/predict_total.py ".$this->sumylation." ".$this->SUMO." ".$this->console." ". $this->input." ".$this->output." ".$this->species." 2>&1";
exec($cmd, $error);
/*print_r($error);
die($cmd);
exec($cmd, $error);*/
exec("mv $this->output.tab $this->output.txt");
exec("rm $this->output.'fr'");
}
public function convert_simple()
{
//$cmd="E:/anaconda/python.exe ./predict/predict.py ".$this->sumylation." ".$this->SUMO." ".$this->console." ". $this->input." ".$this->output;
$cmd=$_SERVER['DOCUMENT_ROOT']."/python3/bin/python3.8 ".$_SERVER['DOCUMENT_ROOT']."/predict/predict_simple.py ".$this->sumylation." ".$this->SUMO." ".$this->console." ". $this->input." ".$this->output." ".$this->species." 2>&1";
//$cmd="/usr/local/lib/python3.8 ".$_SERVER['DOCUMENT_ROOT']."/predict/predict_total.py ".$this->sumylation." ".$this->SUMO." ".$this->console." ". $this->input." ".$this->output." ".$this->species." 2>&1";
exec($cmd, $error);
/*print_r($error);
die($cmd);
exec($cmd, $error);*/
exec("mv $this->output.tab $this->output.txt");
exec("rm $this->output.'fr'");
}

public function ToSession()
{
$i=0;
file_exists($this->output.'.txt') or die ("No Result");
$re=fopen($this->output.'.txt','r');
while (!feof($re))
{
$_SESSION['so'][$i]= trim(fgets($re));
$i++;
}

unset($_SESSION['so'][--$i]);

fclose($re);
$_SESSION['len']=$i;
//whole=$_SESSION['fast_to_session'];
//var whole=whole.split('>');
//echo $_SESSION['fast_to_session'];
//print_r($_SESSION);
//$_SESSION['SEQ']=[];	

//unlink($this->input);
//unlink($this->output.'.txt');

//$search = new Search();	
//$search->testSimple($_SESSION['seqfile'][$index]);
}
}
function getCharpos2($str, $char){
       $j = 0;
       $arr = '';
       $count = substr_count($str, $char);
       for($i = 0; $i < $count; $i++){
             $j = strpos($str, $char, $j);
             $arr.= $j.';';
             $j = $j+1;
       }
	   
       return $arr;
}
class Search{
public function testSimple($session_id,$genename) {
		$basename=$session_id.$genename;
		$seqfile =$basename.'.fas';

		$disorderType = array();
		$disorderValue = array();			
		chdir("../share_tools/iupred"); 
		$iupred_out = fopen("../../sumo/webcomp/tmp/".$basename.".iupred" , "w");
		/*$cm="./iupred  ../../temp/$seqfile long ".$iupred_result." 2>&1";
		exec($cm,$error);
		print_r($error);
		die($cm);*/
		exec("./iupred  ../../sumo/temp/$seqfile long ",$iupred_result );
		$i=0;
		while($i < sizeof($iupred_result)){
			$line = $iupred_result[$i];
			fwrite($iupred_out, $line."\n");
			if(strpos($line,"#") > -1){				
			}else{
				$newline = preg_replace("/^\s+/","",$line);
				$array = preg_split("/\s+/",$newline);
				$value = $array[2];
				$type = $value > 0.5 ? "D":"O";
				array_push($disorderType,$type);
				array_push($disorderValue,$value);				
			}
			$i++;
		}
		fclose($iupred_out);
		chdir("../../sumo/webcomp");
		$fas_file = fopen("../temp/".$basename.".fas" , "r") or exit();		
		$m = 1;
		$seq = "";
		while (!feof($fas_file)) {
			$fas_line = trim(fgets($fas_file));
			if(strpos($fas_line,">") > -1){				
			}else{
				$seq = $seq.$fas_line;
			}
			$m++;
		}
		
		$length = strlen($seq);
		$codes = str_split($seq);
		
		$all_out = fopen("./tmp/".$basename.".txt" , "w") or exit();	
		for($i=0;$i<sizeof($disorderType);$i++){
			fwrite($all_out, $codes[$i]."\t".$disorderType[$i]."\t".$disorderValue[$i]."\n");		
			}
		fclose($all_out);
		chdir("..");
		
		}
}

   
?>