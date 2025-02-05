<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles.css" type="text/css" media="all">
    <title>Document</title>
</head>

<body>
    <header class="bg-black d-flex flex-column position-relative">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <div class="nav-div1 row align-items-center">
                        <img class="img-fluid col-8" src="./Images/Logo.png" width="" alt="logo">
                        <h1 class="col-4 fs-3 fw-bold">PoS'</h1>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="text-white text-decoration-none fs-5 d-flex justify-content-end w-100">
                        <div class="div-header navbar-nav text-white fw-bold text-decoration-none">
                            <a class="nav-link-header" href="#">A propos</a>
                            <a class="nav-link-header" href="#">Portfolio</a>
                            <a class="nav-link-header" href="#">Services</a>
                            <a class="nav-link-header" href="#">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <img class="lumineux" src="./Images/j4oItp2-xcf.jpg" alt="fond-ray">
        <div class="header-div-main container">
            <div class="div2 d-flex flex-column align-items-center">
            <?php session_start();
        if (isset($_SESSION['message'])) {
            echo '<div class="alert alert-success" role="alert" id="alert">';
            echo $_SESSION['message'];
            echo '</div>';
            unset($_SESSION['message']);
        }
        ?>
                <div class="animation-header col-2 position-relative">
                    <div class="moving-zone">
                        <div id="popup" class="popup">
                            <div class="popup-content">
                                <img class="logo-main-div img-fluid" src="./Images/Logo.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <h1 class="py-1 fw-bold">PoS'</h1>
                <p class="text-center">experte en devellopement web, nous saurons réaliser <br>
                    votre projet que vous soyez professionels ou particuliers</p>
            </div>
            <div class="container">
                <div class="row text-white justify-content-evenly text-center pt-5">
                    <div class="col-4">
                        <div class="div-presentation-icons">
                            <i class="card-icon fa-solid fa-desktop"></i>
                            <h2>devellopement web</h2>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="div-presentation-icons">
                            <i class="text-white card-icon fa-brands fa-wordpress-simple"></i>
                            <h2>wordpress</h2>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="div-presentation-icons">
                            <i class="card-icon fa-solid fa-magnifying-glass"></i>
                            <h2>referencement naturel</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>
    <section class="section1-presentation">
        <div class="container">
            <div class="py-5 presentation-div1 row justify-content-center">
                <div class="col-8 text-center">
                    <h2 class="pb-5 fw-bold fs-1">Nous</h2>
                    <p class="pb-5">Lorem ipsum dolor sit amet. At recusandae accusamus et fuga debitis quo
                        molestiae mollitia
                        et quibusdam vitae hic debitis amet ut omnis sint eum consequatur error. Aut repudiandae
                        rerum qui eaque eaque ut natus accusantium est pariatur corrupti et numquam itaque aut
                        dicta perspiciatis sit possimus facere.
                    </p>
                    <button type="button" class="btn btn-lg text-white fw-bold text-uppercase">En savoir plus
                        ...</button>
                </div>
            </div>
        </div>
    </section>
    <section class="section2-projet">
        <div class="container">
            <div class="div1-projet row justify-content-center py-5">
                <div class="col-lg-4 col-12">
                    <div class="sous-div-projet">
                        <img class="img-fluid"
                            src="./Images/Screenshot 2022-02-09 at 15-29-24 Immobilier, agences immobilières Orpi - Petites annonces immobilières.png"
                            alt="">
                    </div>
                </div>
                <div class="div-projet col-lg-4 col-12 position-relative">
                    <div class="sous-div-projet">
                        <img class="img-fluid"
                            src="./Images/Design Composition - 15 Things You Can_t Afford NOT to Know.jpg" alt="">
                        <button type="button" class="projet-button btn btn-lg text-white fw-bold text-uppercase">Nos
                            projets</button>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="sous-div-projet">
                        <img class="img-fluid"
                            src="./Images/Screenshot 2022-02-09 at 15-21-19 Agence d’intérim, cabinet de Recrutement, Offres d’emploi, Jobs, CDD, CDI Manpower fr.png"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section3-services">
        <div class="container py-5">
            <ul class="nav nav-tabs d-flex justify-content-between">
                <li class="nav-item item1">
                    <button class="nav-link active col-12 fw-bold fs-3" aria-current="page"
                        onclick="openServices('particulier')">Particuliers</button>
                </li>
                <li class="nav-item item2">
                    <button class="nav-link col-12 fw-bold fs-3"
                        onclick="openServices('professionels')">Professionels</button>
                </li>
            </ul>
            <div id="particulier" class="services particuliers">
                <div class="d-flex flex-column align-items-center text-center">
                    <h2 class="fw-bold fs-1 pt-3">Particuliers</h2>
                    <p class="col-6 py-5">A exercitationem voluptatem qui architecto molestiae hic delectus
                        adipisci. Non harum nulla sit soluta exercitationem et placeat
                        distinctio. Et eveniet obcaecati et corporis quas et suscipit dolores.
                    </p>
                    <button type="button"
                        class="mb-4 services-button btn btn-lg text-white fw-bold text-uppercase">Découvrir</button>
                </div>
            </div>
            <div id="professionels" class="services professionels" style="display:none">
                <div class="d-flex flex-column align-items-center text-center">
                    <h2 class="fw-bold fs-1 pt-3">Professionels</h2>
                    <p class="col-6 py-5">Non harum nulla sit soluta exercitationem et placeat
                        distinctio. Et eveniet obcaecati et corporis quas et suscipit dolores.A exercitationem
                        voluptatem
                        qui
                        architecto molestiae hic delectus
                        adipisci.</p>
                    <button type="button"
                        class="mb-4 services-button btn btn-lg text-white fw-bold text-uppercase">Découvrir</button>
                </div>
            </div>
        </div>
    </section>
    <section class="section4-contact">
        <div class="contact-div1 container py-5">
            <form class="row g-3 w-100 mx-0 d-flex justify-content-center" action="form.php" method="post">
                <div class="text-center">
                    <h2 class="my-3 fw-bold">Contact</h2>
                </div>
                <div class="col-md-5">
                    <label for="inputNom4" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="inputEmail4" required name="nom">
                </div>
                <div class="col-md-5">
                    <label for="inputPrenom4" class="form-label">Prenom</label>
                    <input type="text" class="form-control" id="inputPassword4" required name="prenom">
                </div>
                <div class="col-md-10">
                    <label for="exampleFormControlemail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlemail" required name="email">
                </div>
                <div class="col-md-5">
                    <label for="inputDemandes" class="form-label">Demandes</label>
                    <select id="inputDemandes" class="form-select" name="demandes">
                        <option selected>HTML / CSS</option>
                        <option>Wordpress</option>
                    </select>
                </div>
                <div class="col-md-5">
                    <label for="inputServices" class="form-label">Services</label>
                    <select id="inputServices" class="form-select" name="services">
                        <option selected>Un particulier</option>
                        <option>Un professionel</option>
                    </select>
                </div>
                <div class="col-md-10">
                    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
                </div>
                <div class="my-5 div-button d-flex flex-column align-items-center">
                    <button type="submit" class="btn btn-lg text-white fw-bold text-uppercase">Envoyer</button>
                </div>
            </form>
        </div>
    </section>
    <footer class="bg-black d-flex flex-column py-2">
        <div class="container col-12 d-flex align-items-center">
            <h1 class="footer-title col-4 fs-3 fw-bold">PoS'</h1>
            <a class="px-1 footer-mentions col-4 d-flex align-items-center text-uppercase fs-6"
                href="#">Mentions Légales</a>
            <div class="footer-social col-4">
                <a class="px-2"
                    href="https://twitter.com/Only_Poseidon?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i
                        class="fa-brands fa-twitter"></i></a>
                <a class="px-2" href="https://m.facebook.com/gregory.maisonneuve.3#_=_"><i
                        class="fa-brands fa-facebook"></i></a>
                <a class="px-2" href="https://github.com/OnlyPoseidon"><i class="fa-brands fa-github"></i></a>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="./script.js"></script>
</body>

</html>