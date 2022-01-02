<template>
    <el-card class="clearfix donate flex-grow-1" body-style="{ padding:20px; height:100%; }">
        <div class="row flex-column align-items-center justify-content-between h-100">
            <h2 class="mb-4">Routes</h2>
            <div class="px-2">
                <p>Below is all of our 9 routes over the duration of the convoy. We're travelling through every DLC there is in game, bringing some amazing scenery, and some brilliant roads for you to experience over an entire 24 hours.</p>
            </div>
            <div class="px-4 w-100">
                <a :href="route">
                    <el-button type="success" size="small" class="w-100">See the Routes</el-button>
                </a>
            </div>
        </div>
    </el-card>
</template>

<script>
export default {
    name: "Route",
    props: ['route']
}
</script>

<style scoped>

</style>
