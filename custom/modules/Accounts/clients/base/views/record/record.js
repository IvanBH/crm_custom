({
    extendsFrom: "RecordView",
    
        initialize: function (options) {
            
            this._super('initialize', [options]);
    
            this.model.on('change:esync_c', this.rfc_existente, this);
            this.model.addValidationTask('rfc_c', _.bind(this._rfc_existente, this));
            this.model.on('change:rfc_c', this.rfc_buscar, this);
        },

        rfc_existente: function (model, value) {
            
            var rfc = model.get("rfc_c");
           
            if(_.isEmpty(rfc)){
                app.alert.show('rfc_disponible', {
                    level: 'error',
                    messages: 'El campo RFC se encuentra vacio, NO se sincronizara con epicor',
                    autoClose: false
                });
            }else if(rfc.length == 12 || rfc.length == 13){
                app.alert.show('rfc_disponible', {
                    level: 'error',
                    messages: 'La longitud del rfc es incorrecta, NO se sincronizara con epicor',
                    autoClose: false
                });
            } 
        },

        _rfc_existente: function (fields, errors, callback) {

            var rfc = this.model.get("rfc_c");

            if(_.has(this.model.attributes,'rfc_c')){
            
                if(_.isEmpty(rfc)){
                    errors['rfc_c'] = errors['rfc_c'] || {};
                    errors['rfc_c'].required = true;
                }else if(rfc.length == 12 || rfc.length == 13){
                    errors['rfc_c'] = errors['rfc_c'] || {};
                    errors['rfc_c'].required = true;
                } 
            }
             callback(null, fields, errors);
        },

        rfc_buscar: function (model, value) {
            
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
                        if (data.records.length == 0) {
                            app.alert.show('rfc_disponible', {
                                level: 'success',
                                messages: 'El RFC ingresado se encuentra disponible para el cliente',
                                autoClose: false
                            });
                        }
                    },model)
                })
            }
        },    
       
        
})
    