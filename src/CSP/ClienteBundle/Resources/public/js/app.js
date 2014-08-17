angular.module('project', ['restangular', 'ngRoute']).
  config(function($interpolateProvider, $routeProvider, RestangularProvider) {
    $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
    $routeProvider.
      
      //categorias
      when('/categorias', {
        controller:ListCatCtrl, 
        templateUrl:'listcat.html'
      }).
      when('/editcat/:projectId', {
        controller:EditCatCtrl, 
        templateUrl:'detailcat.html',
        resolve: {
          project: function(Restangular, $route){
            return Restangular.one('categorias', $route.current.params.projectId).get();
          }
        }
      }).
      when('/newcat', {controller:CreateCatCtrl, templateUrl:'detailcat.html'}).
      
      //clientes
      when('/clientes', {
        controller:ListCliCtrl, 
        templateUrl:'listcli.html'
      }).
      when('/editcli/:projectId', {
        controller:EditCliCtrl, 
        templateUrl:'detailcli.html',
        resolve: {
          project: function(Restangular, $route){
            return Restangular.one('clientes', $route.current.params.projectId).get();
          }
        }
      }).
      when('/newcli', {controller:CreateCliCtrl, templateUrl:'detailcli.html'}).
      
      //proveedores
      when('/proveedores', {
        controller:ListProvCtrl, 
        templateUrl:'listprov.html'
      }).
      when('/editprov/:projectId', {
        controller:EditProvCtrl, 
        templateUrl:'detailprov.html',
        resolve: {
          project: function(Restangular, $route){
            return Restangular.one('proveedores', $route.current.params.projectId).get();
          }
        }
      }).
      when('/newprov', {controller:CreateProvCtrl, templateUrl:'detailprov.html'}).
      
      //productos
      when('/productos', {
        controller:ListProdCtrl, 
        templateUrl:'listprod.html'
      }).
      when('/editprod/:projectId', {
        controller:EditProdCtrl, 
        templateUrl:'detailprod.html',
        resolve: {
          project: function(Restangular, $route){
            return Restangular.one('productos', $route.current.params.projectId).get();
          }
        }
      }).
      when('/newprod', {controller:CreateProdCtrl, templateUrl:'detailprod.html'}).
      
      //empleados
      when('/empleados', {
        controller:ListEmpCtrl, 
        templateUrl:'listemp.html'
      }).
      when('/editemp/:projectId', {
        controller:EditEmpCtrl, 
        templateUrl:'detailemp.html',
        resolve: {
          project: function(Restangular, $route){
            return Restangular.one('empleados', $route.current.params.projectId).get();
          }
        }
      }).
      when('/newemp', {controller:CreateEmpCtrl, templateUrl:'detailemp.html'}).
      
      
      otherwise({redirectTo:'/'});
      
      RestangularProvider.setBaseUrl('http://192.168.1.69/CSP_Private_API/web/api/');
      //RestangularProvider.setDefaultRequestParams({ access_token: 'NGI0OGNlODJjMmM2YjhkYjI5NWUyMzNjNTQ3ZWQyMDdmZjEzYWIyMzMwMmY2MTY1MDQwMTdjOTg2NGE4YTkxMg' })
      RestangularProvider.setRestangularFields({
        id: 'id'
      });
      
      RestangularProvider.setRequestInterceptor(function(elem, operation, what) {
        if (operation === 'put') {
          elem.id = undefined;
          return elem;
        }
        return elem;
      });
  });

//categorias
function ListCatCtrl($scope, Restangular) {
   $scope.projects = Restangular.all("categorias").getList().$object;
};
function CreateCatCtrl($scope, $location, Restangular) {
  $scope.save = function() {
    Restangular.all('categorias').post($scope.project).then(function(project) {
      $location.path('/listcat');
    });
  };
};
function EditCatCtrl($scope, $location, Restangular, project) {
  var original = project;
  $scope.project = Restangular.copy(original);
  $scope.isClean = function() {
    return angular.equals(original, $scope.project);
  };
  $scope.destroy = function() {
    original.remove().then(function() {
      $location.path('/listcat');
    });
  };
  $scope.save = function() {
    $scope.project.put().then(function() {
      $location.path('/categorias');
    });
  };
};

//clientes
function ListCliCtrl($scope, Restangular) {
   $scope.projects = Restangular.all("clientes").getList().$object;
};
function CreateCliCtrl($scope, $location, Restangular) {
  $scope.save = function() {
    Restangular.all('clientes').post($scope.project).then(function(project) {
      $location.path('/listcli');
    });
  };
};
function EditCliCtrl($scope, $location, Restangular, project) {
  var original = project;
  $scope.project = Restangular.copy(original);
  $scope.isClean = function() {
    return angular.equals(original, $scope.project);
  };
  $scope.destroy = function() {
    original.remove().then(function() {
      $location.path('/listcli');
    });
  };
  $scope.save = function() {
    $scope.project.put().then(function() {
      $location.path('/clientes');
    });
  };
};

//proveedores
function ListProvCtrl($scope, Restangular) {
   $scope.projects = Restangular.all("proveedores").getList().$object;
};
function CreateProvCtrl($scope, $location, Restangular) {
  $scope.save = function() {
    Restangular.all('proveedores').post($scope.project).then(function(project) {
      $location.path('/listprov');
    });
  };
};
function EditProvCtrl($scope, $location, Restangular, project) {
  var original = project;
  $scope.project = Restangular.copy(original);
  $scope.isClean = function() {
    return angular.equals(original, $scope.project);
  };
  $scope.destroy = function() {
    original.remove().then(function() {
      $location.path('/listprov');
    });
  };
  $scope.save = function() {
    $scope.project.put().then(function() {
      $location.path('/proveedores');
    });
  };
};

//productos
function ListProdCtrl($scope, Restangular) {
   $scope.projects = Restangular.all("productos").getList().$object;
};
function CreateProdCtrl($scope, $location, Restangular) {
  $scope.save = function() {
    Restangular.all('productos').post($scope.project).then(function(project) {
      $location.path('/listprod');
    });
  };
};
function EditProdCtrl($scope, $location, Restangular, project) {
  var original = project;
  $scope.project = Restangular.copy(original);
  $scope.isClean = function() {
    return angular.equals(original, $scope.project);
  };
  $scope.destroy = function() {
    original.remove().then(function() {
      $location.path('/listprod');
    });
  };
  $scope.save = function() {
    $scope.project.put().then(function() {
      $location.path('/productos');
    });
  };
};

//empleados
function ListEmpCtrl($scope, Restangular) {
   $scope.projects = Restangular.all("empleados").getList().$object;
};
function CreateEmpCtrl($scope, $location, Restangular) {
  $scope.save = function() {
    Restangular.all('empleados').post($scope.project).then(function(project) {
      $location.path('/listemp');
    });
  };
};
function EditEmpCtrl($scope, $location, Restangular, project) {
  var original = project;
  $scope.project = Restangular.copy(original);
  $scope.isClean = function() {
    return angular.equals(original, $scope.project);
  };
  $scope.destroy = function() {
    original.remove().then(function() {
      $location.path('/listemp');
    });
  };
  $scope.save = function() {
    $scope.project.put().then(function() {
      $location.path('/empleados');
    });
  };
};