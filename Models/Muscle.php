<?php
require_once(ROOT_PATH . '/MOdels/Db.php');

class Muscle extends Db
{
    public function __construct($dbh = null)
    {
        parent::__construct($dbh);
    }
}
