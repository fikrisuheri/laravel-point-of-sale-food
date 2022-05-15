<template>
      <h1>LOGIN</h1>
</template>

<script>
  import Guest from '../Layouts/Guest.vue';
  import Authenticated from '../Layouts/Authenticated.vue';
  import Button from '../Components/Button.vue';
  export default {
    layout:Authenticated,
    components:Button
  }
</script>