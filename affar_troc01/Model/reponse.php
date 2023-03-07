<?php
class Reponse
{
    public int $id_rec ;
    public int $id_rep ;
    public string $reponse ;
   
    public function __construct( $id_rec,$reponse)
    {
        $this->id_rec = $id_rec;
       // $this->id_user = $id_rep;
        $this->reponse = $reponse;
    }

    /**
     * Get the value of id_rec
     */
    public function getId_rec()
    {
      return $this->id_rec;
    }

        /**
     * Set the value of id_rec
     *
     * 
     */
    public function setId_rec($id_rec)
    {
       $this->id_rec = $id_rec;

        return $this;
    }

    /**
     * Get the value of reponse
     */
    public function getReponse()
    {
        return $this->reponse;
    }



    /**
     * Set the value of reponse
     *
     * 
     */
    public function setReponse($reponse)
    {
        $this->reponse = $reponse;

        return $this;
    }
}
?>