Vue.component('saludo', {
    template: //html
    `
        <div>
            <h1>{{saludo}}</h1>
            <h2>{{var2}}</h2>
        </div>
    `,
    data() {
        return {
            saludo: 'Hola desde Vue',
            var2: 'TEMPLATES LITERALES'
        }
    }
});