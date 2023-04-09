<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" 
            crossorigin="anonymous">
    </head>

    <body>
        <?php require 'php\connect_db.php'; ?>
        <div class="container-fluid pt-2 bg-dark text-white">
            <h1>This is a heading</h1>
            <p>This is a paragraph</p>
            <div class="table pt-2">
                <table>
                    <th>
                        <div class="card">
                            <p>Hello World!</p>
                        </div>
                    </th>
                </table>
            </div>
            
        </div>
    </body>
</html>