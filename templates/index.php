<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Task4</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
<!--
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Task4</a>
        </div>
    </div>
</nav>
 -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2 col-sm-offset-6 col-md-6 col-md-offset-2 main">
            <h1 class="page-header">Table</h1>

            <div class="row placeholders">
                <div class="col-xs-6 col-sm-3 placeholder">
                    <h4>MYSQL</h4>
                    <span class="text-muted">table</span>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-striped">


                    <?if (is_array($resultSql) && !empty($resultSql)) : ?>
                        <thead>
                        <tr>
                            <th>key</th>
                            <th>data</th>
                        </tr>
                        </thead>
                        <tbody>
                        <? foreach($resultSql as $value): ?>
                            <tr>
                                <td><?= $value['data']; ?> </td>
                                <td><?= $value['key']; ?> </td>
                            </tr>
                        <?endforeach; ?>
                        </tbody>
                    <?endif; ?>
                </table>
            </div>

            <div class="row placeholders">
                <div class="col-xs-6 col-sm-3 placeholder">
                    <h4>PostgreSQL</h4>
                    <span class="text-muted">table</span>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <?if($res ): ?>
                        <thead>
                        <tr>
                            <th>key</th>
                            <th>data</th>
                        </tr>
                        </thead>
                        <tbody>
                        <? foreach($res as $value): ?>
                            <tr>
                                <td><?= $value['data']; ?> </td>
                                <td><?= $value['key']; ?> </td>
                            </tr>
                        <?endforeach; ?>
                        </tbody>
                    <?endif; ?>
                </table>
            </div>


        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->

</body>
</html>