<?php

/**
 * @Entity
 * @Table(name="atuacao")
 */
class Atuacao{
    
    /**
     * @ManyToOne(targetEntity="Ator")
     * @JoinColumn(name="idAtor", referencedColumnName="id")
     */
    protected $idAtor;

    /**
     * @ManyToOne(targetEntity="Filme")
     * @JoinColumn(name="idFilme", referencedColumnName="id")
     */
    protected $idFilme;
    
    
    /**
     * @Column(type="string", name="papel")
     */
    protected $papel;

}

?>