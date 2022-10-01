<template>
    <div class="countdown" :class="{'d-flex align-items-center justify-content-center': slim}">
        <p class="mb-0" :class="{'mr-2': slim}">{{ event.truckfest ? 'Event' : event.name  }} Countdown:</p>
        <p class="mb-0">{{ countdown }}</p>
    </div>
</template>

<script>
import moment from 'moment-timezone'

export default {
    name: "EventCountdown",
    props: ['event', 'slim'],
    data() {
        return {
            countdown: '...'
        }
    },
    mounted() {
        this.generateTime();
        setInterval(this.generateTime, 1000);
    },
    methods: {
        generateTime() {
            this.countdown = moment.unix(this.event.start_time).fromNow(true);
        }
    }
}
</script>

<style scoped>

</style>
