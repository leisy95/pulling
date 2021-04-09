<?php>
  $persona = [
                "nombre"=>"Pedro";
                "apellido"=>"Sanchez",
                "edad"=>"50"
             ];
             
         foreach ($personas as $valor) {
          echo "$valor <br>";
          
        }
?>

        $auto = [
                  "marca" => "Ford",
                  "Modelo" => "Focus",
                  "Año" => "2017"
                  ];

        foreach ($auto as $posicion => $valor){
        echo "$posicion: $valor <br>";
    }
