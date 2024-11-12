<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="container-fluid">
                    <div class="card o-hidden border-0  my-3">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 d-none d-lg-block">
                                <div class="p-2 ">
                                    <br>
                                        <div class="form-group row">
                                            <div class="col-sm-3 m-0 font-weight-bold">
                                                <h5>DNI:</h5>
                                            </div>
                                            <div class="col-sm-6">
                                                <input id="dni" name="dni" placeholder="Numero de DNI" type="number" class="form-control form-control-user">
                                            </div>
                                            <div class="input-group-append">
                                                <button id="boton"class="btn btn-secondary" type="submit">
                                                    Buscar
                                                </button>
                                            </div>
                                        </div>
                                        <form action="" method="POST">
                                        <div class="form-group row">
                                            <div class="col-sm-3 m-0 font-weight-bold">
                                                <h5>DNI:</h5>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="res">
                                                    <input id="doc" type="text" class="form-control form-control-user"name="dni_cliente">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-3 m-0 font-weight-bold">
                                                <h5>Nombres:</h5>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="res">
                                                    <input type="text" id="nombre" class="form-control form-control-user"name="nom_cliente"> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-3 m-0 font-weight-bold">
                                                <h5>Apellidos:</h5>
                                            </div>
                                            <div class="col-sm-6">                
                                                <div class="res">
                                                    <input type="text" id="apellido" class="form-control form-control-user"name="ape_cliente"> 
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                </div>
                            </div>
                            <div class="col-lg-6">
                            <br>
                                <div class="p-2 ">
                                </div>
                            </div>
                        </div>
                    
                </div>

            </div>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <script src="js/Main.js" type="text/javascript"></script>
</body>
</html>