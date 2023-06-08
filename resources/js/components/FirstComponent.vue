<template>
    <div id="sign">
        <form>
            <label for="name" >name</label>
            <select >
                <option>Mr.</option>
                <option>Mrs.</option>
                <option>Miss.</option>
            </select>
            
            <input v-model="name1" type="text" id="name">
            <br>
            <label for="email">Email</label>
            <input v-model="email1" type="email" id="email">
            <br>
            <label>Station</label>
            <input  v-model="stat" type="search" list="station">
            <datalist id="station" >
                <option>Delhi</option>
                <option>mumbai</option>
                <option>Bihar</option>
                <option>Gorakhpur</option>
                <option>Ranchi</option>
            </datalist> 
           <button id="submit_button" v-on:click="passData">submit</button>
        </form>
        <br>

    </div>
 
</template>
<script>
import axios from 'axios';
export default{
    data:function()
    {
        return{
            name1:"",
            email1:"",
            stat:""
        }
    },
    methods:{
        passData:async function()
        {
            var result=await axios.post("http://127.0.0.1:8000/api/input",{
                email:this.email1,
                name:this.name1,
                station:this.stat
            }).then(response=>{
                if(response.data.success)
                {
                    document.write("done!!!!")
                }
            }).catch(error=>{
                
            })
        }
    }

}
</script>
