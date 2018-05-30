<?php

/**
 * @Entity
 * @Table(name="produtcao")
 */
class Producao{
    
    /**
     * @ManyToOne(targetEntity="Produtor")
     * @JoinColumn(name="idProdutor", referencedColumnName="id")
     */
    protected $idProdutos;

    /**
     * @ManyToOne(targetEntity="Filme")
     * @JoinColumn(name="idFilme", referencedColumnName="id")
     */
    protected $idFilme;
    

}

?>