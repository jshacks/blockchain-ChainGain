<template>
<form @submit.prevent="saveProduct">
    <div class="modal-body">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label>Name</label>
                <input type="text" placeholder="Name" v-model="model.name"  name="name"/>
            </div>
            <div v-if="type=='site'" class="form-group">
                <label>Currency</label>
                <div class="radio">
                  <label><input type="radio" v-model="model.currency" v-bind:value="0" name="currency">Monero</label>
                </div>
                <div class="radio">
                  <label><input type="radio" v-model="model.currency" v-bind:value="1" name="currency">Dash</label>
                </div>
                <div class="radio">
                  <label><input type="radio" v-model="model.currency" v-bind:value="2" name="currency">Etherum</label>
                </div>
            </div>
            <div v-if="type=='author'" class="form-group">
                <label>Adress</label>
                <input type="text" placeholder="Adress" v-model="model.adress"  name="adress"/>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="modal-footer">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group new-button">
            <button class="button">
              <i class="fa fa-pencil"></i>
              <span>Add Site</span>
            </button>
            </div>
        </div>
    </div>
</form>
</template>

<script>
export default {
    props: ['model', 'type', 'isEditing'],
    created() {},
    methods: {
        saveProduct() {
             this.$emit('save-product', this.model)
        }
    }
}
</script>
