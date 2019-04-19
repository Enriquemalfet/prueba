<?php
    $mysql_host		= "localhost";
    $mysql_user		= "root";
    $mysql_password	= "";
    $mysql_database	= "pulc";
    
    $conexion = mysqli_connect( $mysql_host, $mysql_user, $mysql_password, $mysql_database ); 
    
    if (  mysqli_connect_errno($conexion)  )
    {
	echo "Fallo en conexion a MySQL";
    }
    
    mysqli_query($conexion,"SET NAMES 'utf8'");
    echo"Se conecto";
    
		//$usuario	= $_SESSION['usuario'];
		//$almacen	= $_SESSION['almacen'];
		//require("f_menu.php");
		//menu($usuario);
		//require("conexion.php");
		//require("cabecera.php");  
		//cabecera('GStock','Inicio');
    echo "<br>";
    echo "<br>";
    echo "<br>";  
       $aleatorio = rand(1,20);
       echo"El numero aleatorio es:",$aleatorio; 
    
   
$q_dispositivo  = mysqli_query($conexion, "SELECT * FROM dispositivos WHERE status = '1' order by rand() LIMIT 15" );
                        $fila_disp  = mysqli_fetch_array($q_dispositivo) ;
       //                 $codigo_disp    = $fila_disp['codigo_disp'];
      //               $id_disp    = $fila_disp['id_disp'];
                        $id_disp = $fila_disp['idDispositivos'];
                        $stats   = $fila_disp['Status'];

   //$q_partidas = mysqli_query($conexion, "SELECT * FROM dispositivos WHERE status = '1' order by idDispositivos" );
    echo "<br>";  
    echo "esto tiene id",$id_disp;
    echo "<br>";  
    echo "esto tiene el query $stats";
    
    echo "<br>";
    echo "<br>";
    echo "<br>";    
    //echo"query dispositivo:", $fila_disp;
 


    echo "<br>";
    echo "<br>";
    echo "<br>";    

    // INFORMACION GENERAL
    echo "<table width = '800' border = '0' align = 'center' cellpadding = '0' cellspacing = '0' bgcolor = '#CCCCCC'>";
        echo "<tr>";
            echo "<td>";
                echo "<table width = '100%' border = '0' cellpadding = '1' cellspacing = '0' bgcolor = '#FFFFFF'>";
                    echo "<tr>";
                    
                        echo "<td align = 'left' >";
                            echo "<font size = '3' face = 'Arial'>";
                            echo "<b>Pulc :</b> Gestion de preguntas ";
                            echo "</font>";
                        echo "</td>";
                    
                    echo "</tr>";

                echo "</table>";
            echo "</td>";
        echo "</tr>";
    echo "</table>";
    
    echo "<br>";
    echo "<br>";    

    echo "<table width = '800' border = '0' align = 'center' cellpadding = '0' cellspacing='1' >";
            echo "<tr>";
                echo "<td>";
                    echo "<table width = '100%' border = '0' cellpadding = '2' cellspacing = '1' >";
                        echo "<tr>";
                            echo "<td align = 'left'>";
                                echo "<font size = '2' face = 'Arial' color = 'black'>";
                                //echo "$mensaje_usuario";
                                echo "</font>";
                            echo "</td>";
                        echo "</tr>";
                    echo "</table>";
                echo "</td>";
            echo "</tr>";
    echo "</table>";
        
?>