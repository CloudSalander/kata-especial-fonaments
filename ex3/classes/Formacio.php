<?php 
class Formacio {
    protected string $nom;
    protected string $descripcion;
    protected array $especialitats;

    public function __construct(string $nom, string $descripcion) {
        $this->nom = $nom;
        $this->descripcion = $descripcion;
        $this->especialitats = [];
    }

    public function addEspecialitat(Especialitat $especialitat): void {
        $this->especialitats[] = $especialitat;
    }
}
?>