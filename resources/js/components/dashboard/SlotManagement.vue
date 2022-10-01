<template>
    <el-card>
        <div slot="header" class="clearfix">
            Slot Management
        </div>
        <el-form>
            <el-form-item label="Slot">
                <el-select v-model="form.slot" placeholder="Slot" @change="slotChange($event)">
                    <el-option v-for="(slot, i) in slots" :key="i" :label="`Slot ${slot.name}`" :value="i">Slot {{ slot.name }}</el-option>
                </el-select>
            </el-form-item>

            <el-form-item label="Capacity">
                <el-input-number v-model="form.capacity"></el-input-number>
            </el-form-item>

            <el-form-item label="Vacant">
                <el-checkbox v-model="form.vacant"></el-checkbox>
            </el-form-item>

            <el-form-item label="Image">
                <el-input v-model="form.image"></el-input>
            </el-form-item>

            <el-form-item label="VTC">
                <el-input v-model="form.vtc"></el-input>
            </el-form-item>

            <div class="d-flex justify-content-end">
                <el-button type="primary" size="medium" @click="submit">Update</el-button>
            </div>
        </el-form>
    </el-card>
</template>

<script>
export default {
    name: "SlotManagement",
    props: ['slots'],
    data() {
        return {
            slot: 0,
            form: {
                capacity: 0,
                vacant: false,
                image: '',
                vtc: ''
            }
        }
    },
    methods: {
        slotChange: function(i) {
            this.form.capacity = this.slots[i].capacity;
            this.form.vacant = !!this.slots[i].vacant;
            this.form.image = this.slots[i].image;
            this.form.vtc = this.slots[i].vtc;
            this.slot = this.slots[i].id;
        },
        submit: function() {
            axios.post('/api/slot-management/' + this.slot, this.form).then(res => {
                this.$message.success('Updated');
            })
        }
    }
}
</script>

<style scoped>

</style>
