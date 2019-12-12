Vue.component('contador', {
    template: //html
    `
        <div>
            <h3>{{numero}}</h3>
            <button class="btn btn-success" @click="numero++">+</button>
            <button class="btn btn-warning" @click="numero--">-</button>
        </div>
    `,
    data() {
        return {
            numero: 0
        }
    },
});