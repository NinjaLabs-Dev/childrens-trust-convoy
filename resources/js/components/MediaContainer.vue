<template>
    <el-card class="media my-4" :body-style="{ padding: '0px' }">
        <a :href="data.image" target="_blank">
            <div class="img-container" v-loading="loading">
                <img :src="data.image" alt="" class="media-image image w-100" @load="loading = false">
            </div>
        </a>

        <div class="p-4 d-flex align-items-center justify-content-end" v-if="staff">
            <div>
                <a href="#" @click.prevent="deleteImage(data)">
                    <i class='bx bx-trash text-danger'></i>
                </a>
            </div>
        </div>
    </el-card>
</template>

<script>
export default {
    props: ['data', 'right', 'staff'],
    name: "MediaContainer",
    data() {
        return {
            loading: true
        }
    },
    created() {
    },
    methods: {
        deleteImage(image) {
            axios.delete('/api/media-management/' + image.id)
                .then(res => {
                    this.$message.success('Image deleted')

                    this.$destroy();

                    this.$el.parentNode.removeChild(this.$el);
                })
                .catch(err => {
                    this.message.err('There was an error!')
                })
        }
    }
}
</script>

<style scoped>

</style>
