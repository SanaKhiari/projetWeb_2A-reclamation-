<?php 
include '../config.php';
include '../Model/reponse.php';
include '../Model/reclamation.php';
class ReponseC{
    public function addReponse($reponse)
    {
        $sql = "INSERT INTO reponses  (id_rec,reponse)
        VALUES ( :id_rec , :reponse )";
        $db = config::getConnexion();
        try {
            
            $req=$db->prepare($sql);
            $id_rec=$reponse->getId_rec();
            $reponse=$reponse->getReponse();
            
            $req->bindValue(':id_rec',$id_rec);
            $req->bindValue(':reponse',$reponse);

            $req->execute();
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function AfficherReponse()
    {
        $sql = "SELECT * FROM reponses ";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    
    public function deleteReponse($id_rep)
    {
        $sql = "DELETE FROM reponses WHERE id_rep = :id_rep";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id_rep', $id_rep);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());                           
        }
    }

    
    function updateReponse($reponse, $id_rep)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE reponses SET  
                    id_rec = :id_rec,
                    reponse = :reponse
                WHERE id_rep= :id_rep'
            );
            $query->execute([
                'id_rep' => $id_rep,
                'reponse' => $reponse->getReponse()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    function showReponse($id_rep)
    {
        $sql = "SELECT * from reponses where id_rep = $id_rep";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $reponse = $query->fetch();
            return $reponse;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    public function AfficherId_Reclamation()
{
    $sql = "SELECT id_rec FROM reclamation ";
    $db = config::getConnexion();
    try {
        $list_id_rec = $db->query($sql);
        return $list_id_rec;
    } catch (Exception $e) {
        die('Error:' . $e->getMessage());
    }
}

}
?>