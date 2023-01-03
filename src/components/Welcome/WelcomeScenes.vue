<script lang="ts">
import { defineComponent, ref } from 'vue';
import { useI18n } from 'vue-i18n';
import { SUPPORT_LOCALES } from '@/i18n';

export default defineComponent({
  components: {},

  setup() {
    const componentName = ref<string>('WelcomeScenes');
    const languages = SUPPORT_LOCALES;
    const { t } = useI18n({
      locale: 'ru',
      messages: {
        ru: {
          test: 'Тест!',
        },
        en: {
          test: 'Test!',
        },
      },
    });

    function saveLocale(e: Event) {
      const target = e.target as HTMLSelectElement;
      localStorage.setItem('locale', target.value);
    }

    return {
      componentName,
      languages,
      t,
      saveLocale,
    };
  },
});
</script>

<template>
  <div>
    {{ componentName }}

    <label for="locale">locale</label>
    <select v-model="$i18n.locale" @change="saveLocale">
      <option
        v-for="language in languages"
        :key="language"
      >
        {{ language }}
      </option>
    </select>

    <h2>{{ t('test') }}</h2>
  </div>
</template>

<style scoped>
/* ... */
</style>
