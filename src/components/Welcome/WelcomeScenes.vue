<script lang="ts">
import { defineComponent, ref } from 'vue';
import { useI18n } from 'vue-i18n';

export default defineComponent({
  components: {},

  setup() {
    const componentName = ref<string>('WelcomeScenes');
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

    return {
      componentName,
      t,
    };
  },
});
</script>

<template>
  <div>
    {{ componentName }}

    <label for="locale">locale</label>
    <select v-model="$i18n.locale">
      <option>ru</option>
      <option>en</option>
    </select>

    <h2>{{ t('test') }}</h2>
  </div>
</template>

<style scoped>
/* ... */
</style>
