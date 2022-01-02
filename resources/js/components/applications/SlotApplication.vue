<template>
    <el-card class="box-card">
        <div slot="header" class="clearfix">
            <span>Slot Application</span>
        </div>

        <el-form class="mt-4" ref="staff-application" :model="form" label-width="120px" label-position="top">
            <el-form-item label="Discord Username & Tag" required prop="discord">
                <el-input v-model="form.discord" placeholder="Bob#5642"></el-input>
            </el-form-item>

            <el-form-item label="VTC Name" required prop="name">
                <el-input v-model="form.name" placeholder="NHS Greggs Medical Supplies Transportation LTD"></el-input>
            </el-form-item>

            <el-form-item label="TruckersMP VTC Link" required prop="tmp">
                <el-input v-model="form.tmp" placeholder="https://truckersmp.com/vtc/111"></el-input>
            </el-form-item>

            <el-form-item label="How many drivers are you expecting?" required prop="drivers">
                <el-select v-model="form.drivers" placeholder="Select">
                    <el-option
                        v-for="item in options"
                        :key="item.value"
                        :label="item.label"
                        :value="item.value">
                    </el-option>
                </el-select>
            </el-form-item>

            <el-form-item label="Which slot would you like?" required prop="slot">
                <el-select v-model="form.slot" placeholder="Select">
                    <el-option
                        v-for="item in slots"
                        :key="item.id"
                        :label="`Slot ${item.number}`"
                        :value="item.id">
                    </el-option>
                </el-select>
            </el-form-item>

            <div>
                <el-form-item label="Feedback" prop="required">
                    <el-input type="textarea" v-model="form.feedback"></el-input>
                </el-form-item>

                <el-alert
                    type="info"
                    show-icon
                    title="Data Holding"
                    :closable="false">
                    <span>
                        We will hold all data you submit to us within this form, for as long as we require it.
                        The data submitted here shall not be given out to third parties, or shared outside of the team
                        without your explicit consent. You have the right to request the data we store, as in line with
                        GDPR Regulations.
                    </span>
                    <br>
                    <br>
                    <span>
                        If you have any questions, please consult a member of management before submitting this form.
                    </span>
                </el-alert>

                <el-form-item class="mt-4" prop="required">
                    <el-checkbox v-model="form.gdpr">I've read and understand the above statement</el-checkbox>
                </el-form-item>

                <div class="d-flex justify-content-end align-items-end">
                    <el-button
                        type="primary"
                        size="medium"
                        @click="submit"
                        :disabled="!form.gdpr">
                        Submit
                    </el-button>
                </div>
            </div>
        </el-form>
    </el-card>
</template>

<script>
import axios from 'axios';

export default {
    name: "StaffApplication",
    props: ['application', 'slots'],
    data() {
        return {
            form: {
                custom: {
                    experience: null,
                    why: null,
                    work: null,
                    roles: null,
                    twitch: null,
                    routes: []
                },
                gdpr: false,
            },
            options: [
                {
                    value: '1-5',
                    label: '1-5',
                },
                {
                    value: '6-10',
                    label: '6-10',
                },
                {
                    value: '11-15',
                    label: '11-15',
                },
                {
                    value: '16-20',
                    label: '16-20',
                },
                {
                    value: '21-25',
                    label: '21-25',
                },
                {
                    value: '26-30',
                    label: '26-30',
                },
                {
                    value: '30+',
                    label: '30+',
                }
            ],
            rules: {
                discord: [
                    { required: true, message: 'This is required', trigger: 'blur' }
                ],
                name: [
                    { required: true, message: 'This is required', trigger: 'blur' }
                ],
                tmp: [
                    { required: true, message: 'This is required', trigger: 'blur' }
                ],
                drivers: [
                    { required: true, message: 'This is required', trigger: 'blur' }
                ],
                slot: [
                    { required: true, message: 'This is required', trigger: 'blur' }
                ]
            }
        }
    },
    methods: {
        changeRole: function() {
            return this.clearForm(true);
        },
        submit() {
            this.$refs['staff-application'].validate(valid => {
                if(valid) {
                    axios.post('/api/application/' + this.application.id, this.form).then(res => {
                        if(res.data.error) {
                            return this.$message.error(res.data.error.message);
                        }

                        this.clearForm();
                        this.$message.success('Application sent');
                    }).catch((err) => {
                        this.$message.error('Error');
                    })
                }
            })
        },
        clearForm(roleSpecific = false) {
            if(!roleSpecific) {
                Object.keys(this.form).forEach(key => {
                    if(key === "gdpr") {
                        this.form[key] = false;
                    } else if(key !== "custom") {
                        this.form[key] = null;
                    }
                })
            }

            this.form.custom.experience = null;
            this.form.custom.why = null;
            this.form.custom.work = null;
            this.form.custom.roles = null;
            this.form.custom.twitch = null;
            this.form.custom.routes = [];
        }
    }
}
</script>

<style scoped>

</style>
