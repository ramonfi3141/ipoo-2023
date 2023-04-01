<?php
include "ViajeFeliz.php";

//Implementar un script testViaje.php que cree una instancia de la clase Viaje y presente un menú que permita cargar la información del viaje, modificar y ver sus datos.


$unViaje=new Viaje(022,"rosario",1,[]);



function menu()
{
    echo "
    1) para cargar datos\n
    2) para ver datos cargados \n
    3) para modificar datos\n
    4) salir \n";
    $op=trim(fgets(STDIN));
    return $op;
}

do {
        $opcion=menu();
        switch ($opcion) {
            case '1':
                
                    echo"Codigo del viaje: \n";
                    $unViaje->setCodigoViaje(trim(fgets(STDIN)));
                    echo "Destino: \n";
                    $unViaje->setDestino(trim(fgets(STDIN)));
                    echo"Cantidad maxima de pasajeros: \n";
                    $unViaje->setCantidadMax(trim(fgets(STDIN)));
                    echo "=========carga de pasajeros ===========\n";
                    $unViaje->cargarPasajero();
                    $unViaje->almacenarViaje($unViaje);
                    echo"Otro Viaje?\n";
                    $r=trim(fgets(STDIN));
            
                break;
            case '2':
                echo $unViaje->getCodigoViaje(). "\n".
                     $unViaje->getDestino(). "\n".
                     $unViaje->getCantidadMax(). "\n".
                     $unViaje->mostrarPasajero(). "\n";


                break;

            case '3':
                echo "modificar datos \n";
                echo "codigo de viaje \n" .$unViaje->setCodigoViaje(trim(fgets(STDIN)));
                echo "destino:\n " . $unViaje->setDestino(trim(fgets(STDIN)));
                echo "Cantidad de pasajeros:\n " . $unViaje->setCantidadMax(trim(fgets(STDIN)));
                $unViaje->cargarPasajero();
                
                break;    
            default:
                "4";
                break;
        }

} while ($opcion < 4 );



?>