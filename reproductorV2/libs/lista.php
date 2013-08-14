<script src="js/jquery1.8.3.js"></script>

  <script type="text/javascript">
 function xx(){
for(i=0;i<document.form.valora.length;i++){
if(document.form.valora[i].checked) {
marcado=i;
}
}
//alert("El valor seleccionado es: "+document.form.valora[marcado].value);
   form = $("#form").serialize();
            var url="media/index.php"
            $.ajax({   
                type: "GET",
                url:url,
                data:form,
                success: function(datos){       
                    $('#yo4').html(datos);
                }
            });

         
}


      /*  function cargar(){
         // var cab = $("#cab").val();
          //var cab = $("#sex").val();
            //var url="response.php?cab="+cab
            document.getElementById('rec').name='valor';
            form = $("#form").serialize();
            var url="media/index.php"
            $.ajax({   
                type: "GET",
                url:url,
                data:form,
                success: function(datos){       
                    $('#yo4').html(datos);
                }
            });
        }*/
     </script>
<form id='form' name="form">
<?php 

include('conexion.php');

$sql=mysql_query("SELECT * FROM album",$con);

if (mysql_num_rows($sql) > 0) {
       
    while ($row = mysql_fetch_row($sql)) {
        $i=1;
        $i++;
    	$id=$row[0];
    	echo '<div id=listm>';


    	echo "<img src='media/img/ZX.png' width='14px'><strong>".$row[3]."</strong><input id='valora'type='radio' name='valora' onClick='xx();' value='".$id."'><br>";

    	echo "<img id='logo' src=media/audio/".$row[5]." width='100px' height='100px'><br>";
    	    
    	echo "<img src='media/img/Al.png' width='14px'>". $row[1]."<br>" ;
    	echo "<img src='media/img/fe.png' width='14px'>".$row[2]."<br>" ;

    	echo '</div>';
    	 
    	    }
 }

//echo "<a id='mi'href='index.php?id=".$id."'>mi</a>";
 echo '<div id="yo4">s</div>';

?>


</form >

