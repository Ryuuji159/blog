# Comandos de git que olvido constantemente

<time datetime="2019-10-23">Oct 23, 2019</time>

Aquí ire dejando multiples comandos de git que he estado buscando muchas veces y siempre vuelvo a olvidar

### 1 - Sacar archivo o carpeta de la zona de stage
    :::bash
    git reset HEAD -- <archivo/carpeta>

### 2 - Deshacer ultimo commit
    :::bash
    git reset --soft HEAD~1

### 3 - Cambiar el nombre de una annotated tag
    :::bash
    git tag <new> <old> -f -a

### 4 - Deshabilitar fast forward por default
    :::bash
    git config --global merge.ff false

### 5 -  Siempre firmar commits
    :::bash
    git config --global commit.gpgsign true

### 6 -  Siempre mostrar diff en commit
    :::bash
    git config --global commit.verbose true

### 7 -  Push tags
    :::bash
    git push --tags

Esta lista ira creciendo a medida que valla necesitando nuevos comandos :3
