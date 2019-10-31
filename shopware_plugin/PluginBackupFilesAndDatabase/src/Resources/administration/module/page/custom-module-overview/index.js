import template from "./custom-module-overview.html.twig";

Shopware.Component.register("custom-module-overview",{
    template,

    metaInfo() {
        return {
            title: this.$createTitle()
        };
    },
});