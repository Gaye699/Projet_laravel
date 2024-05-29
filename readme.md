## **Système d'education en ligne avec Laravel**

**L'app** est développé pour les établissements d'enseignement tels que les écoles et les collèges construits sur Laravel 8.

**CAPTURES D'ÉCRAN**

**Tableau de bord**
<img src="https://i.ibb.co/D4T0z6T/dashboard.png" alt="dashboard" border="0">

**Se connecter**
<img src="https://i.ibb.co/Rh1Bfwk/login.png" alt="login" border="0">

**Feuille de notes de l'étudiant**
<img src="https://i.ibb.co/GCgv5ZR/marksheet.png" alt="marksheet" border="0">

**Les paramètres du système**
<img src="https://i.ibb.co/Kmrhw69/system-settings.png" alt="system-settings" border="0">

**Imprimer la feuille de repères**
<div style="clear: les deux"> </div>
<img src="https://i.ibb.co/5c1GHCj/capture-20210530-115521-crop.png" alt="print-marksheet">

**Imprimer la feuille de tabulation et la feuille de marquage**
<img src="https://i.ibb.co/QmscPfn/capture-20210530-115802.png" alt="tabulation-sheet" border="0">

<heure />

Il existe 7 types de comptes d'utilisateurs. Ils comprennent:

Administrateurs (super administrateur et administrateur)
- Bibliothécaire
- Comptable
- Professeur
- Étudiant
- Parent

**Exigences**

Vérifiez les exigences de Laravel 8 https://laravel.com/docs/8.x

**Installation**
- Installer les dépendances (installation du compositeur)
- Définir les informations d'identification de la base de données et les paramètres de l'application dans le fichier dotenv (.env)
- Migrer la base de données (php artisan migrate)
- Seed de la base de données (php artisan db:seed)

**Identifiants de connexion**
Après semis. Détails de connexion comme suit :

| Type de compte | Nom d'utilisateur | Courriel | Mot de passe |
| ------------- | -------- | ----- | -------- |
| Super administrateur | cj | cj@cj.com | cj |
| Administrateur | administrateur | admin@admin.com | cj |
| Enseignant | professeur | professeur@enseignant.com | cj |
| Parents | parent | parent@parent.com | cj |
| Comptable | comptable | comptable@accountant.com | cj |
| Étudiant | étudiant | étudiant@étudiant.com | cj |

#### **FONCTIONS DES COMPTES**

**-- SUPER ADMINISTRATEUR**
- Seul le super administrateur peut supprimer n'importe quel enregistrement
- Créez n'importe quel compte utilisateur

**-- Administrateurs (Super Administrateur et Administrateur)**

- Gérer les classes/sections des étudiants
- Voir la feuille de notes des étudiants
- Créer, modifier et gérer tous les comptes et profils d'utilisateurs
- Créer, modifier et gérer des examens et des notes
- Créer, modifier et gérer des sujets
- Gérer le tableau d'affichage de l'école
- Les avis sont visibles dans le calendrier du tableau de bord
- Modifier les paramètres du système
- Gérer les paiements et les frais

**-- COMPTABLE**
- Gérer les paiements et les frais
- Imprimer les reçus de paiement

**-- BIBLIOTHÉCAIRE**
- Gérer les livres dans la bibliothèque

**-- PROFESSEUR**
- Gérer sa propre classe/section
- Gérer les dossiers d'examen pour vos propres sujets
- Gérer les horaires s'il est affecté en tant que professeur de classe
- Gérer son propre profil
- Télécharger du matériel d'étude

**-- ÉTUDIANT**
- Voir le profil de l'enseignant
- Afficher ses propres matières de classe
- Afficher vos propres notes et horaires de cours
- Afficher les paiements
- Afficher l'état de la bibliothèque et du livre
- Afficher le tableau d'affichage et les événements scolaires dans le calendrier
- Gérer son propre profil

**-- PARENT**
- Voir le profil de l'enseignant
- Afficher la feuille de notes de votre enfant (Télécharger/Imprimer le PDF)
- Afficher l'horaire de votre propre enfant
- Afficher les paiements de votre propre enfant
- Afficher le tableau d'affichage et les événements scolaires dans le calendrier
- Gérer son propre profil