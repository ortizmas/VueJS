<template>
  <div class="about">
    <h1>This is an about page</h1>
    <Cabecera></Cabecera>
    <Lista></Lista>
  </div>
  
</template>

<script>
import Cabecera from '@/components/Cabecera.vue'
import Lista from '@/components/Lista.vue'
export default {
  name: 'about',
  components: {
    Cabecera,
    Lista
  }
}
</script>