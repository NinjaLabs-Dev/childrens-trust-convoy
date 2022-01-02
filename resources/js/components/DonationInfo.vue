<template>
    <div class="d-flex justify-content-center justify-content-xl-end align-items-center">
        <div class="d-flex justify-content-center align-items-center flex-column">
            <el-card class="d-flex justify-content-center align-items-center flex-column">
                <div class="donation-percent">
                    <apexchart
                        type="radialBar"
                        height="200"
                        :options="donationPercentOptions"
                        :series="[donationInfo.raisedPercent]">
                    </apexchart>
                </div>

                <el-card class="clearfix mt-2">
                    <p class="mb-1">{{ donationInfo.donation_name }} - {{ donationInfo.currency }}<span class="time"> - {{ humanizeTime(donationInfo.created_at) }}</span></p>
                    <p class="mb-0">{{ donationInfo.donation_message }}</p>
                </el-card>
            </el-card>
        </div>
    </div>
</template>

<script>
import moment from 'moment';
import VueApexCharts from 'vue-apexcharts';

export default {
    name: "DonationInfo",
    props: ['donationInfo'],
    data() {
        return {
            donationPercentOptions: {
                chart: {
                    height: 200,
                    type: 'radialBar',
                    sparkline: {
                        enabled: true
                    },
                    toolbar: {
                        show: false
                    },
                    zoom: {
                        enabled: false
                    },
                    animations: {
                        speed: 3000
                    }
                },
                stroke: {
                    curve: 'smooth',
                    lineCap: 'round'
                },
                legend: {
                    show: false
                },
                plotOptions: {
                    radialBar: {
                        hollow: {
                            size: '70%'
                        },
                        dataLabels: {
                            name: {
                                show: true,
                            },
                            value: {
                                fontSize: '22px',
                                offsetY: 10
                            }
                        }
                    }
                },
                labels: ['Donation Goal']
            }
        }
    },
    methods: {
        humanizeTime(time) {
            return moment(time).fromNow();
        }
    },
    components: {
        'apexchart': VueApexCharts
    }
}
</script>

<style scoped>
    .time {
        opacity: .75;
    }
</style>
