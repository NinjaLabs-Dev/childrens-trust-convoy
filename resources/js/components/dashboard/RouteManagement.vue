<template>
    <el-card>
        <div slot="header" class="clearfix">
            Route Management
        </div>
        <el-form>
            <el-form-item label="Route">
                <el-select v-model="form.route" placeholder="Route" @change="slotChange($event)">
                    <el-option v-for="(route, i) in routes" :key="i" :label="`Route ${route.number}`" :value="i">Route {{ route.number }}</el-option>
                </el-select>
            </el-form-item>

            <el-form-item label="Start">
                <el-input v-model="form.start"></el-input>
            </el-form-item>

            <el-form-item label="End">
                <el-input v-model="form.end"></el-input>
            </el-form-item>

            <el-form-item label="Start Time (Unix)">
                <el-input v-model="form.start_time"></el-input>
            </el-form-item>

            <el-form-item label="Truckfest">
                <el-checkbox v-model="form.truckfest"></el-checkbox>
            </el-form-item>

            <el-form-item label="Image">
                <el-input v-model="form.image"></el-input>
            </el-form-item>

            <div class="d-flex justify-content-end">
                <el-button type="primary" size="medium" @click="submit">Update</el-button>
            </div>
        </el-form>
    </el-card>
</template>

<script>
export default {
    name: "RouteManagement",
    props: ['routes'],
    data() {
        return {
            route: 0,
            form: {
                start: '',
                end: '',
                start_time: 0,
                truckfest: false,
                image: '',
            }
        }
    },
    methods: {
        slotChange: function(i) {
            this.form.start = this.routes[i].start;
            this.form.end = this.routes[i].end;
            this.form.start_time = this.routes[i].start_time;
            this.form.truckfest = !!this.routes[i].truckfest;
            this.form.image = this.routes[i].image;
            this.route = this.routes[i].id;
        },
        submit: function() {
            axios.post('/api/route-management/' + this.route, this.form).then(res => {
                this.$message.success('Updated');
            })
        }
    }
}
</script>

<style scoped>

</style>
