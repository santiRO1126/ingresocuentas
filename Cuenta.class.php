<?php
class Cuenta
{
  private $numeroCuenta;
  protected $nombreTitular;
  protected $saldo;
  protected $tipoCuenta;

  public function __construct($nombreTitular, $tipoCuenta, $numeroCuenta, $saldo)
  {
    $this->nombreTitular = $nombreTitular;
    $this->tipoCuenta = $tipoCuenta;
    $this->numeroCuenta = $numeroCuenta;
    $this->saldo = $saldo;
  }
  public function ingresarDinero($monto)
  {
    $this->saldo += $monto;
    return "Se ingresó $monto a la cuenta. Nuevo saldo: $this->saldo";
  }

  public function retirarDinero($monto)
  {
    if ($monto > $this->saldo) {
      return "No se puede retirar $monto. Saldo insuficiente: $this->saldo";
    }else{
        $this->saldo -= $monto;
      return "Saldo retirado con exito tu nuevo saldo es: $this->saldo";
    }
  }

  public function pagarFactura($monto)
  {
    if ($monto > $this->saldo) {
      return "No se puede pagar una factura Saldo insuficiente: $this->saldo";
    }else{
      
    $this->saldo -= $monto;
    return "Se pagó una factura de $monto. Nuevo saldo: $this->saldo";
    }

  }

  public function transferirSaldo($monto)
  {
    $this->saldo -= $monto;
  }

  public function mostrarDatos()
  {
    return "Número de cuenta: $this->numeroCuenta | Nombre del titular: $this->nombreTitular | Saldo: $this->saldo | Tipo de cuenta: $this->tipoCuenta";
  }
  public function crarCuenta()
  {
    $cuenta = new Cuenta($this->numeroCuenta, $this->nombreTitular, $this->saldo, $this->tipoCuenta);
  }
  public function getNumeroCuenta() {
    return $this->numeroCuenta;
    }

  public function setNumeroCuenta($numeroCuenta) {
    $this->numeroCuenta = $numeroCuenta;    
    }   
    public function getNombretitular() {
        return $this->nombreTitular;
        }
    
      public function setNombretitular($nombreTitular) {
        $this->nombreTitular = $nombreTitular;    
        }   
    

    public function getSaldo($monto) {
        return $this->saldo + $monto;
        }
    
    public function setSaldo($saldo) {
        $this->saldo = $saldo;    
    }   
    public function RestarSaldo($Restado){
            return $this->saldo - $Restado; 
   }

}