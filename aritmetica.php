<?php
/**
* @author Jorge baños
* @version 1.0
 */

class Aritmetica {
    private $ultimoResultado;
    /**
     * @param array $sumandos recibe un array con los numeros a sumar
     * @return float 
     */
    public function suma($sumandos) {
        $total=0;
        foreach ($sumandos as $valor){
            $total=$total + $valor;
        }
        return $this->ultimoResultado = $total;
    }
    /**
     * @param float $minuendo numero restado
     * @param float $sustraendo numero a restar
     * @return float
     */
    public function resta(float $minuendo, float $sustraendo) {
        return $this->ultimoResultado = $minuendo - $sustraendo;
    }
    /**
     * @param array $operandos
     * @return float
     */
    public function multiplicacion($operandos) {
        $total=0;
        foreach ($operandos as $valor){
            $total=$total * $valor;
        }
        return $this->ultimoResultado = $total;
    }
    /**
     * @param float $dividendo
     * @param float $divisor
     * @return float
     * @throws Exception no se puede dividir por 0
     */
    public function division(float $dividendo, float $divisor) {
        if($divisor==0) {
            throw new Exception('Division entre 0');
        }else {
            return $this->ultimoResultado = $dividendo / $divisor;
        }
    }
    /**
     * @return float
     */
    public function getUltimaResultado() {
        return $this->ultimoResultado;
    }
    /**
     * @return string
     */
    public function __toString() {
        return strval($this->ultimoResultado); //Convierte a cadena el valor
    }
}