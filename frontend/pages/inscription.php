<?php
session_start();
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>

<body>
    <main class="main">
        <div class="container">
            <h1 class="hero-title">Inscription :</h1>
            <div class="form-container">
                <!-- Formulaire d'inscription -->
                <form id="signupForm" action="../../backend/inscription.php" method="POST" novalidate>
                    <div class="input-group">
                        <label for="signupPseudo">Nom d'utilisateur</label>
                        <input type="text" name="pseudo" id="signupPseudo" placeholder="Votre pseudo" required>
                    </div>
                    <div class="input-group">
                        <label for="signupEmail">Adresse email</label>
                        <input type="email" name="email" id="signupEmail" placeholder="Votre email" required>
                    </div>
                    <div class="input-group">
                        <label for="signupPassword">Mot de passe</label>
                        <input type="password" name="password" id="signupPassword" placeholder="Votre mot de passe" required>
                    </div>
                    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                    <button type="submit" class="search-button">S'inscrire</button>
                </form>
                <p>Déjà inscrit ? <a href="index.php?page=connexion">Connectez-vous</a></p>
            </div>
        </div>
    </main>
</body>