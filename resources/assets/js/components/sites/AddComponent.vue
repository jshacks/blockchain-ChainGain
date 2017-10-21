<template>
<div class="modal-open">
    <button v-on:click="openModal()" class="btn btn-xs btn-primary pull-right">Add Site</button>
    <!-- Modal -->
    <div v-if="isOpened" class="modal fade show" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document" style="margin-top:90px;">
            <div class="modal-content">
                <div class="modal-header">
                   <h5 class="modal-title">Add Site</h5>
                   <button v-on:click="closeModal()" type="button" class="close" style="margin-top:-25px;">
                     <span aria-hidden="true">&times;</span>
                   </button>
                 </div>
                <sites-add-form @save-product="addSite" :model="model" type="site"></sites-add-form>
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
    data: function() {
        return {
            isOpened: false,
            model: {
                name:"",
                currency: 0,
            }
        }
    },
    methods: {
        openModal: function() {
            this.isOpened = !this.isOpened;
            console.log(this.isOpened)
        },
        closeModal: function() {
            this.isOpened = !this.isOpened;
            console.log(this.isOpened)
        },
        addSite: function (model) {
          axios.post('/sites', model).then(response => {
            window.location.href=  '/sites/' + response.data.data.id;
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
