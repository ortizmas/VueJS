Vue.component('parent', {
    template: //html
    `
        <div class="p-5 bg-dark text-white">
            <h1>{{titleParent}}</h1>
            <h3>Numero: {{count}}</h3>
            <child></child>
        </div>
    `,
    data() {
        return {
            titleParent: 'Componente Parent'
        }
    },
    computed: {
        // numero() {
        //     return store.state.count
        // }
        ...Vuex.mapState(['count'])
    },
});