<?php

require_once ('lib/Sql.php');

class UniversalPdo extends Sql
{

    protected $dbh;
    public function __construct($db)
    {
        if($db == MY_SQL_DB)
        {
            $this->dbh =  new PDO( $db.':host='.HOST.'; dbname='.DB , USER , PASSWORD);
        }
        elseif($db == PG_SQL_DB)
        {
            $this->dbh =  new PDO( $db.':host='.HOST_PG.'; dbname='.DB_PG , USER_PG , PASSWORD_PG);
        }else
        {
            throw new Exception('Not connect');
        }
        $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function  execute()
    {
        $query = parent::execute();
        if(empty($this->select))
        {
            $prepare =  $this->dbh->prepare($query);
            $prepare->execute();
        }
        else
        {
            $prepare =  $this->dbh->query($query);
            while($fetches =  $prepare->fetch(PDO::FETCH_ASSOC))
            {
                $result[]=$fetches;
            }
            return $result;
        }
    }
}