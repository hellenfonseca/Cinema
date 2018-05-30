<?php

/**
 * @Entity
 * @Table(name="filme")
 */
class Filme{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id")
     */
    protected $id;

    /**
     * @Column(type="string", name="titulo")
     */
    protected $titulo;

    /**
     * @Column(type="float", name="verba")
     */
    protected $verba;

    /**
     * @Column(type="date", name="dtGravacaoInicio")
     */
    protected $dtGravacaoInicio;

    /**
     * @Column(type="date", name="dtGravacaoFim")
     */
    protected $dtGravacaoFim;



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
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of verba
     */ 
    public function getVerba()
    {
        return $this->verba;
    }

    /**
     * Set the value of verba
     *
     * @return  self
     */ 
    public function setVerba($verba)
    {
        $this->verba = $verba;

        return $this;
    }

    /**
     * Get the value of dtGravacaoInicio
     */ 
    public function getDtGravacaoInicio()
    {
        return $this->dtGravacaoInicio;
    }

    /**
     * Set the value of dtGravacaoInicio
     *
     * @return  self
     */ 
    public function setDtGravacaoInicio($dtGravacaoInicio)
    {
        $this->dtGravacaoInicio = $dtGravacaoInicio;

        return $this;
    }

    /**
     * Get the value of dtGravacaoFim
     */ 
    public function getDtGravacaoFim()
    {
        return $this->dtGravacaoFim;
    }

    /**
     * Set the value of dtGravacaoFim
     *
     * @return  self
     */ 
    public function setDtGravacaoFim($dtGravacaoFim)
    {
        $this->dtGravacaoFim = $dtGravacaoFim;

        return $this;
    }
}

?>