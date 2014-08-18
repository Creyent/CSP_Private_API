# Documentacion de la API

## /api/categorias ##

### `GET` /api/categorias.{_format} ###

_Obtiene la colección de Categorias._

#### Requirements ####

**_format**

  - Requirement: json|xml|html

#### Filters ####

offset:

  * Requirement: \d+
  * Description: Offset from which to start listing notes.

limit:

  * Requirement: \d+
  * Description: How many notes to return.
  * Default: 20

order_by:

  * Requirement: 
  * Description: Order by fields. Must be an array ie. &order_by[name]=ASC&order_by[description]=DESC

filters:

  * Requirement: 
  * Description: Filter by fields. Must be an array ie. &filters[id]=3

#### Response ####

id:

  * type: integer

nombre:

  * type: string

descripcion:

  * type: string


### `POST` /api/categorias.{_format} ###

_Crea una nueva categoria con los datos enviados._

#### Requirements ####

**_format**

  - Requirement: json|xml|html

#### Parameters ####

csp_genericobundle_categorias[nombre]:

  * type: string
  * required: true

csp_genericobundle_categorias[descripcion]:

  * type: string
  * required: false

#### Response ####

id:

  * type: integer

nombre:

  * type: string

descripcion:

  * type: string


## /api/categorias/{entity} ##

### `GET` /api/categorias/{entity}.{_format} ###

_Obtiene la Categoria con el ID indicado._

#### Requirements ####

**_format**

  - Requirement: json|xml|html
**entity**


#### Response ####

id:

  * type: integer

nombre:

  * type: string

descripcion:

  * type: string


### `PATCH` /api/categorias/{entity}.{_format} ###

_Actualiza parte de la categoria indicada con los datos enviados._

#### Requirements ####

**_format**

  - Requirement: json|xml|html
**entity**


#### Parameters ####

csp_genericobundle_categorias[nombre]:

  * type: string
  * required: true

csp_genericobundle_categorias[descripcion]:

  * type: string
  * required: false


### `PUT` /api/categorias/{entity}.{_format} ###

_Actualiza la categoria indicada con los datos enviados._

#### Requirements ####

**_format**

  - Requirement: json|xml|html
**entity**


#### Parameters ####

csp_genericobundle_categorias[nombre]:

  * type: string
  * required: true

csp_genericobundle_categorias[descripcion]:

  * type: string
  * required: false


### `DELETE` /api/categorias/{entity}.{_format} ###

_Borra la categoria con el ID indicado._

#### Requirements ####

**_format**

  - Requirement: json|xml|html
**entity**


#### Parameters ####

csp_genericobundle_categorias[nombre]:

  * type: string
  * required: true

csp_genericobundle_categorias[descripcion]:

  * type: string
  * required: false


## /api/clientes ##

### `GET` /api/clientes.{_format} ###

_Obtiene la colección de Clientes._

#### Requirements ####

**_format**

  - Requirement: json|xml|html

#### Filters ####

offset:

  * Requirement: \d+
  * Description: Offset from which to start listing notes.

limit:

  * Requirement: \d+
  * Description: How many notes to return.
  * Default: 20

order_by:

  * Requirement: 
  * Description: Order by fields. Must be an array ie. &order_by[name]=ASC&order_by[description]=DESC

filters:

  * Requirement: 
  * Description: Filter by fields. Must be an array ie. &filters[id]=3

#### Response ####

id:

  * type: integer

nombre:

  * type: string

apellido:

  * type: string

nit:

  * type: string

direccion:

  * type: string

telefono:

  * type: string


### `POST` /api/clientes.{_format} ###

_Crea un nuevo Cliente con los datos enviados._

#### Requirements ####

**_format**

  - Requirement: json|xml|html

#### Parameters ####

csp_genericobundle_clientes[nombre]:

  * type: string
  * required: true

csp_genericobundle_clientes[apellido]:

  * type: string
  * required: true

csp_genericobundle_clientes[nit]:

  * type: string
  * required: true

csp_genericobundle_clientes[direccion]:

  * type: string
  * required: true

csp_genericobundle_clientes[telefono]:

  * type: string
  * required: true

#### Response ####

id:

  * type: integer

nombre:

  * type: string

apellido:

  * type: string

nit:

  * type: string

direccion:

  * type: string

telefono:

  * type: string


## /api/clientes/{entity} ##

### `PATCH` /api/clientes/{entity}.{_format} ###

