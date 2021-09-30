<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head> 
<body>
    <div class = "container">
        <h1>Калькулятор v0.01</h1>
<div class = "row">
    <div class = "col-6">
        <form action = "index.php" method="post">
            <div class="mb-3">
                <label class="form-label">Введите число A</label>
                   <input type="text" class="form-control" name="a">
</div>
    <div class="mb-3">
    <label class="form-label">Введите число B</label>
                   <input type="text" class="form-control" name="b">
</div>
<div class="mb-3">
    <select class="form-select" name="action">
        <option value="+">+</option>
        <option value="+">-</option>     
        <option value="+">*</option>     
        <option value="+">/</option>
</select>
</div>
    <button type="submit" class="btn btn-ptimaty" name="btnCalc">Посчитать</button>
</form>
<div>
    <div class="col-6">
        <div class="card">
            <div  class="card-body">
                Результат)<br>
                <?php echo calc();?>
         </div>
     </div>
</div> 
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>