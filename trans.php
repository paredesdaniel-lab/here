<?php 

class transportes{
    public $destinatario;
    public $destino;
    public $tarifa=150;
    public $tm;
  

public function __construct($destinatario,$destino,$tm){
    $this->destinatario = $destinatario;
    $this->destino = $destino;
    $this->tm = $tm;
}
 
public function flete(){

    return $this->tm * $this->tarifa;
}

public function imprimir(){
    echo '<br> ---------- Resultados del Registro---------';
    echo '<br> Nombre del Destinatario: ', $this->destinatario;
    echo '<br> Destino: ', $this->destino;
    echo '<br> Cantidad de TM: ', $this->tm;    
    $this->flete();    
    echo '<br> Tarifa: S/.', $this->tarifa;
    echo '<br> El costo del flete es: S/.', $this->flete();

}
}
class IVOVIC extends transportes{



}

class LEONIDAS extends transportes{

    public $monto;
    public $seguro;

    public function monto(){
        return $this->flete() + $this->seguro();

    }

    public function seguro(){
        return 0.005 * $this->flete();
        
    }
    public function tarifario(){

        if($this->destino == 'Arequipa' or $this->destino=="Ilo" or $this->destino=="Tacna" ) {
            $this->tarifa=200;
        } else {
        
            if($this->destino == 'Piura' or $this->destino=="Tumbes" or $this->destino=="Cajamarca" ) {
                $this->tarifa = 220;
            } else{
                $this->tarifa = 150;
            }}
    
    }

}
?>