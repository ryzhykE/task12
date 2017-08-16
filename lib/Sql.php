<?php

class Sql
{
    protected  $select;
    protected  $from;
    protected  $where;
    protected  $insert;
    protected  $delete;
    protected  $update;
    protected  $values;
    protected  $setkey;

    public function select($select)
    {
        $this->select = "SELECT " .  $select ;
        return $this;
    }

    public function inserter($table , $data)
    {
        $this->insert = " INSERT INTO " .  $table . " (" . $data . " )";
        return $this;
    }

    public function delites( )
    {
        $this->delete = " DELETE ";
        return $this;
    }

    public function update($table)
    {
        $this->update = "UPDATE " . $table;
        return $this;
    }

    public function setkey($set)
    {
        $this->setkey = " SET " . " " . $set . " ";
        return $this;
    }

    public function from($from)
    {
        $this->from = " FROM " .$from;
        return $this;
    }

    public function where($value)
    {
        $this->where = " WHERE "  .  $value ;
        return $this;
    }

    public function values ($values)
    {
        $this->values = " VALUES " . " (" . $values . " )";
        return $this;
    }

    public function execute()
    {
        switch ($this)
        {
            case !empty($this->select):
                return $this->select .  $this->from .  $this->where;

            case !empty($this->insert):
                return $this->insert. $this->values;

            case !empty($this->update):
                return $this->update . $this->setkey . $this->where ;

            case !empty($this->delete):
                return $this->delete.$this->from.$this->where;
        }

    }

}
