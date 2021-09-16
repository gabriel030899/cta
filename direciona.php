<?php 

include_once("includes_bd/conexaoSql.php");
$Conexao = Conexao::getConnection();

$codigo = $_GET["codigo"];


if ($codigo == 1) {
    
   try {
        
        $sql = "INSERT INTO redirect_data (url_atual,url_destino) 
    VALUES ('HOME', 'PILARES')";	
    
    $stmt = $Conexao->query($sql);
	
   
    } 
    
 catch (Exception $e) {
     var_dump($e);
 }
    
  ?> <html> <meta http-equiv="refresh" content="0;url=pilares.php"></html> <?php

    
}

if ($codigo == 2) {
    
      try {
    $sql = "INSERT INTO redirect_data (url_atual,url_destino) 
    VALUES ('HOME', 'TECNO CURSO')";	
    $stmt = $Conexao->query($sql);
    
    
      }
    
 catch (Exception $e) {
     var_dump($e);
 }
 
 ?> <html> <meta http-equiv="refresh" content="0;url=https://escolatecnocursos.com/"></html> <?php

}




if ($codigo == 3) {
    
     
      try {
    $sql = "INSERT INTO redirect_data (url_atual,url_destino) 
    VALUES ('HOME', 'MATRIZ DE COMPETENCIA')";	
    $stmt = $Conexao->query($sql);
    
  
      }
    
 catch (Exception $e) {
     var_dump($e);
 }
 
 ?> <html> <meta http-equiv="refresh" content="0;url=https://nams-pp-skillmatrixprod-app.azurewebsites.net/"></html> <?php
}

if ($codigo == 4) {
    
    
      try {
    $sql = "INSERT INTO redirect_data (url_atual,url_destino) 
    VALUES ('HOME', 'CENTRAL DO CONHECIMENTO')";	
    $stmt = $Conexao->query($sql);
    
 
    
      }
    
 catch (Exception $e) {
     var_dump($e);
 }
 
 ?> <html> <meta http-equiv="refresh" content="0;url=https://nams-pp-lppprod-app.azurewebsites.net/home"></html> <?php
    
}

if ($codigo == "p1") {
    
   try {
        
        $sql = "INSERT INTO redirect_data (url_atual,url_destino) 
    VALUES ('PILARES', 'PILAR MA')";	
    
    $stmt = $Conexao->query($sql);
	
   
    } 
    
 catch (Exception $e) {
     var_dump($e);
 }
    
 ?> <html> <meta http-equiv="refresh" content="0;url=trilha_ma.php"></html> <?php
    
}

if ($codigo == "p2") {
    
  try {
       
       $sql = "INSERT INTO redirect_data (url_atual,url_destino) 
   VALUES ('PILARES', 'PILAR SHE')";	
   
   $stmt = $Conexao->query($sql);
 
  
   } 
   
catch (Exception $e) {
    var_dump($e);
}
   
?> <html> <meta http-equiv="refresh" content="0;url=she.php"></html> <?php
   
}

if ($codigo == "s1") {
    
  try {
       
       $sql = "INSERT INTO redirect_data (url_atual,url_destino) 
   VALUES ('PILAR SHE', 'ASPIMP E LPD')";	
   
   $stmt = $Conexao->query($sql);
 
  
   } 
   
catch (Exception $e) {
    var_dump($e);
}
   
?> <html> <meta http-equiv="refresh" content="0;url=aspimp.php"></html> <?php
   
}

if ($codigo == "s2") {
    
  try {
       
       $sql = "INSERT INTO redirect_data (url_atual,url_destino) 
   VALUES ('PILAR SHE', 'BBS E BBNIMS')";	
   
   $stmt = $Conexao->query($sql);
 
  
   } 
   
catch (Exception $e) {
    var_dump($e);
}
   
?> <html> <meta http-equiv="refresh" content="0;url=bbs.php"></html> <?php
   
}

else {
    
    
}


?>