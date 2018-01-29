<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Lucian Iacob personal Website</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Acme|Anton|Bree+Serif|Lobster|Rammetto+One|Supermercado+One" rel="stylesheet">
  <style>
  body {
    //background: url("assets/images/main2.jpeg");
    background-color: #e5e5e5;
    background-repeat: no-repeat;
    background-size: cover;
  }
  .my-columns {
    margin-top: 15%;
  }
  </style>
</head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-3 my-columns" style="font-family: 'Anton', sans-serif;">
          <a href="https://github.com/LucianIacobBc"><h3>Github</h3></a>
          <a href="https://plus.google.com/u/0/105397359621881076059"><h3>Gmail</h3></a>
          <a href="https://www.linkedin.com/in/lucian-iacob-9b0a1b21"><h3>Linkedin</h3></a>
        </div>
        <div class="col-sm-5  my-columns">
          <img src="../assets/images/my-picture.jpg" class="rounded-circle" alt="my-picture">
        </div>
        <div class="col-sm-4 my-columns">
          <div class="my-columns" >
            <h2><span style="color: #4B0082; font-family: 'Roboto', sans-serif;">class</span> <span style="color:#CCCC00"><?=$classType ?> {</span></h2>
              <ul style="list-style-type:none">

          <?php foreach ($PersonData[0] as $key => $value): ?>


               <li><span style="color:#8B0000; font-family: 'Roboto', sans-serif;"><?="<span style='color: #4B0082;'>".$alls[$key][0]->type."</span> $".$key ?>=</span> <span style="color:#228B22">"<?=$value ?>";</span></li>

         <?php endforeach; ?>
        </ul>
        <h4> }</h4>
        <form method="POST", action="/">
          <input type="hidden" name="className" value="Person">
          <button style="border:none" type="submit"  value="Submit">  <span class="badge badge-primary">$myPerson = new Person</span></button><br>

        </form>
        <form method="POST", action="/">
          <input type="hidden" name="className" value="Skill">
          <button style="border:none" type="submit"  value="Submit">  <span class="badge badge-secondary">//$mySkills = new Skills</span></span></button><br>

      </form>
        </div>
      </div>
    </div>
    <h4 style="margin-top:90px; font-family: 'Indie Flower', cursive;">“The only way to learn a new programming language is by writing programs in it.”</h4>
    <h6>--Dennis Ritchie</h6>
    <p style="text-align:center;margin-top:60px">Copyright Lucian Iacob 2018</p>
  </body>
</html>
