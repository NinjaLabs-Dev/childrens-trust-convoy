<template>
    <el-card class="mt-4">
        <div slot="header" class="clearfix">
            Media Management
        </div>
        <el-form>
            <el-form-item label="Image">
                <el-input v-model="form.image"></el-input>
            </el-form-item>

            <div class="d-flex justify-content-end">
                <el-button type="primary" size="medium" @click="submit">Add</el-button>
            </div>
        </el-form>
    </el-card>
</template>

<script>
export default {
    name: "MediaManagement",
    data() {
        return {
            slot: 0,
            form: {
                image: '',
            }
        }
    },
    methods: {
        submit: function() {
            axios.post('/api/media-management', this.form).then(res => {
                this.form.image = '';
                this.$message.success('Added');
            })
        }
    }
}
</script>

<style scoped>

</style>
