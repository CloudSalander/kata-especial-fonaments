<?php 

class Sprint {
    private string $nom;
    private int $dies_lectius;

    public function __construct (string $nom, int $dies_lectius) {
        $this->nom = $nom;
        $this->dies_lectius = $dies_lectius;
    }
}
?>