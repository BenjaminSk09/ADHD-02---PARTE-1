<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina Niveles academicos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Niveles academicos</h1>
        <table class="table table-border table-striped">
                <thead>
                    <tr>
                        <th>Còdigo Nivel Academico</th>
                        <th>Nombre</th>
                        <th>Descripciòn</th>
                     </tr>
                </thead>
            <tbody>
                <?php
                  foreach($datos as $niveles):
                ?>
                     <tr>
                        <td><?php echo $niveles[ 'cod_nivel_acad'];?></td>
                        <td><?php echo $niveles[ 'nombre'];?></td>
                        <td><?php echo $niveles[ 'descripcion'];?></td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>