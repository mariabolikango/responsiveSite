<div class="navbar">
  <div class="container">
    <div class="left">
       <a href="accueil.php?page=accueil" class="brand">
         <img src="../images/IMG_4440.PNG" alt="logo">
         <span>Letecode</span>
      </a>

    </div>
      

    <ul class="menu">
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
      
      <div class="toggle-btn">
        <i class="bi bi-list" id="menu-btn" ></i>
      </div>
   </div>
    
</div>