<?php
class Car
{
    private $num_telaio;

    public function __construct($num_telaio)
    {
        $this->num_telaio = $num_telaio;
    }

    public function getNumTelaio()
    {
        return $this->num_telaio;
    }
}

class Fiat extends Car
{
    protected $license;
    protected $name;

    public function __construct($num_telaio, $license, $name)
    {
        parent::__construct($num_telaio);
        $this->license = $license;
        $this->name = $name;
    }

    public function getLicense()
    {
        return $this->license;
    }

    public function setLicense($license)
    {
        $this->license = $license;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function printInfo()
    {
        echo "La mia macchina è " . $this->name . ", con targa " . $this->license . " e numero di Telaio " . $this->getNumTelaio();
    }
}


$fiat = new Fiat("1234567890", "ND 123 OJ", "Opel");
$fiat->printInfo();
