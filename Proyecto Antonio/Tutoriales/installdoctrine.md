# Instalación y Configuración de Doctrine

<div style="text-align:justify">
Antes de nada debemos saber que es Doctrine. Supongo que a estas alturas del curso ya estáis cansados de escucharme decir esta palabra y de echo todos los pasos que he ido dando en la asignatura han ido orientados a que descubran ustedes la necesidad de usar Doctrine. Por tanto, se que sois capaces de responder a esta pregunta. ¿Qué es Doctrine? Ustedes responderían:

- Un ORM.
- Si, si, Object Relational Mapping, dirían algunos.
- Un código escrito por terceros que nos ayuda a trabajar mediante **Programación Orientada a Objetos** con los datos que nos proporciona una **Base de Datos Relacional**, dirían otros.
- Si, me he dado cuenta que me es complicado trabajar con mi clase GBD y las colecciones de objetos que estaba usando hasta ahora. Y espero, que Doctrine me ayude a solucionar este problema.

Pues, veo que con vuestras respuestas todos sabéis lo que es Doctrine.
*"Una herramienta de terceros capaz de generar un Modelo de Datos Orientado a Objetos partiendo de una Base de Datos Relacional y sus metadatos.O incluso, crear una Base de Datos Relacional habiendo creado primero un Modelo de Datos. Y en ambos casos, mantener la sincronización entre Base de Datos y Modelo"*

## Trabajando con espacios de nombres

Antes de empezar a trabajar con Doctrine y dado que en su código aparece implícita la utilización de espacios de nombres **NameSpace**, veamos este concepto de PHP.

Para ello, fijémonos en nuestro día a día de la programación. Hemos creado una serie de Clases de ayuda (guardadas en la carpeta Helper). Una de estas clases se llama GBD (Gestión de Base de Datos). Imagina que dicha clase se la pasas a un compañero para que la use, pero da la casualidad de que tu amígo ya tiene una clase llamada GBD (Gráficos Basados en Datos). Como puedes imaginar esto genera un error en su aplicación, pero joder (perdón pensaba que estaba en clase), un GBD es tuyo y el otro es de tu compañero, ¿qué pasa aquí? Pues, que PHP no lo sabe, para él, son dos clases con el mismo nombre y no sabe discernir entre ambas y eso genera el error.Enseñemos a PHP quien es quien,es decir, un GBD es de 2DAA y el otro de tu AMIGO. Esto se hace cualificando tu clase con la palabra reservada de PHP **namespace**, así tu clase GBD podría quedar así:

```html

    namespace 2ADD\Helper;
    class GBD
    {
        ...
    }
```

donde siguiendo el standard PSR-4, los espacios de nombres deben formarse como Proveedor\Namespace\Clase. Por tanto, con este código estamos indicando que la nuestra clase GBD la ha escrito 2DAA y en principio la vamos a almacenar en una carpeta llamada Helper.

Ahora nuestro amigo ya no debería tener problemas, nuestro GBD ya esta identificado.Pero horror, ahora en su código aparece un error indicando que la clase 2DAA\Helper\GBD no la encuentra (vamos ya sabéis, en ingles). ¿Qúe pasa aquí? Simple, tu amigo debe indicar que clase usar con la sentencia:

`use 2DAA\Helper\GBD`

o como alternativa declarar un objeto de la clase GBD como:

`$bd = new 2DAA\Helper\GBD(...)`

Vale, ya hemos solucionado el problema,pero ahora nuestros cargadores de clases dejan de funcionar,pues, dichas clases ahora están acompañadas de sus espacios de nombres. ¿Qué hacemos? ¿Modificar el código de nuestros cargadores? NOOOOO... me niego, que alguien haga algo por mí. ¿Quién va a ser el generoso? **COMPOSER**.

Otro concepto, horror.No os quejéis por algo habéis elegido este ciclo formativo y habéis tenido la mala suerte de ser yo quien imparta este módulo.

Y este juego va de disfrutar aprendiendo, así que adelante.

