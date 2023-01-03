<script lang="ts">
import { defineComponent } from 'vue';
import SelectLang from './SelectLang.vue';
import WelcomeScenes from './WelcomeScenes.vue';

export default defineComponent({
  components: {
    SelectLang,
    WelcomeScenes,
  },

  setup() {
    // ...
  },
});
</script>

<template>
  <div>
    <SelectLang />
    <WelcomeScenes />
  </div>
</template>
