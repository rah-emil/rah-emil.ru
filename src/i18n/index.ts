import { createI18n } from 'vue-i18n';

const SUPPORT_LOCALES = [
  'ru',
  'en',
];

// function i18n() {
//   const i18n = createI18n({
//     legacy: false,
//   });

//   return {
//     i18n,
//   };
// }

const i18n = createI18n({
  legacy: false,
});

export default {
  i18n,
  SUPPORT_LOCALES,
};
