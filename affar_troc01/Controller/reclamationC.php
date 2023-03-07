<?php 
include '../config.php';
include '../Model/reclamation.php';
class ReclamationC{
    public function addReclamation($reclamation)
    {
        $sql = "INSERT INTO reclamation  (id_user,type,text_rec,date_rec)
        VALUES ( :id_user ,:type  , :text_rec , :date_rec)";
        $db = config::getConnexion();
        try {
            //print_r($reclamation->getDate_rec()->format('Y-m-d'));
           // $query = $db->prepare($sql);
            //$query->execute([
              //  'id_user'=>$reclamation->getId_user(),
                //'typ' => $reclamation->getType(),
              //  'text_rec' => $reclamation->getText_rec(),
              //  'date_rec' => $reclamation->getDate_rec()->format('mm/dd/yyyy')
            //]);
            $req=$db->prepare($sql);
            $id_user=$reclamation->getId_user();
            $type=$reclamation->getType();
            $text_rec=$reclamation->getText_rec();
            $date_rec=$reclamation->getDate_rec();
            
            $req->bindValue(':id_user',$id_user);
            $req->bindValue(':type',$type);
            $req->bindValue(':text_rec',$text_rec);
            $req->bindValue(':date_rec',$date_rec);

            $req->execute();
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function AfficherReclamation()
    {
        $sql = "SELECT * FROM reclamation ";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    
    public function deleteReclam($id_rec)
    {
        $sql = "DELETE FROM reclamation WHERE id_rec = :id_rec";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id_rec', $id_rec);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());                           
        }
    }

    
    function updateReclam($reclamation, $id_rec)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE reclamation SET  
                    id_user = :id_user,
                    type = :type,
                    text_rec = :text_rec,  
                    date_rec = :date_rec
                WHERE id_rec= :id_rec'
            );
            $query->execute([
                'id_rec' => $id_rec,
                'id_user' => $reclamation-> getId_user(),
                'type' => $reclamation->getType(),
                'text_rec' => $reclamation->getText_rec(),
                'date_rec' => $reclamation->getDate_rec()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    function showReclamation($id_rec)
    {
        $sql = "SELECT * from reclamation where id_rec = $id_rec";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $reclamation = $query->fetch();
            return $reclamation;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }


    //+
    function showReclam($type)
{
    $sql = "SELECT * FROM reclamation WHERE type LIKE '%" . $type . "%'";
    $db = config::getConnexion();
    try {
        $query = $db->prepare($sql);
        $query->execute();

        $reclamations = $query->fetchAll();
        return $reclamations;
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
}

}



?>