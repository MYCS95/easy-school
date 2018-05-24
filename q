[33mcommit 155886440a069ba5f75a766b27d4881735251206[m[33m ([m[1;36mHEAD -> [m[1;32mmaster[m[33m)[m
Author: mycs95 <samsonmolou@gmail.com>
Date:   Thu May 17 22:58:55 2018 +0000

    création des seeders de la bd terminée

 .../Controllers/NiveauSerieController.php   | 10 [32m+++++[m
 app/Niveau_Serie.php                        | 10 [32m+++++[m
 database/factories/ClasseFactory.php        |  9 [32m+[m[31m----[m
 database/factories/InscriptionFactory.php   | 10 [32m+[m[31m----[m
 database/factories/ScolariteFactory.php     | 10 [32m+[m[31m----[m
 ...18_05_16_175821_create_classes_table.php |  2 [32m+[m[31m-[m
 ...05_16_180013_create_scolarites_table.php |  2 [32m+[m[31m-[m
 ..._16_180124_create_inscriptions_table.php |  2 [32m+[m[31m-[m
 ...7_204220_create_niveau__series_table.php | 33 [32m+++++++++++++++++[m
 database/seeds/ClasseTableSeeder.php        | 22 [32m++++++++++[m[31m-[m
 database/seeds/DatabaseSeeder.php           |  7 [32m+++[m[31m-[m
 database/seeds/EcheanceTableSeeder.php      | 11 [32m+++++[m[31m-[m
 database/seeds/FiliereTableSeeder.php       |  8 [32m+++[m[31m-[m
 database/seeds/InscriptionTableSeeder.php   | 17 [32m++++++++[m[31m-[m
 database/seeds/NiveauTableSeeder.php        | 32 [32m+++++[m[31m-----------[m
 database/seeds/ScolariteTableSeeder.php     | 17 [32m++++++++[m[31m-[m
 database/seeds/StatutTableSeeder.php        |  1 [31m-[m
 database/seeds/UtilisateurTableSeeder.php   |  2 [31m-[m
 18 files changed, 145 insertions(+), 60 deletions(-)

[33mcommit f07a670498b32d088679e8dc9c94c2a3e05b7db9[m
Author: mycs95 <samsonmolou@gmail.com>
Date:   Thu May 17 20:41:30 2018 +0000

    Ajout des clés étrangères dans la migration

 database/seeds/DatabaseSeeder.php | 9 [32m+++++++++[m
 1 file changed, 9 insertions(+)

[33mcommit ae7c20aa76c74b170118bbea22c8e620993a71c1[m
Author: mycs95 <samsonmolou@gmail.com>
Date:   Thu May 17 20:36:54 2018 +0000

    Ajout des clés étrangères dans la migration

 config/database.php                         |  2 [32m+[m[31m-[m
 ..._12_000000_create_utilisateurs_table.php |  9 [32m++[m[31m-[m
 ...18_05_16_175551_create_comptes_table.php |  4 [32m+[m[31m-[m
 ...8_05_16_175757_create_filieres_table.php |  4 [32m+[m[31m-[m
 ...18_05_16_175821_create_classes_table.php |  6 [32m+[m[31m-[m
 ...18_05_16_175940_create_niveaux_table.php |  4 [32m+[m[31m-[m
 ...05_16_180013_create_scolarites_table.php |  8 [32m+[m[31m-[m
 ..._05_16_180035_create_echeances_table.php |  4 [32m+[m[31m-[m
 ..._16_180124_create_inscriptions_table.php |  8 [32m+[m[31m-[m
 ...8_05_17_201936_foreign_key_migration.php | 72 [32m+++++++++++++++++[m
 database/seeds/NiveauTableSeeder.php        | 36 [32m+++++++[m[31m--[m
 id                                          |  0
 niveau_id                                   |  0
 13 files changed, 136 insertions(+), 21 deletions(-)

[33mcommit 86bfec0d544ffd86f3579e9495991645becfb8a6[m
Author: mycs95 <samsonmolou@gmail.com>
Date:   Thu May 17 18:08:45 2018 +0000

    Update seeders

 app/Cycle.php                               |  4 [32m++[m[31m-[m
 app/Niveau.php                              |  9 [32m++++++[m[31m-[m
 database/factories/CycleFactory.php         |  2 [32m+[m[31m-[m
 database/seeds/AnneeScolaireTableSeeder.php |  4 [32m++[m[31m-[m
 database/seeds/CycleTableSeeder.php         |  4 [32m++[m[31m-[m
 database/seeds/DatabaseSeeder.php           |  6 [32m++++[m[31m-[m
 database/seeds/NiveauTableSeeder.php        | 23 [32m++++++++++++++++[m[31m-[m
 database/seeds/SerieTableSeeder.php         |  4 [32m++[m[31m-[m
 8 files changed, 48 insertions(+), 8 deletions(-)

[33mcommit 55d513d560e19795dce9b8d6530135c7bf380c6e[m
Author: mycs95 <samsonmolou@gmail.com>
Date:   Thu May 17 15:04:26 2018 +0000

    Mise à jour des seeders utilisateurs, compte, statut, service

 database/factories/CompteFactory.php        |  7 [32m+[m[31m--[m
 database/factories/StatutFactory.php        |  2 [32m+[m[31m-[m
 database/factories/UtilisateurFactory.php   |  7 [31m---[m
 ..._12_000000_create_utilisateurs_table.php |  1 [31m-[m
 ...18_05_16_175551_create_comptes_table.php |  3 [32m+[m[31m-[m
 database/seeds/AnneeScolaireTableSeeder.php | 16 [32m+++++[m
 database/seeds/ClasseTableSeeder.php        | 16 [32m+++++[m
 database/seeds/CompteTableSeeder.php        | 27 [32m+++++++++[m
 database/seeds/CycleTableSeeder.php         | 16 [32m+++++[m
 database/seeds/DatabaseSeeder.php           |  8 [32m++[m[31m-[m
 database/seeds/EcheanceTableSeeder.php      | 16 [32m+++++[m
 database/seeds/EtablissementTableSeeder.php | 19 [32m++++++[m
 database/seeds/FiliereTableSeeder.php       | 16 [32m+++++[m
 database/seeds/InscriptionTableSeeder.php   | 16 [32m+++++[m
 database/seeds/NiveauTableSeeder.php        | 16 [32m+++++[m
 database/seeds/ScolariteTableSeeder.php     | 16 [32m+++++[m
 database/seeds/SerieTableSeeder.php         | 16 [32m+++++[m
 database/seeds/ServiceTableSeeder.php       | 18 [32m++++++[m
 database/seeds/StatutTableSeeder.php        | 19 [32m++++++[m
 database/seeds/UtilisateurTableSeeder.php   | 53 [32m+++++++++++++++++[m
 20 files changed, 291 insertions(+), 17 deletions(-)

[33mcommit 63978b44a62167f1c3adcbc4c42c2d675cdd8079[m
Author: mycs95 <samsonmolou@gmail.com>
Date:   Thu May 17 08:51:47 2018 +0000

    Mise des factories

 database/factories/ClasseFactory.php        |  4 [32m++[m[31m--[m
 database/factories/EcheanceFactory.php      |  3 [32m+++[m
 database/factories/EtablissementFactory.php |  3 [32m++[m[31m-[m
 database/factories/FiliereFactory.php       |  7 [32m+++++[m[31m--[m
 database/factories/InscriptionFactory.php   | 13 [32m+++++++++++[m[31m--[m
 database/factories/NiveauFactory.php        |  7 [32m+++++[m[31m--[m
 database/factories/ScolariteFactory.php     | 13 [32m+++++++++++[m[31m--[m
 database/factories/SerieFactory.php         |  4 [32m++[m[31m--[m
 database/factories/ServiceFactory.php       |  4 [32m++[m[31m--[m
 database/factories/StatutFactory.php        |  4 [32m++[m[31m--[m
 database/factories/UtilisateurFactory.php   | 14 [32m++++++++++++[m[31m--[m
 11 files changed, 57 insertions(+), 19 deletions(-)

[33mcommit c977bc4fd6d3ed3c7977ef024c80b3dc9f86dbd4[m
Author: mycs95 <samsonmolou@gmail.com>
Date:   Thu May 17 00:25:04 2018 +0000

    Ajouter des factories et mise à jour de la migration

 database/factories/AnneeScolaireFactory.php |    10 [32m+[m
 database/factories/ClasseFactory.php        |    15 [32m+[m
 database/factories/CompteFactory.php        |    17 [32m+[m
 database/factories/CycleFactory.php         |     9 [32m+[m
 database/factories/EcheanceFactory.php      |     9 [32m+[m
 database/factories/EtablissementFactory.php |    12 [32m+[m
 database/factories/FiliereFactory.php       |     9 [32m+[m
 database/factories/InscriptionFactory.php   |     9 [32m+[m
 database/factories/NiveauFactory.php        |     9 [32m+[m
 database/factories/ScolariteFactory.php     |     9 [32m+[m
 database/factories/SerieFactory.php         |     9 [32m+[m
 database/factories/ServiceFactory.php       |     9 [32m+[m
 database/factories/StatutFactory.php        |     9 [32m+[m
 database/factories/UtilisateurFactory.php   |     9 [32m+[m
 ..._12_000000_create_utilisateurs_table.php |     2 [32m+[m
 ...18_05_16_175551_create_comptes_table.php |     2 [32m+[m
 ...8_05_16_175757_create_filieres_table.php |     1 [32m+[m
 ...18_05_16_175821_create_classes_table.php |     2 [32m+[m
 ...18_05_16_175940_create_niveaux_table.php |     1 [32m+[m
 ...05_16_180013_create_scolarites_table.php |     5 [32m+[m[31m-[m
 ..._05_16_180035_create_echeances_table.php |     1 [32m+[m
 ..._16_180124_create_inscriptions_table.php |     3 [32m+[m
 package-lock.json                           |   107 [32m+[m
 package.json                                |     5 [32m+[m[31m-[m
 public/css/app.css                          |  9865 [32m++[m[31m-[m
 .../dist/roboto/Roboto-Bold.woff            |   Bin [31m0[m -> [32m90308[m bytes
 .../dist/roboto/Roboto-Bold.woff2           |   Bin [31m0[m -> [32m64800[m bytes
 .../dist/roboto/Roboto-Light.woff           |   Bin [31m0[m -> [32m89672[m bytes
 .../dist/roboto/Roboto-Light.woff2          |   Bin [31m0[m -> [32m64268[m bytes
 .../dist/roboto/Roboto-Medium.woff          |   Bin [31m0[m -> [32m90560[m bytes
 .../dist/roboto/Roboto-Medium.woff2         |   Bin [31m0[m -> [32m65412[m bytes
 .../dist/roboto/Roboto-Regular.woff         |   Bin [31m0[m -> [32m89828[m bytes
 .../dist/roboto/Roboto-Regular.woff2        |   Bin [31m0[m -> [32m64832[m bytes
 .../dist/roboto/Roboto-Thin.woff            |   Bin [31m0[m -> [32m88132[m bytes
 .../dist/roboto/Roboto-Thin.woff2           |   Bin [31m0[m -> [32m63056[m bytes
 public/js/app.js                            | 56152 [32m+++++++++++++[m[31m-[m
 public/mix-manifest.json                    |     4 [32m+[m
 resources/assets/js/bootstrap.js            |     3 [32m+[m[31m-[m
 resources/assets/sass/app.scss              |     8 [32m+[m[31m-[m
 yarn.lock                                   |    15 [32m+[m[31m-[m
 40 files changed, 66305 insertions(+), 15 deletions(-)

[33mcommit 2b33ab250e1229f210da1fd8b645eb996cb22cbf[m
Author: mycs95 <samsonmolou@gmail.com>
Date:   Wed May 16 22:34:31 2018 +0000

    Ajout des relations entre les tables

 _ide_helper.php                             | 9972 [32m+++++++[m[31m--------[m
 app/AnneeScolaire.php                       |   45 [32m+[m[31m-[m
 app/Classe.php                              |   22 [32m+[m[31m-[m
 app/Compte.php                              |   21 [32m+[m[31m-[m
 app/Cycle.php                               |   20 [32m+[m[31m-[m
 app/Echeance.php                            |   11 [32m+[m[31m-[m
 app/Filiere.php                             |   68 [32m+[m[31m-[m
 .../Controllers/Auth/RegisterController.php |    6 [32m+[m[31m-[m
 app/Niveau.php                              |   78 [32m+[m[31m-[m
 app/Scolarite.php                           |    9 [32m+[m[31m-[m
 app/Serie.php                               |   10 [32m+[m[31m-[m
 app/Service.php                             |   11 [32m+[m[31m-[m
 app/Statut.php                              |   10 [32m+[m[31m-[m
 app/User.php                                |   29 [31m-[m
 app/Utilisateur.php                         |   51 [32m+[m
 config/auth.php                             |    4 [32m+[m[31m-[m
 config/services.php                         |    2 [32m+[m[31m-[m
 database/factories/UserFactory.php          |    2 [32m+[m[31m-[m
 ...12_000000_create_utilisateurs_table.php} |    6 [32m+[m[31m-[m
 routes/channels.php                         |    2 [32m+[m[31m-[m
 20 files changed, 5342 insertions(+), 5037 deletions(-)

[33mcommit 4a1ea1c76b1c18fc1238cd51817d34dfbdae8ef1[m
Author: mycs95 <samsonmolou@gmail.com>
Date:   Wed May 16 20:23:44 2018 +0000

    ajout des colonnes dans les migrations des tables

 _ide_helper.php                             | 14747 [32m++++++++++++++[m
 app/Providers/AppServiceProvider.php        |     4 [32m+[m[31m-[m
 app/Statut.php                              |     2 [32m+[m[31m-[m
 composer.json                               |     8 [32m+[m[31m-[m
 composer.lock                               |   180 [32m+[m[31m-[m
 ...2014_10_12_000000_create_users_table.php |     7 [32m+[m[31m-[m
 ..._100000_create_password_resets_table.php |     2 [32m+[m[31m-[m
 ...18_05_16_175416_create_statuts_table.php |     1 [32m+[m
 ...18_05_16_175551_create_comptes_table.php |     3 [32m+[m
 ...8_05_16_175649_create_services_table.php |     1 [32m+[m
 ..._175735_create_annee_scolaires_table.php |     2 [32m+[m
 ...8_05_16_175757_create_filieres_table.php |     1 [32m+[m
 ...18_05_16_175821_create_classes_table.php |     1 [32m+[m
 ...018_05_16_175843_create_series_table.php |     1 [32m+[m
 ...6_175922_create_etablissements_table.php |     5 [32m+[m
 ...18_05_16_175940_create_niveaux_table.php |     1 [32m+[m
 ...05_16_180013_create_scolarites_table.php |     1 [32m+[m
 ..._05_16_180035_create_echeances_table.php |     1 [32m+[m
 ...018_05_16_180100_create_cycles_table.php |     1 [32m+[m
 ..._16_180124_create_inscriptions_table.php |     1 [32m+[m
 20 files changed, 14962 insertions(+), 8 deletions(-)

[33mcommit 7f44e9e269ebe0f53c00dca7da3d62a361f49167[m
Author: mycs95 <samsonmolou@gmail.com>
Date:   Wed May 16 18:02:19 2018 +0000

    create database model

 app/AnneeScolaire.php                       | 10 [32m++++++[m
 app/Classe.php                              | 10 [32m++++++[m
 app/Compte.php                              | 10 [32m++++++[m
 app/Cycle.php                               | 10 [32m++++++[m
 app/Echeance.php                            | 10 [32m++++++[m
 app/Etablissement.php                       | 10 [32m++++++[m
 app/Filiere.php                             | 10 [32m++++++[m
 .../Controllers/AnneeScolaireController.php | 10 [32m++++++[m
 app/Http/Controllers/ClasseController.php   | 10 [32m++++++[m
 app/Http/Controllers/CompteController.php   | 10 [32m++++++[m
 app/Http/Controllers/CycleController.php    | 10 [32m++++++[m
 app/Http/Controllers/EcheanceController.php | 10 [32m++++++[m
 .../Controllers/EtablissementController.php | 10 [32m++++++[m
 app/Http/Controllers/FiliereController.php  | 10 [32m++++++[m
 .../Controllers/InscriptionController.php   | 10 [32m++++++[m
 app/Http/Controllers/NiveauController.php   | 10 [32m++++++[m
 .../Controllers/ScolariteController.php     | 10 [32m++++++[m
 app/Http/Controllers/SerieController.php    | 10 [32m++++++[m
 app/Http/Controllers/ServiceController.php  | 10 [32m++++++[m
 app/Inscription.php                         | 10 [32m++++++[m
 app/Niveau.php                              | 10 [32m++++++[m
 app/Scolarite.php                           | 10 [32m++++++[m
 app/Serie.php                               | 10 [32m++++++[m
 app/Service.php                             | 10 [32m++++++[m
 ...18_05_16_175551_create_comptes_table.php | 31 [32m+++++++++++++++++[m
 ...8_05_16_175649_create_services_table.php | 31 [32m+++++++++++++++++[m
 ..._175735_create_annee_scolaires_table.php | 31 [32m+++++++++++++++++[m
 ...8_05_16_175757_create_filieres_table.php | 31 [32m+++++++++++++++++[m
 ...18_05_16_175821_create_classes_table.php | 31 [32m+++++++++++++++++[m
 ...018_05_16_175843_create_series_table.php | 31 [32m+++++++++++++++++[m
 ...6_175922_create_etablissements_table.php | 31 [32m+++++++++++++++++[m
 ...18_05_16_175940_create_niveaux_table.php | 31 [32m+++++++++++++++++[m
 ...05_16_180013_create_scolarites_table.php | 31 [32m+++++++++++++++++[m
 ..._05_16_180035_create_echeances_table.php | 31 [32m+++++++++++++++++[m
 ...018_05_16_180100_create_cycles_table.php | 31 [32m+++++++++++++++++[m
 ..._16_180124_create_inscriptions_table.php | 31 [32m+++++++++++++++++[m
 36 files changed, 612 insertions(+)

[33mcommit 3107d3b1cb759ea75d3f0590d6b3f9fe89d88780[m
Author: mycs95 <samsonmolou@gmail.com>
Date:   Wed May 16 17:54:58 2018 +0000

    Initial commit

 .editorconfig                               |   16 [32m+[m
 .env.example                                |   39 [32m+[m
 .env.local                                  |   39 [32m+[m
 .env.testing                                |   34 [32m+[m
 .gitattributes                              |    5 [32m+[m
 .gitignore                                  |   13 [32m+[m
 app/Console/Kernel.php                      |   42 [32m+[m
 app/Exceptions/Handler.php                  |   51 [32m+[m
 .../Auth/ForgotPasswordController.php       |   32 [32m+[m
 .../Controllers/Auth/LoginController.php    |   39 [32m+[m
 .../Controllers/Auth/RegisterController.php |   72 [32m+[m
 .../Auth/ResetPasswordController.php        |   39 [32m+[m
 app/Http/Controllers/Controller.php         |   13 [32m+[m
 app/Http/Controllers/HomeController.php     |   28 [32m+[m
 app/Http/Controllers/StatutController.php   |   10 [32m+[m
 app/Http/Kernel.php                         |   63 [32m+[m
 app/Http/Middleware/EncryptCookies.php      |   17 [32m+[m
 .../Middleware/RedirectIfAuthenticated.php  |   26 [32m+[m
 app/Http/Middleware/TrimStrings.php         |   18 [32m+[m
 app/Http/Middleware/TrustProxies.php        |   23 [32m+[m
 app/Http/Middleware/VerifyCsrfToken.php     |   17 [32m+[m
 app/Providers/AppServiceProvider.php        |   28 [32m+[m
 app/Providers/AuthServiceProvider.php       |   30 [32m+[m
 app/Providers/BroadcastServiceProvider.php  |   21 [32m+[m
 app/Providers/EventServiceProvider.php      |   32 [32m+[m
 app/Providers/RouteServiceProvider.php      |   73 [32m+[m
 app/Statut.php                              |   10 [32m+[m
 app/User.php                                |   29 [32m+[m
 artisan                                     |   53 [32m+[m
 bootstrap/app.php                           |   55 [32m+[m
 bootstrap/cache/.gitignore                  |    2 [32m+[m
 composer.json                               |   59 [32m+[m
 composer.lock                               | 3979 [32m++++++++[m
 config/app.php                              |  214 [32m+[m
 config/auth.php                             |  102 [32m+[m
 config/broadcasting.php                     |   59 [32m+[m
 config/cache.php                            |   94 [32m+[m
 config/database.php                         |  120 [32m+[m
 config/filesystems.php                      |   69 [32m+[m
 config/hashing.php                          |   52 [32m+[m
 config/logging.php                          |   81 [32m+[m
 config/mail.php                             |  123 [32m+[m
 config/queue.php                            |   86 [32m+[m
 config/services.php                         |   38 [32m+[m
 config/session.php                          |  197 [32m+[m
 config/view.php                             |   33 [32m+[m
 database/.gitignore                         |    1 [32m+[m
 database/factories/UserFactory.php          |   23 [32m+[m
 ...2014_10_12_000000_create_users_table.php |   35 [32m+[m
 ..._100000_create_password_resets_table.php |   32 [32m+[m
 ...18_05_16_175416_create_statuts_table.php |   31 [32m+[m
 database/seeds/DatabaseSeeder.php           |   16 [32m+[m
 package.json                                |   22 [32m+[m
 phpunit.xml                                 |   33 [32m+[m
 public/.htaccess                            |   21 [32m+[m
 public/css/app.css                          |    6 [32m+[m
 public/favicon.ico                          |    0
 public/index.php                            |   60 [32m+[m
 public/js/app.js                            |    1 [32m+[m
 public/robots.txt                           |    2 [32m+[m
 resources/assets/js/app.js                  |   22 [32m+[m
 resources/assets/js/bootstrap.js            |   56 [32m+[m
 .../js/components/ExampleComponent.vue      |   23 [32m+[m
 resources/assets/sass/_variables.scss       |    8 [32m+[m
 resources/assets/sass/app.scss              |   14 [32m+[m
 resources/lang/en/auth.php                  |   19 [32m+[m
 resources/lang/en/pagination.php            |   19 [32m+[m
 resources/lang/en/passwords.php             |   22 [32m+[m
 resources/lang/en/validation.php            |  146 [32m+[m
 resources/views/auth/login.blade.php        |   69 [32m+[m
 .../views/auth/passwords/email.blade.php    |   47 [32m+[m
 .../views/auth/passwords/reset.blade.php    |   65 [32m+[m
 resources/views/auth/register.blade.php     |   77 [32m+[m
 resources/views/home.blade.php              |   23 [32m+[m
 resources/views/layouts/app.blade.php       |   75 [32m+[m
 resources/views/welcome.blade.php           |   95 [32m+[m
 routes/api.php                              |   18 [32m+[m
 routes/channels.php                         |   16 [32m+[m
 routes/console.php                          |   18 [32m+[m
 routes/web.php                              |   24 [32m+[m
 server.php                                  |   21 [32m+[m
 storage/app/.gitignore                      |    3 [32m+[m
 storage/app/public/.gitignore               |    2 [32m+[m
 storage/framework/.gitignore                |    8 [32m+[m
 storage/framework/cache/.gitignore          |    2 [32m+[m
 storage/framework/sessions/.gitignore       |    2 [32m+[m
 storage/framework/testing/.gitignore        |    2 [32m+[m
 storage/framework/views/.gitignore          |    2 [32m+[m
 storage/logs/.gitignore                     |    2 [32m+[m
 tests/CreatesApplication.php                |   22 [32m+[m
 tests/Feature/ExampleTest.php               |   21 [32m+[m
 tests/TestCase.php                          |   10 [32m+[m
 tests/Unit/ExampleTest.php                  |   19 [32m+[m
 webpack.mix.js                              |   15 [32m+[m
 yarn.lock                                   | 7436 [32m+++++++++++++++[m
 95 files changed, 14981 insertions(+)
