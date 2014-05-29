<!--t Activer un Github hook pour IRC t-->

Nous avons récemment mis en place au HAUM des Github hooks (ou services) sur nos principaux [dépôts Git][1], afin que les membres de l'association soient notifiés des évènements intéressants y survenant (push, pull-request, commentaires, autres) et ce, directement sur le [chan IRC][2] de l'association.

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



#Activer un webservice Github pour IRC

Tout cela n'est en fait pas bien compliqué, Github mettant à disposition tout le nécessaire, vous verrez.
Dans le cas d'un Github Hook pour IRC, il suffit 
Pour activer un hook IRC, rendez-vous dans les paramètres de votre dépôts, section "webhooks & services"

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
Ce billet en français est inspiré du billet de Rob Allen : ["Changing the GitHub IRC hooks notification events"][3].

  [1]: https://github.com/haum
  [2]: http://irc.lc/freenode/haum/
  [3]: http://akrabat.com/computing/changing-the-github-irc-hooks-notification-events/