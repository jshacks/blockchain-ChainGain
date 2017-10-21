<template>
    <div class="container">
      <button @click="add">add</button>
    </div>
</template>

<script>
    export default {
      methods: {
        add(){
          axios.post('/sites', {name: 'nooome'}).then(()=>{
            console.log('posted')
          })
        }
      },
        mounted() {
            console.log('new site mounted.')
        }
    }
</script>
