<?php 
        class Ordenador {
            
            private $id; 
            private $nombre;
            private $procesador;
            private $ram;
            private $stock;
            private $precio;
        
            
            public function __construct($nombre, $procesador, $ram, $stock, $precio,) {
                
                $this->nombre = $nombre;
                $this->procesador = $procesador;
                $this->ram = $ram;
                $this->stock = $stock;
                $this->precio = $precio;
            }
          
            public function getId() {
                return $this->id;
            }
        
            public function getNombre() {
                return $this->nombre;
            }
        
            public function getProcesador() {
                return $this->procesador;
            }
        
            public function getRam() {
                return $this->ram;
            }
        
            public function getStock() {
                return $this->stock;
            }
        
            public function getPrecio() {
                return $this->precio;
            }
        
            public function setNombre($nombre) {
                $this->nombre = $nombre;
            }
        
            public function setProcesador($procesador) {
                $this->procesador = $procesador;
            }
        
            public function setRam($ram) {
                $this->ram = $ram;
            }
        
            public function setStock($stock) {
                $this->stock = $stock;
            }
        
            public function setPrecio($precio) {
                $this->precio = $precio;
            }
        
            public function __toString() {
                return "ID: " . $this->id . "<br>" .
                       "Nombre: " . $this->nombre . "<br>" .
                       "Procesador: " . $this->procesador . "<br>" .
                       "RAM: " . $this->ram . " GB<br>" .
                       "Stock: " . $this->stock . "<br>" .
                       "Precio: $" . $this->precio . "<br>";
            }
        }
?>