define([
    "jquery"
], function($) {
    "use strict";
    return function(config, element) {
        element.innerHTML = config.message.toUpperCase();
    }
});
