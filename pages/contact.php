<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="shortcut icon" href="../images/IMG_4440.PNG" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php 
    include_once("../includes/header.php");
    ?>
<div class="container contact">
       <h2 class="sectionCont">Nous contacter</h2>
       <p >Remplissez ce formulaire pour nous laisser un message</p>
       <form id="formulaire">
            <div class="contact-form">
                <label for="nom">Nom</label>
                <input type="text" id="nom">
                <label for="mail">Adresse e-mail</label>
                <input type="email" id="mail">
                <label for="msg">Message</label>
                <textarea id="msg" rows="5"></textarea>
                <input type="submit" value="Envoyer le message">
            </div>
            <div class="contact-form">
                <label for="pays">Pays</label>
                <select id="pays">
                    <option value="Choisir">RDC</option>
                    <option value="Choisir">GABON</option>
                    <option value="Choisir">TOGO</option>

                </select>
                <label for="obj">Objectif</label>
                <input type="text" id="obj">
            </div>
        </form>
</div>
    <div class="boite-lettre">
    <div class="container">
        <div>
            <h2>Abonnez-vous à la boite aux lettres</h2>
            <p>
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ea, minus similique 
               magni voluptate dolor culpa sint, possimus aliquid eveniet quis? Deleniti, suscipit! 
               Impedit, aspernatur iure. Quibusdam quaerat non iure.
            </p>
        </div>
        <form>
            <input type="email" name="email" id="email" placeholder="Adresse email" />
            <input type="submit" value="S'abonner">
        </form>
    </div>
</div>
    
    <?php 
    include_once("../includes/footer.php");
    ?>

</body>
</html>