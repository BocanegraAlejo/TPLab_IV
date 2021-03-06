<?php
namespace DAO\PDO;
use \Exception as Exception;
use Models\Butaca;


class ButacaDAO {
    private $connection;
    private $tableName = "butacas_ocupadas";

    public function Add(Butaca $butaca)
    {
        try
        {
            $query = "INSERT INTO ".$this->tableName." (id_funcion,fila,columna) VALUES (:id_funcion, :fila, :columna);";
            $parameters["id_funcion"] = $butaca->getId_funcion();
            $parameters["fila"] = $butaca->getFila();
            $parameters["columna"] = $butaca->getColumna();

            $this->connection = Connection::GetInstance();

            $this->connection->ExecuteNonQuery($query, $parameters);
        }
        catch(Exception $ex)
        {
            throw $ex;
        }
    }

    public function getAllXid_funcion($id_funcion) {
        try
        {
            $butacasList = array();

            $query = "SELECT f.id_funcion, b.fila, b.columna FROM $this->tableName b
            INNER JOIN funcion f ON b.id_funcion=f.id_funcion
            WHERE b.id_funcion='$id_funcion'";

            $this->connection = Connection::GetInstance();

            $resultSet = $this->connection->Execute($query);
            
            foreach ($resultSet as $row)
            {               
                $butaca = new Butaca();
                $butaca->setId_funcion($row["id_funcion"]);
                $butaca->setFila($row["fila"]);
                $butaca->setColumna($row["columna"]);
              
                
                array_push($butacasList, $butaca);
            }

            return $butacasList;
        }
        catch(Exception $ex)
        {
            throw $ex;
        }
    }
  
}


?>