<?php

/**
 * @Entity
 * @Table(name="documentario")
 */
class Documentario{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id")
     */
    protected $id;

    /**
     * @Column(type="string", name="assunto")
     */
    protected $assunto;

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
     * Get the value of assunto
     */ 
    public function getAssunto()
    {
        return $this->assunto;
    }

    /**
     * Set the value of assunto
     *
     * @return  self
     */ 
    public function setAssunto($assunto)
    {
        $this->assunto = $assunto;

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