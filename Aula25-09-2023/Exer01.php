<?php
class Ponto {
    private $x;
    private $y;
    private static $contador = 0;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
        self::$contador++; // Atualiza o contador de pontos
    }

    public static function getContador() {
        return self::$contador; // Retorna o número de objetos criados
    }

    public function getX() {
        return $this->x; // Retorna a coordenada X
    }

    public function setX($x) {
        $this->x = $x; // Define a coordenada X
    }

    public function getY() {
        return $this->y; // Retorna a coordenada Y
    }

    public function setY($y) {
        $this->y = $y; // Define a coordenada Y
    }

    public function deslocar($dx, $dy) {
        $this->x += $dx; // Desloca a coordenada X
        $this->y += $dy; // Desloca a coordenada Y
    }

    public function calcularDistancia(Ponto $outroPonto) {
        $dx = $outroPonto->getX() - $this->x;
        $dy = $outroPonto->getY() - $this->y;
        return sqrt(pow($dx, 2) + pow($dy, 2)); // Calcula a distância
    }

    public function calcularDistanciaCoordenadas($x2, $y2) {
        $dx = $x2 - $this->x;
        $dy = $y2 - $this->y;
        return sqrt(pow($dx, 2) + pow($dy, 2)); // Calcula a distância
    }

    public static function calcularDistanciaEntrePontos($x1, $y1, $x2, $y2) {
        $dx = $x2 - $x1;
        $dy = $y2 - $y1;
        return sqrt(pow($dx, 2) + pow($dy, 2)); // Calcula a distância
    }

    public function toString() {
        return "($this->x, $this->y)"; // Retorna uma representação em formato de string do ponto
    }
}

// Exemplo de uso:
$ponto1 = new Ponto(1, 2);
$ponto2 = new Ponto(4, 6);

echo "Número de objetos de Ponto criados: " . Ponto::getContador() . "\n";

$ponto1->deslocar(2, 3);
echo "Ponto1 após deslocamento: " . $ponto1->toString() . "\n";

echo "Coordenada X do ponto2: " . $ponto2->getX() . "\n";
echo "Coordenada Y do ponto2: " . $ponto2->getY() . "\n";

$distancia1 = $ponto1->calcularDistancia($ponto2);
echo "Distância entre ponto1 e ponto2: " . $distancia1 . "\n";

$distancia2 = $ponto1->calcularDistanciaCoordenadas(5, 8);
echo "Distância entre ponto1 e (5, 8): " . $distancia2 . "\n";

$distancia3 = Ponto::calcularDistanciaEntrePontos(1, 2, 5, 8);
echo "Distância entre (1, 2) e (5, 8): " . $distancia3 . "\n";



?>