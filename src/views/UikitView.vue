<script setup lang="ts">
import UIMessage from '@/components/ui/message/UIMessage.vue';
</script>

<template>
  <main>
    UIKIT VIEW

    <UIMessage :is-owner="true">
      Text my message
    </UIMessage>

    <UIMessage>
      Text my message
    </UIMessage>
  </main>
</template>
