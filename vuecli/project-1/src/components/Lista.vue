<template>
    <div>
        <h1>Lista</h1>

        <ul class="list-group">
            <li v-for="(item, index) of arrayOrderQuantityDesc" :key="item.id" @click="increment(index)"
                class="list-group-item d-flex justify-content-between align-items-center">
                {{index}} - {{item.name}}
                <span class="badge badge-primary badge-pill">{{item.quantity}}</span>
            </li>
        </ul>
        <button class="btn btn-danger btn-block mt-3" @click="restart()">Reiniciar</button>
    </div>
</template>

<script>
import { mapState, mapMutations } from 'vuex';

export default {
    name: 'Lista',
    computed: {
        ...mapState(['frutas']),
        arrayOrderQuantityDesc(state) {
            return state.frutas.sort( (a, b) => b.quantity - a.quantity )
        }
    },
    methods: {
        ...mapMutations(['increment', 'restart'])
    }
}
</script>