import Vue from "deps/vue";

if (document.querySelector("#example-component")) {
    window.example = new Vue({
        name: "exampleComponent",
        el: "#example-component",
        components: {
            example: require("comps/ExampleComponent.vue").default
        }
    });
}
