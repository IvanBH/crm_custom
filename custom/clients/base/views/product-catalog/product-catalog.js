({
    extendsFrom: 'ProductCatalogView',

    initialize: function(options) {
        this._super('initialize', [options])
    },

    getTreeStateConfigSettings: function() {
        const isDarkMode = app.utils.isDarkMode();

        var config = {
            categoryColor: isDarkMode ? '#E5EAED' : '#2B2D2E',
            itemColor: isDarkMode ? '#E5EAED' : '#2B2D2E',
            iconColor: isDarkMode ? 0x9BA1A6 : 0x6F777B,
            iconHoverColor: isDarkMode ? 0xFFFFFF : 0x0679C8,
            itemFont: '14px "Inter", "Helvetica Neue", "Arial", sans-serif',
            iconTextPadding: 5,
            iconWidth: 12,
            iconHeight: 12,
            iconWidthHalf: this.iconWidth >> 1,
            iconScale: 0.25,
            iconStartX: 5,
            iconYOffset: 9,
            itemRowYPadding: 21,
            childRowYPadding: 13,
            containerRowStartY: 0,
            showMoreNode: {
                data: app.lang.get('LBL_SHOW_MORE'),
                type: 'showMore'
            },
            showMoreNodeIconName: 'folder-open-o'
            // scrollBarBkgdBorderLineSize: 1,
            // scrollBarBkgdWidth: 15,
            // scrollBarBkgdBorderColor: isDarkMode ? 0x2B2D2E : 0xE8E8E8,
            // scrollBarBkgdFill: isDarkMode ? 0x2B2D2E : 0xFAFAFA,
            // scrollBarBkgdFillIE: isDarkMode ? 0x2B2D2E : 0xF0F0F0,
            // scrollThumbWidth: 8,
            // scrollThumbHeight: 16,
            // scrollThumbFillColor: isDarkMode ? 0x4D5154 : 0xC1C1C1,
            // scrollThumbFillHoverColor: isDarkMode ? 0x6F777B : 0x7D7D7D,
            // scrollThumbTopBottomPadding: 3
        };

        return this._getTreeStateConfigSettings(config);
    },

    _calculateCanvasSizes: function($el) {
        let dashletEl = $el.closest('div.dashlet-content');
        let searchBarHeight = dashletEl.find('div.product-catalog-search').innerHeight();
        this.canvasHeight = dashletEl.height() - searchBarHeight;
        this.canvasWidth = 1100 || dashletEl.find('div.product-catalog-container').width();
    },
})