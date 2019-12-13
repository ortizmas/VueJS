Vue.component('parent_component', {
    template: //html
    `
        <div class="p-5 bg-dark text-white">
            <h1>{{titleParent}}</h1>
            <h3>Recebe numero: {{numberParent}}</h3>

            <button class="btn btn-success" @click="numberParent++">+</button>
            <hr>
            {{nameParent}}
            <child :number="numberParent" @nameChild="nameParent = $event"></child>
        </div>
    `,
    data() {
        return {
            titleParent: 'Componente Pai',
            numberParent: 0,
            nameParent: ''
        }
    }
});