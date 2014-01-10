# BeatRock PHP

BeatRock v4 es un Framework de PHP para el desarrollo de aplicaciones web y aplicaciones de consola de la forma más sencilla y rápida.

## Ejemplos

Crear una página:

    require 'init.php';
    
    $page['id']             = 'index.html';     // Vista. Ubicación: /app/views/index.html
    $page['name']           = 'Inicio/Home';    // Titulo de la página.
    $page['description']    = 'Descripción de la página para Facebook, Google, etc...';
    
Agregar una función a un ayudante:

    require 'init.php';
    
    $text = Utils::BBCode('¡Mi primera [b]aplicación[/b]!'); // BBCode SI existe en el ayudante "Utils"
    
    //$text = Utils::NumCode('¡Mi primera [9]aplicación[/9]!'); // Esta función no existe y daría error.
    
    // Agregamos la función.
    Utils::AddMethod('NumCode', function($str)  
    {  
        // Código de la nueva función.
        $str = str_replace('[9]', '<b>', $str);
        $str = str_replace('[/9]', '</b>', $str);
        
        return $str;
    });
    
    // Ahora podemos usarlo.
    $text = Utils::NumCode('¡Mi primera [9]aplicación[/9]!');
    
Haciendo que un código se ejecute antes de imprimir la vista:

    // Archivo: pre.micodigo.php
    // Creado en: /app/pre.micodigo.php
    
    require '../init.php';
    
    CatClass::DoCatThings();
    
    // Todos los archivos que empiecen por "pre." y se ubiquen en la carpeta "app" se
    // ejecutarán después de iniciar los procesos iniciales de BeatRock.
    
Modificando el compilador de vistas:

    View::OnPreBuild(function(&$html)
    {
        $html = preg_replace('/\{helloworld\}/', '<?="Hola Mundo"?>', $html);
        $html = preg_replace('/\{hello=(.+?)\}/', '<?="Hola $1"?>', $html);
    });
    
    // En la vista:
    // Esto es una prueba <b>{helloworld}</b> o... <b>{hello=Antonio}</b>
    
    // Resultado (en la vista):
    // Esto es una prueba <b>Hola Mundo</b> o... <b>Hola Antonio</b> 


## Versión: Alpha

El código que se encuentra en este repositorio es proviniente de una versión incompleta de BeatRock, solo son los archivos independientes de la aplicación.

Lo que falta:

- Kernel: El núcleo del framework.
- Instalador

Estos serán agregados cuando se presente una versión estable del framework.

### Licencia

El código de BeatRock se encuentra bajo la licencia [Creative Commons Atribución-CompartirIgual 2.5 México](http://creativecommons.org/licenses/by-sa/2.5/mx/).