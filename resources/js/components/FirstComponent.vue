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
           <button id="submit_button" v-on:click.prevent="passData">submit</button>
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
            })
        }
    }

}
</script>
<style scoped>
form {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  background-color: #f2f2f2;
  padding: 20px;
}
label {
  font-weight: bold;
}
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
}
</style>
