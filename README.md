# devops-Zoumbar
Voici mon application faite en Symfony 5 en micro service.


Lien de mise en ligne :https://devops-zoumbar.herokuapp.com/


Il y a 4 stages : 

- Init project : actions/checkout@v2
- PHP Linter : michaelw90/PHP-Lint@master
- Security checker : symfonycorp/security-checker-action@v2
- PHPStan : docker://oskarstark/phpstan-ga


CI + CD sur Github Actions
Déployement sur HEROKU


Branches pre-prod pour dev et tester.
pull request sur master pour deployer la prod. 
