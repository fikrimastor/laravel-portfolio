/* eslint-env node */
require("@rushstack/eslint-patch/modern-module-resolution")

module.exports = {
    root: true,
    extends: [
        'plugin:svelte/recommended'
    ],
    parserOptions: {
        ecmaVersion: "latest",
        sourceType: "module"
    },
    rules: {
        //
    }
}
