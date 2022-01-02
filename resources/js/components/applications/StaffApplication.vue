<template>
    <el-card class="box-card">
        <el-alert
            type="warning"
            show-icon
            title="DLC's Required"
            :closable="false">
            <span>For this event, the profiles for Convoy Control will have all the DLC's enabled, that's Vive Le France, Italia, Iberia, Beyond The Baltic Sea, Scandinavia, Going East and Black Sea. You must have all of these DLC's at the time of the event to do Convoy Control.</span>
            <br>
            <br>
            <span>For other roles, you must have most of the DLC's, but missing out on one or two, may only mean you miss out on one or two routes.</span>
        </el-alert>

        <div slot="header" class="clearfix">
            <span>Staff Application</span>
        </div>

        <el-form class="mt-4" ref="staff-application" :model="form" label-width="120px" label-position="top">
            <el-form-item label="Discord Username & Tag" required prop="discord">
                <el-input v-model="form.discord" placeholder="Bob#5642"></el-input>
            </el-form-item>

            <el-form-item label="TruckersMP Profile Link" required prop="tmp">
                <el-input v-model="form.tmp" placeholder="https://truckersmp.com/user/123"></el-input>
            </el-form-item>

            <el-form-item label="Steam Profile Link" required prop="steam">
                <el-input v-model="form.steam" placeholder="https://steamcommunity.com/id/abc/"></el-input>
            </el-form-item>

            <el-form-item label="What role are you applying for?" prop="required">
                <el-radio-group v-model="form.role">
                    <el-radio label="Convoy Control" @change="changeRole"></el-radio>
                    <el-radio label="Media" @change="changeRole"></el-radio>
                    <el-radio label="Official Streamer" @change="changeRole"></el-radio>
                    <el-radio label="Partnered Streamer" @change="changeRole"></el-radio>
                </el-radio-group>
            </el-form-item>

            <div v-if="this.form.role === 'Convoy Control'">
                <el-form-item label="Do you have any previous experience, if any explain?">
                    <el-input type="textarea" v-model="form.custom.experience"></el-input>
                </el-form-item>

                <el-form-item label="Why would you like to help out at this event?" required>
                    <el-input type="textarea" v-model="form.custom.why"></el-input>
                </el-form-item>

                <el-form-item label="Please state the role(s) of Convoy Control" required>
                    <el-input type="textarea" v-model="form.custom.roles"></el-input>
                </el-form-item>

                <el-form-item label="What is your internet like?" required>
                    <el-input v-model="form.custom.internet" placeholder="https://www.speedtest.net/result/12345"></el-input>
                </el-form-item>
            </div>

            <div v-if="this.form.role === 'Media'">
                <el-form-item label="Do you have any previous experience, if any explain?">
                    <el-input type="textarea" v-model="form.custom.experience"></el-input>
                </el-form-item>

                <el-form-item label="Why would you like to help out at this event?" required>
                    <el-input type="textarea" v-model="form.custom.why"></el-input>
                </el-form-item>

                <el-form-item label="Past work" required>
                    <el-input type="textarea" v-model="form.custom.work"></el-input>
                </el-form-item>
            </div>

            <div v-if="this.form.role === 'Official Streamer'">
                <el-form-item label="Twitch Link">
                    <el-input type="textarea" v-model="form.custom.twitch" placeholder="https://twitch.tv/supertrouper1059"></el-input>
                </el-form-item>

                <el-form-item label="Do you have any previous experience, if any explain?">
                    <el-input type="textarea" v-model="form.custom.experience"></el-input>
                </el-form-item>

                <el-form-item label="Why would you like to stream on the official channel?" required>
                    <el-input type="textarea" v-model="form.custom.why"></el-input>
                </el-form-item>

                <el-form-item label="What routes are you available for?" required>
                    <el-checkbox-group v-model="form.custom.routes">
                        <el-checkbox label="Route 1" name="type" :disabled="form.custom.routes.includes('All')"></el-checkbox>
                        <el-checkbox label="Route 2" name="type" :disabled="form.custom.routes.includes('All')"></el-checkbox>
                        <el-checkbox label="Route 3" name="type" :disabled="form.custom.routes.includes('All')"></el-checkbox>
                        <el-checkbox label="Route 4" name="type" :disabled="form.custom.routes.includes('All')"></el-checkbox>
                        <el-checkbox label="Route 5" name="type" :disabled="form.custom.routes.includes('All')"></el-checkbox>
                        <br>
                        <el-checkbox label="Route 6" name="type" :disabled="form.custom.routes.includes('All')"></el-checkbox>
                        <el-checkbox label="Route 7" name="type" :disabled="form.custom.routes.includes('All')"></el-checkbox>
                        <el-checkbox label="Route 8" name="type" :disabled="form.custom.routes.includes('All')"></el-checkbox>
                        <el-checkbox label="Route 9" name="type" :disabled="form.custom.routes.includes('All')"></el-checkbox>
                        <el-checkbox label="All" name="type"></el-checkbox>
                    </el-checkbox-group>
                </el-form-item>
            </div>

            <div v-if="this.form.role === 'Partnered Streamer'">
                <el-form-item label="Twitch Link">
                    <el-input type="textarea" v-model="form.custom.twitch" placeholder="https://twitch.tv/supertrouper1059"></el-input>
                </el-form-item>

                <el-form-item label="Do you have any previous experience, if any explain?">
                    <el-input type="textarea" v-model="form.custom.experience"></el-input>
                </el-form-item>

                <el-form-item label="Why would you like to partner with us?" required>
                    <el-input type="textarea" v-model="form.custom.why"></el-input>
                </el-form-item>
            </div>

            <div v-if="this.form.role">
                <el-form-item label="Feedback">
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
    props: ['application'],
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
            rules: {
                discord: [
                    { required: true, message: 'This is required', trigger: 'blur' }
                ],
                steam: [
                    { required: true, message: 'This is required', trigger: 'blur' }
                ],
                tmp: [
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
                        return this.$message.success('Application sent');
                    }).catch(err => {
                        return this.$message.error('Error');
                    })
                }
            })
        },
        clearForm(roleSpecific = false) {
            if(!roleSpecific) {
                Object.keys(this.form).forEach(key => {
                    if(key === "gdpr") {
                        this.form[key] = false;
                    } else {
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
