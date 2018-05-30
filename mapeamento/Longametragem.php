<?php

/**
 * @Entity
 * @Table(name="longametragem")
 */
class Longametragem{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id")
     */
    protected $id;

    /**
     * @Column(type="string", name="categoria")
     */
    protected $categoria;

    /**
     * @ManyToOne(targetEntity="Filme")
     * @JoinColumn(name="idFilme", referencedColumnName="id")
     */
    protected $idFilme;


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    

    /**
     * Get the value of categoria
     */ 
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     *
     * @return  self
     */ 
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get the value of idFilme
     */ 
    public function getIdFilme()
    {
        return $this->idFilme;
    }

    /**
     * Set the value of idFilme
     *
     * @return  self
     */ 
    public function setIdFilme($idFilme)
    {
        $this->idFilme = $idFilme;

        return $this;
    }
}

?>