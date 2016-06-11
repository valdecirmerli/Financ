<?php
/*
 * ifconfig eth0:1 10.0.0.x/16
 * route add default gw 10.0.66.200
 * 
 * ifconfig eth0 10.0.0.x/16
 * route add default gw 10.68.68.200
 * 
 *  */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">

        <title>Financeiro</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="dashboard.css" rel="stylesheet">


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            .valor-debito{
                color:red;
            }
            .valor-credito{
                color:blue;
            }
        </style>
        <script src="js/jquery-3.0.0.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $.getJSON('model/30dias.php', function(dados) {
                    console.log(dados);
                    $(dados).each(function(ind, elem) {
                        var tr = $(
                                '<tr>'
                                + '<td>1,001</td>'
                                + '<td>Lorem</td>'
                                + '<td>ipsum</td>'
                                + '<td>dolor</td>'
                                + '<td>sit</td>'
                                + '</tr>';
                                );
                        $('#rel-30dias tbody').append(tr);
                    });
                    
                });
            });
        </script>
    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Financeiro</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Painel</a></li>
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                    <form class="navbar-form navbar-right">
                        <input type="text" class="form-control" placeholder="Search...">
                    </form>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                    <ul class="nav nav-sidebar">
                        <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>

                    </ul>
                    <ul class="nav nav-sidebar">

                    </ul>
                    <ul class="nav nav-sidebar">

                    </ul>
                </div>
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    <h1 class="page-header">Dashboard</h1>
                    <!--
                              <div class="row placeholders">
                                <div class="col-xs-6 col-sm-3 placeholder">
                                  <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                                  <h4>Label</h4>
                                  <span class="text-muted">Something else</span>
                                </div>
                                <div class="col-xs-6 col-sm-3 placeholder">
                                  <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                                  <h4>Label</h4>
                                  <span class="text-muted">Something else</span>
                                </div>
                                <div class="col-xs-6 col-sm-3 placeholder">
                                  <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                                  <h4>Label</h4>
                                  <span class="text-muted">Something else</span>
                                </div>
                                <div class="col-xs-6 col-sm-3 placeholder">
                                  <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                                  <h4>Label</h4>
                                  <span class="text-muted">Something else</span>
                                </div>
                              </div>-->

                    <h2 class="sub-header">Section title</h2>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Header</th>
                                    <th>Header</th>
                                    <th>Header</th>
                                    <th>Header</th>
                                </tr>
                            </thead>
                            <tbody id="rel-30dias">
                                <tr>
                                    <td>1,001</td>
                                    <td>Lorem</td>
                                    <td>ipsum</td>
                                    <td>dolor</td>
                                    <td>sit</td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4">Saldo Total</td>
                                    <td>123.89</td>
                                </tr>
                            </tfoot>
                                
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
