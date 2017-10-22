<template>
<div>
    <authors-add @saved-author="updateAuthors" :id="id"></authors-add>
    <authors-list :authors="authorss"></authors-list>
</div>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    },
    props: ['id', "authors"],
    data: function() {
      return {
       authorss: this.authors
      }
    },
    methods: {
        updateAuthors: function(model) {
            this.authorss.push(model);
        }
    }
}
</script>
