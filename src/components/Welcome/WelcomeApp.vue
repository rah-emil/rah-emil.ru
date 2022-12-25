<script lang="ts">
import { defineComponent, ref } from 'vue';
import SelectLang from './SelectLang.vue';
import WelcomeScenes from './WelcomeScenes.vue';

export default defineComponent({
  components: {
    SelectLang,
    WelcomeScenes,
  },

  setup() {
    const componentName = ref<string>('WelcomeApp.vue');

    return {
      componentName,
    };
  },
});
</script>

<template>
  <div>
    {{ componentName }}

    <SelectLang />
    <WelcomeScenes />
  </div>
</template>

<style scoped>
/* ... */
</style>
