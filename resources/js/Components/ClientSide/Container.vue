<template>
  <div class="relative overflow-hidden">
    <!-- Optional named slot: navigation -->
    <slot name="navigation"></slot>

    <!-- Optional named slot: main-content -->
    <slot name="main-content">
      <!-- Fallback to default slot if main-content isn't provided -->
      <slot></slot>
    </slot>
  </div>
</template>
