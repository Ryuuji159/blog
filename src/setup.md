#Setup
<time datetime="2020-04-07"> Abr 7, 2020 </time>

![Screenshot de mi setup](https://static.danielcortes.xyz/images/1586308490.png)

Actualmente el setup que estoy usando a cambiado, ya no puedo utilizar un tiling window manager como `herbstluftwm`, porque estoy obligado a usar VirtualBox para poder correr Microsoft Teams, que es lo que esta utilizando mi universidad para hacer clases y VirtualBox tiene problemas al entrar a modo fullscreen o seamless.

Así que bueno, me cambie a `cwm` el cual es un stacking window manager desarrollado como parte de `OpenBSD`, usa tan solo un archivo de configuración en el `$HOME` donde se pueden configurar grupos, los que son equivalente a los típicos workspaces, y cambiar los key bindings para ejecutar programas, mover ventanas en la pantalla y entre grupos, hay solo un par de opciones mas que cambiar en realidad por lo que se siente bastante minimalista comparado con `OpenBox` por usar XML y tener mil opciones.

La configuración que estoy usando para `cwm` es la siguiente:

    :::sh
    moveamount 10
    gap 25 15 15 15

    ignore polybar

    sticky yes

    autogroup 1 Firefox
    autogroup 8 Spotify
    autogroup 9 Thunderbird

    unbind-key all
    unbind-mouse all

    bind-key     4S-r   restart
    bind-key     4S-e   quit
    bind-key     4-d    "dmenu_custom -r -e cwm"

    bind-key     4C-h   window-resize-left
    bind-key     4C-j   window-resize-down
    bind-key     4C-k   window-resize-up
    bind-key     4C-l   window-resize-right

    bind-key     4-f    window-maximize
    bind-key     4S-f   window-fullscreen

    bind-key     M-Tab  window-cycle-ingroup
    bind-key     4S-q   window-delete

    bind-mouse   4-1    window-move
    bind-mouse   4-3    window-resize
    bind-mouse   4-2    window-stick

    bind-key     4-1    group-only-1
    bind-key     4-2    group-only-2
    bind-key     4-3    group-only-3
    bind-key     4-4    group-only-4
    bind-key     4-5    group-only-5
    bind-key     4-6    group-only-6
    bind-key     4-7    group-only-7
    bind-key     4-8    group-only-8
    bind-key     4-9    group-only-9

    bind-key     4S-1   window-movetogroup-1
    bind-key     4S-2   window-movetogroup-2
    bind-key     4S-3   window-movetogroup-3
    bind-key     4S-4   window-movetogroup-4
    bind-key     4S-5   window-movetogroup-5
    bind-key     4S-6   window-movetogroup-6
    bind-key     4S-7   window-movetogroup-7
    bind-key     4S-8   window-movetogroup-8
    bind-key     4S-9   window-movetogroup-9

    bind-key     4S-h    "tile l"
    bind-key     4S-j    "tile b"
    bind-key     4S-k    "tile t"
    bind-key     4S-l    "tile r"

    bind-key     4-h     "move l"
    bind-key     4-j     "move b"
    bind-key     4-k     "move t"
    bind-key     4-l     "move r"

Realmente la mayoría de la configuración que tengo es para mover las ventanas alrededor al estilo de un tiling window manager, porque esas costumbres no mueren.

Lo otro que tengo es `polybar` con un script bastante pequeño, porque cuando configure esto mi idea era que realmente era un ambiente para usar solo la maquina virtual de Windows, por lo que lo único que necesitaría saber en cada momento era la hora, si mi micrófono esta muteado y la batería disponible.

    [bar/bar]
    width  = 100%
    height = 15 
    override-redirect=true

    background = ${xrdb:background:#222}
    foreground = ${xrdb:foreground:#fff}

    padding = 3
    module-margin = 1  

    font-0 = "monospace:pixelsize=10;0"

    separator = |
    wm-name = polybar

    modules-left = window
    modules-right = muted date battery

    [module/window]
    type = internal/xwindow

    [module/battery]
    type    = internal/battery
    battery = BAT0
    adapter = AC
    full-at = 100

    [module/date]
    type     = internal/date
    interval = 10

    date  = %d/%m
    time  = %H:%M
    label = %time%

    [module/muted]
    type = custom/script
    exec = is_muted
    tail = true

Para configurar el color y todo eso estoy simplemente usando pywal con la imagen de fondo y la saturacion al 100%

Lo ultimo que afecta directamente a todo lo que hago, es la configuración de `urxvt`, la cual igual que todo, bastante cortita, la fuente que sea la `monospace` global, actualmente es `envypn`, un borde interno y quitando la scrollbar que realmente no hace falta.

    URxvt.font: xft:monospace
    URxvt.letterSpace: 0
    URxvt.lineSpace: 1
    URxvt.internalBorder: 30
    URxvt.cursorBlink: true
    URxvt.cursorUnderline: false
    URxvt.scrollBar: false
    URxvt.saveLines: 10000
    URxvt.depth: 32


Y eso es en resumen este setup que ocupo ahorita, hay unos cuantos scripts que uso comúnmente, `screenshot`, `is_mute`, `move`, `tile` y `cpu`, ademas de varios programas que uso siempre, `dmenu`, `pass`, `sxhkd` y otros, todo esto esta subido a mi `git`, al menos lo intento mantener actualizado.
