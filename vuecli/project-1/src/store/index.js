import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    frutas: [
      {name: 'Maça', quantity: 0},
      {name: 'Manga', quantity: 0},
      {name: 'Laranja', quantity: 0},
    ]
  },
  mutations: {
    increment(state, index) {
      state.frutas[index].quantity ++
    },
    restart(state) {
      state.frutas.forEach(element => {
        element.quantity = 0
      })
    }
  },
  actions: {
  },
  modules: {
  }
})
