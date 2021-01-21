<template>
    <div >
        <h1>PROPERTIES</h1>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                properties:{},
            }
        },
        created() {
           axios.get('/admin/property')
                .then(response=>console.log(response))
                .catch(error=>console.log(error))
        },
        mounted() {
            console.log('propertyList Component mounted.')
        }
    }
</script>