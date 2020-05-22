# Una mejor forma para contar utilizando HashMaps en Java

<time datetime="2019-10-17"> Oct 17, 2019 </time>

Este es un problema muy común y se presenta regularmente en multiples 
situaciones, tienes una lista de cosas que se repiten y tienes que contar sus 
ocurrencias, o tal vez necesitas contar los largos de una lista de palabras, 
etc (ahora no se me ocurren mas).

Previo a Java 8, la única forma (que a mi se me ocurra al menos) de hacer esto 
era así: 

    :::java
    String[] things = {
        "ball", "celery", "hand", "celery", 
        "mind", "ball", "fresh", "hand", "ball", 
        "fresh", "fresh"
    };

    Map<String, Integer> oldWay = new HashMap<>();

    for (String thing : things) {
        if (oldWay.containsKey(thing)) {
            oldWay.put(thing, oldWay.get(thing) + 1);
        } else {
            oldWay.put(thing, 1);
        }
    }


    System.out.println("ball   => " + oldWay.get("ball"));
    System.out.println("celery => " + oldWay.get("celery"));
    System.out.println("hand   => " + oldWay.get("hand"));
    System.out.println("fresh  => " + oldWay.get("fresh"));
    System.out.println("mind   => " + oldWay.get("mind"));

Lo cual resulta en:

    :::md
    ball   => 3
    celery => 2
    hand   => 2
    fresh  => 3
    mind   => 1

Este es el código que utilizaba siempre cuando estaba aprendiendo Java, pero 
es realmente confuso cuando estas empezando, al menos yo tuve muchos problemas 
con nulls porque no entendía realmente que estaba haciendo. 

Primero tenemos que comprobar si el elemento existe, si existe debemos 
obtenerlo para sumarlo y agregarlo al `HashMap`, y cuando no existe, se coloca 
la key con el valor por default, en este caso 1.

Pero este código puede ser mas corto y claro desde la llegada de Java 8 y 
actualmente estamos en Java 13 así que no hay escusa, ahora tenemos Lambdas y 
`HashMap` recibió nuevas funciones, entre ellas las que se usaran aquí, 
`putIfAbsent()` y `computeIfPresent()`: 

    :::java
    for (String thing : things) {
        eightWay.putIfAbsent(thing, 0);
        eightWay.computeIfPresent(thing, (key, value) ->  value + 1);
    }

`pufIfAbsent()` agrega una key solamente si no existe previamente y 
`computeIfPresent()` calcula el nuevo valor que contendrá la key con el 
lambda que se entrega en el segundo argumento, como los 2 serán ejecutados si 
es que el elemento no existe en el `HashMap`, se empieza a contar desde 0.

Pero tenemos una función que es mas concisa y al menos a mi me agrada mas para 
solucionar este problema, esta se llama `merge()`:

    :::java
    for (String thing : things) {
        betterWay.merge(thing, 1, (oldValue, newValue) -> oldValue + newValue);
    }

`merge()` toma por argumentos, la key que se agregara, el valor que se quiere 
agregar y un lambda que ejecutar si es ya existía la key, en el se podrá 
calcular el nuevo valor que en este caso suma el valor antiguo con el valor 
que se quiere agregar.

Incluso esta forma puede quedar aun mas corta si se utiliza una referencia de 
método, en ingles: method reference, que suena bastante mejor a mi gusto:

    :::java
    for (String thing : things) {
        evenBetterWay.merge(thing, 1, Integer::sum);
    }

Y esa seria una mejor forma de contar con `HashMaps`, no es que sea 
necesariamente mas rápido, de hecho ni siquiera he testeado su velocidad, pero 
el código queda mucho mas corto y claro, ademas, siempre se me olvida como se 
hace, así que ahora quedara escrito aquí para que mi futuro yo lo pueda 
recordar.
