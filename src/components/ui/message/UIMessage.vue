<script lang="ts" setup>
import type { IPropsMessage } from './types';

const props = defineProps<IPropsMessage>();
</script>

<template>
  <div :class="{ 'message--owner': props.isOwner }">
    <slot />
  </div>
</template>

<style scoped>
.message--owner {
  @apply bg-red-500;
}
</style>
