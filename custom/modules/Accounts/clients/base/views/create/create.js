({
    extendsFrom: "CreateView",
    
        initialize: function (options) {
            var self=this;
            this._super('initialize', [options]);
    
            this.model.on('change:rfc_c', this.rfc_existente, this);
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
    