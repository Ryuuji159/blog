# Comandos de git que olvido constantemente

<time datetime="2019-10-23">Oct 23, 2019</time>

Aquí ire dejando multiples comandos de git que he estado buscando muchas veces 
y siempre vuelvo a olvidar

### 1 - Sacar archivo o carpeta de la zona de stage
Lo tipico que tengo un archivo que no deberia estar en la zona de stage, esta
es la que se crea cuando agregar archivos antes de hacer el commit.

Si no los quiero ahi uso el siguiente comando.

    :::bash
    git reset HEAD -- <archivo/carpeta>

### 2 - Deshacer ultimo commit
Siempre que el commit que se hizo se encuentra erroneo y se necesita volver a un
estado anterior se puede utilizar el siguiente comando.

El 1 en HEAD~1 se puede cambiar por la cantidad de commits hacia atras que se 
necesitan ir y tambien se puede cambiar el HEAD~1 completo por el hash del commit
al que se quiere volver.

    :::bash
    git reset --soft HEAD~1

### 3 - Cambiar el nombre de una annotated tag
Las anotated tags son basicamente tags las cuales tienen un commit asociado, a 
veces al crearlas se ingresa mal el nombre, por lo que este comando soluciona
ese problema

    :::bash
    git tag <new> <old> -f -a

### 4 - Deshabilitar fast forward por default
Esto es parte de la configuracion de git, cuando haces merge de una branch y no
hay commits entre medio, git por default hace fast forward, lo que no deja 
registro de que existia una branch en la cual se trabajo.

No me gusta este comportamiento asi que lo mantengo desactivado

    :::bash
    git config --global merge.ff false

### 5 -  Siempre firmar commits
Git permite usar tu gpg key para firmar los commits, asegurando que son tuyos y
no de otra persona.

Personalmente no es que sea realmente util, pero es bueno tenerlo activado

    :::bash
    git config --global commit.gpgsign true

### 6 -  Siempre mostrar diff en commit
Cuando se hace un commit muestra los cambios realizados en el editor.

    :::bash
    git config --global commit.verbose true

### 7 -  Push tags
Por alguna razon los tags no se suben en un push regular, hay que incluir la 
opcion --tags

    :::bash
    git push --tags

Esta lista ira creciendo a medida que valla necesitando nuevos comandos :3