No quiero extenderme demasiado y entrar en el debate de porque debe existir Composer, pero si tenéis la suerte de trabajar el día de mañana en una empresa medianamente grande, lo entenderéis.
Composer, nuevamente es un producto escrito por personas desinteresadas, que viene a solucionar un problema muy común en el desarrollo de aplicaciones cuando estas alcanzan un tamaño apreciable y empezamos a usar librerías que a su vez dependen de otras librerías y así sucesivamente, convirtiendo el mantenimiento de la aplicación en un calvario.Por tanto:

Composer es un manejador de paquetes y dependencias entre librerías para el lenguaje PHP, al igual que NPM (en el cual se inspiro) lo es para node.js.Ademas, nos proporciona otras capacidades como el autoload que permite crear los cargadores de las clases, funciones y constantes que van a ser usadas en tu aplicación.Se usa a traves de linea de comandos y si quieren ustedes saber más diríjanse a esta página.[https://getcomposer.org/doc/](https://getcomposer.org/doc/).

Pues bien, sigamos estos pasos:

1.Instalación de composer.Descarguen la aplicación y sigan los pasos de la instalación.[https://getcomposer.org/download/](https://getcomposer.org/download/).

2.Una vez instalado en su directorio raíz (root) de la aplicación creen ustedes un archivo llamado **composer.json** con el siguiente contenido:


```json
{
    "autoload": {
        "psr-4": {
            "2DAA\\":"App/"
        }
    }
}
```
¿Qué significan estas líneas en json? Pues, estamos indicando dos cosas, la raíz de nuestro espacio de nombres que será 2DAA, es decir, nuestros espacios de nombres empiezan com 2DAA\..., y que dicho espacio de nombres debe empezar a buscar las clases en la carpeta App/ de nuestra aplicación. Por tanto, un espacio de nombres completo podría ser **2DAA\Helper**,haciendo referencia a las clases que se encuentran en la carpeta Helper dentro de App\\.

3.En tercer lugar ejecuten ustedes la siguiente linea de comandos:
```
composer dump-autoload
```

¿Qué ha pasado? Observen, se ha creado una carpeta llamada vendor en tu aplicación y dentro de ella un archivo **autoload.php** que deberás incluir a partir de ahora en tu aplicación y que sustituye a nuestros queridos cargadores.

```php
require_once './vendor/autoload.php
```

Bueno ya va siendo hora de volver a Doctrine.

## Instalación de Doctrine

Hay varias maneras de instalar Doctrine en tu aplicación, pero la más sencilla es ejecutar el siguiente comando en tu terminal:

```
composer require doctrine/orm
```

Si aún no existía la carpeta vendor, la creará, de todas maneras en dicha carpeta se copiaran todos los archivos necesarios para ejecutar Doctrine.

Ahora debemos configurar Doctrine para ello en nuestro directorio raíz creamos un archivo llamado **bootstrap.php** con el siguiente código:

```php
<?php
// bootstrap.php
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

//Directorio/s donde buscar las entidades
$paths = array(__DIR__."/App/Entidades");

// Configuración de la conexión a la base de datos
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => 'higuera2@',
    'dbname'   => 'veterinaria',
);
// Configuración por defecto para crear una instancia de Doctrine ORM que usa anotaciones
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);
$entityManager = EntityManager::create($dbParams, $config);
```

A partir de ahora nuestro objeto Doctrine ORM esta declarado en la variable **$entityManager**.

Doctrine también instala un programa de consola que nos permite ejecutar algunos comandos que ayudan en el desarrollo y preparación de nuestro modelo de datos. Dicho programa según el tutorial de instalación se encuentra en vendor/bin/doctrine, pero si lo ejecutamos obtendremos errores, por ello, tendremos que usar otra versión localizada en **vendor/doctrine/orm/bin/doctrine**, que ejecutaríamos con la linea de comandos:

```php
php vendor/doctrine/orm/bin/doctrine <comando> opciones
```
Ahora bien, para poder ejecutar este comando necesitamos configurar la consola de Symfony incluida en la instalación y ello lo conseguimos creando en el directorio raíz un archivo llamado **cli-config.php** con el siguiente contenido:

```php
<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

// replace with file to your own project bootstrap
require_once 'bootstrap.php';

// replace with mechanism to retrieve EntityManager in your app
//$entityManager = GetEntityManager();

return ConsoleRunner::createHelperSet($entityManager);
```

Por fin, ya esta todo preparado para empezar a utilizar Doctrine en nuestra aplicación.
