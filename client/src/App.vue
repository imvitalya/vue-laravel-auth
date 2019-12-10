
<template>
  <div id="app">
    <div class="container-fluid m-0 p-0">
      <TheNavigation/>
    </div>
    <div class="container">
      <router-view/>
    </div>
  </div>
</template>

<script>
  import TheNavigation from '@/components/TheNavigation'

  export default 
  {
    components:
    {
      TheNavigation
    }
  }
</script>