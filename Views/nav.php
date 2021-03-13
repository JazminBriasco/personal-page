<nav class="navbar navbar-expand-lg navbar-light bg-pink ">
  <div class="col-5 nml-20 ">
    <a class="navbar-brand icon mr-1" onclick="window.location.href='<?php echo FRONT_ROOT?>/View/homeView'"></a>
  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon bg-purple "></span>
  </button>
  <form>
    <div class="collapse navbar-collapse ml-5" id="navbarNavDropdown">
      <ul class="navbar-nav mr-auto "> 
        <li class="nav-item active ">
        <a type ="button" class="nav-link text-light" value="home" onclick="window.location.href='<?php echo FRONT_ROOT?>/View/homeView'">|  <strong>Home</strong></a>
        </li>
        <li class="nav-item ">
          <!-- <a class="nav-link text-dark" href="Views/skills.php">Skills</a> -->
          <a type ="button" class="nav-link text-light" value="skills" onclick="window.location.href='<?php echo FRONT_ROOT?>/View/skillsView'">|  <strong>Skills</strong></a>
        </li>
        <li class="nav-item">
        <a type ="button" class="nav-link text-light" value="contact" onclick="window.location.href='<?php echo FRONT_ROOT?>/View/contactView'">|  <strong>Contact</strong></a>
        </li>
      </ul>
    </div>
  </form>    
</nav>