<template>
    <div>
        <h1>Lista</h1>

        <ul class="list-group">
            <li v-for="item of frutas" 
                class="list-group-item d-flex justify-content-between align-items-center">
                Cras justo odio
                <span class="badge badge-primary badge-pill">14</span>
            </li>
            <!-- https://www.youtube.com/watch?v=NPGkoOQPtJs&list=PLPl81lqbj-4J-gfAERGDCdOQtVgRhSvIT&index=20 -->
            <!-- <li class="list-group-item d-flex justify-content-between align-items-center">
                Cras justo odio
                <span class="badge badge-primary badge-pill">14</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Dapibus ac facilisis in
                <span class="badge badge-primary badge-pill">2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Morbi leo risus
                <span class="badge badge-primary badge-pill">1</span>
            </li> -->
        </ul>

    </div>
</template>

<script>
import { mapState } from 'vuex';

export default {
    name: 'Lista',
    computed: {
        ...mapState(['frutas'])
    }
}
</script>