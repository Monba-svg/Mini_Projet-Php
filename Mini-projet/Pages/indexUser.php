<h1 class="text-center mb-4">Gestion des Utilisateurs</h1>

        <!-- ==== FORMULAIRE AJOUT / MODIFICATION ==== -->
        <div class="card mb-4 col-md-6 offset-3">
            <div class="card-header bg-primary text-white">
                <?= $utilisateur_a_modifier ? "Modifier un utilisateur" : "Ajouter un utilisateur" ?>
            </div>

            <div class="card-body">
                <form method="POST" action="http://localhost/ProjetTache2/action.php">

                    <input type="hidden" name="action" value="<?= $utilisateur_a_modifier ? "modifier" : "ajouter" ?>">

                    <?php if ($utilisateur_a_modifier): ?>
                        <input type="hidden" name="id" value="<?= $utilisateur_a_modifier['id'] ?>">
                    <?php endif; ?>

                    <div class="mb-3">
                        <label class="form-label">Prenom</label>
                        <input type="text" class="form-control" name="prenom" required
                            value="<?= $utilisateur_a_modifier['prenom'] ?? '' ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nom</label>
                        <input type="text" class="form-control" name="nom" required
                            value="<?= $utilisateur_a_modifier['nom'] ?? '' ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Login</label>
                        <input type="text" class="form-control" name="login" required
                            value="<?= $utilisateur_a_modifier['login'] ?? '' ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="text" class="form-control" name="mdp" required
                            value="<?= $utilisateur_a_modifier['mdp'] ?? '' ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Role</label>
                        <select name="role" id="" class="form-control">
                            <option value="admin">Administration</option>
                            <option value="user">utilisateur</option>
                        </select>
                    </div>


                    <button type="submit" class="btn btn-success">
                        <?= $utilisateur_a_modifier ? "Enregistrer les modifications" : "Ajouter" ?>
                    </button>

                    <?php if ($utilisateur_a_modifier): ?>
                        <a href="index.php" class="btn btn-secondary">Annuler</a>
                    <?php endif; ?>

                </form>
            </div>
        </div>

        <!-- ==== LISTE DES TÂCHES ==== -->
        <h2 class="mb-3 text-center">Liste des utilisateurs</h2>
        
        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Login</th>
                <th>Rôle</th>
                <th>Action</th>
            </tr>
            <?php foreach ($utilisateurs as $u): ?>
                <tr>
                    <td><?= $u['ID'] ?></td>
                    <td><?= $u['prenom'] ?></td>
                    <td><?= $u['nom'] ?></td>
                    <td><?= $u['login'] ?></td>
                    <td><?= $u['role'] ?></td>
                    <td>
                        <a href="" class="btn btn-sm btn-warning">Modifier</a>
                        <a href="" class="btn btn-sm btn-danger">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        
        </table>
