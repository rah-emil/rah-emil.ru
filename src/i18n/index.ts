import { createI18n } from 'vue-i18n';

const SUPPORT_LOCALES = [
  'en',
  'ru',
];

const KEY_STORAGE = 'locale';

function initLocale() {
  const language = window.navigator.language.substring(0, 2);
  const savedLocale = localStorage.getItem(KEY_STORAGE);

  // If the language is not saved and we have this language
  if (!savedLocale && SUPPORT_LOCALES.indexOf(language) !== -1) {
    localStorage.setItem(KEY_STORAGE, language);
    return language;
  }

  // If the language is saved and we have this language
  if (savedLocale && SUPPORT_LOCALES.indexOf(savedLocale) !== -1) {
    return savedLocale;
  }

  localStorage.setItem(KEY_STORAGE, SUPPORT_LOCALES[0]);
  return SUPPORT_LOCALES[0];
}

const i18n = createI18n({
  legacy: false,
  globalInjection: true,
  locale: initLocale(),
});

export {
  i18n,
  SUPPORT_LOCALES,
  KEY_STORAGE,
};
