<script lang="ts">
import { defineComponent, ref } from 'vue';

export default defineComponent({
  setup() {
    const componentName = ref<string>('SelectLang');

    return {
      componentName,
    };
  },
});
</script>

<template>
  <div class="">
    <div class="flex items-center">
      <button>
        RU
      </button>
      <hr class="divider">
      <button>EN</button>
    </div>
  </div>
</template>

<style scoped>
.divider {
  display: none;
}
</style>
