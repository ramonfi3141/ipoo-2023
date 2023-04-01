<?php
/**La empresa de Transporte de Pasajeros “Viaje Feliz” quiere registrar la información referente a sus viajes. De cada viaje se precisa almacenar el código del mismo, destino, cantidad máxima de pasajeros y los pasajeros del viaje.

Realice la implementación de la clase Viaje e implemente los métodos necesarios para modificar los atributos de dicha clase (incluso los datos de los pasajeros). Utilice un array que almacene la información correspondiente a los pasajeros. Cada pasajero es un array asociativo con las claves “nombre”, “apellido” y “numero de documento”.

Implementar un script testViaje.php que cree una instancia de la clase Viaje y presente un menú que permita cargar la información del viaje, modificar y ver sus datos.

 */

 class Viaje{

    private $codigoViaje;
    private $destino;
    private $cantidadMax;
    private $pasajeros;

public function __construct($codigoViaje,$destino,$cantidadMax,$pasajeros)
{
    $this->codigoViaje= $codigoViaje;
    $this->destino= $destino;
    $this->cantidadMax= $cantidadMax;
    $this->pasajeros= $pasajeros;

}
    /**
     * Get the value of codigoViaje
     */ 
    public function getCodigoViaje()
    {
        return $this->codigoViaje;
    }

    /**
     * Set the value of codigoViaje
     *
     * @return  self
     */ 
    public function setCodigoViaje($codigoViaje)
    {
        $this->codigoViaje = $codigoViaje;

        return $this;
    }

    /**
     * Get the value of destino
     */ 
    public function getDestino()
    {
        return $this->destino;
    }

    /**
     * Set the value of destino
     *
     * @return  self
     */ 
    public function setDestino($destino)
    {
        $this->destino = $destino;

        return $this;
    }

    /**
     * Get the value of cantidadMax
     */ 
    public function getCantidadMax()
    {
        return $this->cantidadMax;
    }

    /**
     * Set the value of cantidadMax
     *
     * @return  self
     */ 
    public function setCantidadMax($cantidadMax)
    {
        $this->cantidadMax = $cantidadMax;

        return $this;
    }

    /**
     * Get the value of pasajeros
     */ 
    public function getPasajeros()
    {
        return $this->pasajeros;
    }

    /**
     * Set the value of pasajeros
     *
     * @return  self
     */ 
    public function setPasajeros($pasajeros)
    {
        $this->pasajeros = $pasajeros;

        return $this;
    }

//===================================================================
public function __toString()
{
    $str= "Codigo de viaje: ".$this->getCodigoViaje()."\n".
            "Destino: ".$this->getDestino()."\n".
            "Cantidad de pasajeros: ".$this->getCantidadMax() ."\n".
            "========= Pasajeros ======".$this->mostrarPasajero();

            return $str;
}

//===================================================================
public function cargarPasajero()
{
   
    $pasajeros = [];
    $cant= $this->getCantidadMax();

    $i = 0;
    do {
        echo "Nombre\n";
        $nombre = trim(fgets(STDIN));
        echo "Apellido \n";
        $apellido = trim(fgets(STDIN));
        echo "DNI\n";
        $dni = trim(fgets(STDIN));

        $pasajeros[] = [
            "nombre" => $nombre,
            "apellido" => $apellido,
            "dni" => $dni
        ];

        $i++;
    } while ($i < $cant);

    $this->setPasajeros($pasajeros);
}
//===================================================================
 public function mostrarPasajero()
 {
    $losPasajeros="";
    $colPasa=$this->getPasajeros();

    for ($i=0; $i <count($colPasa) ; $i++) 
    {
        $losPasajeros .= "Nombre: ".$colPasa[$i]["nombre"]." ". $colPasa[$i]["apellido"] ."\n". "Dni: " . $colPasa[$i]["dni"]."\n" ;
    }

    return $losPasajeros;
 }

//===================================================================
public function almacenarViaje($viaje)
{
  $col=[] ;

  array_push($col,$viaje);

  }


 
//===================================================================

 }
?>