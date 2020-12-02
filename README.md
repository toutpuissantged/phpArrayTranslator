# phpArrayTranslator
pour traduire les tableau en php 

# C'est quoi ?
lorsqu'on travail sur un site ou appli web multilinngues on est obliger de faire un fichiers lang dans laquelle on va traduire 
toutes nos differents tableau associatifs , la traduitions a la main est fastidieux , et je sais de quoi je parle ,
donc pour resoudre cet probleme que j'ai fait le PAT

## Installation
vous devez avoir d'installer python et php sur votre machine

et donc sous mac/ linux faire 
```
  sudo apt-get install python3
  sudo apt-get install php
  sudo pip3 install googletrans 
  gitclone https://github.com/toutpuissantged/phpArrayTranslator.git
  cd /phpArrayTranslator/translator/
  
```

## Usage
notre dossiers /translator contient 3 dossiers : data/ , php/ , python/
dans data/ on a 2 fichiers data.php et translate.php

alors le data.php va contenir le tableau que vous voulez traduire
copier coller le tableau dans le fichiers et lancer 
```cd /php/
  php parser.php
```
et dans le fichiers translate.php vous retrouverer votre tableau associatifs traduits 

pour selectionner la lang d'origine et de traduction on ouvre le fichires config.py qui se situe dans /python

et on change les attributs src('langues d'origine') et dest('langues de traduction') de la classe lng

## Contributing
vos contributions sont les bienvenu de plus que le programme est coder en 2 languages 

## License
[MIT](https://choosealicense.com/licenses/mit/)
