<template>
    <div class="route-info h-100 d-flex justify-content-center align-items-center mt-4 mt-md-0">
        <el-card class="clearfix info-container w-75">
            <div class="header clearfix">
                <h3><b>{{ getTitle(selectedRoute) }}</b></h3>
            </div>
            <div class="body">
                <p><b>Start</b>: {{ selectedRoute.start }} - {{ convertTime(selectedRoute.start_time) }}</p>
                <p><b>End</b>: {{ selectedRoute.end }}</p>
                <a :href="`/route/${selectedRoute.number}/image`" target="_blank">
                    <el-button type="success" size="small" class="w-100">View Route</el-button>
                </a>
            </div>
        </el-card>
    </div>
</template>

<script>
import moment from 'moment-timezone';

export default {
    name: "Route",
    props: ['routes'],
    data() {
        return {
            route: 0
        }
    },
    mounted() {
        this.$root.$on('route_change', (route_id) => {
            this.route = route_id;
        });
    },
    computed: {
        selectedRoute() {
            return this.routes[this.route];
        }
    },
    methods: {
        convertTime(time) {
            return moment.unix(time).format('HH:mm')
        },
        getTitle(data) {
            if(data.truckfest) {
                return "Truckfest"
            }

            return `Route ${data.number}`
        }
    }
}
</script>

<style scoped lang="scss">
    .route-item {
        position: relative;

        .route-info {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 2;

            .info-container {
                ul {
                    padding: 0;
                    margin: 0;
                }

                ul li {
                    list-style: none;
                }
            }
        }
    }
</style>
