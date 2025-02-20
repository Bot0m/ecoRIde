<?php
/**
 * Page de connexion
 * Permet aux utilisateurs de se connecter à leur compte
 */
?>
<body>
    <main class="main">
        <div class="container">
            <h1 class="hero-title">Je me connecte :</h1>
            <div class="form-container">
                <!-- Formulaire de connexion -->
                <form id="loginForm" action="../../backend/connexion.php" method="POST">
                    <div class="input-group">
                        <label for="loginEmail">Adresse email</label>
                        <input type="email" id="loginEmail" name="email" placeholder="Votre email" required>
                    </div>
                    <div class="input-group">
                        <label for="loginPassword">Mot de passe</label>
                        <input type="password" id="loginPassword" name="password" placeholder="Votre mot de passe" required>
                    </div>
                    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token'] ?? ''; ?>">
                    <button type="submit" class="search-button">Se connecter</button>
                </form>
                <p>Pas encore inscrit ? <a href="index.php?page=inscription">Inscrivez-vous</a></p>
            </div>
        </div>
    </main>
</body>