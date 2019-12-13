Vue.component('child', {
    template: //html
    `
        <div class="p-3 bg-warning text-dark">
            <h1>{{titleChild}}</h1>
            <h3>Numero: {{$store.state.count}}</h3>
            <button class="btn btn-success" @click="$store.commit('increment')">
                    +
            </button>
        </div>
    `,
    props: ['number'],
    data() {
        return {
            titleChild: 'Componente filho',
            nombre: 'Ignacio'
        }
    },
    mounted() {
        this.$emit('nameChild', this.nombre);
    },
});