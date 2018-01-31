
<?php include_once "partials/header.php"; ?>

<div class="container">
  <div class="row">
    <div class="col-sm-3 my-columns social-links">
      <a href="https://github.com/LucianIacobBc" target="_blank"><h3>Github</h3></a>
      <a href="https://plus.google.com/u/0/105397359621881076059"><h3>Gmail</h3></a>
      <a href="https://www.linkedin.com/in/lucian-iacob-9b0a1b21"><h3>Linkedin</h3></a>
    </div>

    <div class="col-sm-5  my-columns">
      <img src="../assets/images/my-picture.jpg" class="rounded-circle" alt="my-picture">
    </div>

    <div class="col-sm-12 col-md-4 my-columns my-description">
      <div class="my-columns" >
        <h3><span class="my-description-class-keyword">class</span> <span class="my-description-class-name"><?=$className ?> {</span></h3>
          <ul class="my-description-members">
            <?php foreach ($PersonData[0] as $key => $value): ?>
              <li>
                <?="<span class='my-description-members-visibility'>".$alls[$key][0]->type."</span><span class='my-description-members-name'> $".$key ?>=</span>
                    <span class="my-description-members-value">"<?=$value ?>";</span>
              </li>
            <?php endforeach; ?>
          </ul>
          <h3> <span class="my-description-class-name">};</span></h3>

            <form method="POST", action="/">
              <input type="hidden" name="className" value="Person">
              <button class="call-my-description" type="submit"  value="Submit">  <span class="badge badge-secondary" id="person">require_once ="Person.php"</span></button><br>
            </form>
            <form method="POST", action="/">
              <input type="hidden" name="className" value="Skill">
              <button class="call-my-description" type="submit"  value="Submit">  <span class="badge badge-secondary" id="skill">require_once ="Skill.php"</span></span></button><br>
            </form>
            <?php
            $className = isset($_POST['className']) ? $_POST['className']:"person";
            require_once  $_SERVER['DOCUMENT_ROOT']."/assets/scripts/addClassScript.php";
            ?>
          </div>
        </div>
      </div>
      <div class="geek-quote">
        <h4 style="">“The only way to learn a new programming language is by writing programs in it.”</h4>
        <h6>--Dennis Ritchie</h6>
      </div>
    </div>
    <?php require "partials/footer.php" ?>
