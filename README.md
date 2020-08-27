# Laravel
Proyecto de Laravel para presentación, a continuación se pueden ver detalles de instalación y configuración de Laravel.


Instalación

Requisitos para este tutorial: 

	->Laravel utiliza Composer para gestionar sus dependencias. Entonces, antes de usar Laravel, asegúrese de tener Composer instalado en su máquina. Su funcionamiento es similar al npm de Node.js.
	->Usaremos Xampp como servidor
	->Se usan los pasos descritos en la página oficial: https://laravel.com/docs/7.x#installation 

Proceso de instalación:

	1. Dado que la función de composer es administrar dependencias de php, se debe instalar primero Xampp, cuya instalación es sencilla y por tanto no se explicará detalladamente en este tutorial.	Descargar la versión para Windows de su instalador el cual se puede encontrar en su página oficial : https://getcomposer.org/download/

	2. Iniciamos el instalador. En este caso la dependencia se instalará únicamente para el usuario principal del computador. 
	Seleccionamos el tipo de instalación en este caso será una instalación genérica.

	3. Seleccionamos la línea de comandos de php que tenemos instalada en el computador, en este caso autodetecta la de Xampp.

	4. En caso de necesitar un proxy para la conexión en la red, el instalador trae una opción para ingresarlo, en este caso la saltamos.

	5. Verificamos que se encuentre todo correcto para seguir con la instalación.


	6. Procedemos con la descarga e instalación de dependencias.


	7. Debemos aceptar las licencias de php para proceder.  A continuación, dada la instalación de Composer, se nos explica que al haberlo instalado puede que otras dependencias aún no lo reconozcan, por lo que se dan algunas sugerencias en caso de errores.  Con esto termina la instalación de Composer.
(Ahora,se debe verificar que la ruta de composer se encuentre en las variables de entorno, de esta manera podemos llamarlo para crear un nuevo proyecto. )

Creación y despliegue: 
	
	1. Para crear un nuevo proyecto, nos dirigimos en cmd a la ruta en donde se desea crear el proyecto y allí ejecutamos la línea:

			composer create-project --prefer-dist laravel/laravel blog


	2. Seguidamente se necesita desplegar la línea de comandos de Laravel, llamada Artisan, para lo cual primero se debe ingresar a la carpeta blog y luego ingresar el siguiente comando en la consola:
	php artisan serve

	3.Ahora, podemos acceder a la dirección http://localhost:8000/ y allí ver la página inicial de Laravel.
