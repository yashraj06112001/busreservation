<template>
    <div id="homepage">
        <first-component></first-component>
    </div>
</template>
<script>
import FirstComponent from './FirstComponent.vue';
export default{

    data:function()
    {
        return {
            data:""
        }
    },
    components:{
        FirstComponent
    }
    
}
</script>
<style scoped>

</style>
