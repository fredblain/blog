<!--t Créer et configurer un hook Github pour IRC t-->

Je vous propose dans ce billet de voir rapidement comment configurer un service Github (appelé aussi "hook") pour être notifié sur votre chan IRC des évènements lié à l'un de vos repo git.

Prérecquis.

et certaines équipes derrière ces projets se réunissent sur des réseaux tels qu'IRC.
La plupart d'entre-vous le savent, GitHub propose une configuration assez poussée pour être notifié par mail lorsqu'un évènement lié à la gestion d'un repo git survient (push, pull-request, commentaire et autres). 

    curl -u 'feedoo' -H "Accept: application/json" \
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

**Note**: c'est après avoir suivi ce tuto de [Rob Allen][1] que j'ai eu envie de proposer ce billet en français.

  [1]: http://akrabat.com/computing/changing-the-github-irc-hooks-notification-events/