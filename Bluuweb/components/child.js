Vue.component('child', {
    template: //html
    `
        <div class="p-3 bg-warning text-dark">
            <h1>{{titleChild}}</h1>
            <h3>Recebe do pai: {{number}}</h3>
        </div>
    `,
    props: ['number'],
    data() {
        return {
            titleChild: 'Componente filho'
        }
    }
});