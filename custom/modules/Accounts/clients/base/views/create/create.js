({
    extendsFrom: "CreateView",
    
        initialize: function (options) {
          
            this._super('initialize', [options]);
    
            this.model.on('change:rfc_c', this.rfc_existente, this);
            this.model.on('change:name', this.nombre_existente, this);
            this.model.on('change:esync_c', this.rfc_faltante, this);
            this.model.addValidationTask('rfc_c', _.bind(this._rfc_existente, this));
            this.model.addValidationTask('name', _.bind(this._name_existente, this));
            
        },

        rfc_existente: function (model, value) {
            
            var rfc = model.get("rfc_c");
            let filter=[
                {
                   rfc_c:{
                     "$equals":rfc
                   },
                }
             ]
          

            var url = app.api.buildURL('Accounts', 'read', {}, {
                filter: filter
            })
         
            if(rfc.length == 12 || rfc.length == 13){
                app.api.call('read', url, {}, {
                    success: _.bind(function (data) {
                        if (data.records.length >= 1) {
                            app.alert.show('rfc_disponible', {
                                level: 'error',
                                messages: 'El RFC ingresado se encuentra ya en uso por un cliente',
                                autoClose: false
                            });
                        }
                    },model)
                })
            }
             
        },

        nombre_existente: function (model, value) {
            
            var name = model.get("name");
            let filter=[
                {
                   name:{
                     "$equals":name
                   },
                }
             ]
          

         var url = app.api.buildURL('Accounts', 'read', {}, {
             filter: filter
         })
         
        
            app.api.call('read', url, {}, {
                success: _.bind(function (data) {
                    if (data.records.length >= 1) {
                        app.alert.show('rfc_disponible', {
                            level: 'error',
                            messages: 'El nombre ingresado se encuentra ya en uso por un cliente',
                            autoClose: false
                        });
                        model.set('nombre_control_c',1);
                    }else{
                        model.set('nombre_control_c',0);
                    }
                },model)
            })
        
             
        },

        rfc_faltante: function (model, value) {
            
            var rfc = model.get("rfc_c");
           
            if(_.isEmpty(rfc)){
                app.alert.show('rfc_disponible', {
                    level: 'error',
                    messages: 'El campo RFC se encuentra vacio, NO se sincronizara con epicor',
                    autoClose: false
                });
            }else if(rfc.length < 12 || rfc.length > 13){
                app.alert.show('rfc_disponible', {
                    level: 'error',
                    messages: 'La longitud del rfc es incorrecta, NO se sincronizara con epicor',
                    autoClose: false
                });
            } 

            this.model.set('esync_c',false);
        },

        _rfc_existente: function (fields, errors, callback) {
            console.log("entra 41")
            var rfc = this.model.get("rfc_c");

                if(_.has(this.model.attributes,'rfc_c')){
                    
                    if(_.isEmpty(rfc)){
                        errors['rfc_c'] = errors['rfc_c'] || {};
                        errors['rfc_c'].required = true;
                    }else if(rfc.length < 12 || rfc.length > 13){
                        errors['rfc_c'] = errors['rfc_c'] || {};
                        errors['rfc_c'].required = true;
                    } 
                }
            
             callback(null, fields, errors);
            this.model.set('esync_c',false);
        },
       
        _name_existente: function (fields, errors, callback) {
            console.log("entra 51")
            var nombreC = this.model.get("nombre_control_c");

            if(_.has(this.model.attributes,'name')){
            
                if(nombreC){
                    errors['name'] = errors['name'] || {};
                    errors['name'].required = true;
                }
            }
             callback(null, fields, errors);
        },

        
})
    