<?php

class PropiedadInmobiliaria
{
    public $Id;
    public $Direccion;
    public $MetrosCuadrados;
    public $Ciudad;
    public $Valor;

    function __construct($id, $dir, $mtc, $ciud, $val)
    {
        $this->Id = $id;
        $this->Direccion = $dir;
        $this->MetrosCuadrados = $mtc;
        $this->Ciudad = $ciud;
        $this->Valor = $val;
    }

    public function mostrarDatos()
    {
        echo 'Datos de la propiedad' . '<br>';
        echo 'Id de la propiedad: ' . $this->Id . '<br>';
        echo 'Dirección de la propiedad: ' . $this->Direccion . '<br>';
        echo 'Metros cuadrados de la propiedad: ' . $this->MetrosCuadrados . '<br>';
        echo 'Ciudad de la propiedad: ' . $this->Ciudad . '<br>';
        echo 'Valor de la propiedad: $' . $this->Valor;
    }
}
