<template>
<div class="modal-open">
    <button v-on:click="openModal()" class="btn btn-xs btn-primary pull-right">Add Author</button>
    <!-- Modal -->
    <div v-if="isOpened" class="modal fade show" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document" style="margin-top:90px;">
            <div class="modal-content">
                <div class="modal-header">
                   <h5 class="modal-title">Add Author</h5>
                   <button v-on:click="closeModal()" type="button" class="close" style="margin-top:-25px;">
                     <span aria-hidden="true">&times;</span>
                   </button>
                 </div>
                <sites-add-form @save-product="addAuthor" :model="model" type="author"></sites-add-form>
            </div>
        </div>
    </div>
    <div v-if="isOpened" class="modal-backdrop fade show"></div>
</div>
</template>

<script>
import axios from 'axios';
export default {
    mounted() {
        console.log('Component mounted.')
    },
    props: ['id'],
    data: function() {
        return {
            isOpened: false,
            model: {
                name:"",
                adress: "",
            }
        }
    },
    methods: {
        openModal: function() {
            this.isOpened = !this.isOpened;
        },
        closeModal: function() {
            this.isOpened = !this.isOpened;
        },
        addAuthor: function (model) {
          axios.post('/sites/'+this.id+'/authors', model).then(response => {
            this.closeModal();
            this.$emit('saved-author', response.data.author)
          })
        }
    }
}
</script>
<style scoped>
    .show {
        opacity: 1;
    }
    .modal-backdrop{
        opacity: 0.6
    }
</style>
