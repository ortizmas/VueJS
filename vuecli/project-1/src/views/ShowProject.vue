<template>
    <div>
        <h1 class="title">{{title}}</h1>

        <Projects />

        <button class="btn btn-dark" @click="projects">Projetos</button>
        <button class="btn btn-dark" @click="back">Anterior</button>
        <button class="btn btn-dark" @click="next">Sigiente</button>

    </div>
</template>

<script>
// @ is an alias to /src
import Projects from '@/components/Project.vue'

export default {
  components: {
    Projects
  },
  data:  function () {
    return {
      title: 'Detalhes do projeto'
    }
  },
  methods: {
      projects () {
        this.$router.push('/project')
      },
      back () {
        this.$router.go(-1)
      },
      next () {
        this.$router.go(1)
      }

  },
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
.title{
  color: #42b983;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>