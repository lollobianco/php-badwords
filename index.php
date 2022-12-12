<?php  

   $paragraph = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde maiores hic consequatur animi laborum dolorum eligendi ipsam minima earum inventore, maxime laboriosam quisquam fugit. Aut, possimus! Nihil mollitia ducimus placeat? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim, recusandae beatae! Veritatis magnam in quod hic aperiam libero dolores, ratione unde, nostrum consectetur recusandae adipisci a alias nobis aliquid vel. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates commodi eius architecto eligendi natus, animi, quisquam veniam laboriosam sed ab dicta minima officis libero vitae at et, expedita exercitationem eaque. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde maiores hic consequatur animi laborum dolorum eligendii ipsam minima earum inventore, maxime laboriosam quisquam fugit. Aut, possimus! Nihil mollitia ducimus placeat? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim, recusandae beatae! Veritatis magnam in quod hic aperiam libero dolores, ratione unde, nostrum consectetur recusandae adipisci a alias nobis aliquid vel. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates commodi eius architecto eligendi natus, animi, quisquam veniam laboriosam sed ab dicta minima officis libero vitae at et, expedita exercitationem eaque.';

   $cens = "****";

   $censureWord = $_GET["censure"];

?>

<!DOCTYPE html>
<html lang="">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <title>php-badwords</title>
</head>
<body class='p-3 bg-dark text-white'>
   

   <p> Il paragrafo è lungo: <?php echo strlen($paragraph) ?> caratteri. </p>
   <p><?php echo str_replace($censureWord, $cens, $paragraph) ?></p>

   <form action="" class="d-flex mt-3">
      <input name="censure" class="form-control bg-dark text-white border-white w-50" type="text" placeholder="Inserisci parola da censurare!" aria-label="default input example">
      <button type="submit" class="btn btn-primary ms-2">Invia</button>
   </form>
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>