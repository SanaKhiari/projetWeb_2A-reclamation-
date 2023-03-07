<?php
class Reclamation
{
    public int $id_rec ;
    public int $id_user ;
    public string $type ;
    public string $text_rec ;
    public string $date_rec ;

    public function __construct( $id_user, $type, $text_rec, $date_rec)
    {
      //  $this->id_rec = $id_rec;
        $this->id_user = $id_user;
        $this->type = $type;
        $this->text_rec = $text_rec;
        $this->date_rec = $date_rec;
    }

    /**
     * Get the value of id_rec
     */
   // public function getId_rec()
    //{
    //    return $this->id_rec;
   // }

    /**
     * Get the value of id_user
     */
    public function getId_user()
    {
        return $this->id_user;
    }


    /**
     * Get the value of type reclamation
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type reclamation
     *
     * 
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of text reclamation
     */
    public function getText_rec()
    {
        return $this->text_rec;
    }

    /**
     * Set the value of text reclamation
     *
     * 
     */
    public function setText_rec($text_rec)
    {
        $this->text_rec = $text_rec;

        return $this;
    }

    /**
     * Get the value of date reclamation
     */
    public function getDate_rec()
    {
        return $this->date_rec;
    }

    /**
     * Set the value of dob
     *
     * 
     */
    public function setDate_rec($date_rec)
    {
        $this->date_rec = $date_rec;

        return $this;
    }
}
?>