_Actualiza parte del Cliente indicado con los datos enviados._

#### Requirements ####

**_format**

  - Requirement: json|xml|html
**entity**


#### Parameters ####

csp_genericobundle_clientes[nombre]:

  * type: string
  * required: true

csp_genericobundle_clientes[apellido]:

  * type: string
  * required: true

csp_genericobundle_clientes[nit]:

  * type: string
  * required: true

csp_genericobundle_clientes[direccion]:

  * type: string
  * required: true

csp_genericobundle_clientes[telefono]:

  * type: string
  * required: true


### `GET` /api/clientes/{entity}.{_format} ###

_Obtiene el Cliente con el ID indicado._

#### Requirements ####

**_format**

  - Requirement: json|xml|html
**entity**


#### Response ####

id:

  * type: integer

nombre:

  * type: string

apellido:

  * type: string

nit:

  * type: string

direccion:

  * type: string

telefono:

  * type: string


### `PUT` /api/clientes/{entity}.{_format} ###

_Actualiza el Cliente indicadp con los datos enviados._

#### Requirements ####

**_format**

  - Requirement: json|xml|html
**entity**


#### Parameters ####

csp_genericobundle_clientes[nombre]:

  * type: string
  * required: true

csp_genericobundle_clientes[apellido]:

  * type: string
  * required: true

csp_genericobundle_clientes[nit]:

  * type: string
  * required: true

csp_genericobundle_clientes[direccion]:

  * type: string
  * required: true

csp_genericobundle_clientes[telefono]:

  * type: string
  * required: true


### `DELETE` /api/clientes/{entity}.{_format} ###

_Borra el Cliente con el ID indicado._

#### Requirements ####

**_format**

  - Requirement: json|xml|html
**entity**


#### Parameters ####

csp_genericobundle_clientes[nombre]:

  * type: string
  * required: true

csp_genericobundle_clientes[apellido]:

  * type: string
  * required: true

csp_genericobundle_clientes[nit]:

  * type: string
  * required: true

csp_genericobundle_clientes[direccion]:

  * type: string
  * required: true

csp_genericobundle_clientes[telefono]:

  * type: string
  * required: true


## /api/empleados ##

### `GET` /api/empleados.{_format} ###

_Obtiene la colección de Empleados._

#### Requirements ####

**_format**

  - Requirement: json|xml|html

#### Filters ####

offset:

  * Requirement: \d+
  * Description: Offset from which to start listing notes.

limit:

  * Requirement: \d+
  * Description: How many notes to return.
  * Default: 20

order_by:

  * Requirement: 
  * Description: Order by fields. Must be an array ie. &order_by[name]=ASC&order_by[description]=DESC

filters:

  * Requirement: 
  * Description: Filter by fields. Must be an array ie. &filters[id]=3

#### Response ####

id:

  * type: integer

nombre:

  * type: string

apellido:

  * type: string

direccion:

  * type: string

email:

  * type: string


### `POST` /api/empleados.{_format} ###

_Crea un nuevo empleado con los datos enviados._

#### Requirements ####

**_format**

  - Requirement: json|xml|html

#### Parameters ####

csp_genericobundle_empleados[nombre]:

  * type: string
  * required: true

csp_genericobundle_empleados[apellido]:

  * type: string
  * required: true

csp_genericobundle_empleados[direccion]:

  * type: string
  * required: true

csp_genericobundle_empleados[email]:

  * type: string
  * required: true

#### Response ####

id:

  * type: integer

nombre:

  * type: string

apellido:

  * type: string

direccion:

  * type: string

email:

  * type: string


## /api/empleados/{entity} ##

### `PATCH` /api/empleados/{entity}.{_format} ###

_Actualiza parte del Empleado indicado con los datos enviados._

#### Requirements ####

**_format**

  - Requirement: json|xml|html
**entity**


#### Parameters ####

csp_genericobundle_empleados[nombre]:

  * type: string
  * required: true

csp_genericobundle_empleados[apellido]:

  * type: string
  * required: true

csp_genericobundle_empleados[direccion]:

  * type: string
  * required: true

csp_genericobundle_empleados[email]:

  * type: string
  * required: true


### `GET` /api/empleados/{entity}.{_format} ###

_Obtiene el Empleado con el ID indicado._

#### Requirements ####

**_format**

  - Requirement: json|xml|html
**entity**


#### Response ####

id:

  * type: integer

nombre:

  * type: string

