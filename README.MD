# Instalación

Instalar

`composer require desolatormagno/atlantis-theme`

Publicar

`php artisan vendor:publish --tag=atlantis-theme`

# Utilización

Basta tomar la vista **index** que esta dentro de la carpeta **resources/views/atlantis-theme** copiarla a una nueva ubicación y comenzar a trabajar sobre ella. 

# Configuración

Luego de instalado y publicado el paquete se copiaran todos los archivos necesarios, en la carpeta public se creara un nueva carpeta **vendor/atlantis-theme** con el contenido de todos los asset (CSS, Fonts, Img, JS) que utiliza el sistema. 

En la carpeta config se creara un nuevo archivo **theme.php**, el cual contendra 2 combinaciones de colores preconfigurados (claro y obscuro), y algunos atributos para el sistema, como **title** y **brand**.

Dentro de la carpeta de **resources/views** se almacenaran las vistas en la carpeta **atlantis-theme**, en estas se incluye la de layouts, una de partials, otra de ejemplos y una vista funcional en la raiz que sirve como base para el sistema.

Adicionalmente se cuenta con un grupo de stacks y sections los cuales permiten la modificación de ciertos aspectos de la vista, para así evitar la modificación directa de la plantilla como tal. 

# Yield

### navbar-brand 

Preconfigurado para utilizar el valor de theme.brand y en caso de no existir, utilizar app.name

### title 

Preconfigurado para utilizar el valor de theme.title y en caso de no existir, utilizar app.name

### content

Donde va todo el contenido de la pagina.

### sidebar-items
Aquí van todos los ítems del navbar

### pre-sidebar

en caso de necesitar algo previo al listado del navbar

## Example

``` 
@section('title')

Caracola

@endsection 
```
Sera suficiente para cambiarle el titulo a la web a **Caracola**

# Stack

### meta

Para todo los metadatos adicionales que se puedan necesitar

### script
Para script del sistema, tanto librerías adicionales como para código personalizado

### style

Para el estilo personalizado o inclusión de otras hojas de estilo.

### sidebar-extra

Sección adicional del NavBar, para casos cuando se deseen agregar ítems en vistas especificas.

Pendiente Traduccion

# Helpers Views

**partials/sidebar/separator**

Separador de seccion, crea un elemento con texto visible para poder crear secciones y subsecciones en el menu lateral, esta vista acepta como variable **$section** la cual sera el texto a mostrar.

(WIP los demás helpers)