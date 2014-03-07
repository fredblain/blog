<!--t Lightpack - un ambilight open source t-->

***Brouillon en cours de rédaction.***

Voilà un billet sur un projet que j'ai découvert alors qu'il n'était encore qu'à l'état de levée de fond sur Kickstarter.
Il a depuis fait son petit bonhomme de chemin puisqu'il est aujourd'hui passé en production et est vendu à travers le monde. Ce projet, c'est **Lightpack** !

*L'objectif ici n'est pas de rentrer dans les détails de ce projet, mais bien d'en faire l'introduction pour, peut-être, vous donner l'envie comme moi d'en posséder un.*

##Kickstarter##

Si vous n'êtes pas familier de ce nom, sachez simplement que [Kickstarter][1] est aux projets technologiques, jeux, mode, etc. ce que [MyMajorCompany][2] est à la musique : une plateforme de financement particif.  
Imaginons 2min que vous ayez l'idée du siècle, mais pas le financement pour la concrétiser. Soumettez votre projet sur la plateforme en détaillant ses différents aspects (budgétaires notamment...). Dès lors, un appel à financement est lancé pour une 60-aine de jours. S'il s'avère que votre proposition suscite les foules, alors vous vous retrouverez peut-être avec une dotation au-delà de ce que vous aviez prévu, vous permettant d'aller plus loin dans votre idée. C'est aussi ça Kickstarter, et c'est exactement ce qui s'est passé pour Lightpack :

- 5,812 backers (=*partenaires financiers* en anglais)
- $500,784 de levée de fonds pour un objectif de budget de $261,962

Soit un financement à 191% qui a permis aux porteurs du projet de revoir leurs ambitions à la hausse avec, par exemple, le développement d'une application de gestion sur périphériques mobiles.  
On peut donc dire que la campagne de financement a plutôt bien marché pour ce projet... mais qu'en est-il au juste ?

#Lightpack#

Lightpack c'est un kit ambilight\* qui diffusera de la lumière autours de l'écran sur lequel il est fixé.
Inspiré de la technologie mise au point par Philips, il fonctionnera avec votre PC, Mac ou encore, par exemple, la Raspeberry-Pi que vous utilisez comme media-center dans votre salon. Le graphisme suivant résume l'ensemble :

![enter image description here][3]

###-- un confort visuel###

L'intérêt principal de ce dispositif, présenté comme scientifiquement prouvé, est de réduire la différence d'éclairage entre les scènes sombres et celles plus éclairées, améliorant ainsi le confort visuel.
En théorie avec ce dispositif, vos yeux mettront env. 1min contre 5min auparavant pour s'adapter à une image sombre, et moins de 5sec pour passer d'une image sombre à une image lumineuse.
De fait, vous fatiguez moins, et vous abîmez moins vos yeux.

Et ça ne s'arrête pas là. L'extension de l'image par ce dispositif vous permet de mieux profiter de la diagonale de votre écran. Le principe est simple

Ces aspects scientifiques sont présentés plus en détails dans une [page dédiée][4] sur le site du projet.

###-- un boîtier de contrôle, des leds et c'est tout###

Pour env. $120 (frais de port inclus) ce kit ambilight se compose d'un boîtier de contrôle et d'un ensemble de 10 leds comme l'illustre l'image ci-dessous dont l'assemblage est des plus simples.

![enter image description here][5]
\[[galerie d'images][6]\]

Disposez vos leds derrière votre écran selon la disposition que vous souhaitez : tout autour de l'écran comme sur l'illustration précédente, sur les côté et le bord supérieur uniquement, ou bien seulement sur les côtés. C'est à vous de voir ce qui vous convient le mieux.
Pour ce qui est du boitier de contrôle, coller-le à l'arrière de votre écran, raccordez-le au secteur pour l'alimentation, et en USB à votre source. Et c'est tout. Vous avez terminé l'installation de votre kit.  
Pour pouvoir l'utiliser, il ne vous reste plus qu'à installer le logiciel Primastik compatible Windows, Mac OS et GNU/Linux. Voir [ici][7] pour une utilisation avec une Raspberry-Pi.

**Note :** Lightpack se connecte en USB sur la source et non en HDMI compte-tenu du fait qu'il aurait fallu payer une licence au consortium dont le coût était trop conséquent pour le projet. 
Le principal inconvénient à cette alternative est que vous ne pouvez pas brancher votre kit directement sur votre TV, même si celle-ci dispose d'un port USB. Il est nécessaire que la source puisse faire tourner le logiciel de capture.

###-- un projet "146%" open-source###

Lightpack est un projet totalement open-source. Tout, du circuit imprimé, des composants, les codes sources des logiciels et du firmware sont sous licence GPL. Les porteurs du projet vont jusqu'à revendiquer avoir conçu leur circuit imprimé pour faciliter le hack amateur et encourager le Do-It-Yourself.
Si vous êtes intéressé par contribuer à ce projet, proposer un nouveau plug-in ou plus simplement pour jeter un œil au code source et aux spécifications techniques, toutes les informations sont sur le repo [github officiel du projet][8] !

TODO: conclusion..

-----
\* ambilight = "ambient lighting" = éclairage d'ambiance


  [1]: https://www.kickstarter.com/
  [2]: http://www.mymajorcompany.com/
  [3]: http://lightpack.tv/images/howitworks.jpg
  [4]: http://lightpack.tv/science
  [5]: https://lh4.googleusercontent.com/-WWMdJXXrG7w/UWwVhpTrCbI/AAAAAAAAMeo/aXrsCSdkjW4/w985-h607-no/IMG_0234.jpg
  [6]: https://plus.google.com/u/0/photos/+MikhailSannikov/albums/5867069291294378561
  [7]: http://blog.fredblain.org//2014/03/r-pi-lightpack-hyperion
  [8]: https://github.com/Atarity/Lightpack