apellido:

  * type: string

direccion:

  * type: string

email:

  * type: string


### `PUT` /api/empleados/{entity}.{_format} ###

_Actualiza el Empleado indicadp con los datos enviados._

#### Requirements ####

**_format**

  - Requirement: json|xml|html
**entity**


#### Parameters ####

csp_genericobundle_empleados[nombre]:

  * type: string
  * required: true

csp_genericobundle_empleados[apellido]:

  * type: string
  * required: true

csp_genericobundle_empleados[direccion]:

  * type: string
  * required: true

csp_genericobundle_empleados[email]:

  * type: string
  * required: true


### `DELETE` /api/empleados/{entity}.{_format} ###

_Borra el Empleado con el ID indicado._

#### Requirements ####

**_format**

  - Requirement: json|xml|html
**entity**


#### Parameters ####

csp_genericobundle_empleados[nombre]:

  * type: string
  * required: true

csp_genericobundle_empleados[apellido]:

  * type: string
  * required: true

csp_genericobundle_empleados[direccion]:

  * type: string
  * required: true

csp_genericobundle_empleados[email]:

  * type: string
  * required: true


## /api/productos ##

### `GET` /api/productos.{_format} ###

_Obtiene la colección de Productos._

#### Requirements ####

**_format**

  - Requirement: json|xml|html

#### Filters ####

offset:

  * Requirement: \d+
  * Description: Offset from which to start listing notes.

limit:

  * Requirement: \d+
  * Description: How many notes to return.
  * Default: 20

order_by:

  * Requirement: 
  * Description: Order by fields. Must be an array ie. &order_by[name]=ASC&order_by[description]=DESC

filters:

  * Requirement: 
  * Description: Filter by fields. Must be an array ie. &filters[id]=3

#### Response ####

id:

  * type: integer

codigo:

  * type: string

nombre:

  * type: string

costo:

  * type: float

precio:

  * type: float

existencias:

  * type: integer

idcategoria:

  * type: object (Categorias)

idcategoria[id]:

  * type: integer

idcategoria[nombre]:

  * type: string

idcategoria[descripcion]:

  * type: string


### `POST` /api/productos.{_format} ###

_Crea un nuevo Producto con los datos enviados._

#### Requirements ####

**_format**

  - Requirement: json|xml|html

#### Parameters ####

csp_genericobundle_productos[codigo]:

  * type: string
  * required: true

csp_genericobundle_productos[nombre]:

  * type: string
  * required: true

csp_genericobundle_productos[costo]:

  * type: float
  * required: true

csp_genericobundle_productos[precio]:

  * type: float
  * required: true

csp_genericobundle_productos[existencias]:

  * type: int
  * required: true

csp_genericobundle_productos[idcategoria]:

  * type: choice
  * required: true

#### Response ####

id:

  * type: integer

codigo:

  * type: string

nombre:

  * type: string

costo:

  * type: float

precio:

  * type: float

existencias:

  * type: integer

idcategoria:

  * type: object (Categorias)

idcategoria[id]:

  * type: integer

idcategoria[nombre]:

  * type: string

idcategoria[descripcion]:

  * type: string


## /api/productos/{entity} ##

### `PATCH` /api/productos/{entity}.{_format} ###

_Actualiza parte del Producto indicado con los datos enviados._

#### Requirements ####

**_format**

  - Requirement: json|xml|html
**entity**


#### Parameters ####

csp_genericobundle_productos[codigo]:

  * type: string
  * required: true

csp_genericobundle_productos[nombre]:

  * type: string
  * required: true

csp_genericobundle_productos[costo]:

  * type: float
  * required: true

csp_genericobundle_productos[precio]:

  * type: float
  * required: true

csp_genericobundle_productos[existencias]:

  * type: int
  * required: true

csp_genericobundle_productos[idcategoria]:

  * type: choice
  * required: true


### `GET` /api/productos/{entity}.{_format} ###

_Obtiene el Producto con el ID indicado._

#### Requirements ####

**_format**

  - Requirement: json|xml|html
**entity**


#### Response ####

id:

  * type: integer

codigo:

  * type: string

nombre:

  * type: string

costo:

  * type: float

precio:

  * type: float

existencias:

  * type: integer

idcategoria:

  * type: object (Categorias)

idcategoria[id]:

  * type: integer

idcategoria[nombre]:

  * type: string

idcategoria[descripcion]:

  * type: string


