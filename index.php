<?php
/**
 * Representacion de la clase robot con sus atributos basicos y calculo de precio.
 * 
 */
class Robot {

 /**
   * Altura del robot.
   * 
   * Ejemplo: $size: '32 cm'.
   * 
   * @var int
  */
  private $size;

  /**
   * Color del robot.
   * 
   * Ejemplo: 'azul'.
   * 
   * @var int
  */
  private $color;

  /**
   * Precio del robot.
   * 
   * Ejemplo: '300 USD'.
   * 
   * @var string
  */
  private $price;

  /**
   * Edicion del robot.
   * 
   * Ejemplo: 'platino'.
   * 
   * @var string
  */
  private $edition;

  /**
   * Constructores y el objeto robot.
   * 
   * @param mixed $size
   *  El tamaño del robot.
   * @param mixed $color
   *  El color del robot.
   * @param mixed $price
   *  El precio del robot.
   * @param mixed $edition
   *  La edicion del robot.
   */
  function __construct($size, $color, $price, $edition) {
    $this->size = $size;
    $this->color = $color;
    $this->price = $price;
    $this->edition = $edition;
  }
  /**
   * La altura del robot.
   * 
   * @param int $size
   *   La altura del robot en CM. Ejemplo :'32 cm'.
   */
  function setSize($size) {
    $this->size = $size;
  }

  /**
   * El color del robot.
   * 
   * @param string $color
   *   El color del robot a eleccion. Ejemplo: 'white'.
   */
  function setColor($color) {
    $this->color = $color;
  }

  /**
   * El precio del robot.
   * 
   * @param int $price
   *   El precio del robot en USD. Ejemplo: '300 USD'.
   */
  function setPrice($price) {
    $this->price = $price;
  }

  /**
   * La edicion del Robot.
   * 
   * @param int $edition
   *   La edicion del robot es a eleccion. Ejemplo 'Platino' ,'Premium'.
   */
  function setEdition($edition) {
    $this->edition=$edition;
  }

  /**
   * Obtener la altura del robot.
   * 
   * @return int
   *   Obteniendo la altura del robot en CM. Ejemplo: '34'
   */
  function getSize() {
    return $this->size;
  }

  /**
   * Obtencion del color del robot.
   * 
   * @return int
   *   Obteniendo el color del robot . Ejemplo: 'Rojo'.
   */
  function getColor() {
    return $this->color;
  }

  /**
   * Obteniendo el precio del susodicho robot.
   * 
   * @return string
   *   Obteniendo el precio del robot en USD. Ejemplo '300 USD'.
   */
  function getPrice() {
    return $this->price;
  }

  /**
   * Obteniendo la edicion del robot
   * 
   * @return string
   *   Obteniendo la edicion del robot. Ejemplo 'Platino', 'Premiun'.
   */
  function getEdition() {
    return $this->edition;
}
}
/**
 * Estableciendo el nombre del robot y dando valores predeterminados a sus atributos
 * 
 * @var mixed
 * Permite inicializar y sobreescribir los valores predeterminados de tamaño, color, precio y edición.
 * 
 */
$shaggy = new Robot('24cm' , 'green' , '200USD', 'premium');
$shaggy->setSize('57 cm');
$shaggy->setColor('yellow');
$shaggy->setPrice('450 USD');
$shaggy->setEdition('premiun');

/**
 * Imprime los valores de nuestro robot.
 */
print_r($shaggy);
print $shaggy->getSize();
print $shaggy->getColor();
print $shaggy->getPrice();
print $shaggy->getEdition();
