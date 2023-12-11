<?php
class Especialitat {

    private string $nom_especialitat; 
    private array $sprints;

    public function __construct(string $nom_especialitat, array $sprints) {
        $this->nom_especialitat = $nom_especialitat;
        $this->sprints = $sprints;
    }

}

?>