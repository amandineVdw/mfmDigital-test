<!-- src/views/contact-view.php -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contactez-nous - MFM Digital</title>

    <!-- CDN Bootstrap + Font Awesome -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" as="style"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"
        onload="this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </noscript>

    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" as="style"
        onload="this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </noscript>


    <!-- Feuilles de style -->
    <link rel="stylesheet" href="../../public/css/styles.css">
    <!-- Favicon pour les navigateurs modernes -->
    <link rel="icon" href="../../public/images/favicon.ico" type="image/x-icon">

</head>

<body>
    <header>
        <img src="../../public/images/rectangle 55.png" class="header-img fluid" alt="Image d'en-tête - mots positifs">
    </header>

    <main class="container">
        <section class="info-container">
            <address class="adresse fluid">
                <h1 id="adaptive-title">MFM DIGITAL</h1>
                <br>
                <p id="adaptative-paragraphe">
                    Rue Middelbourg 66, 1170 Watermael-Boitsfort
                    <br>
                    <span>+32 2 880 96 92</span>
                    <br>
                    <a href="mailto:info@mfmdigital.com">info@mfmdigital.com</a>
                </p>
                <ul class="social-icons">
                    <li>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </li>
                </ul>
            </address>
        </section>

        <section class="contact-form">
            <div class="header-section">
                <h2>CONTACTEZ-NOUS</h2>
                <aside>
                    <p>Notre agence vous promet une expertise personnalisée et un accompagnement sur-mesure pour la
                        réalisation de votre site internet et/ou de votre application.</p>
                </aside>
            </div>

            <div class="options">
                <button type="button">Crapaud</button>
                <button type="button">Grenouille</button>
            </div>

            <form action="../../index.php?action=submitContact" method="POST">
                <div class="form-row">
                    <div class="form-group-half">
                        <label for="first-name">Prénom</label>
                        <input type="text" id="first-name" name="first-name" placeholder="Prénom">
                    </div>
                    <div class="form-group-half">
                        <label for="last-name">Nom</label>
                        <input type="text" id="last-name" name="last-name" placeholder="Nom">
                    </div>
                </div>

                <div class="form-row">
                    <label for="telephone">Numéro de téléphone*</label>
                    <input type="tel" id="telephone" name="telephone" required>
                </div>

                <div class="form-row">
                    <label for="email">Email*</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-row">
                    <label for="adresse">Adresse</label>
                    <input type="text" id="adresse" name="adresse">
                </div>

                <div class="form-row">
                    <div class="form-group-half">
                        <label for="postal-code">Code Postal</label>
                        <input type="text" id="postal-code" name="postal-code" placeholder="Code Postal">
                    </div>
                    <div class="form-group-half">
                        <label for="city">Ville</label>
                        <input type="text" id="city" name="city" placeholder="Ville">
                    </div>
                </div>

                <div>
                    <input type="checkbox" id="consent" name="consent" required>
                    <label for="consent">J'accepte que mes données soient recueillies...</label>
                </div>

                <button type="submit" class="btn">Envoyer</button>
            </form>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="../../public/js/main.js"> </script>

</body>

</html>