<template>
    <el-card class="box-card">
        <div slot="header" class="d-flex justify-content-between align-items-center">
            <span>{{ application.title }}</span>
            <span>Ends {{ timeLeft() }}</span>
        </div>
        <span>{{ application.description }}</span>
        <div class="footer mt-4">
            <a :href="application.url">
                <el-button type="success" size="small" class="w-100">{{ application.button_text }}</el-button>
            </a>
        </div>
    </el-card>
</template>

<script>
import moment from 'moment';

export default {
    name: "ApplicationGlance",
    props: ['application'],
    methods: {
        timeLeft: function() {
            return moment.duration(this.application.end - moment().unix(), "seconds").humanize(true);
        }
    }
}
</script>

<style scoped>

</style>
