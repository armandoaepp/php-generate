
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('userService', function($http){
    this.getUsers = function()
    {
        var url_    = 'data/ajax/user/indexUser.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setUser = function(params_)
    {
        var url_    = 'data/ajax/user/indexUser.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getUserById = function(params_)
    {
        var url_    = 'data/ajax/user/indexUser.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updUser = function(params_)
    {
        var url_    = 'data/ajax/user/indexUser.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
