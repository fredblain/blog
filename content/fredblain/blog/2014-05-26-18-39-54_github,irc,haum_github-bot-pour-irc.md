<!--t Activer un Github hook pour IRC t-->

Nous avons récemment mis en place au HAUM des Github hooks (ou services) sur nos principaux [dépôts Git][1], afin que les membres de l'association soient automatiquement notifiés sur [IRC][2] des évènements intéressants y survenant (push, pull-request, commentaires, autres).

#Comment ça fonctionne ?

Lorsqu'un évènement survient sur un dépôt pour lequel un Github hook a été activé, un bot se connecte automatiquement au chan IRC configuré pour faire état de cet évènement. Le bot n'a ensuite plus qu'à se déconnecté jusqu'au prochainement évènement. 

Ci-après quelques exemples de notification afin d'illlustrer concrètement de quoi il s'agit :

Un "push" sur le dépôt "website" du HAUM :

    [19:48]  <GitHub_Bot> [website] FredBlain pushed 1 new commit to master: http://git.io/PdtPXQ  
    [19:48]  <GitHub_Bot> website/master c030742 feedoo: (planet) add new source: jblb's blog.

Un commentaire  sur le dépôt "haum_internal" :

    [01:04]  <GitHub_Bot> [haum_internal] neomilium comment on issue #5: Tu n'essayerai pas de nous dire qu'un de tes amis nous offre la production... http://git.io/7q4SmQ 

 *"GitHub_Bot" étant ici le nickname IRC que nous avons donné au Github hook lorsque celui-ci se connecte au chan.*

Alors certains détracteurs pourraient dire que ce service fait doublons avec la notification par mail. À ceux-là je répondrai que :

 1. c'est vrai ;
 2. mais l'un n'empêche pas l'autre ;
 3. et puis tous les membres de l'association n'utilisent pas GitHub ;
 4. et entre les dépôts privés, professionnels, associatifs & co, certains d'entre nous ont choisis de désactiver les notifications mail, n'en recevant que trop déjà...
 5. raison X ou Y ;
 6. ou encore simple envie de vouloir savoir comment ça marche ;)

#Activer le service pour IRC

Tout cela n'est en fait pas bien compliqué, c'est même très simple puisque nous avons tout ce qu'il faut à disposition !
Github a en effet fait le plus dur, il nous reste plus qu'à cliquer, ou presque...

Pour commencer, rendez-vous dans les paramètres de votre dépôts, et allez ensuite dans "webhooks & services".
De là, vous avez le choix :  soit vous créez un "webhook" ou alors vous ajoutez un service.

Recherchez et ajoutez le service pour IRC. Vous devriez désormais être dans la page de configuration de ce service.
Toutes les options permettant de personnaliser votre service y sont documentées.
Personnellement, je vous conseille de cocher `"Message without join"` afin de ne pas être polluer par les annonces de (dé)connexion de votre bot, et de laisser décocher `"Long url"`. Cela activera le service [Git.io][3] qui est un raccourcisseur d'url qui vous évitera une notification trop verbeuse.

On vous dit alors que vous pouvez diagnostiquer votre service afin de valider son bon fonctionnement, avec la commande :

    curl -u "USERNAME" -in https://api.github.com/repos/USERNAME/REPONAME/hooks

Ainsi, si on teste cette commande sur le dépôt du site Internet du HAUM, on obtient :

    

    [
          {
            "url": "https://api.github.com/repos/haum/website/hooks/2296461",
            "test_url": "https://api.github.com/repos/haum/website/hooks/2296461/test",
            "id": 2296461,
            "name": "irc",
            "active": true,
            "events": [
              "push",
              "issues",
              "issue_comment",
              "pull_request"
            ],
            "config": {
              "server": "chat.freenode.net",
              "port": "6667",
              "room": "#haum",
              "nick": "GitHub_Bot",
              "branch_regexes": "",
              "nickserv_password": "",
              "password": "",
              "message_without_join": "1"
            },
            "last_response": {
              "code": 200,
              "status": "active",
              "message": "OK"
            },
            "updated_at": "2014-05-28T17:48:18Z",
            "created_at": "2014-05-22T10:11:52Z"
          }
        ]

Voyons de plus prêt ce que tout ça veut dire.

    "url": "https://api.github.com/repos/haum/website/hooks/2296461",
    "test_url": "https://api.github.com/repos/haum/website/hooks/2296461/test",
    "id": 2296461,
    "name": "irc",
    "active": true,

#TODO

    "events": [
    "push",
    "issues",
    "issue_comment",
    "pull_request"
    ],

#TODO

    "config": {
    "server": "chat.freenode.net",
    "port": "6667",
    "room": "#haum",
    "nick": "GitHub_Bot",
    "branch_regexes": "",
    "nickserv_password": "",
    "password": "",
    "message_without_join": "1"
    },

#TODO

    "last_response": {
    "code": 200,
    "status": "active",
     "message": "OK"
    },

#TODO

    "updated_at": "2014-05-28T17:48:18Z",
    "created_at": "2014-05-22T10:11:52Z"

#TODO

#Gérer la liste des évènements notifiés par GitHub

Source : cette partie est un traduction du billet de 

On y accède de la façon suivante :

    curl -u '{votre-nom-github}' -H "Accept: application/json" 
    https://api.github.com/repos/{nom-du-propriétaire}/{nom-du-repo}/hooks

Ce qui nous donnerait dans le cadre du HAUM : 

    curl -u 'FredBlain' -H "Accept: application/json" \
    https://api.github.com/repos/haum/website/hooks

text

    "url": "https://api.github.com/repos/haum/website/hooks/2296461",
        "events": [
          "push",
          "pull_request"
        ],
    
text

    curl -u 'akrabat'  -H "Accept: application/json" -H "Content-type: application/json" -X PATCH \
    https://api.github.com/repos/joindin/joindin-api/hooks/932001 \
    -d '{"events":["push", "pull_request", "commit_comment", "pull_request_review_comment"]}'


----------
Ce billet en français est inspiré du billet de Rob Allen : ["Changing the GitHub IRC hooks notification events"][4].


  [1]: https://github.com/haum
  [2]: http://irc.lc/freenode/haum/
  [3]: http://git.io
  [4]: http://akrabat.com/computing/changing-the-github-irc-hooks-notification-events/
