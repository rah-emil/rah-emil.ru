<script lang="ts">
import { defineComponent } from 'vue';
import { useI18n } from 'vue-i18n';
import { KEY_STORAGE, SUPPORT_LOCALES } from '@/i18n';

export default defineComponent({
  setup() {
    const languages = SUPPORT_LOCALES;
    const i18n = useI18n();

    function setLanguage(lang: string) {
      i18n.locale.value = lang;
      localStorage.setItem(KEY_STORAGE, lang);
    }

    return {
      languages,
      setLanguage,
    };
  },
});
</script>

<template>
  <div class="flex items-center justify-center min-h-screen">
    <div class="flex items-center text-4xl xs:text-5xl md:text-7xl font-extrabold">
      <button
        v-for="language in languages"
        :key="language"
        type="button"
        class="button"
        @click="setLanguage(language)"
      >
        {{ language }}
      </button>
    </div>
  </div>
</template>

<style scoped>
.button {
  @apply hover:text-primary uppercase;
}

.button::after {
  content: '|';
  @apply font-medium ml-2 mr-2 text-grey;
}

.button:last-child:after {
  display: none;
}
</style>
