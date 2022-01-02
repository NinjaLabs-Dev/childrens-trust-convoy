<template>
    <el-card class="clearfix donate">
        <div class="row flex-column align-items-center">
            <h2 class="mb-4">Support the Cause</h2>
            <div class="px-2">
                <p>Every year 40,000 children in the UK are left with a brain injury as a result of an accident or illness and it can be devastating – they may no longer be able to walk, talk, stand, sit, or feed themselves – sometimes all of these abilities. Children aged 2 to 19 are able to attend their schools, as either day pupils, or residential pupils.</p>
            </div>
            <div class="px-4 w-100">
                <a :href="route">
                    <el-button type="primary" size="small" class="w-100">Donate</el-button>
                </a>
            </div>
        </div>
    </el-card>
</template>

<script>
export default {
    name: "Donate",
    props: ['route']
}
</script>

<style scoped>

</style>
