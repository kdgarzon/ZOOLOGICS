<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOMPDF Demo</title>
    <meta name="description" content="Demo que genera un archivo PDF con contenido HTML utilizando la libreria DOMPDF." />
    <meta name="author" content="Jose Aguilar">
    <link rel="shortcut icon" href="https://www.jose-aguilar.com/blog/wp-content/themes/jaconsulting/favicon.ico" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="https://www.jose-aguilar.com/">
            <img src="https://www.jose-aguilar.com/blog/wp-content/themes/jaconsulting/images/jose-aguilar.png" width="30" height="30" alt="Jose Aguilar">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="https://www.jose-aguilar.com/scripts/base-bootstrap/">Demo <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="https://www.jose-aguilar.com/scripts/php/dompdf/dompdf-demo.zip">Descargar</a>
                <a class="nav-item nav-link" href="https://www.jose-aguilar.com/blog/generar-archivo-pdf-con-contenido-html/">Tutorial</a>
                <a class="nav-item nav-link" href="https://www.jose-aguilar.com/">&copy; Jose Aguilar</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1>DOMPDF Demo</h1>
        <h2 class="lead">Generar un archivo PDF con contenido HTML</h2>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="https://www.jose-aguilar.com/blog/">Blog</a></li>
                <li class="breadcrumb-item"><a href="https://www.jose-aguilar.com/blog/generar-archivo-pdf-con-contenido-html/">Generar un archivo PDF con contenido HTML</a></li>
                <li class="breadcrumb-item active">DOMPDF Demo</li>
            </ol>
        </nav>

        <div class="row">
            <div id="content" class="col-lg-12">
                <form action="./rep.php" method='get'>
                <table  class="table table-success table-striped" >
                    <thead>
                    <tr bgcolor="#CCCCCC">
                        <td>Nombre</td>
                        <td>Apellido</td>
                        <td>salario</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
    for($i=0;$i<3;$i++) {
    echo "<tr bgcolor='#FF9933'>
        <td><input class='form-control' type='text' name='nomb[]'></td>
        <td><input class='form-control' type='text' name='apel[]'></td>
        <td><input class='form-control' type='number' name='sal[]'></td>
        
    </tr>";
    }
    ?>
    <tr bgcolor="#FF9933" align="center">
        <td colspan="3"><input  class="btn btn-primary" type='submit' value='Save'>
        <input class="btn btn-info" type='reset' value='Reset'></td>
    </tr>
                    </tbody>
</table>
</form>

<br/>
<!--<a class="btn btn-primary" href="pdf.php"><i class="fa fa-download"></i> Descargar archivo PDF</a>
-->       </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Bloque de anuncios adaptable -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-6676636635558550"
                 data-ad-slot="8523024962"
                 data-ad-format="auto"
                 data-full-width-responsive="true"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </div>
    
    <div class="card">
        <h5 class="card-header">Comparte en las redes sociales</h5>
        <div class="card-body">
            <h5 class="card-title">¿Te ha servido este ejemplo? Comparte con tus amigos</h5>
            <!-- Go to www.addthis.com/dashboard to customize your tools -->
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4ecc1a47193e29e4" async="async"></script>
            <!-- Go to www.addthis.com/dashboard to customize your tools -->
            <div class="addthis_sharing_toolbox"></div>
        </div>
    </div>

    <div class="footer-content row">
        <div class="col-lg-12">
            <div class="pull-right">
                <a href="https://www.jose-aguilar.com/blog/generar-archivo-pdf-con-contenido-html/" class="btn btn-secondary">
                    <i class="fa fa-reply"></i> volver al tutorial
                </a>
                <a href="https://www.jose-aguilar.com/scripts/php/dompdf/dompdf-demo.zip" class="btn btn-primary">
                    <i class="fa fa-download"></i> Descargar
                </a>
            </div>
        </div>
    </div>
    
</div>
<footer class="footer bg-dark">
    <div class="container">
        <span class="text-muted"><a href="https://www.jose-aguilar.com/">&copy; Jose Aguilar</a></span>
    </div>
</footer>
</body>
</html>