### `PUT` /api/productos/{entity}.{_format} ###

_Actualiza el Producto indicadp con los datos enviados._

#### Requirements ####

**_format**

  - Requirement: json|xml|html
**entity**


#### Parameters ####

csp_genericobundle_productos[codigo]:

  * type: string
  * required: true

csp_genericobundle_productos[nombre]:

  * type: string
  * required: true

csp_genericobundle_productos[costo]:

  * type: float
  * required: true

csp_genericobundle_productos[precio]:

  * type: float
  * required: true

csp_genericobundle_productos[existencias]:

  * type: int
  * required: true

csp_genericobundle_productos[idcategoria]:

  * type: choice
  * required: true


### `DELETE` /api/productos/{entity}.{_format} ###

_Borra el Producto con el ID indicado._

#### Requirements ####

**_format**

  - Requirement: json|xml|html
**entity**


#### Parameters ####

csp_genericobundle_productos[codigo]:

  * type: string
  * required: true

csp_genericobundle_productos[nombre]:

  * type: string
  * required: true

csp_genericobundle_productos[costo]:

  * type: float
  * required: true

csp_genericobundle_productos[precio]:

  * type: float
  * required: true

csp_genericobundle_productos[existencias]:

  * type: int
  * required: true

csp_genericobundle_productos[idcategoria]:

  * type: choice
  * required: true


## /api/proveedores ##

### `GET` /api/proveedores.{_format} ###

_Obtiene la colección de Proveedores._

#### Requirements ####

**_format**

  - Requirement: json|xml|html

#### Filters ####

offset:

  * Requirement: \d+
  * Description: Offset from which to start listing notes.

limit:

  * Requirement: \d+
  * Description: How many notes to return.
  * Default: 20

order_by:

  * Requirement: 
  * Description: Order by fields. Must be an array ie. &order_by[name]=ASC&order_by[description]=DESC

filters:

  * Requirement: 
  * Description: Filter by fields. Must be an array ie. &filters[id]=3

#### Response ####

id:

  * type: integer

nombre:

  * type: string

direccion:

  * type: string

telefono:

  * type: string


### `POST` /api/proveedores.{_format} ###

_Crea un nuevo proveedor con los datos enviados._

#### Requirements ####

**_format**

  - Requirement: json|xml|html

#### Parameters ####

csp_genericobundle_proveedores[nombre]:

  * type: string
  * required: true

csp_genericobundle_proveedores[direccion]:

  * type: string
  * required: true

csp_genericobundle_proveedores[telefono]:

  * type: string
  * required: true

#### Response ####

id:

  * type: integer

nombre:

  * type: string

direccion:

  * type: string

telefono:

  * type: string


## /api/proveedores/{entity} ##

### `GET` /api/proveedores/{entity}.{_format} ###

_Obtiene el Proveedor con el ID indicado._

#### Requirements ####

**_format**

  - Requirement: json|xml|html
**entity**


#### Response ####

id:

  * type: integer

nombre:

  * type: string

direccion:

  * type: string

telefono:

  * type: string


### `PATCH` /api/proveedores/{entity}.{_format} ###

_Actualiza parte del proveedor indicado con los datos enviados._

#### Requirements ####

**_format**

  - Requirement: json|xml|html
**entity**


#### Parameters ####

csp_genericobundle_proveedores[nombre]:

  * type: string
  * required: true

csp_genericobundle_proveedores[direccion]:

  * type: string
  * required: true

csp_genericobundle_proveedores[telefono]:

  * type: string
  * required: true


### `PUT` /api/proveedores/{entity}.{_format} ###

_Actualiza el proveedor indicadp con los datos enviados._

#### Requirements ####

**_format**

  - Requirement: json|xml|html
**entity**


#### Parameters ####

csp_genericobundle_proveedores[nombre]:

  * type: string
  * required: true

csp_genericobundle_proveedores[direccion]:

  * type: string
  * required: true

csp_genericobundle_proveedores[telefono]:

  * type: string
  * required: true


### `DELETE` /api/proveedores/{entity}.{_format} ###

_Borra el proveedor con el ID indicado._

#### Requirements ####

**_format**

  - Requirement: json|xml|html
**entity**


#### Parameters ####

csp_genericobundle_proveedores[nombre]:

  * type: string
  * required: true

csp_genericobundle_proveedores[direccion]:

  * type: string
  * required: true

csp_genericobundle_proveedores[telefono]:

  * type: string
  * required: true