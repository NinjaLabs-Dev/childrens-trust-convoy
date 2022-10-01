<template>
    <div class="route-container row w-100 m-0 justify-content-between" v-loading="loading">
        <div class="col-md-6 justify-content-center align-items-center">
            <el-carousel
                :interval="route.length ? 0 : 6000"
                type="card"
                :height="imgHeight"
                @change="changeRoute">
                <el-carousel-item v-for="route in routes" :key="route.id">
                    <img class="route-image" :src="route.image" :alt="`${route.name} Image`">
                </el-carousel-item>
            </el-carousel>
        </div>
        <div class="col-md-6">
            <route
                :routes="routes">
            </route>
        </div>
    </div>
</template>

<script>
import Route from './Route'

export default {
    props: ['routes', 'route'],
    name: "RoutesContainer",
    data() {
        return {
            loading: true,
            imgHeight: '250px',
        }
    },
    created() {
        setTimeout(() => {
            this.loading = false;
        }, 1000);

        if(window.innerWidth <= 1400) {
            this.imgHeight = '150px';
        }
    },
    mounted() {
        if(this.route.length) {
            this.changeRoute(this.route);
        }
    },
    methods: {
        changeRoute(route_id){
            this.$root.$emit('route_change', route_id);
        }
    },
    components: {
        Route
    }
}
</script>

<style scoped>

</style>
