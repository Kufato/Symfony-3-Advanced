# Check du 404 pour l'exercice 00
curl -o /dev/null -s -w "%{http_code}" http://127.0.0.1:8000

------------------------------------------------------------------

# Flux pour l'exercice 01
Kernel::prepareContainer()
→ enregistre AppExtension (alias: "d07")
      ↓
Symfony lit config/packages/app.yaml
→ voit la clé "d07"
→ trouve AppExtension grâce à l'alias
      ↓
AppExtension::load()
→ valide la config via Configuration.php
→ injecte "d07.number" et "d07.enable" dans le container
      ↓
Requête GET /ex01
→ Symfony trouve la route via l'attribut #[Route]
→ appelle ex01Action()
→ récupère "d07.number" depuis le container
→ retourne Response

------------------------------------------------------------------

# Flux pour l'exercice 02
URL: /fr/ex02/5
      ↓
Symfony détecte _locale = fr
      ↓
Template appelle |trans
      ↓
Translator reçoit (clé: "ex02.number", locale: "fr")
      ↓
Cherche dans translations/messages.fr.yaml
      ↓
Trouve la valeur et remplace %number%
      ↓
Retourne "Le numéro de configuration est 43"

------------------------------------------------------------------

# Commande pour lancer les tests de l'exercice 04
php bin/phpunit