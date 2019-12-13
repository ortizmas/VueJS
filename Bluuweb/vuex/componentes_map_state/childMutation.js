Vue.component('child', {
    template: //html
    `
        <div class="p-3 bg-warning text-dark">
            <h1>{{titleChild}}</h1>
            <h3>Numero: {{count}}</h3>
            <button class="btn btn-success" @click="increment">
                    +
            </button>
            <button class="btn btn-danger" @click="decrement(2)">
                    -
            </button>

            <button class="btn btn-danger" @click="getCourses">
                Obter cursos
            </button>

            <hr>

            <ul v-for="item in courses">
                <li>{{item.name}}</li>
            </ul>
        </div>
    `,
    props: ['number'],
    data() {
        return {
            titleChild: 'Componente filho',
            nombre: 'Ignacio'
        }
    },
    computed: {
        // numero() {
        //     return store.state.count
        // }
        ...Vuex.mapState(['count', 'courses'])
    },
    methods: {
        ...Vuex.mapMutations(['increment', 'decrement']),
        ...Vuex.mapActions(['getCourses'])

    },
});