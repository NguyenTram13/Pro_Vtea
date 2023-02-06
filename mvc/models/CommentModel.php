<?php
class CommentModel extends DB
{

    function create($idpro, $iduser, $comment, $rate, $date)
    {
        $sql = "INSERT INTO comment (product_id, user_id, content, rating ,created_at) VALUES ('$idpro', '$iduser', '$comment', '$rate', '$date')";
        $idCmt = $this->pdo_execute_lastInsertID($sql);
        return $idCmt;
    }

    function getComment($idpro)
    {
        $sql = "SELECT * FROM comment WHERE product_id = '$idpro'";

        $sql .= " order by created_at desc";
        return

            $this->pdo_query($sql);
    }

    function getOneBill($id)
    {
        $sql = "SELECT * FROM bill WHERE id='$id'";

        $sql .= " order by id desc";
        return

            $this->pdo_query_one($sql);
    }
    function getBillDetail($id)
    {
        $sql = "SELECT * FROM detail_bill WHERE id_bill='$id'";

        $sql .= " order by id desc";
        return

            $this->pdo_query($sql);
    }
    function editStatus($id, $status, $date)
    {
        $sql = "UPDATE bill SET status='$status', updated_at='$date' Where id='$id' ";

        return $this->pdo_execute($sql);
    }
}
