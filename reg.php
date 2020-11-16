<?php 

class registrar{
    public $nombre;
    public $categoria;
    public $basico;
    public $bonificacion;
    public $tipo;
    public $remuneracion;
    public $descuento;

public function __construct($nombre,$categoria,$basico,$bonificacion,$tipo){
    $this->nombre = $nombre;
    $this->categoria = $categoria;
    $this->basico = $basico;
    $this->bonificacion = $bonificacion;
    $this->tipo = $tipo;
}
 
public function calcular_neto(){
    $this->remuneracion = $this->basico + $this->bonificacion;
    
    if($this->tipo == 'AFP') {
        $this->descuento = 0.11 * $this->remuneracion;
    } else {
        $this->descuento = 0.13 * $this->remuneracion;
    }
    
    return $this->remuneracion - $this->descuento;

}
public function imprimir(){
    echo '<br> ---------- Resultados del Registro---------';
    echo '<br> Nombre del Empleado: ', $this->nombre;
    echo '<br> Categoria: ', $this->categoria;
    echo '<br> Básico: S/.', $this->basico;
    echo '<br> Bonificación: S/.', $this->bonificacion;
    echo '<br> Tipo: ', $this->tipo;
    $this->calcular_neto();
    echo '<br> Remuneración: S/.', $this->remuneracion;
    echo '<br> Descuento: S/.', $this->descuento;
    echo '<br> El Neto es: S/.', $this->calcular_neto();

}
}
?>