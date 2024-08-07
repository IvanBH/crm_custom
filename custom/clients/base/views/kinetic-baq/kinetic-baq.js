/**
 * Kinetic BAQ dashlet controller
 **/
 ({
    plugins: ['Dashlet'],

    _defaultOptions: {
        maxrecords: 5
    },	

    defaultActions: {
        'dashlet:refresh:clicked' : 'refreshClicked',
    },    

	initialize: function(options) {
            options.meta = options.meta || {};		
            this.baqs = {};
            this.showastable = {};
            this.parameters = {};
            this._super('initialize', [options]);
            this._retrieveData(options.meta);
	},

    /**
     * Init dashlet settings
     */
	 initDashlet: function() {
        if (!this.meta.config) {

            var options = {};

            options.instance_url = this.settings.get('instance_url');
     		options.api_key = this.settings.get('api_key');
			options.instance_user = this.settings.get('instance_user');
			options.instance_pass = this.settings.get('instance_pass');
            options.baqid = this.settings.get('baqid');
			options.parameters = this.settings.get('parameters');
            options.viewastable = this.settings.get('viewastable');
            options.disablehref = this.settings.get('disablehref');                        
			options.maxrecords = this.settings.get('maxrecords') || this._defaultOptions.maxrecords;
			this.settings.set('maxrecords', options.maxrecords);
        }


        this.layout.before('dashletconfig:save', function() {

            var fields = _.flatten(_.pluck(this.meta.panels, 'fields'));

            var notValid = _.filter(fields, function(field) {
                return field.required && !this.dashModel.get(field.name);
            }, this);

            if (notValid.length === 0) {
                return true;
            }


            _.each(notValid, function(field) {
                 var fieldOnView = _.find(this.fields, function(comp, cid) { 
                    return comp.name === field.name;
                 });

                 fieldOnView.model.trigger('error:validation:' + field.name, {required: true});
            }, this);

            return false;

        }, this);
    },
    
    reloadData: function(){
        _retrieveData(this.meta.config);
    },

	_retrieveData: function(options) {
        if (options.instance_url) 
        {
            //--------------------------------------------------------
            //Replace every parameter with its value from model view
            //--------------------------------------------------------
            var companyid = "";
            var baqid = options.baqid;
            var params = options.parameters.toLowerCase();
            var userid = options.instance_user;
            var userpass = options.instance_pass;
            var restapiurl = options.instance_url;
            var apikey = options.api_key;
            var maxrecord = options.maxrecords;
            var viewastable = options.viewastable;
            var disablehref = options.disablehref;

            if (_.isUndefined(viewastable))
            {
                viewastable = false;
            }

            if (_.isUndefined(disablehref))
            {
                disablehref = false;
            }

            var parameterList = params.split('|');

            //console.log("Replacing parameters...");

            _.each(parameterList, function(param) {
                if (!_.isUndefined(param))
                {
                    var value = this.model.get([param]);

                    if (_.isUndefined(value))
                    {
                       value = param;
                    }                    

                    console.log("param: " + param + " value: " + value);

                    if (param == 'ecompany_c') 
                    {
                        companyid = value;
                    }

                    params = params.replace(param, value);
                }
            }, this);    
            
            if (companyid == "")
            {
                companyid = parameterList[0];
            }

            var reqData = "";
            var resData = "";
            var authcode = btoa(userpass)
            reqData = { CompanyID: companyid, BAQID: baqid, Parameters: params, UserID: userid, AuthCode: authcode, RestAPIURL: restapiurl, APIKey: apikey, MaxRecord: maxrecord, DisableLinks: disablehref};
            var strReq = JSON.stringify(reqData);    
/*
            console.log("Company ID: " + companyid);
            console.log("BAQ ID: " + baqid);
            console.log("Parameters: " + params);            
            console.log("User ID: " + userid);
            console.log("Password: " + userpass);            
            console.log("AuthCode: " + authcode);
            console.log("RestAPIURL: " + restapiurl);
            console.log("APIKey: " + apikey);
            console.log("strREQ: " + strReq);
            console.log("MaxRecords: " + maxrecord);            
*/

           // console.log("Requesting BAQ Data...");

            $.ajax({
                url: restapiurl + "/api/v2/efx/" + companyid + "/SugarDashlet/ExecuteBAQ?api-key=" + apikey,
                data: strReq,
                async: false,
                dataType: "json",
                contentType: "application/json",
                cache: false,
                context: document.body,
                type: 'POST',
                headers: {
                    "Authorization" : "Basic " + btoa(userid + ":" + userpass)
                },                
                success: function (response) {
                    var resp = response.output;
                    resData = JSON.parse(resp);
                    //console.log("Request Event: true");
                },
                error: function (jqxhr, status, exception) {
                    this.baqs = {};
                    //console.log("Request Event: false");                    
                },
            });             

            //console.log("ResData Variable: " + resData);
            this.showastable = viewastable;
            this.baqs = resData;

            this.render();
        }
	},
    refreshClicked: function () {
        this.render();
    },    
})
