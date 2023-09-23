<div class="navbar">
  <div class="container">
       <a href="accueil.php?page=accueil" class="brand">
         <img src="../images/IMG_4440.PNG" alt="logo">
         <span>Letecode</span>
      </a>
    <ul  id="link" class="menu cache">
        <li class="menu-item">
             <a href="accueil.php?page=accueil" <?php if(isset($_GET['page']) && $_GET['page'] == 'accueil' ){echo 'id="active"';} ?>> 
             Accueil
             </a>
        </li>
        <li class="menu-item">
             <a href="communaute.php?page=communaute" <?php if(isset($_GET['page']) && $_GET['page'] == 'communaute' ){echo 'id="active"';} ?>>
             Communauté
             </a>
        </li>
        <li class="menu-item">
            <a href="cours.php?page=cours" <?php if(isset($_GET['page']) && $_GET['page'] == 'cours' ){echo 'id="active"';} ?>>
            Cours
            </a>
        </li>
        <li class="menu-item">
            <a href="contact.php?page=contact"  <?php if(isset($_GET['page']) && $_GET['page'] == 'contact' ){echo 'id="active"';} ?>>
            Contact
            </a>
        </li>
      </ul>

      <span class="toggle-btn">
        <i class="fa fa-bars"></i>
     </span>
   </div> 
</div>
<div class="menuMobile">
<li class="menu-item">
             <a href="accueil.php?page=accueil" <?php if(isset($_GET['page']) && $_GET['page'] == 'accueil' ){echo 'id="active"';} ?>> 
             Accueil
             </a>
        </li>
        <li class="menu-item">
             <a href="communaute.php?page=communaute" <?php if(isset($_GET['page']) && $_GET['page'] == 'communaute' ){echo 'id="active"';} ?>>
             Communauté
             </a>
        </li>
        <li class="menu-item">
            <a href="cours.php?page=cours" <?php if(isset($_GET['page']) && $_GET['page'] == 'cours' ){echo 'id="active"';} ?>>
            Cours
            </a>
        </li>
        <li class="menu-item">
            <a href="contact.php?page=contact"  <?php if(isset($_GET['page']) && $_GET['page'] == 'contact' ){echo 'id="active"';} ?>>
            Contact
            </a>
        </li>
</div>