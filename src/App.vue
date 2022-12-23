<script setup lang="ts">
import { Icon } from '@iconify/vue';
</script>

<template>
  <div>
    <RouterLink :to="{ name: 'index' }">Index</RouterLink>
    <RouterLink :to="{ name: 'uikit' }">UIKIT</RouterLink>

    <RouterView />
  </div>
</template>

<style scoped>
/* ... */
</style>
