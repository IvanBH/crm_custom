({
    extendsFrom: 'AdministrationConfigView',

    initialize: function(options) {

        this._super('initialize', [options]);
        this.meta.firstNonHeaderPanelIndex = 0; // there is no header, so it's always 0
    },
    
    saveSuccessHandler: function(settings) {
        this.toggleHeaderButton(false);
        this.updateConfig(settings);
        this.closeView();
        app.alert.show(this.settingPrefix + '-info', {
            autoClose: true,
            level: 'success',
            messages: app.lang.get(this.saveMessage, this.module),
            onAutoClose: () => window.location.href = '#bwc/index.php?module=Administration&action=Upgrade'
        });
    }
})
