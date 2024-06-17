<?php


namespace Okay\Core\QueryFactory;


use Aura\SqlQuery\QueryInterface;
use Okay\Core\Database;
use Okay\Core\ServiceLocator;

class SqlQuery implements QueryInterface
{
    private $bindValues = [];

    private $statement = '';

    private $executed = false;

    public function result($column = null)
    {
        $SL = ServiceLocator::getInstance();
        $db = $SL->getService(Database::class);

        if ($this->executed) {
            return $db->result($column);
        }

        $db->query($this);
        $this->executed = true;
        return $db->result($column);
    }

    public function results($column = null, $mapped = null)
    {
        $SL = ServiceLocator::getInstance();
        $db = $SL->getService(Database::class);

        if ($this->executed) {
            return $db->results($column, $mapped);
        }

        $db->query($this);
        $this->executed = true;
        return $db->results($column, $mapped);
    }

    public function execute()
    {
        $SL = ServiceLocator::getInstance();
        $db = $SL->getService(Database::class);
        $db->query($this);
        $this->executed = true;
        return $this;
    }

    public function __toString()
    {
        return $this->getStatement();
    }

    public function getQuoteNamePrefix()
    {
        // TODO реализовать
    }

    public function getQuoteNameSuffix()
    {
        // TODO реализовать
    }

	/**
	 * @param $statement
	 * @return $this
	 */
	public function setStatement($statement): SqlQuery
	{
        $this->statement = $statement;
        return $this;
    }

    public function bindValues(array $bindValues): SqlQuery
	{
        foreach($bindValues as $name => $value) {
            $this->bindValues[$name] = $value;
        }
        return $this;
    }

    public function bindValue($name, $value): SqlQuery
	{
        $this->bindValues[$name] = $value;
        return $this;
    }

    public function getBindValues()
    {
        return $this->bindValues;
    }

    public function getStatement()
    {
        return $this->statement;
    }
}