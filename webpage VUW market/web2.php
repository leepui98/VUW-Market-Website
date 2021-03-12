
<html>
    <head>
    <title>Second Webpage</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel= "stylesheet" type="text/css" href= "web2style.css" />
    </head>
    <body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
       
        
        <header class="page-header header container-fluid">
            </header>

            <div class="container-fluid px-0 ">
                <div class="top">
                    <nav class="navbar navbar-expand-md">
                    <a class="navbar-brand" href="webCV.php">Home</a>
                      </nav>

                      <div class="title">
                          <h1> Stock </h>
                          <button type="button" id=btnbt class="btn btn-primary btn-sm">Check Stock</button>
                          <div class="table-responsive">
  <table id="stock-table" class="table">
  <tr> <th>Stock name </th> <th> Stock number </th> <tr>
  </table>
</div>
  </div>
</div>

<div class="center">
  <div class="row pt-4">
            <div class="col-lg-4 col-md-4 co-sm-12">
            <img id="image-1"  alt="Vege" class="img-fluid" onclick="picFunction(this)">
</div>
<div class="col-lg-4 col-md-4 col-sm-12">
            <img id="image-2"  alt="Fruit" class="img-fluid" onclick="picFunction(this)">
</div>
<div class="col-lg-4 col-md-4 col-sm-12">
            <img id="image-3"  alt="Bakery" class="img-fluid" onclick="picFunction(this)">
</div>
            </div>
            <div class="imgcontainer">
  <!-- Close the image -->
  <span id="close-btn" class="close">X</span>

  <!-- Expanded image -->
  <img id="imgExpand" style="width:100%">

</div>

</div>

    

<script src="web2.js"></script>
<script src="imgdata.js"></script>
</body>
</html>