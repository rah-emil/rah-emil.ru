/* eslint-env node */
require('@rushstack/eslint-patch/modern-module-resolution');

module.exports = {
  root: true,
  env: {
    browser: true,
  },
  extends: [
    'eslint:recommended',
    'airbnb-base',
    // 'airbnb-typescript/base',
    'plugin:import/typescript',
    'plugin:vue/vue3-essential',
    '@vue/eslint-config-airbnb',
    '@vue/typescript/recommended',
    'prettier/prettier',
  ],
  parser: 'vue-eslint-parser',
  parserOptions: {
    parser: '@typescript-eslint/parser',
    ecmaVersion: 'latest',
    sourceType: 'module',

    // TODO: fix errors
    // project: './tsconfig.json',
    // tsconfigRootDir: __dirname,
    // extraFileExtensions: ['.vue'],
  },
  plugins: ['@typescript-eslint', 'prettier'],
  settings: {
    'import/resolver': {
      node: {
        extensions: ['.js', '.jsx', '.ts', '.tsx'],
      },
    },
  },
  rules: {
    'import/no-extraneous-dependencies': 'off',
    'import/prefer-default-export': 'off',
    'import/extensions': [
      'error',
      'ignorePackages',
      {
        ts: 'never',
      },
    ],
    'vue/no-multiple-template-root': 'off',
  },
};
