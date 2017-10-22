<template>
    <div class="container">
      <input type="text" v-model="name">
      <button @click="add">add</button>
    </div>
</template>

<script>
    export default {
      data(){
        return {
          name: '',
        }
      },
      props: {
        siteId: {}
      },
      methods: {
        add(){
          axios.post(`/sites/${this.siteId}/authors`, {name: this.name}).then((response)=>{
            console.log('posted', response)
            if(response.data.success){
              location.reload();
            }
          })
        }
      },
        mounted() {
            console.log('new site mounted.')
        }
    }
</script>
