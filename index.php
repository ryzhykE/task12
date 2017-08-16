<?php

require_once ('config.php');
require_once ('lib/UniversalPdo.php');
require_once ('lib/Sql.php');

try
{

		$result = new UniversalPdo(MY_SQL_DB);
		$result-> select("`key`,`data`")->from('MY_TEST')->where("`key`='user12'");
		$resultSql = $result->execute();


	$resultInsert = new UniversalPdo(MY_SQL_DB);
	$res = $resultInsert->inserter('MY_TEST',"`key`,`data`")->values("'user12','data12'");
	$resultInsert->execute();

	//$resultDelete = new UniversalPdo(MY_SQL_DB);
	//$resultDelete->delites()->from('MY_TEST')->where("`key`='user12'");
	//$resultDelete->execute();

	//$resultUpdate = new UniversalPdo(MY_SQL_DB);
	//$resultUpdate->update(MYSQL_TABLE)->setkey("`data` = 'datadata12'")->where("`key` = 'user12'");
	//$resultUpdate->execute();



	$resultPg = new UniversalPdo(PG_SQL_DB);
	$resultPg->select("key, data")->from(PG_TABLE);
	$res = $resultPg->execute();


	//$pgInsert = new UniversalPdo(PG_SQL_DB);
	//$pgInsert->inserter(PG_TABLE,"key,data")->values("'user12','data12'");
	//$resI = $pgInsert->execute();

	//$pgUpdate = new UniversalPdo(PG_SQL_DB);
	//$pgUpdate->update(PG_TABLE)->setkey("data = 'test' ")->where(" key = 'user1'");
	//$resU = $pgUpdate->execute();

	//$pgDel = new UniversalPdo(PG_SQL_DB);
	//$pgDel->delites()->from(PG_TABLE)->where("key='user12'");
	//$resD = $pgDel->execute();

}
catch (Exception $e)
{
	$error = $e->getMessage();
}

	require_once ('templates/index.php');







