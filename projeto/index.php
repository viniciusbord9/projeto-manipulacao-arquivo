
<?php

    // utilizar este arquivo ao invés de index.html
    // pois com o PHP vai ser possível tornar a lista de arquivos
    // uma lista dinâmica, ou seja, com base no que existe na pasta
    // e é preciso formatar o formulário para que esteja
    // enviando seus dados de forma correta para o script cadastrar_arquivo.php
    // ** lembre-se do método, do action e do enctype

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MAPA</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">MAPA - EAD UniCesumar</a>
            </div>
            <!-- /.navbar-header -->
        </nav>

        <div id="page-wrapper" style="margin-left:0px">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h1 class="page-header">Leitura de Pasta e Envio de Arquivos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Digite o nome do arquivo e anexe o documento...
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Nome do Arquivo</label>
                                            <input class="form-control">
                                            <p class="help-block">Digite o nome que o arquivo será salvo...</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Anexar Arquivo</label>
                                            <input type="file">
                                        </div>
                                        <button type="submit" class="btn btn-active">Enviar Arquivo</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-12 (nested) -->    
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                     <div class="panel panel-default">
                        <div class="panel-heading">
                            Relatório de Arquivos
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Arquivo</th>
                                            <th>Excluir?</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- ISSO AQUI PRECISA FICAR DINÂMICO -->
                                        <tr>
                                            <td>1</td>
                                            <td>Foto Mar.jpeg</td>
                                            <td><a href="#">Excluir</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Foto Praia.jpeg</td>
                                            <td><a href="#">Excluir</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Foto Montanha.jpg</td>
                                            <td><a href="#">Excluir</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
            </div>
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>