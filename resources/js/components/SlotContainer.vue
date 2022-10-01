<template>
    <el-card class="slot my-4" :body-style="{ padding: '0px' }">
        <div class="img-container" v-loading="loading">
            <img :src="data.image" alt="" class="slot-image image" @load="loading = false">
        </div>
        <div class="p-4 d-flex align-items-center justify-content-between">
            <div>
                <i class='bx bxs-lock-open-alt not-taken mr-2' v-if="!slotTaken(data) && !data.public"></i>
                <i class='bx bxs-lock-alt taken mr-2' v-if="slotTaken(data)"></i>
                {{ getSlotName(data) }}
            </div>
            <div>
                <a :href="data.image" target="_blank">
                    <i class='bx bx-link-external'></i>
                </a>
            </div>
        </div>
    </el-card>
</template>

<script>
export default {
    props: ['data', 'right'],
    name: "SlotContainer",
    data() {
        return {
            loading: true
        }
    },
    created() {
    },
    methods: {
        getSlotName(slot) {
            if(slot.public) {
                return "Public"
            } else if(this.slotTaken(slot)) {
                return slot.vtc
            }

            return slot.name
        },

        slotTaken(slot) {
            return !slot.vacant;
        }
    }
}
</script>

<style scoped>

</style>
