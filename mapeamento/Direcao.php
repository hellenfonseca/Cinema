<?php

/**
 * @Entity
 * @Table(name="direcao")
 */
class Direcao{
    /**
     * @ManyToOne(targetEntity="Diretor")
     * @JoinColumn(name="idDiretor", referencedColumnName="id")
     */
    protected $idDiretor;

    /**
     * @ManyToOne(targetEntity="Filme")
     * @JoinColumn(name="idFilme", referencedColumnName="id")
     */
    protected $idFilme;
    
    /**
     * Get the value of idDiretor
     */ 
    public function getidDiretor()
    {
        return $this->idDiretor;
    }

    /**
     * Set the value of idDiretor
     *
     * @return  self
     */ 
    public function setidDiretor($idDiretor)
    {
        $this->idDiretor = $idDiretor;

        return $this;
    }

    /**
     * Get the value of idFilme
     */ 
    public function getidFilme()
    {
        return $this->idFilme;
    }

    /**
     * Set the value of idFilme
     *
     * @return  self
     */ 
    public function setidFilme($idFilme)
    {
        $this->idFilme = $idFilme;

        return $this;
    }
}

?>